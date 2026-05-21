<?php

namespace StevenGrant\SimproSdk\Requests\CompanyDefaultSettings;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listSetupDefaults
 */
class ListSetupDefaults extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/setup/defaults";
    }

    /**
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function __construct(
        protected mixed $columns = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['columns' => $this->columns]);
    }
}
