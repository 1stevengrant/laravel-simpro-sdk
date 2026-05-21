<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\LeadArchiveReasons\CreateSetupArchiveReasonsLeads;
use StevenGrant\SimproSdk\Requests\LeadArchiveReasons\DeleteSetupArchiveReasonsLead;
use StevenGrant\SimproSdk\Requests\LeadArchiveReasons\GetSetupArchiveReasonsLead;
use StevenGrant\SimproSdk\Requests\LeadArchiveReasons\ListSetupArchiveReasonsLeads;
use StevenGrant\SimproSdk\Requests\LeadArchiveReasons\UpdateSetupArchiveReasonsLead;

class LeadArchiveReasons extends BaseResource
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
    public function listSetupArchiveReasonsLeads(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupArchiveReasonsLeads($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createSetupArchiveReasonsLeads(mixed $companyId): Response
    {
        return $this->connector->send(new CreateSetupArchiveReasonsLeads($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $archiveReasonId  A valid archive reason id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupArchiveReasonsLead(mixed $companyId, mixed $archiveReasonId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetSetupArchiveReasonsLead($companyId, $archiveReasonId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $archiveReasonId  A valid archive reason id
     */
    public function deleteSetupArchiveReasonsLead(mixed $companyId, mixed $archiveReasonId): Response
    {
        return $this->connector->send(new DeleteSetupArchiveReasonsLead($companyId, $archiveReasonId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $archiveReasonId  A valid archive reason id
     */
    public function updateSetupArchiveReasonsLead(mixed $companyId, mixed $archiveReasonId): Response
    {
        return $this->connector->send(new UpdateSetupArchiveReasonsLead($companyId, $archiveReasonId));
    }
}
