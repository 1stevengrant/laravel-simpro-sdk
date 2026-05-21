<?php

namespace StevenGrant\SimproSdk\Requests\PlantTypeCustomFields;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deletePlantTypesCustomField
 */
class DeletePlantTypesCustomField extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/plantTypes/{$this->plantTypeId}/customFields/{$this->plantTypeCustomFieldId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $plantTypeCustomFieldId  A valid plant type custom field id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $plantTypeId,
        protected mixed $plantTypeCustomFieldId,
    ) {}
}
