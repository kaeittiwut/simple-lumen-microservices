<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return the list of authors.
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::all();

        // return $authors;
        return $this->successResponse($authors);
    }

    /**
     * Create new one of authors.
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'gender' => 'required|max:255|in:male,female',
            'country' => 'required|max:255',
        ];

        $this->validate($request, $rules);

        $author = Author::create($request->all());

        return $this->successResponse($author, Response::HTTP_CREATED);

    }

    /**
     * Obtains and show one of authors.
     *
     * @return Illuminate\Http\Response
     */
    public function show($id)
    {
        $author = Author::findOrFail($id);

        return $this->successResponse($author);
    }

    /**
     * Update an existing of author.
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'max:255',
            'gender' => 'max:255|in:male,female',
            'country' => 'max:255',
        ];

        $this->validate($request, $rules);

        $author = Author::findOrFail($id);

        $author->fill($request->all());

        if ($author->isClean()) {
            return $this->errorResponse('Nothing has changed.', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $author->save();

        return $this->successResponse($author);
    }

    /**
     * Remove an existing of author.
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author = Author::findOrFail($id);

        $author->delete();

        return $this->successResponse($author);
    }
}
