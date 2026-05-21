<?php

namespace StevenGrant\SimproSdk\Requests\PlantAndEquipmentServices;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getPlantTypesPlantsService
 */
class GetPlantTypesPlantsService extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/plantTypes/{$this->plantTypeId}/plants/{$this->plantId}/services/{$this->serviceId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $plantId  A valid plant id
     * @param  mixed  $serviceId  A valid service id
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $plantTypeId,
        protected mixed $plantId,
        protected mixed $serviceId,
        protected mixed $columns = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['columns' => $this->columns]);
    }
}
