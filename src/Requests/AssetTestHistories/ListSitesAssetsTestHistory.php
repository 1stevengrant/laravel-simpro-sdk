<?php

namespace StevenGrant\SimproSdk\Requests\AssetTestHistories;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listSitesAssetsTestHistory
 */
class ListSitesAssetsTestHistory extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/sites/{$this->siteId}/assets/{$this->assetId}/testHistory";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $assetId  A valid asset id
     * @param  null|mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  null|mixed  $page  Set the page number on paginated request
     * @param  null|mixed  $limit  Set the limit of number of records in a request
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $siteId,
        protected mixed $assetId,
        protected mixed $pageSize = null,
        protected mixed $page = null,
        protected mixed $limit = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['pageSize' => $this->pageSize, 'page' => $this->page, 'limit' => $this->limit]);
    }
}
