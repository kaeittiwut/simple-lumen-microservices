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

    }

    /**
     * Create new one of author.
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Obtains and show one of author.
     *
     * @return Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Update an existing of author.
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove an existing of author.
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
