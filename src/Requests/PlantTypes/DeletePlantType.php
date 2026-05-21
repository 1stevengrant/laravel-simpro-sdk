<?php

namespace StevenGrant\SimproSdk\Requests\PlantTypes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deletePlantType
 */
class DeletePlantType extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/plantTypes/{$this->plantTypeId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $plantTypeId,
    ) {}
}
