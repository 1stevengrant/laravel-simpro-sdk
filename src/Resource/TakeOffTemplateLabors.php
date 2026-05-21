<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\TakeOffTemplateLabors\CreateTakeOffTemplatesLabor;
use StevenGrant\SimproSdk\Requests\TakeOffTemplateLabors\DeleteTakeOffTemplatesLabor;
use StevenGrant\SimproSdk\Requests\TakeOffTemplateLabors\GetTakeOffTemplatesLabor;
use StevenGrant\SimproSdk\Requests\TakeOffTemplateLabors\ListTakeOffTemplatesLabor;
use StevenGrant\SimproSdk\Requests\TakeOffTemplateLabors\UpdateTakeOffTemplatesLabor;

class TakeOffTemplateLabors extends BaseResource
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
    public function listTakeOffTemplatesLabor(
        mixed $companyId,
        mixed $takeOffTemplateId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListTakeOffTemplatesLabor($companyId, $takeOffTemplateId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $takeOffTemplateId  A valid take off template id
     */
    public function createTakeOffTemplatesLabor(mixed $companyId, mixed $takeOffTemplateId): Response
    {
        return $this->connector->send(new CreateTakeOffTemplatesLabor($companyId, $takeOffTemplateId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $takeOffTemplateId  A valid take off template id
     * @param  mixed  $laborId  A valid labor id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getTakeOffTemplatesLabor(
        mixed $companyId,
        mixed $takeOffTemplateId,
        mixed $laborId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetTakeOffTemplatesLabor($companyId, $takeOffTemplateId, $laborId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $takeOffTemplateId  A valid take off template id
     * @param  mixed  $laborId  A valid labor id
     */
    public function deleteTakeOffTemplatesLabor(mixed $companyId, mixed $takeOffTemplateId, mixed $laborId): Response
    {
        return $this->connector->send(new DeleteTakeOffTemplatesLabor($companyId, $takeOffTemplateId, $laborId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $takeOffTemplateId  A valid take off template id
     * @param  mixed  $laborId  A valid labor id
     */
    public function updateTakeOffTemplatesLabor(mixed $companyId, mixed $takeOffTemplateId, mixed $laborId): Response
    {
        return $this->connector->send(new UpdateTakeOffTemplatesLabor($companyId, $takeOffTemplateId, $laborId));
    }
}
