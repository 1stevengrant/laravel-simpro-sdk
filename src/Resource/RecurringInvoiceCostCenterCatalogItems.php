<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceCostCenterCatalogItems\CreateRecurringInvoicesSectionsCostCentersCatalogs;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceCostCenterCatalogItems\DeleteRecurringInvoicesSectionsCostCentersCatalog;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceCostCenterCatalogItems\GetRecurringInvoicesSectionsCostCentersCatalog;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceCostCenterCatalogItems\ListRecurringInvoicesSectionsCostCentersCatalogs;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceCostCenterCatalogItems\UpdateRecurringInvoicesSectionsCostCentersCatalog;

class RecurringInvoiceCostCenterCatalogItems extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listRecurringInvoicesSectionsCostCentersCatalogs(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListRecurringInvoicesSectionsCostCentersCatalogs($companyId, $recurringInvoiceId, $sectionId, $costCenterId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     */
    public function createRecurringInvoicesSectionsCostCentersCatalogs(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $sectionId,
        mixed $costCenterId,
    ): Response {
        return $this->connector->send(new CreateRecurringInvoicesSectionsCostCentersCatalogs($companyId, $recurringInvoiceId, $sectionId, $costCenterId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getRecurringInvoicesSectionsCostCentersCatalog(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $catalogId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetRecurringInvoicesSectionsCostCentersCatalog($companyId, $recurringInvoiceId, $sectionId, $costCenterId, $catalogId, $columns));
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
    public function deleteRecurringInvoicesSectionsCostCentersCatalog(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $catalogId,
    ): Response {
        return $this->connector->send(new DeleteRecurringInvoicesSectionsCostCentersCatalog($companyId, $recurringInvoiceId, $sectionId, $costCenterId, $catalogId));
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
    public function updateRecurringInvoicesSectionsCostCentersCatalog(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $catalogId,
    ): Response {
        return $this->connector->send(new UpdateRecurringInvoicesSectionsCostCentersCatalog($companyId, $recurringInvoiceId, $sectionId, $costCenterId, $catalogId));
    }
}
