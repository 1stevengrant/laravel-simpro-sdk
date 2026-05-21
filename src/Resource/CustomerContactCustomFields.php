<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CustomerContactCustomFields\GetCustomersContactsCustomField;
use StevenGrant\SimproSdk\Requests\CustomerContactCustomFields\ListCustomersContactsCustomFields;
use StevenGrant\SimproSdk\Requests\CustomerContactCustomFields\UpdateCustomersContactsCustomField;

class CustomerContactCustomFields extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $contactId  A valid contact id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listCustomersContactsCustomFields(
        mixed $companyId,
        mixed $customerId,
        mixed $contactId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListCustomersContactsCustomFields($companyId, $customerId, $contactId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $contactId  A valid contact id
     * @param  mixed  $customFieldId  A valid custom field id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCustomersContactsCustomField(
        mixed $companyId,
        mixed $customerId,
        mixed $contactId,
        mixed $customFieldId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetCustomersContactsCustomField($companyId, $customerId, $contactId, $customFieldId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $contactId  A valid contact id
     * @param  mixed  $customFieldId  A valid custom field id
     */
    public function updateCustomersContactsCustomField(
        mixed $companyId,
        mixed $customerId,
        mixed $contactId,
        mixed $customFieldId,
    ): Response {
        return $this->connector->send(new UpdateCustomersContactsCustomField($companyId, $customerId, $contactId, $customFieldId));
    }
}
