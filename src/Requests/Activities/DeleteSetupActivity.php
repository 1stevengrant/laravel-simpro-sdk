<?php

namespace StevenGrant\SimproSdk\Requests\Activities;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteSetupActivity
 */
class DeleteSetupActivity extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/setup/activities/{$this->activityId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $activityId  A valid activity id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $activityId,
    ) {}
}
