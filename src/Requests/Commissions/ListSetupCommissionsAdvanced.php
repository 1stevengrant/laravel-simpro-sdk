<?php

namespace StevenGrant\SimproSdk\Requests\Commissions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listSetupCommissionsAdvanced
 */
class ListSetupCommissionsAdvanced extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/setup/commissions/advanced";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $commissionType  A valid commission type
     * @param  null|mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  null|mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  null|mixed  $page  Set the page number on paginated request
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $commissionType,
        protected mixed $search = null,
        protected mixed $columns = null,
        protected mixed $pageSize = null,
        protected mixed $page = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['search' => $this->search, 'columns' => $this->columns, 'pageSize' => $this->pageSize, 'page' => $this->page]);
    }
}
