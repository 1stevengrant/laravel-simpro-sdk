<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\TestReadings\CreateSetupAssetTypesTestReadings;
use StevenGrant\SimproSdk\Requests\TestReadings\DeleteSetupAssetTypesTestReading;
use StevenGrant\SimproSdk\Requests\TestReadings\GetSetupAssetTypesTestReading;
use StevenGrant\SimproSdk\Requests\TestReadings\GetSetupAssetTypeTestReading;
use StevenGrant\SimproSdk\Requests\TestReadings\ListSetupAssetTypesTestReadings;
use StevenGrant\SimproSdk\Requests\TestReadings\ListSetupAssetTypeTestReadings;
use StevenGrant\SimproSdk\Requests\TestReadings\UpdateSetupAssetTypesTestReading;

class TestReadings extends BaseResource
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
    public function listSetupAssetTypeTestReadings(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupAssetTypeTestReadings($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeTestReadingId  A valid asset type test reading id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupAssetTypeTestReading(
        mixed $companyId,
        mixed $assetTypeTestReadingId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetSetupAssetTypeTestReading($companyId, $assetTypeTestReadingId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listSetupAssetTypesTestReadings(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupAssetTypesTestReadings($companyId, $assetTypeId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     */
    public function createSetupAssetTypesTestReadings(mixed $companyId, mixed $assetTypeId): Response
    {
        return $this->connector->send(new CreateSetupAssetTypesTestReadings($companyId, $assetTypeId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeTestReadingId  A valid asset type test reading id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupAssetTypesTestReading(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $assetTypeTestReadingId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetSetupAssetTypesTestReading($companyId, $assetTypeId, $assetTypeTestReadingId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeTestReadingId  A valid asset type test reading id
     */
    public function deleteSetupAssetTypesTestReading(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $assetTypeTestReadingId,
    ): Response {
        return $this->connector->send(new DeleteSetupAssetTypesTestReading($companyId, $assetTypeId, $assetTypeTestReadingId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeTestReadingId  A valid asset type test reading id
     */
    public function updateSetupAssetTypesTestReading(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $assetTypeTestReadingId,
    ): Response {
        return $this->connector->send(new UpdateSetupAssetTypesTestReading($companyId, $assetTypeId, $assetTypeTestReadingId));
    }
}
