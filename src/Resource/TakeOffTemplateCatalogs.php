<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\TakeOffTemplateCatalogs\CreateTakeOffTemplatesCatalogs;
use StevenGrant\SimproSdk\Requests\TakeOffTemplateCatalogs\DeleteTakeOffTemplatesCatalog;
use StevenGrant\SimproSdk\Requests\TakeOffTemplateCatalogs\GetTakeOffTemplatesCatalog;
use StevenGrant\SimproSdk\Requests\TakeOffTemplateCatalogs\ListTakeOffTemplatesCatalogs;
use StevenGrant\SimproSdk\Requests\TakeOffTemplateCatalogs\UpdateTakeOffTemplatesCatalog;

class TakeOffTemplateCatalogs extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $takeOffTemplateId  A valid take off template id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listTakeOffTemplatesCatalogs(
        mixed $companyId,
        mixed $takeOffTemplateId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListTakeOffTemplatesCatalogs($companyId, $takeOffTemplateId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $takeOffTemplateId  A valid take off template id
     */
    public function createTakeOffTemplatesCatalogs(mixed $companyId, mixed $takeOffTemplateId): Response
    {
        return $this->connector->send(new CreateTakeOffTemplatesCatalogs($companyId, $takeOffTemplateId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $takeOffTemplateId  A valid take off template id
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getTakeOffTemplatesCatalog(
        mixed $companyId,
        mixed $takeOffTemplateId,
        mixed $catalogId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetTakeOffTemplatesCatalog($companyId, $takeOffTemplateId, $catalogId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $takeOffTemplateId  A valid take off template id
     * @param  mixed  $catalogId  A valid catalog id
     */
    public function deleteTakeOffTemplatesCatalog(mixed $companyId, mixed $takeOffTemplateId, mixed $catalogId): Response
    {
        return $this->connector->send(new DeleteTakeOffTemplatesCatalog($companyId, $takeOffTemplateId, $catalogId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $takeOffTemplateId  A valid take off template id
     * @param  mixed  $catalogId  A valid catalog id
     */
    public function updateTakeOffTemplatesCatalog(mixed $companyId, mixed $takeOffTemplateId, mixed $catalogId): Response
    {
        return $this->connector->send(new UpdateTakeOffTemplatesCatalog($companyId, $takeOffTemplateId, $catalogId));
    }
}
