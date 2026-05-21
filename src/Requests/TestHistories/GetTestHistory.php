<?php

namespace StevenGrant\SimproSdk\Requests\TestHistories;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getTestHistory
 */
class GetTestHistory extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/testHistories/{$this->testHistoryId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $testHistoryId  A valid test history id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $testHistoryId,
    ) {}
}
