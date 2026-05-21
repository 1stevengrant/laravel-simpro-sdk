<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\VendorOrderItemAllocations\CreateVendorOrdersCatalogsAllocations;
use StevenGrant\SimproSdk\Requests\VendorOrderItemAllocations\ListVendorOrdersCatalogsAllocations;
use StevenGrant\SimproSdk\Requests\VendorOrderItemAllocations\ReplaceVendorOrdersCatalogsAllocations;
use StevenGrant\SimproSdk\Requests\VendorOrderItemAllocations\UpdateVendorOrdersCatalogsAllocations;

class VendorOrderItemAllocations extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $vendorOrderItemId  A valid vendor order item id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function listVendorOrdersCatalogsAllocations(
        mixed $companyId,
        mixed $vendorOrderId,
        mixed $vendorOrderItemId,
        mixed $search = null,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new ListVendorOrdersCatalogsAllocations($companyId, $vendorOrderId, $vendorOrderItemId, $search, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $vendorOrderItemId  A valid vendor order item id
     */
    public function replaceVendorOrdersCatalogsAllocations(
        mixed $companyId,
        mixed $vendorOrderId,
        mixed $vendorOrderItemId,
    ): Response {
        return $this->connector->send(new ReplaceVendorOrdersCatalogsAllocations($companyId, $vendorOrderId, $vendorOrderItemId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $vendorOrderItemId  A valid vendor order item id
     */
    public function createVendorOrdersCatalogsAllocations(
        mixed $companyId,
        mixed $vendorOrderId,
        mixed $vendorOrderItemId,
    ): Response {
        return $this->connector->send(new CreateVendorOrdersCatalogsAllocations($companyId, $vendorOrderId, $vendorOrderItemId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $vendorOrderItemId  A valid vendor order item id
     */
    public function updateVendorOrdersCatalogsAllocations(
        mixed $companyId,
        mixed $vendorOrderId,
        mixed $vendorOrderItemId,
    ): Response {
        return $this->connector->send(new UpdateVendorOrdersCatalogsAllocations($companyId, $vendorOrderId, $vendorOrderItemId));
    }
}
