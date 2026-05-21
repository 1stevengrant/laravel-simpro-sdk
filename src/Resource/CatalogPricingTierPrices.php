<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CatalogPricingTierPrices\CreateCatalogsPricingTiersPrices;
use StevenGrant\SimproSdk\Requests\CatalogPricingTierPrices\DeleteCatalogsPricingTiersPrice;
use StevenGrant\SimproSdk\Requests\CatalogPricingTierPrices\GetCatalogsPricingTiersPrice;
use StevenGrant\SimproSdk\Requests\CatalogPricingTierPrices\ListCatalogsPricingTiersPrices;
use StevenGrant\SimproSdk\Requests\CatalogPricingTierPrices\UpdateCatalogsPricingTiersPrice;

class CatalogPricingTierPrices extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $pricingTierId  A valid pricing tier id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function listCatalogsPricingTiersPrices(
        mixed $companyId,
        mixed $catalogId,
        mixed $pricingTierId,
        mixed $search = null,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new ListCatalogsPricingTiersPrices($companyId, $catalogId, $pricingTierId, $search, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $pricingTierId  A valid pricing tier id
     */
    public function createCatalogsPricingTiersPrices(mixed $companyId, mixed $catalogId, mixed $pricingTierId): Response
    {
        return $this->connector->send(new CreateCatalogsPricingTiersPrices($companyId, $catalogId, $pricingTierId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $pricingTierId  A valid pricing tier id
     * @param  mixed  $priceId  A valid price id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCatalogsPricingTiersPrice(
        mixed $companyId,
        mixed $catalogId,
        mixed $pricingTierId,
        mixed $priceId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetCatalogsPricingTiersPrice($companyId, $catalogId, $pricingTierId, $priceId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $pricingTierId  A valid pricing tier id
     * @param  mixed  $priceId  A valid price id
     */
    public function deleteCatalogsPricingTiersPrice(
        mixed $companyId,
        mixed $catalogId,
        mixed $pricingTierId,
        mixed $priceId,
    ): Response {
        return $this->connector->send(new DeleteCatalogsPricingTiersPrice($companyId, $catalogId, $pricingTierId, $priceId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $pricingTierId  A valid pricing tier id
     * @param  mixed  $priceId  A valid price id
     */
    public function updateCatalogsPricingTiersPrice(
        mixed $companyId,
        mixed $catalogId,
        mixed $pricingTierId,
        mixed $priceId,
    ): Response {
        return $this->connector->send(new UpdateCatalogsPricingTiersPrice($companyId, $catalogId, $pricingTierId, $priceId));
    }
}
