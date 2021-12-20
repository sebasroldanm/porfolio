<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDocumentationRequest;
use App\Http\Requests\UpdateDocumentationRequest;
use App\Repositories\DocumentationRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\DocType;
use Illuminate\Http\Request;
use Flash;
use Response;

class DocumentationController extends AppBaseController
{
    /** @var  DocumentationRepository */
    private $documentationRepository;

    public function __construct(DocumentationRepository $documentationRepo)
    {
        $this->documentationRepository = $documentationRepo;
    }

    /**
     * Display a listing of the Documentation.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $documentations = $this->documentationRepository->all();

        return view('documentations.index')
            ->with('documentations', $documentations);
    }

    /**
     * Show the form for creating a new Documentation.
     *
     * @return Response
     */
    public function create()
    {
        $docsType = DocType::pluck('type', 'id')->all();
        return view('documentations.create', compact("docsType"));
    }

    /**
     * Store a newly created Documentation in storage.
     *
     * @param CreateDocumentationRequest $request
     *
     * @return Response
     */
    public function store(CreateDocumentationRequest $request)
    {
        $input = $request->all();

        $documentation = $this->documentationRepository->create($input);

        Flash::success('Documentation saved successfully.');

        return redirect(route('documentations.index'));
    }

    /**
     * Display the specified Documentation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $documentation = $this->documentationRepository->find($id);

        if (empty($documentation)) {
            Flash::error('Documentation not found');

            return redirect(route('documentations.index'));
        }

        return view('documentations.show')->with('documentation', $documentation);
    }

    /**
     * Show the form for editing the specified Documentation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $documentation = $this->documentationRepository->find($id);
        $docsType = DocType::pluck('type', 'id')->all();

        if (empty($documentation)) {
            Flash::error('Documentation not found');

            return redirect(route('documentations.index'));
        }

        return view('documentations.edit', compact('documentation', 'docsType'));
    }

    /**
     * Update the specified Documentation in storage.
     *
     * @param int $id
     * @param UpdateDocumentationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDocumentationRequest $request)
    {
        $documentation = $this->documentationRepository->find($id);

        if (empty($documentation)) {
            Flash::error('Documentation not found');

            return redirect(route('documentations.index'));
        }

        $documentation = $this->documentationRepository->update($request->all(), $id);

        Flash::success('Documentation updated successfully.');

        return redirect(route('documentations.index'));
    }

    /**
     * Remove the specified Documentation from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $documentation = $this->documentationRepository->find($id);

        if (empty($documentation)) {
            Flash::error('Documentation not found');

            return redirect(route('documentations.index'));
        }

        $this->documentationRepository->delete($id);

        Flash::success('Documentation deleted successfully.');

        return redirect(route('documentations.index'));
    }
}
