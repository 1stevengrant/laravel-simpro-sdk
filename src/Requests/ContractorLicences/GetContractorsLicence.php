<?php

namespace StevenGrant\SimproSdk\Requests\ContractorLicences;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getContractorsLicence
 */
class GetContractorsLicence extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/contractors/{$this->contractorId}/licences/{$this->licenceId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     * @param  mixed  $licenceId  A valid licence id
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $contractorId,
        protected mixed $licenceId,
        protected mixed $columns = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['columns' => $this->columns]);
    }
}
