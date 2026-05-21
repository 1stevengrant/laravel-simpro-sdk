<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CombineTaxCodes\CreateSetupAccountsTaxCodesCombines;
use StevenGrant\SimproSdk\Requests\CombineTaxCodes\DeleteSetupAccountsTaxCodesCombine;
use StevenGrant\SimproSdk\Requests\CombineTaxCodes\GetSetupAccountsTaxCodesCombine;
use StevenGrant\SimproSdk\Requests\CombineTaxCodes\ListSetupAccountsTaxCodesCombines;
use StevenGrant\SimproSdk\Requests\CombineTaxCodes\UpdateSetupAccountsTaxCodesCombine;

class CombineTaxCodes extends BaseResource
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
    public function listSetupAccountsTaxCodesCombines(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupAccountsTaxCodesCombines($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createSetupAccountsTaxCodesCombines(mixed $companyId): Response
    {
        return $this->connector->send(new CreateSetupAccountsTaxCodesCombines($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $combineTaxCodeId  A valid combine tax code id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupAccountsTaxCodesCombine(
        mixed $companyId,
        mixed $combineTaxCodeId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetSetupAccountsTaxCodesCombine($companyId, $combineTaxCodeId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $combineTaxCodeId  A valid combine tax code id
     */
    public function deleteSetupAccountsTaxCodesCombine(mixed $companyId, mixed $combineTaxCodeId): Response
    {
        return $this->connector->send(new DeleteSetupAccountsTaxCodesCombine($companyId, $combineTaxCodeId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $combineTaxCodeId  A valid combine tax code id
     */
    public function updateSetupAccountsTaxCodesCombine(mixed $companyId, mixed $combineTaxCodeId): Response
    {
        return $this->connector->send(new UpdateSetupAccountsTaxCodesCombine($companyId, $combineTaxCodeId));
    }
}
