<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CostCenters\CreateSetupAccountsCostCenters;
use StevenGrant\SimproSdk\Requests\CostCenters\DeleteSetupAccountsCostCenter;
use StevenGrant\SimproSdk\Requests\CostCenters\GetSetupAccountsCostCenter;
use StevenGrant\SimproSdk\Requests\CostCenters\ListSetupAccountsCostCenters;
use StevenGrant\SimproSdk\Requests\CostCenters\UpdateSetupAccountsCostCenter;

class CostCenters extends BaseResource
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
    public function listSetupAccountsCostCenters(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupAccountsCostCenters($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createSetupAccountsCostCenters(mixed $companyId): Response
    {
        return $this->connector->send(new CreateSetupAccountsCostCenters($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupAccountsCostCenter(mixed $companyId, mixed $costCenterId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetSetupAccountsCostCenter($companyId, $costCenterId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $costCenterId  A valid cost center id
     */
    public function deleteSetupAccountsCostCenter(mixed $companyId, mixed $costCenterId): Response
    {
        return $this->connector->send(new DeleteSetupAccountsCostCenter($companyId, $costCenterId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $costCenterId  A valid cost center id
     */
    public function updateSetupAccountsCostCenter(mixed $companyId, mixed $costCenterId): Response
    {
        return $this->connector->send(new UpdateSetupAccountsCostCenter($companyId, $costCenterId));
    }
}
