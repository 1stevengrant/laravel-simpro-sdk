<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\Info\ListInfo;

class Info extends BaseResource
{
    /**
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function listInfo(mixed $columns = null): Response
    {
        return $this->connector->send(new ListInfo($columns));
    }
}
