<?php

namespace StevenGrant\SimproSdk\Requests\VendorReceiptCatalogs;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getVendorReceiptCatalog
 */
class GetVendorReceiptCatalog extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/vendorReceiptCatalogs/{$this->vendorReceiptCatalogId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorReceiptCatalogId  A composite identifier formatted as {VendorReceiptID}-{CatalogID} that uniquely identifies a vendor receipt catalog entry by combining the vendor receipt ID and the catalog item ID with a hyphen delimiter.
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $vendorReceiptCatalogId,
        protected mixed $columns = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['columns' => $this->columns]);
    }
}
