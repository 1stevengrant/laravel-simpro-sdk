<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\MergeCatalogs\CreateCatalogsMergeCatalogs;

class MergeCatalogs extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     */
    public function createCatalogsMergeCatalogs(mixed $companyId, mixed $catalogId): Response
    {
        return $this->connector->send(new CreateCatalogsMergeCatalogs($companyId, $catalogId));
    }
}
