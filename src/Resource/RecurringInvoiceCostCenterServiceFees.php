<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceCostCenterServiceFees\CreateRecurringInvoicesSectionsCostCentersServiceFees;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceCostCenterServiceFees\DeleteRecurringInvoicesSectionsCostCentersServiceFee;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceCostCenterServiceFees\GetRecurringInvoicesSectionsCostCentersServiceFee;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceCostCenterServiceFees\ListRecurringInvoicesSectionsCostCentersServiceFees;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceCostCenterServiceFees\UpdateRecurringInvoicesSectionsCostCentersServiceFee;

class RecurringInvoiceCostCenterServiceFees extends BaseResource
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
    public function listRecurringInvoicesSectionsCostCentersServiceFees(
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
        return $this->connector->send(new ListRecurringInvoicesSectionsCostCentersServiceFees($companyId, $recurringInvoiceId, $sectionId, $costCenterId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     */
    public function createRecurringInvoicesSectionsCostCentersServiceFees(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $sectionId,
        mixed $costCenterId,
    ): Response {
        return $this->connector->send(new CreateRecurringInvoicesSectionsCostCentersServiceFees($companyId, $recurringInvoiceId, $sectionId, $costCenterId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $serviceFeeId  A valid service fee id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getRecurringInvoicesSectionsCostCentersServiceFee(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $serviceFeeId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetRecurringInvoicesSectionsCostCentersServiceFee($companyId, $recurringInvoiceId, $sectionId, $costCenterId, $serviceFeeId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $serviceFeeId  A valid service fee id
     */
    public function deleteRecurringInvoicesSectionsCostCentersServiceFee(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $serviceFeeId,
    ): Response {
        return $this->connector->send(new DeleteRecurringInvoicesSectionsCostCentersServiceFee($companyId, $recurringInvoiceId, $sectionId, $costCenterId, $serviceFeeId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $serviceFeeId  A valid service fee id
     */
    public function updateRecurringInvoicesSectionsCostCentersServiceFee(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $serviceFeeId,
    ): Response {
        return $this->connector->send(new UpdateRecurringInvoicesSectionsCostCentersServiceFee($companyId, $recurringInvoiceId, $sectionId, $costCenterId, $serviceFeeId));
    }
}
