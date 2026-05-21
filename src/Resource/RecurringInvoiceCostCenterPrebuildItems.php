<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceCostCenterPrebuildItems\CreateRecurringInvoicesSectionsCostCentersPrebuilds;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceCostCenterPrebuildItems\DeleteRecurringInvoicesSectionsCostCentersPrebuild;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceCostCenterPrebuildItems\GetRecurringInvoicesSectionsCostCentersPrebuild;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceCostCenterPrebuildItems\ListRecurringInvoicesSectionsCostCentersPrebuilds;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceCostCenterPrebuildItems\UpdateRecurringInvoicesSectionsCostCentersPrebuild;

class RecurringInvoiceCostCenterPrebuildItems extends BaseResource
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
    public function listRecurringInvoicesSectionsCostCentersPrebuilds(
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
        return $this->connector->send(new ListRecurringInvoicesSectionsCostCentersPrebuilds($companyId, $recurringInvoiceId, $sectionId, $costCenterId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     */
    public function createRecurringInvoicesSectionsCostCentersPrebuilds(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $sectionId,
        mixed $costCenterId,
    ): Response {
        return $this->connector->send(new CreateRecurringInvoicesSectionsCostCentersPrebuilds($companyId, $recurringInvoiceId, $sectionId, $costCenterId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $prebuildId  A valid prebuild id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getRecurringInvoicesSectionsCostCentersPrebuild(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $prebuildId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetRecurringInvoicesSectionsCostCentersPrebuild($companyId, $recurringInvoiceId, $sectionId, $costCenterId, $prebuildId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $prebuildId  A valid prebuild id
     */
    public function deleteRecurringInvoicesSectionsCostCentersPrebuild(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $prebuildId,
    ): Response {
        return $this->connector->send(new DeleteRecurringInvoicesSectionsCostCentersPrebuild($companyId, $recurringInvoiceId, $sectionId, $costCenterId, $prebuildId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $prebuildId  A valid prebuild id
     */
    public function updateRecurringInvoicesSectionsCostCentersPrebuild(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $prebuildId,
    ): Response {
        return $this->connector->send(new UpdateRecurringInvoicesSectionsCostCentersPrebuild($companyId, $recurringInvoiceId, $sectionId, $costCenterId, $prebuildId));
    }
}
