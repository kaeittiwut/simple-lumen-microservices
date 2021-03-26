<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class ApiBookService
{
    use ConsumesExternalService;

    /**
     * The base uri to consume the books service
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.books.base_uri');
    }
}
