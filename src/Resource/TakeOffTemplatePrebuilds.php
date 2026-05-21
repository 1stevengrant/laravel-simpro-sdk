<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\TakeOffTemplatePrebuilds\CreateTakeOffTemplatesPrebuilds;
use StevenGrant\SimproSdk\Requests\TakeOffTemplatePrebuilds\DeleteTakeOffTemplatesPrebuild;
use StevenGrant\SimproSdk\Requests\TakeOffTemplatePrebuilds\GetTakeOffTemplatesPrebuild;
use StevenGrant\SimproSdk\Requests\TakeOffTemplatePrebuilds\ListTakeOffTemplatesPrebuilds;
use StevenGrant\SimproSdk\Requests\TakeOffTemplatePrebuilds\UpdateTakeOffTemplatesPrebuild;

class TakeOffTemplatePrebuilds extends BaseResource
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
    public function listTakeOffTemplatesPrebuilds(
        mixed $companyId,
        mixed $takeOffTemplateId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListTakeOffTemplatesPrebuilds($companyId, $takeOffTemplateId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $takeOffTemplateId  A valid take off template id
     */
    public function createTakeOffTemplatesPrebuilds(mixed $companyId, mixed $takeOffTemplateId): Response
    {
        return $this->connector->send(new CreateTakeOffTemplatesPrebuilds($companyId, $takeOffTemplateId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $takeOffTemplateId  A valid take off template id
     * @param  mixed  $prebuildsId  A valid prebuilds id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getTakeOffTemplatesPrebuild(
        mixed $companyId,
        mixed $takeOffTemplateId,
        mixed $prebuildsId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetTakeOffTemplatesPrebuild($companyId, $takeOffTemplateId, $prebuildsId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $takeOffTemplateId  A valid take off template id
     * @param  mixed  $prebuildsId  A valid prebuilds id
     */
    public function deleteTakeOffTemplatesPrebuild(
        mixed $companyId,
        mixed $takeOffTemplateId,
        mixed $prebuildsId,
    ): Response {
        return $this->connector->send(new DeleteTakeOffTemplatesPrebuild($companyId, $takeOffTemplateId, $prebuildsId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $takeOffTemplateId  A valid take off template id
     * @param  mixed  $prebuildsId  A valid prebuilds id
     */
    public function updateTakeOffTemplatesPrebuild(
        mixed $companyId,
        mixed $takeOffTemplateId,
        mixed $prebuildsId,
    ): Response {
        return $this->connector->send(new UpdateTakeOffTemplatesPrebuild($companyId, $takeOffTemplateId, $prebuildsId));
    }
}
