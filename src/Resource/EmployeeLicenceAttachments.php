<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\EmployeeLicenceAttachments\CreateEmployeesLicencesAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\EmployeeLicenceAttachments\DeleteEmployeesLicencesAttachmentsFile;
use StevenGrant\SimproSdk\Requests\EmployeeLicenceAttachments\GetEmployeesLicencesAttachmentsFile;
use StevenGrant\SimproSdk\Requests\EmployeeLicenceAttachments\ListEmployeesLicencesAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\EmployeeLicenceAttachments\UpdateEmployeesLicencesAttachmentsFile;

class EmployeeLicenceAttachments extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $employeeId  A valid employee id
     * @param  mixed  $licenceId  A valid licence id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listEmployeesLicencesAttachmentsFiles(
        mixed $companyId,
        mixed $employeeId,
        mixed $licenceId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListEmployeesLicencesAttachmentsFiles($companyId, $employeeId, $licenceId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $employeeId  A valid employee id
     * @param  mixed  $licenceId  A valid licence id
     */
    public function createEmployeesLicencesAttachmentsFiles(
        mixed $companyId,
        mixed $employeeId,
        mixed $licenceId,
    ): Response {
        return $this->connector->send(new CreateEmployeesLicencesAttachmentsFiles($companyId, $employeeId, $licenceId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $employeeId  A valid employee id
     * @param  mixed  $licenceId  A valid licence id
     * @param  mixed  $fileId  A valid file id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getEmployeesLicencesAttachmentsFile(
        mixed $companyId,
        mixed $employeeId,
        mixed $licenceId,
        mixed $fileId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetEmployeesLicencesAttachmentsFile($companyId, $employeeId, $licenceId, $fileId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $employeeId  A valid employee id
     * @param  mixed  $licenceId  A valid licence id
     * @param  mixed  $fileId  A valid file id
     */
    public function deleteEmployeesLicencesAttachmentsFile(
        mixed $companyId,
        mixed $employeeId,
        mixed $licenceId,
        mixed $fileId,
    ): Response {
        return $this->connector->send(new DeleteEmployeesLicencesAttachmentsFile($companyId, $employeeId, $licenceId, $fileId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $employeeId  A valid employee id
     * @param  mixed  $licenceId  A valid licence id
     * @param  mixed  $fileId  A valid file id
     */
    public function updateEmployeesLicencesAttachmentsFile(
        mixed $companyId,
        mixed $employeeId,
        mixed $licenceId,
        mixed $fileId,
    ): Response {
        return $this->connector->send(new UpdateEmployeesLicencesAttachmentsFile($companyId, $employeeId, $licenceId, $fileId));
    }
}
