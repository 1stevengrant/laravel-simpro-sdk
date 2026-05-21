<?php

namespace StevenGrant\SimproSdk\Requests\SingleTaxCodes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteSetupAccountsTaxCodesSingle
 */
class DeleteSetupAccountsTaxCodesSingle extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/setup/accounts/taxCodes/singles/{$this->singleTaxCodeId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $singleTaxCodeId  A valid single tax code id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $singleTaxCodeId,
    ) {}
}
