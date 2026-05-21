<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\WebhookSubscriptions\CreateSetupWebhooks;
use StevenGrant\SimproSdk\Requests\WebhookSubscriptions\DeleteSetupWebhook;
use StevenGrant\SimproSdk\Requests\WebhookSubscriptions\GetSetupWebhook;
use StevenGrant\SimproSdk\Requests\WebhookSubscriptions\ListSetupWebhooks;
use StevenGrant\SimproSdk\Requests\WebhookSubscriptions\UpdateSetupWebhook;

class WebhookSubscriptions extends BaseResource
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
    public function listSetupWebhooks(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupWebhooks($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createSetupWebhooks(mixed $companyId): Response
    {
        return $this->connector->send(new CreateSetupWebhooks($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $webhookId  A valid webhook id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupWebhook(mixed $companyId, mixed $webhookId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetSetupWebhook($companyId, $webhookId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $webhookId  A valid webhook id
     */
    public function deleteSetupWebhook(mixed $companyId, mixed $webhookId): Response
    {
        return $this->connector->send(new DeleteSetupWebhook($companyId, $webhookId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $webhookId  A valid webhook id
     */
    public function updateSetupWebhook(mixed $companyId, mixed $webhookId): Response
    {
        return $this->connector->send(new UpdateSetupWebhook($companyId, $webhookId));
    }
}
