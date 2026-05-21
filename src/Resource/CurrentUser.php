<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CurrentUser\ListCurrentUser;

class CurrentUser extends BaseResource
{
    /**
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function listCurrentUser(mixed $search = null, mixed $columns = null): Response
    {
        return $this->connector->send(new ListCurrentUser($search, $columns));
    }
}
