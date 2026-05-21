<?php

namespace StevenGrant\SimproSdk\Requests\RecurringInvoiceCostCenterCatalogItems;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteRecurringInvoicesSectionsCostCentersCatalog
 */
class DeleteRecurringInvoicesSectionsCostCentersCatalog extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/recurringInvoices/{$this->recurringInvoiceId}/sections/{$this->sectionId}/costCenters/{$this->costCenterId}/catalogs/{$this->catalogId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $catalogId  A valid catalog id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $recurringInvoiceId,
        protected mixed $sectionId,
        protected mixed $costCenterId,
        protected mixed $catalogId,
    ) {}
}
