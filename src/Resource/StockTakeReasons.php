<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\StockTakeReasons\CreateSetupMaterialsStockTakeReasons;
use StevenGrant\SimproSdk\Requests\StockTakeReasons\DeleteSetupMaterialsStockTakeReason;
use StevenGrant\SimproSdk\Requests\StockTakeReasons\GetSetupMaterialsStockTakeReason;
use StevenGrant\SimproSdk\Requests\StockTakeReasons\ListSetupMaterialsStockTakeReasons;
use StevenGrant\SimproSdk\Requests\StockTakeReasons\UpdateSetupMaterialsStockTakeReason;

class StockTakeReasons extends BaseResource
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
    public function listSetupMaterialsStockTakeReasons(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupMaterialsStockTakeReasons($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createSetupMaterialsStockTakeReasons(mixed $companyId): Response
    {
        return $this->connector->send(new CreateSetupMaterialsStockTakeReasons($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $optionId  A valid option id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupMaterialsStockTakeReason(mixed $companyId, mixed $optionId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetSetupMaterialsStockTakeReason($companyId, $optionId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $optionId  A valid option id
     */
    public function deleteSetupMaterialsStockTakeReason(mixed $companyId, mixed $optionId): Response
    {
        return $this->connector->send(new DeleteSetupMaterialsStockTakeReason($companyId, $optionId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $optionId  A valid option id
     */
    public function updateSetupMaterialsStockTakeReason(mixed $companyId, mixed $optionId): Response
    {
        return $this->connector->send(new UpdateSetupMaterialsStockTakeReason($companyId, $optionId));
    }
}
