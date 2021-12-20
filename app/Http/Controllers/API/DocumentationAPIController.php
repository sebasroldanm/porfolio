<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDocumentationAPIRequest;
use App\Http\Requests\API\UpdateDocumentationAPIRequest;
use App\Models\Documentation;
use App\Repositories\DocumentationRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class DocumentationController
 * @package App\Http\Controllers\API
 */

class DocumentationAPIController extends AppBaseController
{
    /** @var  DocumentationRepository */
    private $documentationRepository;

    public function __construct(DocumentationRepository $documentationRepo)
    {
        $this->documentationRepository = $documentationRepo;
    }

    /**
     * Display a listing of the Documentation.
     * GET|HEAD /documentations
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $documentations = $this->documentationRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($documentations->toArray(), 'Documentations retrieved successfully');
    }

    /**
     * Store a newly created Documentation in storage.
     * POST /documentations
     *
     * @param CreateDocumentationAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDocumentationAPIRequest $request)
    {
        $input = $request->all();

        $documentation = $this->documentationRepository->create($input);

        return $this->sendResponse($documentation->toArray(), 'Documentation saved successfully');
    }

    /**
     * Display the specified Documentation.
     * GET|HEAD /documentations/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Documentation $documentation */
        $documentation = $this->documentationRepository->find($id);

        if (empty($documentation)) {
            return $this->sendError('Documentation not found');
        }

        return $this->sendResponse($documentation->toArray(), 'Documentation retrieved successfully');
    }

    /**
     * Update the specified Documentation in storage.
     * PUT/PATCH /documentations/{id}
     *
     * @param int $id
     * @param UpdateDocumentationAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDocumentationAPIRequest $request)
    {
        $input = $request->all();

        /** @var Documentation $documentation */
        $documentation = $this->documentationRepository->find($id);

        if (empty($documentation)) {
            return $this->sendError('Documentation not found');
        }

        $documentation = $this->documentationRepository->update($input, $id);

        return $this->sendResponse($documentation->toArray(), 'Documentation updated successfully');
    }

    /**
     * Remove the specified Documentation from storage.
     * DELETE /documentations/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Documentation $documentation */
        $documentation = $this->documentationRepository->find($id);

        if (empty($documentation)) {
            return $this->sendError('Documentation not found');
        }

        $documentation->delete();

        return $this->sendSuccess('Documentation deleted successfully');
    }
}
