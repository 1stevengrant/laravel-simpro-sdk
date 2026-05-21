<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CustomerContractServiceLevelAssetTypes\GetCustomersContractsServiceLevelsAssetType;
use StevenGrant\SimproSdk\Requests\CustomerContractServiceLevelAssetTypes\UpdateCustomersContractsServiceLevelsAssetType;

class CustomerContractServiceLevelAssetTypes extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $contractId  A valid contract id
     * @param  mixed  $serviceLevelId  A valid service level id
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCustomersContractsServiceLevelsAssetType(
        mixed $companyId,
        mixed $customerId,
        mixed $contractId,
        mixed $serviceLevelId,
        mixed $assetTypeId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetCustomersContractsServiceLevelsAssetType($companyId, $customerId, $contractId, $serviceLevelId, $assetTypeId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $contractId  A valid contract id
     * @param  mixed  $serviceLevelId  A valid service level id
     * @param  mixed  $assetTypeId  A valid asset type id
     */
    public function updateCustomersContractsServiceLevelsAssetType(
        mixed $companyId,
        mixed $customerId,
        mixed $contractId,
        mixed $serviceLevelId,
        mixed $assetTypeId,
    ): Response {
        return $this->connector->send(new UpdateCustomersContractsServiceLevelsAssetType($companyId, $customerId, $contractId, $serviceLevelId, $assetTypeId));
    }
}
