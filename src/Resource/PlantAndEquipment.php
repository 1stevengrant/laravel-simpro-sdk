<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\PlantAndEquipment\CreatePlantTypesPlants;
use StevenGrant\SimproSdk\Requests\PlantAndEquipment\DeletePlantTypesPlant;
use StevenGrant\SimproSdk\Requests\PlantAndEquipment\GetPlant;
use StevenGrant\SimproSdk\Requests\PlantAndEquipment\GetPlantTypesPlant;
use StevenGrant\SimproSdk\Requests\PlantAndEquipment\ListPlants;
use StevenGrant\SimproSdk\Requests\PlantAndEquipment\ListPlantTypesPlants;
use StevenGrant\SimproSdk\Requests\PlantAndEquipment\UpdatePlantTypesPlant;

class PlantAndEquipment extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listPlantTypesPlants(
        mixed $companyId,
        mixed $plantTypeId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListPlantTypesPlants($companyId, $plantTypeId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     */
    public function createPlantTypesPlants(mixed $companyId, mixed $plantTypeId): Response
    {
        return $this->connector->send(new CreatePlantTypesPlants($companyId, $plantTypeId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $plantId  A valid plant id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getPlantTypesPlant(
        mixed $companyId,
        mixed $plantTypeId,
        mixed $plantId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetPlantTypesPlant($companyId, $plantTypeId, $plantId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $plantId  A valid plant id
     */
    public function deletePlantTypesPlant(mixed $companyId, mixed $plantTypeId, mixed $plantId): Response
    {
        return $this->connector->send(new DeletePlantTypesPlant($companyId, $plantTypeId, $plantId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $plantId  A valid plant id
     */
    public function updatePlantTypesPlant(mixed $companyId, mixed $plantTypeId, mixed $plantId): Response
    {
        return $this->connector->send(new UpdatePlantTypesPlant($companyId, $plantTypeId, $plantId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listPlants(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListPlants($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantId  A valid plant id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getPlant(mixed $companyId, mixed $plantId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetPlant($companyId, $plantId, $columns));
    }
}
