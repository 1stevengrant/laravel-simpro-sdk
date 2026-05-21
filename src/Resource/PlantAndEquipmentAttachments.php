<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\PlantAndEquipmentAttachments\CreatePlantTypesPlantsAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\PlantAndEquipmentAttachments\DeletePlantTypesPlantsAttachmentsFile;
use StevenGrant\SimproSdk\Requests\PlantAndEquipmentAttachments\GetPlantTypesPlantsAttachmentsFile;
use StevenGrant\SimproSdk\Requests\PlantAndEquipmentAttachments\ListPlantTypesPlantsAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\PlantAndEquipmentAttachments\UpdatePlantTypesPlantsAttachmentsFile;

class PlantAndEquipmentAttachments extends BaseResource
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
    public function listPlantTypesPlantsAttachmentsFiles(
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
        return $this->connector->send(new ListPlantTypesPlantsAttachmentsFiles($companyId, $plantTypeId, $plantId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $plantId  A valid plant id
     */
    public function createPlantTypesPlantsAttachmentsFiles(
        mixed $companyId,
        mixed $plantTypeId,
        mixed $plantId,
    ): Response {
        return $this->connector->send(new CreatePlantTypesPlantsAttachmentsFiles($companyId, $plantTypeId, $plantId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $plantId  A valid plant id
     * @param  mixed  $fileId  A valid file id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getPlantTypesPlantsAttachmentsFile(
        mixed $companyId,
        mixed $plantTypeId,
        mixed $plantId,
        mixed $fileId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetPlantTypesPlantsAttachmentsFile($companyId, $plantTypeId, $plantId, $fileId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $plantId  A valid plant id
     * @param  mixed  $fileId  A valid file id
     */
    public function deletePlantTypesPlantsAttachmentsFile(
        mixed $companyId,
        mixed $plantTypeId,
        mixed $plantId,
        mixed $fileId,
    ): Response {
        return $this->connector->send(new DeletePlantTypesPlantsAttachmentsFile($companyId, $plantTypeId, $plantId, $fileId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $plantId  A valid plant id
     * @param  mixed  $fileId  A valid file id
     */
    public function updatePlantTypesPlantsAttachmentsFile(
        mixed $companyId,
        mixed $plantTypeId,
        mixed $plantId,
        mixed $fileId,
    ): Response {
        return $this->connector->send(new UpdatePlantTypesPlantsAttachmentsFile($companyId, $plantTypeId, $plantId, $fileId));
    }
}
