<?php

namespace StevenGrant\SimproSdk\Requests\TaskCategories;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteSetupTasksCategory
 */
class DeleteSetupTasksCategory extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/setup/tasks/categories/{$this->taskCategoryId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $taskCategoryId  A valid task category id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $taskCategoryId,
    ) {}
}
