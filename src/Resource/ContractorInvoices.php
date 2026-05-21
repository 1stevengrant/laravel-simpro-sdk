<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\ContractorInvoices\CreateContractorInvoices;
use StevenGrant\SimproSdk\Requests\ContractorInvoices\DeleteContractorInvoice;
use StevenGrant\SimproSdk\Requests\ContractorInvoices\GetContractorInvoice;
use StevenGrant\SimproSdk\Requests\ContractorInvoices\ListContractorInvoices;
use StevenGrant\SimproSdk\Requests\ContractorInvoices\UpdateContractorInvoice;

class ContractorInvoices extends BaseResource
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
    public function listContractorInvoices(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListContractorInvoices($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createContractorInvoices(mixed $companyId): Response
    {
        return $this->connector->send(new CreateContractorInvoices($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorInvoiceId  A valid contractor invoice id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getContractorInvoice(mixed $companyId, mixed $contractorInvoiceId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetContractorInvoice($companyId, $contractorInvoiceId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorInvoiceId  A valid contractor invoice id
     */
    public function deleteContractorInvoice(mixed $companyId, mixed $contractorInvoiceId): Response
    {
        return $this->connector->send(new DeleteContractorInvoice($companyId, $contractorInvoiceId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorInvoiceId  A valid contractor invoice id
     */
    public function updateContractorInvoice(mixed $companyId, mixed $contractorInvoiceId): Response
    {
        return $this->connector->send(new UpdateContractorInvoice($companyId, $contractorInvoiceId));
    }
}
