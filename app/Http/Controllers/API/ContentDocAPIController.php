<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateContentDocAPIRequest;
use App\Http\Requests\API\UpdateContentDocAPIRequest;
use App\Models\ContentDoc;
use App\Repositories\ContentDocRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ContentDocController
 * @package App\Http\Controllers\API
 */

class ContentDocAPIController extends AppBaseController
{
    /** @var  ContentDocRepository */
    private $contentDocRepository;

    public function __construct(ContentDocRepository $contentDocRepo)
    {
        $this->contentDocRepository = $contentDocRepo;
    }

    /**
     * Display a listing of the ContentDoc.
     * GET|HEAD /contentDocs
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $contentDocs = $this->contentDocRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($contentDocs->toArray(), 'Content Docs retrieved successfully');
    }

    /**
     * Store a newly created ContentDoc in storage.
     * POST /contentDocs
     *
     * @param CreateContentDocAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateContentDocAPIRequest $request)
    {
        $input = $request->all();

        $contentDoc = $this->contentDocRepository->create($input);

        return $this->sendResponse($contentDoc->toArray(), 'Content Doc saved successfully');
    }

    /**
     * Display the specified ContentDoc.
     * GET|HEAD /contentDocs/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ContentDoc $contentDoc */
        $contentDoc = $this->contentDocRepository->find($id);

        if (empty($contentDoc)) {
            return $this->sendError('Content Doc not found');
        }

        return $this->sendResponse($contentDoc->toArray(), 'Content Doc retrieved successfully');
    }

    /**
     * Update the specified ContentDoc in storage.
     * PUT/PATCH /contentDocs/{id}
     *
     * @param int $id
     * @param UpdateContentDocAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContentDocAPIRequest $request)
    {
        $input = $request->all();

        /** @var ContentDoc $contentDoc */
        $contentDoc = $this->contentDocRepository->find($id);

        if (empty($contentDoc)) {
            return $this->sendError('Content Doc not found');
        }

        $contentDoc = $this->contentDocRepository->update($input, $id);

        return $this->sendResponse($contentDoc->toArray(), 'ContentDoc updated successfully');
    }

    /**
     * Remove the specified ContentDoc from storage.
     * DELETE /contentDocs/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ContentDoc $contentDoc */
        $contentDoc = $this->contentDocRepository->find($id);

        if (empty($contentDoc)) {
            return $this->sendError('Content Doc not found');
        }

        $contentDoc->delete();

        return $this->sendSuccess('Content Doc deleted successfully');
    }
}
