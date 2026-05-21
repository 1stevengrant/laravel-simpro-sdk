<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\VendorCreditItems\GetVendorOrdersReceiptsCreditsCatalog;
use StevenGrant\SimproSdk\Requests\VendorCreditItems\ListVendorOrdersReceiptsCreditsCatalogs;

class VendorCreditItems extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $vendorReceiptId  A valid vendor receipt id
     * @param  mixed  $vendorCreditId  A valid vendor credit id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listVendorOrdersReceiptsCreditsCatalogs(
        mixed $companyId,
        mixed $vendorOrderId,
        mixed $vendorReceiptId,
        mixed $vendorCreditId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListVendorOrdersReceiptsCreditsCatalogs($companyId, $vendorOrderId, $vendorReceiptId, $vendorCreditId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $vendorReceiptId  A valid vendor receipt id
     * @param  mixed  $vendorCreditId  A valid vendor credit id
     * @param  mixed  $vendorCreditItemId  A valid vendor credit item id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getVendorOrdersReceiptsCreditsCatalog(
        mixed $companyId,
        mixed $vendorOrderId,
        mixed $vendorReceiptId,
        mixed $vendorCreditId,
        mixed $vendorCreditItemId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetVendorOrdersReceiptsCreditsCatalog($companyId, $vendorOrderId, $vendorReceiptId, $vendorCreditId, $vendorCreditItemId, $columns));
    }
}
