<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceCostCenterOneOffItems\CreateRecurringInvoicesSectionsCostCentersOneOffs;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceCostCenterOneOffItems\DeleteRecurringInvoicesSectionsCostCentersOneOff;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceCostCenterOneOffItems\GetRecurringInvoicesSectionsCostCentersOneOff;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceCostCenterOneOffItems\ListRecurringInvoicesSectionsCostCentersOneOffs;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceCostCenterOneOffItems\UpdateRecurringInvoicesSectionsCostCentersOneOff;

class RecurringInvoiceCostCenterOneOffItems extends BaseResource
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
    public function listRecurringInvoicesSectionsCostCentersOneOffs(
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
        return $this->connector->send(new ListRecurringInvoicesSectionsCostCentersOneOffs($companyId, $recurringInvoiceId, $sectionId, $costCenterId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     */
    public function createRecurringInvoicesSectionsCostCentersOneOffs(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $sectionId,
        mixed $costCenterId,
    ): Response {
        return $this->connector->send(new CreateRecurringInvoicesSectionsCostCentersOneOffs($companyId, $recurringInvoiceId, $sectionId, $costCenterId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $oneOffId  A valid one off id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getRecurringInvoicesSectionsCostCentersOneOff(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $oneOffId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetRecurringInvoicesSectionsCostCentersOneOff($companyId, $recurringInvoiceId, $sectionId, $costCenterId, $oneOffId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $oneOffId  A valid one off id
     */
    public function deleteRecurringInvoicesSectionsCostCentersOneOff(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $oneOffId,
    ): Response {
        return $this->connector->send(new DeleteRecurringInvoicesSectionsCostCentersOneOff($companyId, $recurringInvoiceId, $sectionId, $costCenterId, $oneOffId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $oneOffId  A valid one off id
     */
    public function updateRecurringInvoicesSectionsCostCentersOneOff(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $oneOffId,
    ): Response {
        return $this->connector->send(new UpdateRecurringInvoicesSectionsCostCentersOneOff($companyId, $recurringInvoiceId, $sectionId, $costCenterId, $oneOffId));
    }
}
