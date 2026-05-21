<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\VendorReceiptCredits\CreateVendorOrdersReceiptsCredits;
use StevenGrant\SimproSdk\Requests\VendorReceiptCredits\DeleteVendorOrdersReceiptsCredit;
use StevenGrant\SimproSdk\Requests\VendorReceiptCredits\GetVendorOrdersReceiptsCredit;
use StevenGrant\SimproSdk\Requests\VendorReceiptCredits\ListVendorOrdersReceiptsCredits;
use StevenGrant\SimproSdk\Requests\VendorReceiptCredits\UpdateVendorOrdersReceiptsCredit;

class VendorReceiptCredits extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $vendorReceiptId  A valid vendor receipt id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listVendorOrdersReceiptsCredits(
        mixed $companyId,
        mixed $vendorOrderId,
        mixed $vendorReceiptId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListVendorOrdersReceiptsCredits($companyId, $vendorOrderId, $vendorReceiptId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $vendorReceiptId  A valid vendor receipt id
     */
    public function createVendorOrdersReceiptsCredits(
        mixed $companyId,
        mixed $vendorOrderId,
        mixed $vendorReceiptId,
    ): Response {
        return $this->connector->send(new CreateVendorOrdersReceiptsCredits($companyId, $vendorOrderId, $vendorReceiptId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $vendorReceiptId  A valid vendor receipt id
     * @param  mixed  $vendorCreditId  A valid vendor credit id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getVendorOrdersReceiptsCredit(
        mixed $companyId,
        mixed $vendorOrderId,
        mixed $vendorReceiptId,
        mixed $vendorCreditId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetVendorOrdersReceiptsCredit($companyId, $vendorOrderId, $vendorReceiptId, $vendorCreditId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $vendorReceiptId  A valid vendor receipt id
     * @param  mixed  $vendorCreditId  A valid vendor credit id
     */
    public function deleteVendorOrdersReceiptsCredit(
        mixed $companyId,
        mixed $vendorOrderId,
        mixed $vendorReceiptId,
        mixed $vendorCreditId,
    ): Response {
        return $this->connector->send(new DeleteVendorOrdersReceiptsCredit($companyId, $vendorOrderId, $vendorReceiptId, $vendorCreditId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $vendorReceiptId  A valid vendor receipt id
     * @param  mixed  $vendorCreditId  A valid vendor credit id
     */
    public function updateVendorOrdersReceiptsCredit(
        mixed $companyId,
        mixed $vendorOrderId,
        mixed $vendorReceiptId,
        mixed $vendorCreditId,
    ): Response {
        return $this->connector->send(new UpdateVendorOrdersReceiptsCredit($companyId, $vendorOrderId, $vendorReceiptId, $vendorCreditId));
    }
}
