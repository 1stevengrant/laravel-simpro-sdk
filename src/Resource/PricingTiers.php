<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\PricingTiers\CreateSetupMaterialsPricingTiers;
use StevenGrant\SimproSdk\Requests\PricingTiers\DeleteSetupMaterialsPricingTier;
use StevenGrant\SimproSdk\Requests\PricingTiers\GetSetupMaterialsPricingTier;
use StevenGrant\SimproSdk\Requests\PricingTiers\ListSetupMaterialsPricingTiers;
use StevenGrant\SimproSdk\Requests\PricingTiers\UpdateSetupMaterialsPricingTier;

class PricingTiers extends BaseResource
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
    public function listSetupMaterialsPricingTiers(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupMaterialsPricingTiers($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $makeDefault  Making Pricing Tier Default
     * @param  mixed  $updateCustomers  Update customers default pricing tier, only works with makeDefault parameter
     */
    public function createSetupMaterialsPricingTiers(
        mixed $companyId,
        mixed $makeDefault = null,
        mixed $updateCustomers = null,
    ): Response {
        return $this->connector->send(new CreateSetupMaterialsPricingTiers($companyId, $makeDefault, $updateCustomers));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $pricingTierId  A valid pricing tier id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupMaterialsPricingTier(mixed $companyId, mixed $pricingTierId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetSetupMaterialsPricingTier($companyId, $pricingTierId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $pricingTierId  A valid pricing tier id
     */
    public function deleteSetupMaterialsPricingTier(mixed $companyId, mixed $pricingTierId): Response
    {
        return $this->connector->send(new DeleteSetupMaterialsPricingTier($companyId, $pricingTierId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $pricingTierId  A valid pricing tier id
     * @param  mixed  $makeDefault  Making Pricing Tier Default
     * @param  mixed  $updateCustomers  Update customers default pricing tier, only works with makeDefault parameter
     */
    public function updateSetupMaterialsPricingTier(
        mixed $companyId,
        mixed $pricingTierId,
        mixed $makeDefault = null,
        mixed $updateCustomers = null,
    ): Response {
        return $this->connector->send(new UpdateSetupMaterialsPricingTier($companyId, $pricingTierId, $makeDefault, $updateCustomers));
    }
}
