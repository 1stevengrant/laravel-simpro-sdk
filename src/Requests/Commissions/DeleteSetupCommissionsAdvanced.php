<?php

namespace StevenGrant\SimproSdk\Requests\Commissions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteSetupCommissionsAdvanced
 */
class DeleteSetupCommissionsAdvanced extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/setup/commissions/advanced/{$this->commissionId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $commissionType  A valid commission type
     * @param  mixed  $commissionId  A valid commission id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $commissionType,
        protected mixed $commissionId,
    ) {}
}
