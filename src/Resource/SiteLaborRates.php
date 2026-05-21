<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\SiteLaborRates\CreateSitesLaborRates;
use StevenGrant\SimproSdk\Requests\SiteLaborRates\DeleteSitesLaborRate;
use StevenGrant\SimproSdk\Requests\SiteLaborRates\GetSitesLaborRate;
use StevenGrant\SimproSdk\Requests\SiteLaborRates\ListSitesLaborRates;
use StevenGrant\SimproSdk\Requests\SiteLaborRates\UpdateSitesLaborRate;

class SiteLaborRates extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listSitesLaborRates(
        mixed $companyId,
        mixed $siteId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSitesLaborRates($companyId, $siteId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     */
    public function createSitesLaborRates(mixed $companyId, mixed $siteId): Response
    {
        return $this->connector->send(new CreateSitesLaborRates($companyId, $siteId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $laborRateId  A valid labor rate id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSitesLaborRate(
        mixed $companyId,
        mixed $siteId,
        mixed $laborRateId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetSitesLaborRate($companyId, $siteId, $laborRateId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $laborRateId  A valid labor rate id
     */
    public function deleteSitesLaborRate(mixed $companyId, mixed $siteId, mixed $laborRateId): Response
    {
        return $this->connector->send(new DeleteSitesLaborRate($companyId, $siteId, $laborRateId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $laborRateId  A valid labor rate id
     */
    public function updateSitesLaborRate(mixed $companyId, mixed $siteId, mixed $laborRateId): Response
    {
        return $this->connector->send(new UpdateSitesLaborRate($companyId, $siteId, $laborRateId));
    }
}
