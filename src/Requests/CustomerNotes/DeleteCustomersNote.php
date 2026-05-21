<?php

namespace StevenGrant\SimproSdk\Requests\CustomerNotes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCustomersNote
 */
class DeleteCustomersNote extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/customers/{$this->customerId}/notes/{$this->noteId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $noteId  A valid note id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $customerId,
        protected mixed $noteId,
    ) {}
}
