<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\InvoiceCustomFieldsSetup\CreateSetupCustomFieldsInvoices;
use StevenGrant\SimproSdk\Requests\InvoiceCustomFieldsSetup\DeleteSetupCustomFieldsInvoice;
use StevenGrant\SimproSdk\Requests\InvoiceCustomFieldsSetup\GetSetupCustomFieldsInvoice;
use StevenGrant\SimproSdk\Requests\InvoiceCustomFieldsSetup\ListSetupCustomFieldsInvoices;
use StevenGrant\SimproSdk\Requests\InvoiceCustomFieldsSetup\UpdateSetupCustomFieldsInvoice;

class InvoiceCustomFieldsSetup extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listSetupCustomFieldsInvoices(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupCustomFieldsInvoices($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createSetupCustomFieldsInvoices(mixed $companyId): Response
    {
        return $this->connector->send(new CreateSetupCustomFieldsInvoices($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customFieldId  A valid custom field id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupCustomFieldsInvoice(mixed $companyId, mixed $customFieldId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetSetupCustomFieldsInvoice($companyId, $customFieldId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customFieldId  A valid custom field id
     */
    public function deleteSetupCustomFieldsInvoice(mixed $companyId, mixed $customFieldId): Response
    {
        return $this->connector->send(new DeleteSetupCustomFieldsInvoice($companyId, $customFieldId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customFieldId  A valid custom field id
     */
    public function updateSetupCustomFieldsInvoice(mixed $companyId, mixed $customFieldId): Response
    {
        return $this->connector->send(new UpdateSetupCustomFieldsInvoice($companyId, $customFieldId));
    }
}
