<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\VendorReceiptItemAllocations\ListVendorOrdersReceiptsCatalogsAllocations;

class VendorReceiptItemAllocations extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $vendorReceiptId  A valid vendor receipt id
     * @param  mixed  $vendorReceiptItemId  A valid vendor receipt item id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function listVendorOrdersReceiptsCatalogsAllocations(
        mixed $companyId,
        mixed $vendorOrderId,
        mixed $vendorReceiptId,
        mixed $vendorReceiptItemId,
        mixed $search = null,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new ListVendorOrdersReceiptsCatalogsAllocations($companyId, $vendorOrderId, $vendorReceiptId, $vendorReceiptItemId, $search, $columns));
    }
}
