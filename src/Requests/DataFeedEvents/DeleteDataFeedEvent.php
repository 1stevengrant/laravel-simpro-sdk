<?php

namespace StevenGrant\SimproSdk\Requests\DataFeedEvents;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteDataFeedEvent
 */
class DeleteDataFeedEvent extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/dataFeedEvents/{$this->dataFeedEventId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $dataFeedEventId  A valid data feed event id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $dataFeedEventId,
    ) {}
}
