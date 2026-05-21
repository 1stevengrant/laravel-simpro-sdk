<?php

namespace StevenGrant\SimproSdk\Requests\ResponseTimes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteSetupResponseTime
 */
class DeleteSetupResponseTime extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/setup/responseTimes/{$this->responseTimeId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $responseTimeId  A valid response time id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $responseTimeId,
    ) {}
}
