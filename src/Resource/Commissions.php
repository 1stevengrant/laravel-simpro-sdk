<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\Commissions\CreateSetupCommissionsAdvanced;
use StevenGrant\SimproSdk\Requests\Commissions\CreateSetupCommissionsBasic;
use StevenGrant\SimproSdk\Requests\Commissions\DeleteSetupCommissionsAdvanced;
use StevenGrant\SimproSdk\Requests\Commissions\DeleteSetupCommissionsBasic;
use StevenGrant\SimproSdk\Requests\Commissions\GetSetupCommissionsAdvanced;
use StevenGrant\SimproSdk\Requests\Commissions\GetSetupCommissionsBasic;
use StevenGrant\SimproSdk\Requests\Commissions\ListSetupCommissions;
use StevenGrant\SimproSdk\Requests\Commissions\ListSetupCommissionsAdvanced;
use StevenGrant\SimproSdk\Requests\Commissions\ListSetupCommissionsBasic;
use StevenGrant\SimproSdk\Requests\Commissions\UpdateSetupCommissionsAdvanced;
use StevenGrant\SimproSdk\Requests\Commissions\UpdateSetupCommissionsBasic;

class Commissions extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     */
    public function listSetupCommissions(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
    ): Response {
        return $this->connector->send(new ListSetupCommissions($companyId, $search, $columns, $pageSize, $page));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $commissionType  A valid commission type
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     */
    public function listSetupCommissionsAdvanced(
        mixed $companyId,
        mixed $commissionType,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
    ): Response {
        return $this->connector->send(new ListSetupCommissionsAdvanced($companyId, $commissionType, $search, $columns, $pageSize, $page));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $commissionType  A valid commission type
     */
    public function createSetupCommissionsAdvanced(mixed $companyId, mixed $commissionType): Response
    {
        return $this->connector->send(new CreateSetupCommissionsAdvanced($companyId, $commissionType));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $commissionType  A valid commission type
     * @param  mixed  $commissionId  A valid commission id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupCommissionsAdvanced(
        mixed $companyId,
        mixed $commissionType,
        mixed $commissionId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetSetupCommissionsAdvanced($companyId, $commissionType, $commissionId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $commissionType  A valid commission type
     * @param  mixed  $commissionId  A valid commission id
     */
    public function deleteSetupCommissionsAdvanced(
        mixed $companyId,
        mixed $commissionType,
        mixed $commissionId,
    ): Response {
        return $this->connector->send(new DeleteSetupCommissionsAdvanced($companyId, $commissionType, $commissionId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $commissionType  A valid commission type
     * @param  mixed  $commissionId  A valid commission id
     */
    public function updateSetupCommissionsAdvanced(
        mixed $companyId,
        mixed $commissionType,
        mixed $commissionId,
    ): Response {
        return $this->connector->send(new UpdateSetupCommissionsAdvanced($companyId, $commissionType, $commissionId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $commissionType  A valid commission type
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     */
    public function listSetupCommissionsBasic(
        mixed $companyId,
        mixed $commissionType,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
    ): Response {
        return $this->connector->send(new ListSetupCommissionsBasic($companyId, $commissionType, $search, $columns, $pageSize, $page));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $commissionType  A valid commission type
     */
    public function createSetupCommissionsBasic(mixed $companyId, mixed $commissionType): Response
    {
        return $this->connector->send(new CreateSetupCommissionsBasic($companyId, $commissionType));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $commissionType  A valid commission type
     * @param  mixed  $commissionId  A valid commission id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupCommissionsBasic(
        mixed $companyId,
        mixed $commissionType,
        mixed $commissionId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetSetupCommissionsBasic($companyId, $commissionType, $commissionId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $commissionType  A valid commission type
     * @param  mixed  $commissionId  A valid commission id
     */
    public function deleteSetupCommissionsBasic(mixed $companyId, mixed $commissionType, mixed $commissionId): Response
    {
        return $this->connector->send(new DeleteSetupCommissionsBasic($companyId, $commissionType, $commissionId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $commissionType  A valid commission type
     * @param  mixed  $commissionId  A valid commission id
     */
    public function updateSetupCommissionsBasic(mixed $companyId, mixed $commissionType, mixed $commissionId): Response
    {
        return $this->connector->send(new UpdateSetupCommissionsBasic($companyId, $commissionType, $commissionId));
    }
}
