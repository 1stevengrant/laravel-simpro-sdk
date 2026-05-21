<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\ChartOfAccounts\CreateSetupAccountsChartOfAccounts;
use StevenGrant\SimproSdk\Requests\ChartOfAccounts\DeleteSetupAccountsChartOfAccount;
use StevenGrant\SimproSdk\Requests\ChartOfAccounts\GetSetupAccountsChartOfAccount;
use StevenGrant\SimproSdk\Requests\ChartOfAccounts\ListSetupAccountsChartOfAccounts;
use StevenGrant\SimproSdk\Requests\ChartOfAccounts\UpdateSetupAccountsChartOfAccount;

class ChartOfAccounts extends BaseResource
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
    public function listSetupAccountsChartOfAccounts(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupAccountsChartOfAccounts($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createSetupAccountsChartOfAccounts(mixed $companyId): Response
    {
        return $this->connector->send(new CreateSetupAccountsChartOfAccounts($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $accountId  A valid account id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupAccountsChartOfAccount(mixed $companyId, mixed $accountId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetSetupAccountsChartOfAccount($companyId, $accountId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $accountId  A valid account id
     */
    public function deleteSetupAccountsChartOfAccount(mixed $companyId, mixed $accountId): Response
    {
        return $this->connector->send(new DeleteSetupAccountsChartOfAccount($companyId, $accountId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $accountId  A valid account id
     */
    public function updateSetupAccountsChartOfAccount(mixed $companyId, mixed $accountId): Response
    {
        return $this->connector->send(new UpdateSetupAccountsChartOfAccount($companyId, $accountId));
    }
}
