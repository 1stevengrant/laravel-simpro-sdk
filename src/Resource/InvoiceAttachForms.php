<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\InvoiceAttachForms\CreateInvoicesAttachForm;

class InvoiceAttachForms extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $invoiceId  A valid invoice id
     */
    public function createInvoicesAttachForm(mixed $companyId, mixed $invoiceId): Response
    {
        return $this->connector->send(new CreateInvoicesAttachForm($companyId, $invoiceId));
    }
}
