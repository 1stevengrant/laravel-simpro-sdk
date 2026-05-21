<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\ServiceLevels\CreateSetupAssetsServiceLevels;
use StevenGrant\SimproSdk\Requests\ServiceLevels\DeleteSetupAssetsServiceLevel;
use StevenGrant\SimproSdk\Requests\ServiceLevels\GetSetupAssetsServiceLevel;
use StevenGrant\SimproSdk\Requests\ServiceLevels\ListSetupAssetsServiceLevels;
use StevenGrant\SimproSdk\Requests\ServiceLevels\UpdateSetupAssetsServiceLevel;

class ServiceLevels extends BaseResource
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
    public function listSetupAssetsServiceLevels(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupAssetsServiceLevels($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createSetupAssetsServiceLevels(mixed $companyId): Response
    {
        return $this->connector->send(new CreateSetupAssetsServiceLevels($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $serviceLevelId  A valid service level id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupAssetsServiceLevel(mixed $companyId, mixed $serviceLevelId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetSetupAssetsServiceLevel($companyId, $serviceLevelId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $serviceLevelId  A valid service level id
     */
    public function deleteSetupAssetsServiceLevel(mixed $companyId, mixed $serviceLevelId): Response
    {
        return $this->connector->send(new DeleteSetupAssetsServiceLevel($companyId, $serviceLevelId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $serviceLevelId  A valid service level id
     */
    public function updateSetupAssetsServiceLevel(mixed $companyId, mixed $serviceLevelId): Response
    {
        return $this->connector->send(new UpdateSetupAssetsServiceLevel($companyId, $serviceLevelId));
    }
}
