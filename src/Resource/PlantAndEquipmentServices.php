<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\PlantAndEquipmentServices\CreatePlantTypesPlantsServices;
use StevenGrant\SimproSdk\Requests\PlantAndEquipmentServices\DeletePlantTypesPlantsService;
use StevenGrant\SimproSdk\Requests\PlantAndEquipmentServices\GetPlantTypesPlantsService;
use StevenGrant\SimproSdk\Requests\PlantAndEquipmentServices\ListPlantTypesPlantsServices;

class PlantAndEquipmentServices extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $plantId  A valid plant id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listPlantTypesPlantsServices(
        mixed $companyId,
        mixed $plantTypeId,
        mixed $plantId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListPlantTypesPlantsServices($companyId, $plantTypeId, $plantId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $plantId  A valid plant id
     */
    public function createPlantTypesPlantsServices(mixed $companyId, mixed $plantTypeId, mixed $plantId): Response
    {
        return $this->connector->send(new CreatePlantTypesPlantsServices($companyId, $plantTypeId, $plantId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $plantId  A valid plant id
     * @param  mixed  $serviceId  A valid service id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getPlantTypesPlantsService(
        mixed $companyId,
        mixed $plantTypeId,
        mixed $plantId,
        mixed $serviceId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetPlantTypesPlantsService($companyId, $plantTypeId, $plantId, $serviceId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $plantId  A valid plant id
     * @param  mixed  $serviceId  A valid service id
     */
    public function deletePlantTypesPlantsService(
        mixed $companyId,
        mixed $plantTypeId,
        mixed $plantId,
        mixed $serviceId,
    ): Response {
        return $this->connector->send(new DeletePlantTypesPlantsService($companyId, $plantTypeId, $plantId, $serviceId));
    }
}
