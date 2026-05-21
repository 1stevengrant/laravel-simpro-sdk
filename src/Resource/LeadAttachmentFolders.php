<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\LeadAttachmentFolders\CreateLeadsAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\LeadAttachmentFolders\DeleteLeadsAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\LeadAttachmentFolders\GetLeadsAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\LeadAttachmentFolders\ListLeadsAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\LeadAttachmentFolders\UpdateLeadsAttachmentsFolder;

class LeadAttachmentFolders extends BaseResource
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
    public function listLeadsAttachmentsFolders(
        mixed $companyId,
        mixed $leadId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListLeadsAttachmentsFolders($companyId, $leadId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $leadId  A valid lead id
     */
    public function createLeadsAttachmentsFolders(mixed $companyId, mixed $leadId): Response
    {
        return $this->connector->send(new CreateLeadsAttachmentsFolders($companyId, $leadId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $leadId  A valid lead id
     * @param  mixed  $folderId  A valid folder id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getLeadsAttachmentsFolder(
        mixed $companyId,
        mixed $leadId,
        mixed $folderId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetLeadsAttachmentsFolder($companyId, $leadId, $folderId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $leadId  A valid lead id
     * @param  mixed  $folderId  A valid folder id
     */
    public function deleteLeadsAttachmentsFolder(mixed $companyId, mixed $leadId, mixed $folderId): Response
    {
        return $this->connector->send(new DeleteLeadsAttachmentsFolder($companyId, $leadId, $folderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $leadId  A valid lead id
     * @param  mixed  $folderId  A valid folder id
     */
    public function updateLeadsAttachmentsFolder(mixed $companyId, mixed $leadId, mixed $folderId): Response
    {
        return $this->connector->send(new UpdateLeadsAttachmentsFolder($companyId, $leadId, $folderId));
    }
}
