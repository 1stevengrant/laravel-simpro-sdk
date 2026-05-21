<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\EmployeeLicences\CreateEmployeesLicences;
use StevenGrant\SimproSdk\Requests\EmployeeLicences\DeleteEmployeesLicence;
use StevenGrant\SimproSdk\Requests\EmployeeLicences\GetEmployeesLicence;
use StevenGrant\SimproSdk\Requests\EmployeeLicences\ListEmployeesLicences;
use StevenGrant\SimproSdk\Requests\EmployeeLicences\UpdateEmployeesLicence;

class EmployeeLicences extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $employeeId  A valid employee id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listEmployeesLicences(
        mixed $companyId,
        mixed $employeeId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListEmployeesLicences($companyId, $employeeId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $employeeId  A valid employee id
     */
    public function createEmployeesLicences(mixed $companyId, mixed $employeeId): Response
    {
        return $this->connector->send(new CreateEmployeesLicences($companyId, $employeeId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $employeeId  A valid employee id
     * @param  mixed  $licenceId  A valid licence id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getEmployeesLicence(
        mixed $companyId,
        mixed $employeeId,
        mixed $licenceId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetEmployeesLicence($companyId, $employeeId, $licenceId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $employeeId  A valid employee id
     * @param  mixed  $licenceId  A valid licence id
     */
    public function deleteEmployeesLicence(mixed $companyId, mixed $employeeId, mixed $licenceId): Response
    {
        return $this->connector->send(new DeleteEmployeesLicence($companyId, $employeeId, $licenceId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $employeeId  A valid employee id
     * @param  mixed  $licenceId  A valid licence id
     */
    public function updateEmployeesLicence(mixed $companyId, mixed $employeeId, mixed $licenceId): Response
    {
        return $this->connector->send(new UpdateEmployeesLicence($companyId, $employeeId, $licenceId));
    }
}
