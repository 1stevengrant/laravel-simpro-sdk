<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CustomerTags\CreateSetupTagsCustomers;
use StevenGrant\SimproSdk\Requests\CustomerTags\DeleteSetupTagsCustomer;
use StevenGrant\SimproSdk\Requests\CustomerTags\GetSetupTagsCustomer;
use StevenGrant\SimproSdk\Requests\CustomerTags\ListSetupTagsCustomers;
use StevenGrant\SimproSdk\Requests\CustomerTags\UpdateSetupTagsCustomer;

class CustomerTags extends BaseResource
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
    public function listSetupTagsCustomers(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupTagsCustomers($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createSetupTagsCustomers(mixed $companyId): Response
    {
        return $this->connector->send(new CreateSetupTagsCustomers($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerTagId  A valid customer tag id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupTagsCustomer(mixed $companyId, mixed $customerTagId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetSetupTagsCustomer($companyId, $customerTagId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerTagId  A valid customer tag id
     */
    public function deleteSetupTagsCustomer(mixed $companyId, mixed $customerTagId): Response
    {
        return $this->connector->send(new DeleteSetupTagsCustomer($companyId, $customerTagId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerTagId  A valid customer tag id
     */
    public function updateSetupTagsCustomer(mixed $companyId, mixed $customerTagId): Response
    {
        return $this->connector->send(new UpdateSetupTagsCustomer($companyId, $customerTagId));
    }
}
