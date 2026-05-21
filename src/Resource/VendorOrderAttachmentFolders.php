<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\VendorOrderAttachmentFolders\CreateVendorOrdersAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\VendorOrderAttachmentFolders\DeleteVendorOrdersAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\VendorOrderAttachmentFolders\GetVendorOrdersAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\VendorOrderAttachmentFolders\ListVendorOrdersAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\VendorOrderAttachmentFolders\UpdateVendorOrdersAttachmentsFolder;

class VendorOrderAttachmentFolders extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listVendorOrdersAttachmentsFolders(
        mixed $companyId,
        mixed $vendorOrderId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListVendorOrdersAttachmentsFolders($companyId, $vendorOrderId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     */
    public function createVendorOrdersAttachmentsFolders(mixed $companyId, mixed $vendorOrderId): Response
    {
        return $this->connector->send(new CreateVendorOrdersAttachmentsFolders($companyId, $vendorOrderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $folderId  A valid folder id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getVendorOrdersAttachmentsFolder(
        mixed $companyId,
        mixed $vendorOrderId,
        mixed $folderId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetVendorOrdersAttachmentsFolder($companyId, $vendorOrderId, $folderId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $folderId  A valid folder id
     */
    public function deleteVendorOrdersAttachmentsFolder(
        mixed $companyId,
        mixed $vendorOrderId,
        mixed $folderId,
    ): Response {
        return $this->connector->send(new DeleteVendorOrdersAttachmentsFolder($companyId, $vendorOrderId, $folderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $folderId  A valid folder id
     */
    public function updateVendorOrdersAttachmentsFolder(
        mixed $companyId,
        mixed $vendorOrderId,
        mixed $folderId,
    ): Response {
        return $this->connector->send(new UpdateVendorOrdersAttachmentsFolder($companyId, $vendorOrderId, $folderId));
    }
}
