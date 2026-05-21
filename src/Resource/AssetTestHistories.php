<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\AssetTestHistories\ListCustomerAssetsTestHistory;
use StevenGrant\SimproSdk\Requests\AssetTestHistories\ListSitesAssetsTestHistory;

class AssetTestHistories extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerAssetId  A valid customer asset id
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listCustomerAssetsTestHistory(
        mixed $companyId,
        mixed $customerAssetId,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListCustomerAssetsTestHistory($companyId, $customerAssetId, $pageSize, $page, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $assetId  A valid asset id
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listSitesAssetsTestHistory(
        mixed $companyId,
        mixed $siteId,
        mixed $assetId,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSitesAssetsTestHistory($companyId, $siteId, $assetId, $pageSize, $page, $limit));
    }
}
