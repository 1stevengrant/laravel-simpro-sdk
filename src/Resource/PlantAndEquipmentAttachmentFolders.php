<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\PlantAndEquipmentAttachmentFolders\CreatePlantTypesPlantsAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\PlantAndEquipmentAttachmentFolders\DeletePlantTypesPlantsAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\PlantAndEquipmentAttachmentFolders\GetPlantTypesPlantsAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\PlantAndEquipmentAttachmentFolders\ListPlantTypesPlantsAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\PlantAndEquipmentAttachmentFolders\UpdatePlantTypesPlantsAttachmentsFolder;

class PlantAndEquipmentAttachmentFolders extends BaseResource
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
    public function listPlantTypesPlantsAttachmentsFolders(
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
        return $this->connector->send(new ListPlantTypesPlantsAttachmentsFolders($companyId, $plantTypeId, $plantId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $plantId  A valid plant id
     */
    public function createPlantTypesPlantsAttachmentsFolders(
        mixed $companyId,
        mixed $plantTypeId,
        mixed $plantId,
    ): Response {
        return $this->connector->send(new CreatePlantTypesPlantsAttachmentsFolders($companyId, $plantTypeId, $plantId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $plantId  A valid plant id
     * @param  mixed  $folderId  A valid folder id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getPlantTypesPlantsAttachmentsFolder(
        mixed $companyId,
        mixed $plantTypeId,
        mixed $plantId,
        mixed $folderId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetPlantTypesPlantsAttachmentsFolder($companyId, $plantTypeId, $plantId, $folderId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $plantId  A valid plant id
     * @param  mixed  $folderId  A valid folder id
     */
    public function deletePlantTypesPlantsAttachmentsFolder(
        mixed $companyId,
        mixed $plantTypeId,
        mixed $plantId,
        mixed $folderId,
    ): Response {
        return $this->connector->send(new DeletePlantTypesPlantsAttachmentsFolder($companyId, $plantTypeId, $plantId, $folderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $plantId  A valid plant id
     * @param  mixed  $folderId  A valid folder id
     */
    public function updatePlantTypesPlantsAttachmentsFolder(
        mixed $companyId,
        mixed $plantTypeId,
        mixed $plantId,
        mixed $folderId,
    ): Response {
        return $this->connector->send(new UpdatePlantTypesPlantsAttachmentsFolder($companyId, $plantTypeId, $plantId, $folderId));
    }
}
