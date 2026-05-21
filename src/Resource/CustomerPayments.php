<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CustomerPayments\CreateCustomerPayments;
use StevenGrant\SimproSdk\Requests\CustomerPayments\DeleteCustomerPayment;
use StevenGrant\SimproSdk\Requests\CustomerPayments\GetCustomerPayment;
use StevenGrant\SimproSdk\Requests\CustomerPayments\ListCustomerPayments;
use StevenGrant\SimproSdk\Requests\CustomerPayments\UpdateCustomerPayment;

class CustomerPayments extends BaseResource
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
    public function listCustomerPayments(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListCustomerPayments($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createCustomerPayments(mixed $companyId): Response
    {
        return $this->connector->send(new CreateCustomerPayments($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerPaymentId  A valid customer payment id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCustomerPayment(mixed $companyId, mixed $customerPaymentId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetCustomerPayment($companyId, $customerPaymentId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerPaymentId  A valid customer payment id
     */
    public function deleteCustomerPayment(mixed $companyId, mixed $customerPaymentId): Response
    {
        return $this->connector->send(new DeleteCustomerPayment($companyId, $customerPaymentId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerPaymentId  A valid customer payment id
     */
    public function updateCustomerPayment(mixed $companyId, mixed $customerPaymentId): Response
    {
        return $this->connector->send(new UpdateCustomerPayment($companyId, $customerPaymentId));
    }
}
