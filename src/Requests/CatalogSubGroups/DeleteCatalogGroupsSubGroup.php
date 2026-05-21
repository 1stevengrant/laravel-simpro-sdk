<?php

namespace StevenGrant\SimproSdk\Requests\CatalogSubGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCatalogGroupsSubGroup
 */
class DeleteCatalogGroupsSubGroup extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/catalogGroups/{$this->groupId}/subGroups/{$this->subGroupId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $groupId  A valid group id
     * @param  mixed  $subGroupId  A valid sub group id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $groupId,
        protected mixed $subGroupId,
    ) {}
}
