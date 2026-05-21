<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceSections\CreateRecurringInvoicesSections;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceSections\DeleteRecurringInvoicesSection;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceSections\GetRecurringInvoiceSection;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceSections\GetRecurringInvoicesSection;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceSections\ListRecurringInvoiceSections;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceSections\ListRecurringInvoicesSections;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceSections\UpdateRecurringInvoicesSection;

class RecurringInvoiceSections extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listRecurringInvoiceSections(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListRecurringInvoiceSections($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceSectionId  A valid recurring invoice section id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getRecurringInvoiceSection(
        mixed $companyId,
        mixed $recurringInvoiceSectionId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetRecurringInvoiceSection($companyId, $recurringInvoiceSectionId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listRecurringInvoicesSections(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListRecurringInvoicesSections($companyId, $recurringInvoiceId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     */
    public function createRecurringInvoicesSections(mixed $companyId, mixed $recurringInvoiceId): Response
    {
        return $this->connector->send(new CreateRecurringInvoicesSections($companyId, $recurringInvoiceId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getRecurringInvoicesSection(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $sectionId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetRecurringInvoicesSection($companyId, $recurringInvoiceId, $sectionId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $sectionId  A valid section id
     */
    public function deleteRecurringInvoicesSection(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $sectionId,
    ): Response {
        return $this->connector->send(new DeleteRecurringInvoicesSection($companyId, $recurringInvoiceId, $sectionId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $sectionId  A valid section id
     */
    public function updateRecurringInvoicesSection(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $sectionId,
    ): Response {
        return $this->connector->send(new UpdateRecurringInvoicesSection($companyId, $recurringInvoiceId, $sectionId));
    }
}
