<?php

namespace StevenGrant\SimproSdk\Requests\TestReadings;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteSetupAssetTypesTestReading
 */
class DeleteSetupAssetTypesTestReading extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/setup/assetTypes/{$this->assetTypeId}/testReadings/{$this->assetTypeTestReadingId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeTestReadingId  A valid asset type test reading id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $assetTypeId,
        protected mixed $assetTypeTestReadingId,
    ) {}
}
