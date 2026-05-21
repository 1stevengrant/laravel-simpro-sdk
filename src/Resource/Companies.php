<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\Companies\Get;
use StevenGrant\SimproSdk\Requests\Companies\ListRequest;
use StevenGrant\SimproSdk\Requests\Companies\Update;

class Companies extends BaseResource
{
    /**
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     */
    public function listRequest(mixed $search = null, mixed $columns = null, mixed $orderby = null): Response
    {
        return $this->connector->send(new ListRequest($search, $columns, $orderby));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function get(mixed $companyId, mixed $columns = null): Response
    {
        return $this->connector->send(new Get($companyId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function update(mixed $companyId): Response
    {
        return $this->connector->send(new Update($companyId));
    }
}
