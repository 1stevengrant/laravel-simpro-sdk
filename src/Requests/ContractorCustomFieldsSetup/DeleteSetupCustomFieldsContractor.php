<?php

namespace StevenGrant\SimproSdk\Requests\ContractorCustomFieldsSetup;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteSetupCustomFieldsContractor
 */
class DeleteSetupCustomFieldsContractor extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/setup/customFields/contractors/{$this->customFieldId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customFieldId  A valid custom field id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $customFieldId,
    ) {}
}
