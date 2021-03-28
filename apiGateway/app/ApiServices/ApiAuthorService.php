<?php

namespace App\ApiServices;

use App\Traits\ConsumesExternalService;

class ApiAuthorService
{
    use ConsumesExternalService;

    /**
     * The base uri to consume the authors service
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.authors.base_uri');
    }

    /**
     * Obtain the full list of author from the author service
     * @return string
     */
    public function obtainAuthors()
    {
        return $this->performRequest('GET', '/authors');
    }

    /**
     * Create one author using the author service
     * @return string
     */
    public function createAuthor($data)
    {
        return $this->performRequest('POST', '/authors', $data);
    }

    /**
     * Show one single author from the author service
     * @return string
     */
    public function showAuthor($id)
    {
        return $this->performRequest('GET', "/authors/{$id}");
    }

    /**
     * Update an instance of author using the author service
     * @return string
     */
    public function editAuthor($data, $id)
    {
        return $this->performRequest('PUT', "/authors/{$id}", $data);
    }

    /**
     * Remove a single author using the author service
     * @return string
     */
    public function deleteAuthor($id)
    {
        return $this->performRequest('DELETE', "/authors/{$id}");
    }
}
