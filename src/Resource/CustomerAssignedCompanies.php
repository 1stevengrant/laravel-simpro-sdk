<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CustomerAssignedCompanies\CreateCustomer;
use StevenGrant\SimproSdk\Requests\CustomerAssignedCompanies\DeleteCustomer2;
use StevenGrant\SimproSdk\Requests\CustomerAssignedCompanies\GetCustomer2;

class CustomerAssignedCompanies extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCustomer2(
        mixed $companyId,
        mixed $customerId,
        mixed $search = null,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetCustomer2($companyId, $customerId, $search, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     */
    public function createCustomer(mixed $companyId, mixed $customerId): Response
    {
        return $this->connector->send(new CreateCustomer($companyId, $customerId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $customerCompanyId  A valid customer company id
     */
    public function deleteCustomer2(mixed $companyId, mixed $customerId, mixed $customerCompanyId): Response
    {
        return $this->connector->send(new DeleteCustomer2($companyId, $customerId, $customerCompanyId));
    }
}
