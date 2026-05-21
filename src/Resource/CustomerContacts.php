<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CustomerContacts\CreateCustomersContacts;
use StevenGrant\SimproSdk\Requests\CustomerContacts\DeleteCustomersContact;
use StevenGrant\SimproSdk\Requests\CustomerContacts\GetCustomersContact;
use StevenGrant\SimproSdk\Requests\CustomerContacts\ListCustomersContacts;
use StevenGrant\SimproSdk\Requests\CustomerContacts\UpdateCustomersContact;

class CustomerContacts extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listCustomersContacts(
        mixed $companyId,
        mixed $customerId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListCustomersContacts($companyId, $customerId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     */
    public function createCustomersContacts(mixed $companyId, mixed $customerId): Response
    {
        return $this->connector->send(new CreateCustomersContacts($companyId, $customerId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $contactId  A valid contact id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCustomersContact(
        mixed $companyId,
        mixed $customerId,
        mixed $contactId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetCustomersContact($companyId, $customerId, $contactId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $contactId  A valid contact id
     */
    public function deleteCustomersContact(mixed $companyId, mixed $customerId, mixed $contactId): Response
    {
        return $this->connector->send(new DeleteCustomersContact($companyId, $customerId, $contactId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $contactId  A valid contact id
     */
    public function updateCustomersContact(mixed $companyId, mixed $customerId, mixed $contactId): Response
    {
        return $this->connector->send(new UpdateCustomersContact($companyId, $customerId, $contactId));
    }
}
