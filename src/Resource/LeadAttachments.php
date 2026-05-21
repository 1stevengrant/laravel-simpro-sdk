<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\LeadAttachments\CreateLeadsAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\LeadAttachments\DeleteLeadsAttachmentsFile;
use StevenGrant\SimproSdk\Requests\LeadAttachments\GetLeadsAttachmentsFile;
use StevenGrant\SimproSdk\Requests\LeadAttachments\ListLeadsAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\LeadAttachments\UpdateLeadsAttachmentsFile;

class LeadAttachments extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $leadId  A valid lead id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listLeadsAttachmentsFiles(
        mixed $companyId,
        mixed $leadId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListLeadsAttachmentsFiles($companyId, $leadId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $leadId  A valid lead id
     */
    public function createLeadsAttachmentsFiles(mixed $companyId, mixed $leadId): Response
    {
        return $this->connector->send(new CreateLeadsAttachmentsFiles($companyId, $leadId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $leadId  A valid lead id
     * @param  mixed  $fileId  A valid file id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getLeadsAttachmentsFile(
        mixed $companyId,
        mixed $leadId,
        mixed $fileId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetLeadsAttachmentsFile($companyId, $leadId, $fileId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $leadId  A valid lead id
     * @param  mixed  $fileId  A valid file id
     */
    public function deleteLeadsAttachmentsFile(mixed $companyId, mixed $leadId, mixed $fileId): Response
    {
        return $this->connector->send(new DeleteLeadsAttachmentsFile($companyId, $leadId, $fileId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $leadId  A valid lead id
     * @param  mixed  $fileId  A valid file id
     */
    public function updateLeadsAttachmentsFile(mixed $companyId, mixed $leadId, mixed $fileId): Response
    {
        return $this->connector->send(new UpdateLeadsAttachmentsFile($companyId, $leadId, $fileId));
    }
}
