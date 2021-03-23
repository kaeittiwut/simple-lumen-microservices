<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class ExampleController extends Controller
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
        //
    }

    /**
     * Create new one of authors.
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Obtains and show one of authors.
     *
     * @return Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update an existing of author.
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove an existing of author.
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
