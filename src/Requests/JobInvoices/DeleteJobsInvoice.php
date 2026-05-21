<?php

namespace StevenGrant\SimproSdk\Requests\JobInvoices;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteJobsInvoice
 */
class DeleteJobsInvoice extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/jobs/{$this->jobId}/invoices/{$this->invoiceId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $invoiceId  A valid invoice id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $jobId,
        protected mixed $invoiceId,
    ) {}
}
