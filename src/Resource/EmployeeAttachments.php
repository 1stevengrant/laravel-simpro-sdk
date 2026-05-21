<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\EmployeeAttachments\CreateEmployeesAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\EmployeeAttachments\DeleteEmployeesAttachmentsFile;
use StevenGrant\SimproSdk\Requests\EmployeeAttachments\GetEmployeesAttachmentsFile;
use StevenGrant\SimproSdk\Requests\EmployeeAttachments\ListEmployeesAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\EmployeeAttachments\UpdateEmployeesAttachmentsFile;

class EmployeeAttachments extends BaseResource
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
    public function listEmployeesAttachmentsFiles(
        mixed $companyId,
        mixed $employeeId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListEmployeesAttachmentsFiles($companyId, $employeeId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $employeeId  A valid employee id
     */
    public function createEmployeesAttachmentsFiles(mixed $companyId, mixed $employeeId): Response
    {
        return $this->connector->send(new CreateEmployeesAttachmentsFiles($companyId, $employeeId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $employeeId  A valid employee id
     * @param  mixed  $fileId  A valid file id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getEmployeesAttachmentsFile(
        mixed $companyId,
        mixed $employeeId,
        mixed $fileId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetEmployeesAttachmentsFile($companyId, $employeeId, $fileId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $employeeId  A valid employee id
     * @param  mixed  $fileId  A valid file id
     */
    public function deleteEmployeesAttachmentsFile(mixed $companyId, mixed $employeeId, mixed $fileId): Response
    {
        return $this->connector->send(new DeleteEmployeesAttachmentsFile($companyId, $employeeId, $fileId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $employeeId  A valid employee id
     * @param  mixed  $fileId  A valid file id
     */
    public function updateEmployeesAttachmentsFile(mixed $companyId, mixed $employeeId, mixed $fileId): Response
    {
        return $this->connector->send(new UpdateEmployeesAttachmentsFile($companyId, $employeeId, $fileId));
    }
}
