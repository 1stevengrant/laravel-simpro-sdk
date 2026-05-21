<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CatalogCurrencies\DeleteCatalogsCurrency;

class CatalogCurrencies extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $currencyId  A valid currency id
     */
    public function deleteCatalogsCurrency(mixed $companyId, mixed $catalogId, mixed $currencyId): Response
    {
        return $this->connector->send(new DeleteCatalogsCurrency($companyId, $catalogId, $currencyId));
    }
}
