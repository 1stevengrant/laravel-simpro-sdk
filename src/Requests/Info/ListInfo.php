<?php

namespace StevenGrant\SimproSdk\Requests\Info;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listInfo
 */
class ListInfo extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/api/v1.0/info';
    }

    /**
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function __construct(
        protected mixed $columns = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['columns' => $this->columns]);
    }
}
