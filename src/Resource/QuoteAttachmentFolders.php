<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\QuoteAttachmentFolders\CreateQuotesAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\QuoteAttachmentFolders\DeleteQuotesAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\QuoteAttachmentFolders\GetQuotesAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\QuoteAttachmentFolders\ListQuotesAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\QuoteAttachmentFolders\UpdateQuotesAttachmentsFolder;

class QuoteAttachmentFolders extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $quoteId  A valid quote id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listQuotesAttachmentsFolders(
        mixed $companyId,
        mixed $quoteId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListQuotesAttachmentsFolders($companyId, $quoteId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $quoteId  A valid quote id
     */
    public function createQuotesAttachmentsFolders(mixed $companyId, mixed $quoteId): Response
    {
        return $this->connector->send(new CreateQuotesAttachmentsFolders($companyId, $quoteId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $quoteId  A valid quote id
     * @param  mixed  $folderId  A valid folder id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getQuotesAttachmentsFolder(
        mixed $companyId,
        mixed $quoteId,
        mixed $folderId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetQuotesAttachmentsFolder($companyId, $quoteId, $folderId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $quoteId  A valid quote id
     * @param  mixed  $folderId  A valid folder id
     */
    public function deleteQuotesAttachmentsFolder(mixed $companyId, mixed $quoteId, mixed $folderId): Response
    {
        return $this->connector->send(new DeleteQuotesAttachmentsFolder($companyId, $quoteId, $folderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $quoteId  A valid quote id
     * @param  mixed  $folderId  A valid folder id
     */
    public function updateQuotesAttachmentsFolder(mixed $companyId, mixed $quoteId, mixed $folderId): Response
    {
        return $this->connector->send(new UpdateQuotesAttachmentsFolder($companyId, $quoteId, $folderId));
    }
}
