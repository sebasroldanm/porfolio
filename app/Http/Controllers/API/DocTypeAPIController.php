<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDocTypeAPIRequest;
use App\Http\Requests\API\UpdateDocTypeAPIRequest;
use App\Models\DocType;
use App\Repositories\DocTypeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class DocTypeController
 * @package App\Http\Controllers\API
 */

class DocTypeAPIController extends AppBaseController
{
    /** @var  DocTypeRepository */
    private $docTypeRepository;

    public function __construct(DocTypeRepository $docTypeRepo)
    {
        $this->docTypeRepository = $docTypeRepo;
    }

    /**
     * Display a listing of the DocType.
     * GET|HEAD /docTypes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $docTypes = $this->docTypeRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($docTypes->toArray(), 'Doc Types retrieved successfully');
    }

    /**
     * Store a newly created DocType in storage.
     * POST /docTypes
     *
     * @param CreateDocTypeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDocTypeAPIRequest $request)
    {
        $input = $request->all();

        $docType = $this->docTypeRepository->create($input);

        return $this->sendResponse($docType->toArray(), 'Doc Type saved successfully');
    }

    /**
     * Display the specified DocType.
     * GET|HEAD /docTypes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var DocType $docType */
        $docType = $this->docTypeRepository->find($id);

        if (empty($docType)) {
            return $this->sendError('Doc Type not found');
        }

        return $this->sendResponse($docType->toArray(), 'Doc Type retrieved successfully');
    }

    /**
     * Update the specified DocType in storage.
     * PUT/PATCH /docTypes/{id}
     *
     * @param int $id
     * @param UpdateDocTypeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDocTypeAPIRequest $request)
    {
        $input = $request->all();

        /** @var DocType $docType */
        $docType = $this->docTypeRepository->find($id);

        if (empty($docType)) {
            return $this->sendError('Doc Type not found');
        }

        $docType = $this->docTypeRepository->update($input, $id);

        return $this->sendResponse($docType->toArray(), 'DocType updated successfully');
    }

    /**
     * Remove the specified DocType from storage.
     * DELETE /docTypes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var DocType $docType */
        $docType = $this->docTypeRepository->find($id);

        if (empty($docType)) {
            return $this->sendError('Doc Type not found');
        }

        $docType->delete();

        return $this->sendSuccess('Doc Type deleted successfully');
    }
}
