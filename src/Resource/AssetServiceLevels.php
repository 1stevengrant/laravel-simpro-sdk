<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\AssetServiceLevels\CreateCustomerAssetsServiceLevels;
use StevenGrant\SimproSdk\Requests\AssetServiceLevels\CreateSitesAssetsServiceLevels;
use StevenGrant\SimproSdk\Requests\AssetServiceLevels\DeleteCustomerAssetsServiceLevel;
use StevenGrant\SimproSdk\Requests\AssetServiceLevels\DeleteSitesAssetsServiceLevel;
use StevenGrant\SimproSdk\Requests\AssetServiceLevels\GetCustomerAssetsServiceLevel;
use StevenGrant\SimproSdk\Requests\AssetServiceLevels\GetSitesAssetsServiceLevel;
use StevenGrant\SimproSdk\Requests\AssetServiceLevels\ListCustomerAssetsServiceLevels;
use StevenGrant\SimproSdk\Requests\AssetServiceLevels\ListSitesAssetsServiceLevels;
use StevenGrant\SimproSdk\Requests\AssetServiceLevels\UpdateCustomerAssetsServiceLevel;
use StevenGrant\SimproSdk\Requests\AssetServiceLevels\UpdateSitesAssetsServiceLevel;

class AssetServiceLevels extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerAssetId  A valid customer asset id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function listCustomerAssetsServiceLevels(
        mixed $companyId,
        mixed $customerAssetId,
        mixed $search = null,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new ListCustomerAssetsServiceLevels($companyId, $customerAssetId, $search, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerAssetId  A valid customer asset id
     */
    public function createCustomerAssetsServiceLevels(mixed $companyId, mixed $customerAssetId): Response
    {
        return $this->connector->send(new CreateCustomerAssetsServiceLevels($companyId, $customerAssetId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerAssetId  A valid customer asset id
     * @param  mixed  $serviceLevelId  A valid service level id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCustomerAssetsServiceLevel(
        mixed $companyId,
        mixed $customerAssetId,
        mixed $serviceLevelId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetCustomerAssetsServiceLevel($companyId, $customerAssetId, $serviceLevelId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerAssetId  A valid customer asset id
     * @param  mixed  $serviceLevelId  A valid service level id
     */
    public function deleteCustomerAssetsServiceLevel(
        mixed $companyId,
        mixed $customerAssetId,
        mixed $serviceLevelId,
    ): Response {
        return $this->connector->send(new DeleteCustomerAssetsServiceLevel($companyId, $customerAssetId, $serviceLevelId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerAssetId  A valid customer asset id
     * @param  mixed  $serviceLevelId  A valid service level id
     */
    public function updateCustomerAssetsServiceLevel(
        mixed $companyId,
        mixed $customerAssetId,
        mixed $serviceLevelId,
    ): Response {
        return $this->connector->send(new UpdateCustomerAssetsServiceLevel($companyId, $customerAssetId, $serviceLevelId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $assetId  A valid asset id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function listSitesAssetsServiceLevels(
        mixed $companyId,
        mixed $siteId,
        mixed $assetId,
        mixed $search = null,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new ListSitesAssetsServiceLevels($companyId, $siteId, $assetId, $search, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $assetId  A valid asset id
     */
    public function createSitesAssetsServiceLevels(mixed $companyId, mixed $siteId, mixed $assetId): Response
    {
        return $this->connector->send(new CreateSitesAssetsServiceLevels($companyId, $siteId, $assetId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $assetId  A valid asset id
     * @param  mixed  $serviceLevelId  A valid service level id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSitesAssetsServiceLevel(
        mixed $companyId,
        mixed $siteId,
        mixed $assetId,
        mixed $serviceLevelId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetSitesAssetsServiceLevel($companyId, $siteId, $assetId, $serviceLevelId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $assetId  A valid asset id
     * @param  mixed  $serviceLevelId  A valid service level id
     */
    public function deleteSitesAssetsServiceLevel(
        mixed $companyId,
        mixed $siteId,
        mixed $assetId,
        mixed $serviceLevelId,
    ): Response {
        return $this->connector->send(new DeleteSitesAssetsServiceLevel($companyId, $siteId, $assetId, $serviceLevelId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $assetId  A valid asset id
     * @param  mixed  $serviceLevelId  A valid service level id
     */
    public function updateSitesAssetsServiceLevel(
        mixed $companyId,
        mixed $siteId,
        mixed $assetId,
        mixed $serviceLevelId,
    ): Response {
        return $this->connector->send(new UpdateSitesAssetsServiceLevel($companyId, $siteId, $assetId, $serviceLevelId));
    }
}
