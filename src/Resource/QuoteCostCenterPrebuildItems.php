<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\QuoteCostCenterPrebuildItems\CreateQuotesSectionsCostCentersPrebuilds;
use StevenGrant\SimproSdk\Requests\QuoteCostCenterPrebuildItems\DeleteQuotesSectionsCostCentersPrebuild;
use StevenGrant\SimproSdk\Requests\QuoteCostCenterPrebuildItems\GetQuotesSectionsCostCentersPrebuild;
use StevenGrant\SimproSdk\Requests\QuoteCostCenterPrebuildItems\ListQuotesSectionsCostCentersPrebuilds;
use StevenGrant\SimproSdk\Requests\QuoteCostCenterPrebuildItems\ReplaceQuotesSectionsCostCentersPrebuilds;
use StevenGrant\SimproSdk\Requests\QuoteCostCenterPrebuildItems\UpdateQuotesSectionsCostCentersPrebuild;

class QuoteCostCenterPrebuildItems extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $quoteId  A valid quote id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listQuotesSectionsCostCentersPrebuilds(
        mixed $companyId,
        mixed $quoteId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListQuotesSectionsCostCentersPrebuilds($companyId, $quoteId, $sectionId, $costCenterId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $quoteId  A valid quote id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     */
    public function replaceQuotesSectionsCostCentersPrebuilds(
        mixed $companyId,
        mixed $quoteId,
        mixed $sectionId,
        mixed $costCenterId,
    ): Response {
        return $this->connector->send(new ReplaceQuotesSectionsCostCentersPrebuilds($companyId, $quoteId, $sectionId, $costCenterId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $quoteId  A valid quote id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     */
    public function createQuotesSectionsCostCentersPrebuilds(
        mixed $companyId,
        mixed $quoteId,
        mixed $sectionId,
        mixed $costCenterId,
    ): Response {
        return $this->connector->send(new CreateQuotesSectionsCostCentersPrebuilds($companyId, $quoteId, $sectionId, $costCenterId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $quoteId  A valid quote id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $prebuildId  A valid prebuild id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getQuotesSectionsCostCentersPrebuild(
        mixed $companyId,
        mixed $quoteId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $prebuildId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetQuotesSectionsCostCentersPrebuild($companyId, $quoteId, $sectionId, $costCenterId, $prebuildId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $quoteId  A valid quote id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $prebuildId  A valid prebuild id
     */
    public function deleteQuotesSectionsCostCentersPrebuild(
        mixed $companyId,
        mixed $quoteId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $prebuildId,
    ): Response {
        return $this->connector->send(new DeleteQuotesSectionsCostCentersPrebuild($companyId, $quoteId, $sectionId, $costCenterId, $prebuildId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $quoteId  A valid quote id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $prebuildId  A valid prebuild id
     */
    public function updateQuotesSectionsCostCentersPrebuild(
        mixed $companyId,
        mixed $quoteId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $prebuildId,
    ): Response {
        return $this->connector->send(new UpdateQuotesSectionsCostCentersPrebuild($companyId, $quoteId, $sectionId, $costCenterId, $prebuildId));
    }
}
