<?php

namespace StevenGrant\SimproSdk\Requests\CurrentUser;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listCurrentUser
 */
class ListCurrentUser extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/api/v1.0/currentUser';
    }

    /**
     * @param  null|mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function __construct(
        protected mixed $search = null,
        protected mixed $columns = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['search' => $this->search, 'columns' => $this->columns]);
    }
}
