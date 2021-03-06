<?php

namespace App\Http\Controllers;

use App\ApiServices\ApiAuthorService;
use App\Models\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiAuthorServiceController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the authors microservice
     * @var ApiAuthorService
     */
    public $apiAuthorService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ApiAuthorService $apiAuthorService)
    {
        $this->apiAuthorService = $apiAuthorService;
    }

    /**
     * Return the list of authors.
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successResponse($this->apiAuthorService->obtainAuthors());
    }

    /**
     * Create new one of author.
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->successResponse($this->apiAuthorService->
                createAuthor($request->all(), Response::HTTP_CREATED));
    }

    /**
     * Obtains and show one of author.
     *
     * @return Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->successResponse($this->apiAuthorService->showAuthor($id));
    }

    /**
     * Update an existing of author.
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->successResponse($this->apiAuthorService->editAuthor($request->all(), $id));
    }

    /**
     * Remove an existing of author.
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->successResponse($this->apiAuthorService->deleteAuthor($id));
    }
}
