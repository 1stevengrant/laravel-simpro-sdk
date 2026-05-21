<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\PaymentMethods\CreateSetupAccountsPaymentMethods;
use StevenGrant\SimproSdk\Requests\PaymentMethods\DeleteSetupAccountsPaymentMethod;
use StevenGrant\SimproSdk\Requests\PaymentMethods\GetSetupAccountsPaymentMethod;
use StevenGrant\SimproSdk\Requests\PaymentMethods\ListSetupAccountsPaymentMethods;
use StevenGrant\SimproSdk\Requests\PaymentMethods\UpdateSetupAccountsPaymentMethod;

class PaymentMethods extends BaseResource
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
    public function listSetupAccountsPaymentMethods(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupAccountsPaymentMethods($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createSetupAccountsPaymentMethods(mixed $companyId): Response
    {
        return $this->connector->send(new CreateSetupAccountsPaymentMethods($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $paymentMethodId  A valid payment method id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupAccountsPaymentMethod(
        mixed $companyId,
        mixed $paymentMethodId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetSetupAccountsPaymentMethod($companyId, $paymentMethodId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $paymentMethodId  A valid payment method id
     */
    public function deleteSetupAccountsPaymentMethod(mixed $companyId, mixed $paymentMethodId): Response
    {
        return $this->connector->send(new DeleteSetupAccountsPaymentMethod($companyId, $paymentMethodId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $paymentMethodId  A valid payment method id
     */
    public function updateSetupAccountsPaymentMethod(mixed $companyId, mixed $paymentMethodId): Response
    {
        return $this->connector->send(new UpdateSetupAccountsPaymentMethod($companyId, $paymentMethodId));
    }
}
