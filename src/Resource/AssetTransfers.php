<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\AssetTransfers\CreateSitesAssetsTransfer;

class AssetTransfers extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $assetId  A valid asset id
     */
    public function createSitesAssetsTransfer(mixed $companyId, mixed $siteId, mixed $assetId): Response
    {
        return $this->connector->send(new CreateSitesAssetsTransfer($companyId, $siteId, $assetId));
    }
}
