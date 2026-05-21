<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\TakeOffTemplateLock\CreateTakeOffTemplatesLock;
use StevenGrant\SimproSdk\Requests\TakeOffTemplateLock\DeleteTakeOffTemplatesLock;

class TakeOffTemplateLock extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $takeOffTemplateId  A valid take off template id
     */
    public function createTakeOffTemplatesLock(mixed $companyId, mixed $takeOffTemplateId): Response
    {
        return $this->connector->send(new CreateTakeOffTemplatesLock($companyId, $takeOffTemplateId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $takeOffTemplateId  A valid take off template id
     */
    public function deleteTakeOffTemplatesLock(mixed $companyId, mixed $takeOffTemplateId): Response
    {
        return $this->connector->send(new DeleteTakeOffTemplatesLock($companyId, $takeOffTemplateId));
    }
}
