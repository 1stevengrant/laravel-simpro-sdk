<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\Prebuilds\CreatePrebuildsSetPrice;
use StevenGrant\SimproSdk\Requests\Prebuilds\CreatePrebuildsStandardPrice;
use StevenGrant\SimproSdk\Requests\Prebuilds\DeletePrebuildsSetPrice;
use StevenGrant\SimproSdk\Requests\Prebuilds\DeletePrebuildsStandardPrice;
use StevenGrant\SimproSdk\Requests\Prebuilds\GetPrebuildsSetPrice;
use StevenGrant\SimproSdk\Requests\Prebuilds\GetPrebuildsStandardPrice;
use StevenGrant\SimproSdk\Requests\Prebuilds\ListPrebuilds;
use StevenGrant\SimproSdk\Requests\Prebuilds\ListPrebuildsSetPrice;
use StevenGrant\SimproSdk\Requests\Prebuilds\ListPrebuildsStandardPrice;
use StevenGrant\SimproSdk\Requests\Prebuilds\UpdatePrebuildsSetPrice;
use StevenGrant\SimproSdk\Requests\Prebuilds\UpdatePrebuildsStandardPrice;

class Prebuilds extends BaseResource
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
     * @param  mixed  $searchText  Set a wildcard search text to filter prebuilds by name or part number.
     */
    public function listPrebuilds(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
        mixed $searchText = null,
    ): Response {
        return $this->connector->send(new ListPrebuilds($companyId, $search, $columns, $pageSize, $page, $orderby, $limit, $searchText));
    }

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
     * @param  mixed  $searchText  Set a wildcard search text to filter prebuilds by name or part number.
     */
    public function listPrebuildsSetPrice(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
        mixed $searchText = null,
    ): Response {
        return $this->connector->send(new ListPrebuildsSetPrice($companyId, $search, $columns, $pageSize, $page, $orderby, $limit, $searchText));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createPrebuildsSetPrice(mixed $companyId): Response
    {
        return $this->connector->send(new CreatePrebuildsSetPrice($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $setPricePrebuildId  A valid set price prebuild id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getPrebuildsSetPrice(mixed $companyId, mixed $setPricePrebuildId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetPrebuildsSetPrice($companyId, $setPricePrebuildId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $setPricePrebuildId  A valid set price prebuild id
     */
    public function deletePrebuildsSetPrice(mixed $companyId, mixed $setPricePrebuildId): Response
    {
        return $this->connector->send(new DeletePrebuildsSetPrice($companyId, $setPricePrebuildId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $setPricePrebuildId  A valid set price prebuild id
     */
    public function updatePrebuildsSetPrice(mixed $companyId, mixed $setPricePrebuildId): Response
    {
        return $this->connector->send(new UpdatePrebuildsSetPrice($companyId, $setPricePrebuildId));
    }

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
     * @param  mixed  $searchText  Set a wildcard search text to filter prebuilds by name or part number.
     */
    public function listPrebuildsStandardPrice(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
        mixed $searchText = null,
    ): Response {
        return $this->connector->send(new ListPrebuildsStandardPrice($companyId, $search, $columns, $pageSize, $page, $orderby, $limit, $searchText));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createPrebuildsStandardPrice(mixed $companyId): Response
    {
        return $this->connector->send(new CreatePrebuildsStandardPrice($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $standardPricePrebuildId  A valid standard price prebuild id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getPrebuildsStandardPrice(
        mixed $companyId,
        mixed $standardPricePrebuildId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetPrebuildsStandardPrice($companyId, $standardPricePrebuildId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $standardPricePrebuildId  A valid standard price prebuild id
     */
    public function deletePrebuildsStandardPrice(mixed $companyId, mixed $standardPricePrebuildId): Response
    {
        return $this->connector->send(new DeletePrebuildsStandardPrice($companyId, $standardPricePrebuildId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $standardPricePrebuildId  A valid standard price prebuild id
     */
    public function updatePrebuildsStandardPrice(mixed $companyId, mixed $standardPricePrebuildId): Response
    {
        return $this->connector->send(new UpdatePrebuildsStandardPrice($companyId, $standardPricePrebuildId));
    }
}
