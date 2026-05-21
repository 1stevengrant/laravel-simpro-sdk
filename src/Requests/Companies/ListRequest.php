<?php

namespace StevenGrant\SimproSdk\Requests\Companies;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * list
 */
class ListRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/api/v1.0/companies';
    }

    /**
     * @param  null|mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  null|mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     */
    public function __construct(
        protected mixed $search = null,
        protected mixed $columns = null,
        protected mixed $orderby = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['search' => $this->search, 'columns' => $this->columns, 'orderby' => $this->orderby]);
    }
}
