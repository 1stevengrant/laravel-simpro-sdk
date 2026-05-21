<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\VendorOrderAttachments\CreateVendorOrdersAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\VendorOrderAttachments\DeleteVendorOrdersAttachmentsFile;
use StevenGrant\SimproSdk\Requests\VendorOrderAttachments\GetVendorOrdersAttachmentsFile;
use StevenGrant\SimproSdk\Requests\VendorOrderAttachments\ListVendorOrdersAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\VendorOrderAttachments\UpdateVendorOrdersAttachmentsFile;

class VendorOrderAttachments extends BaseResource
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
    public function listVendorOrdersAttachmentsFiles(
        mixed $companyId,
        mixed $vendorOrderId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListVendorOrdersAttachmentsFiles($companyId, $vendorOrderId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     */
    public function createVendorOrdersAttachmentsFiles(mixed $companyId, mixed $vendorOrderId): Response
    {
        return $this->connector->send(new CreateVendorOrdersAttachmentsFiles($companyId, $vendorOrderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $fileId  A valid file id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getVendorOrdersAttachmentsFile(
        mixed $companyId,
        mixed $vendorOrderId,
        mixed $fileId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetVendorOrdersAttachmentsFile($companyId, $vendorOrderId, $fileId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $fileId  A valid file id
     */
    public function deleteVendorOrdersAttachmentsFile(mixed $companyId, mixed $vendorOrderId, mixed $fileId): Response
    {
        return $this->connector->send(new DeleteVendorOrdersAttachmentsFile($companyId, $vendorOrderId, $fileId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $fileId  A valid file id
     */
    public function updateVendorOrdersAttachmentsFile(mixed $companyId, mixed $vendorOrderId, mixed $fileId): Response
    {
        return $this->connector->send(new UpdateVendorOrdersAttachmentsFile($companyId, $vendorOrderId, $fileId));
    }
}
