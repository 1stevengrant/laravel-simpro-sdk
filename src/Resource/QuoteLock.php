<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\QuoteLock\CreateQuotesLock;
use StevenGrant\SimproSdk\Requests\QuoteLock\DeleteQuotesLock;

class QuoteLock extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $quoteId  A valid quote id
     */
    public function createQuotesLock(mixed $companyId, mixed $quoteId): Response
    {
        return $this->connector->send(new CreateQuotesLock($companyId, $quoteId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $quoteId  A valid quote id
     */
    public function deleteQuotesLock(mixed $companyId, mixed $quoteId): Response
    {
        return $this->connector->send(new DeleteQuotesLock($companyId, $quoteId));
    }
}
