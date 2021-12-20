<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContentDocRequest;
use App\Http\Requests\UpdateContentDocRequest;
use App\Repositories\ContentDocRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Documentation;
use Illuminate\Http\Request;
use Flash;
use Response;

class ContentDocController extends AppBaseController
{
    /** @var  ContentDocRepository */
    private $contentDocRepository;

    public function __construct(ContentDocRepository $contentDocRepo)
    {
        $this->contentDocRepository = $contentDocRepo;
    }

    /**
     * Display a listing of the ContentDoc.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $contentDocs = $this->contentDocRepository->all();
        return view('content_docs.index')
            ->with('contentDocs', $contentDocs);
    }

    /**
     * Show the form for creating a new ContentDoc.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $id = $request->id;
        $documentation = Documentation::where('id', $id)->pluck('title', 'id')->toArray();
        return view('content_docs.create', compact('documentation'));
    }

    /**
     * Store a newly created ContentDoc in storage.
     *
     * @param CreateContentDocRequest $request
     *
     * @return Response
     */
    public function store(CreateContentDocRequest $request)
    {
        $input = $request->all();

        $contentDoc = $this->contentDocRepository->create($input);

        Flash::success('Content Doc saved successfully.');

        return redirect(route('contentDocs.index'));
    }

    /**
     * Display the specified ContentDoc.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contentDoc = $this->contentDocRepository->find($id);

        if (empty($contentDoc)) {
            Flash::error('Content Doc not found');

            return redirect(route('contentDocs.index'));
        }

        return view('content_docs.show')->with('contentDoc', $contentDoc);
    }

    /**
     * Show the form for editing the specified ContentDoc.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contentDoc = $this->contentDocRepository->find($id);

        if (empty($contentDoc)) {
            Flash::error('Content Doc not found');

            return redirect(route('contentDocs.index'));
        }

        return view('content_docs.edit')->with('contentDoc', $contentDoc);
    }

    /**
     * Update the specified ContentDoc in storage.
     *
     * @param int $id
     * @param UpdateContentDocRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContentDocRequest $request)
    {
        $contentDoc = $this->contentDocRepository->find($id);

        if (empty($contentDoc)) {
            Flash::error('Content Doc not found');

            return redirect(route('contentDocs.index'));
        }

        $contentDoc = $this->contentDocRepository->update($request->all(), $id);

        Flash::success('Content Doc updated successfully.');

        return redirect(route('contentDocs.index'));
    }

    /**
     * Remove the specified ContentDoc from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contentDoc = $this->contentDocRepository->find($id);

        if (empty($contentDoc)) {
            Flash::error('Content Doc not found');

            return redirect(route('contentDocs.index'));
        }

        $this->contentDocRepository->delete($id);

        Flash::success('Content Doc deleted successfully.');

        return redirect(route('contentDocs.index'));
    }
}
