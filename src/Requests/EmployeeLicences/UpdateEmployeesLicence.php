<?php

namespace StevenGrant\SimproSdk\Requests\EmployeeLicences;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateEmployeesLicence
 */
class UpdateEmployeesLicence extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/employees/{$this->employeeId}/licences/{$this->licenceId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $employeeId  A valid employee id
     * @param  mixed  $licenceId  A valid licence id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $employeeId,
        protected mixed $licenceId,
    ) {}
}
