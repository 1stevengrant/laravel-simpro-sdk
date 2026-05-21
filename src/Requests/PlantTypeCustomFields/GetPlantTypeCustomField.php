<?php

namespace StevenGrant\SimproSdk\Requests\PlantTypeCustomFields;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getPlantTypeCustomField
 */
class GetPlantTypeCustomField extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/plantTypeCustomFields/{$this->plantTypeCustomFieldId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeCustomFieldId  A valid plant type custom field id
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $plantTypeCustomFieldId,
        protected mixed $columns = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['columns' => $this->columns]);
    }
}
