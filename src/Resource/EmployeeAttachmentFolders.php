<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\EmployeeAttachmentFolders\CreateEmployeesAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\EmployeeAttachmentFolders\DeleteEmployeesAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\EmployeeAttachmentFolders\GetEmployeesAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\EmployeeAttachmentFolders\ListEmployeesAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\EmployeeAttachmentFolders\UpdateEmployeesAttachmentsFolder;

class EmployeeAttachmentFolders extends BaseResource
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
    public function listEmployeesAttachmentsFolders(
        mixed $companyId,
        mixed $employeeId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListEmployeesAttachmentsFolders($companyId, $employeeId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $employeeId  A valid employee id
     */
    public function createEmployeesAttachmentsFolders(mixed $companyId, mixed $employeeId): Response
    {
        return $this->connector->send(new CreateEmployeesAttachmentsFolders($companyId, $employeeId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $employeeId  A valid employee id
     * @param  mixed  $folderId  A valid folder id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getEmployeesAttachmentsFolder(
        mixed $companyId,
        mixed $employeeId,
        mixed $folderId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetEmployeesAttachmentsFolder($companyId, $employeeId, $folderId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $employeeId  A valid employee id
     * @param  mixed  $folderId  A valid folder id
     */
    public function deleteEmployeesAttachmentsFolder(mixed $companyId, mixed $employeeId, mixed $folderId): Response
    {
        return $this->connector->send(new DeleteEmployeesAttachmentsFolder($companyId, $employeeId, $folderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $employeeId  A valid employee id
     * @param  mixed  $folderId  A valid folder id
     */
    public function updateEmployeesAttachmentsFolder(mixed $companyId, mixed $employeeId, mixed $folderId): Response
    {
        return $this->connector->send(new UpdateEmployeesAttachmentsFolder($companyId, $employeeId, $folderId));
    }
}
