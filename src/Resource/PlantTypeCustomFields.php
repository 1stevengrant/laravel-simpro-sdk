<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\PlantTypeCustomFields\CreatePlantTypesCustomFields;
use StevenGrant\SimproSdk\Requests\PlantTypeCustomFields\DeletePlantTypesCustomField;
use StevenGrant\SimproSdk\Requests\PlantTypeCustomFields\GetPlantTypeCustomField;
use StevenGrant\SimproSdk\Requests\PlantTypeCustomFields\GetPlantTypesCustomField;
use StevenGrant\SimproSdk\Requests\PlantTypeCustomFields\ListPlantTypeCustomFields;
use StevenGrant\SimproSdk\Requests\PlantTypeCustomFields\ListPlantTypesCustomFields;
use StevenGrant\SimproSdk\Requests\PlantTypeCustomFields\UpdatePlantTypesCustomField;

class PlantTypeCustomFields extends BaseResource
{
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
    public function listPlantTypeCustomFields(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListPlantTypeCustomFields($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeCustomFieldId  A valid plant type custom field id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getPlantTypeCustomField(
        mixed $companyId,
        mixed $plantTypeCustomFieldId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetPlantTypeCustomField($companyId, $plantTypeCustomFieldId, $columns));
    }

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
    public function listPlantTypesCustomFields(
        mixed $companyId,
        mixed $plantTypeId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListPlantTypesCustomFields($companyId, $plantTypeId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     */
    public function createPlantTypesCustomFields(mixed $companyId, mixed $plantTypeId): Response
    {
        return $this->connector->send(new CreatePlantTypesCustomFields($companyId, $plantTypeId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $plantTypeCustomFieldId  A valid plant type custom field id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getPlantTypesCustomField(
        mixed $companyId,
        mixed $plantTypeId,
        mixed $plantTypeCustomFieldId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetPlantTypesCustomField($companyId, $plantTypeId, $plantTypeCustomFieldId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $plantTypeCustomFieldId  A valid plant type custom field id
     */
    public function deletePlantTypesCustomField(
        mixed $companyId,
        mixed $plantTypeId,
        mixed $plantTypeCustomFieldId,
    ): Response {
        return $this->connector->send(new DeletePlantTypesCustomField($companyId, $plantTypeId, $plantTypeCustomFieldId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $plantTypeCustomFieldId  A valid plant type custom field id
     */
    public function updatePlantTypesCustomField(
        mixed $companyId,
        mixed $plantTypeId,
        mixed $plantTypeCustomFieldId,
    ): Response {
        return $this->connector->send(new UpdatePlantTypesCustomField($companyId, $plantTypeId, $plantTypeCustomFieldId));
    }
}
