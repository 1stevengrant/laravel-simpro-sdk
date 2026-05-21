<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\ContractorInvoiceCustomFieldsSetup\CreateSetupCustomFieldsContractorInvoices;
use StevenGrant\SimproSdk\Requests\ContractorInvoiceCustomFieldsSetup\DeleteSetupCustomFieldsContractorInvoice;
use StevenGrant\SimproSdk\Requests\ContractorInvoiceCustomFieldsSetup\GetSetupCustomFieldsContractorInvoice;
use StevenGrant\SimproSdk\Requests\ContractorInvoiceCustomFieldsSetup\ListSetupCustomFieldsContractorInvoices;
use StevenGrant\SimproSdk\Requests\ContractorInvoiceCustomFieldsSetup\UpdateSetupCustomFieldsContractorInvoice;

class ContractorInvoiceCustomFieldsSetup extends BaseResource
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
    public function listSetupCustomFieldsContractorInvoices(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupCustomFieldsContractorInvoices($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createSetupCustomFieldsContractorInvoices(mixed $companyId): Response
    {
        return $this->connector->send(new CreateSetupCustomFieldsContractorInvoices($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorInvoiceId  A valid contractor invoice id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupCustomFieldsContractorInvoice(
        mixed $companyId,
        mixed $contractorInvoiceId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetSetupCustomFieldsContractorInvoice($companyId, $contractorInvoiceId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorInvoiceId  A valid contractor invoice id
     */
    public function deleteSetupCustomFieldsContractorInvoice(mixed $companyId, mixed $contractorInvoiceId): Response
    {
        return $this->connector->send(new DeleteSetupCustomFieldsContractorInvoice($companyId, $contractorInvoiceId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorInvoiceId  A valid contractor invoice id
     */
    public function updateSetupCustomFieldsContractorInvoice(mixed $companyId, mixed $contractorInvoiceId): Response
    {
        return $this->connector->send(new UpdateSetupCustomFieldsContractorInvoice($companyId, $contractorInvoiceId));
    }
}
