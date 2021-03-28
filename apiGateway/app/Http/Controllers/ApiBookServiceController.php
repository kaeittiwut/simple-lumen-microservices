<?php

namespace App\Http\Controllers;

use App\ApiServices\ApiBookService;
use App\Models\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiBookServiceController extends Controller
{
    use ApiResponser;
    /**
     * The service to consume the books microservice
     * @var ApiBookService
     */
    public $apiBookService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ApiBookService $apiBookService)
    {
        $this->apiBookService = $apiBookService;
    }

    /**
     * Return the list of books.
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successResponse($this->apiBookService->obtainBooks());
    }

    /**
     * Create new one of book.
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->successResponse($this->apiBookService->
                createBook($request->all(), Response::HTTP_CREATED));
    }

    /**
     * Obtains and show one of book.
     *
     * @return Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->successResponse($this->apiBookService->showBook($id));
    }

    /**
     * Update an existing of book.
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->successResponse($this->apiBookService->editBook($request->all(), $id));
    }

    /**
     * Remove an existing of book.
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->successResponse($this->apiBookService->deleteBook($id));
    }
}
