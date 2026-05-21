<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\AccountingCategories\CreateSetupAccountsAccCategories;
use StevenGrant\SimproSdk\Requests\AccountingCategories\DeleteSetupAccountsAccCategory;
use StevenGrant\SimproSdk\Requests\AccountingCategories\GetSetupAccountsAccCategory;
use StevenGrant\SimproSdk\Requests\AccountingCategories\ListSetupAccountsAccCategories;
use StevenGrant\SimproSdk\Requests\AccountingCategories\UpdateSetupAccountsAccCategory;

class AccountingCategories extends BaseResource
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
    public function listSetupAccountsAccCategories(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupAccountsAccCategories($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createSetupAccountsAccCategories(mixed $companyId): Response
    {
        return $this->connector->send(new CreateSetupAccountsAccCategories($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $accCategoryId  A valid acc category id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupAccountsAccCategory(mixed $companyId, mixed $accCategoryId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetSetupAccountsAccCategory($companyId, $accCategoryId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $accCategoryId  A valid acc category id
     */
    public function deleteSetupAccountsAccCategory(mixed $companyId, mixed $accCategoryId): Response
    {
        return $this->connector->send(new DeleteSetupAccountsAccCategory($companyId, $accCategoryId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $accCategoryId  A valid acc category id
     */
    public function updateSetupAccountsAccCategory(mixed $companyId, mixed $accCategoryId): Response
    {
        return $this->connector->send(new UpdateSetupAccountsAccCategory($companyId, $accCategoryId));
    }
}
