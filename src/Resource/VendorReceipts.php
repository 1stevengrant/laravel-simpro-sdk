<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\VendorReceipts\CreateVendorOrdersReceipts;
use StevenGrant\SimproSdk\Requests\VendorReceipts\DeleteVendorOrdersReceipt;
use StevenGrant\SimproSdk\Requests\VendorReceipts\GetVendorOrdersReceipt;
use StevenGrant\SimproSdk\Requests\VendorReceipts\ListVendorOrdersReceipts;
use StevenGrant\SimproSdk\Requests\VendorReceipts\UpdateVendorOrdersReceipt;

class VendorReceipts extends BaseResource
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
    public function listVendorOrdersReceipts(
        mixed $companyId,
        mixed $vendorOrderId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListVendorOrdersReceipts($companyId, $vendorOrderId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     */
    public function createVendorOrdersReceipts(mixed $companyId, mixed $vendorOrderId): Response
    {
        return $this->connector->send(new CreateVendorOrdersReceipts($companyId, $vendorOrderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $vendorReceiptId  A valid vendor receipt id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getVendorOrdersReceipt(
        mixed $companyId,
        mixed $vendorOrderId,
        mixed $vendorReceiptId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetVendorOrdersReceipt($companyId, $vendorOrderId, $vendorReceiptId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $vendorReceiptId  A valid vendor receipt id
     */
    public function deleteVendorOrdersReceipt(mixed $companyId, mixed $vendorOrderId, mixed $vendorReceiptId): Response
    {
        return $this->connector->send(new DeleteVendorOrdersReceipt($companyId, $vendorOrderId, $vendorReceiptId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $vendorReceiptId  A valid vendor receipt id
     */
    public function updateVendorOrdersReceipt(mixed $companyId, mixed $vendorOrderId, mixed $vendorReceiptId): Response
    {
        return $this->connector->send(new UpdateVendorOrdersReceipt($companyId, $vendorOrderId, $vendorReceiptId));
    }
}
