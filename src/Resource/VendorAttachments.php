<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\VendorAttachments\CreateVendorsAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\VendorAttachments\DeleteVendorsAttachmentsFile;
use StevenGrant\SimproSdk\Requests\VendorAttachments\GetVendorsAttachmentsFile;
use StevenGrant\SimproSdk\Requests\VendorAttachments\ListVendorsAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\VendorAttachments\UpdateVendorsAttachmentsFile;

class VendorAttachments extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorId  A valid vendor id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listVendorsAttachmentsFiles(
        mixed $companyId,
        mixed $vendorId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListVendorsAttachmentsFiles($companyId, $vendorId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorId  A valid vendor id
     */
    public function createVendorsAttachmentsFiles(mixed $companyId, mixed $vendorId): Response
    {
        return $this->connector->send(new CreateVendorsAttachmentsFiles($companyId, $vendorId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorId  A valid vendor id
     * @param  mixed  $fileId  A valid file id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getVendorsAttachmentsFile(
        mixed $companyId,
        mixed $vendorId,
        mixed $fileId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetVendorsAttachmentsFile($companyId, $vendorId, $fileId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorId  A valid vendor id
     * @param  mixed  $fileId  A valid file id
     */
    public function deleteVendorsAttachmentsFile(mixed $companyId, mixed $vendorId, mixed $fileId): Response
    {
        return $this->connector->send(new DeleteVendorsAttachmentsFile($companyId, $vendorId, $fileId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorId  A valid vendor id
     * @param  mixed  $fileId  A valid file id
     */
    public function updateVendorsAttachmentsFile(mixed $companyId, mixed $vendorId, mixed $fileId): Response
    {
        return $this->connector->send(new UpdateVendorsAttachmentsFile($companyId, $vendorId, $fileId));
    }
}
