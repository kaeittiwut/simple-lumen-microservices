<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
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
     * Return the list of books.
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Create new one of book.
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Obtains and show one of book.
     *
     * @return Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Update an existing of book.
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove an existing of book.
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
