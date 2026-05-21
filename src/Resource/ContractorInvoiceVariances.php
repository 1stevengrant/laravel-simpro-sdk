<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\ContractorInvoiceVariances\CreateContractorInvoicesContractorVariances;
use StevenGrant\SimproSdk\Requests\ContractorInvoiceVariances\DeleteContractorInvoicesVariance;

class ContractorInvoiceVariances extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorInvoiceId  A valid contractor invoice id
     */
    public function createContractorInvoicesContractorVariances(mixed $companyId, mixed $contractorInvoiceId): Response
    {
        return $this->connector->send(new CreateContractorInvoicesContractorVariances($companyId, $contractorInvoiceId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorInvoiceId  A valid contractor invoice id
     * @param  mixed  $varianceId  A valid variance id
     */
    public function deleteContractorInvoicesVariance(
        mixed $companyId,
        mixed $contractorInvoiceId,
        mixed $varianceId,
    ): Response {
        return $this->connector->send(new DeleteContractorInvoicesVariance($companyId, $contractorInvoiceId, $varianceId));
    }
}
