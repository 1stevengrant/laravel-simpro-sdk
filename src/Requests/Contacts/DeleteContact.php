<?php

namespace StevenGrant\SimproSdk\Requests\Contacts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteContact
 */
class DeleteContact extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/contacts/{$this->contactId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contactId  A valid contact id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $contactId,
    ) {}
}
