<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\ContractorJobAttachments\CreateJobsSectionsCostCentersContractorJobsAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\ContractorJobAttachments\DeleteJobsSectionsCostCentersContractorJobsAttachmentsFile;
use StevenGrant\SimproSdk\Requests\ContractorJobAttachments\GetJobsSectionsCostCentersContractorJobsAttachmentsFile;
use StevenGrant\SimproSdk\Requests\ContractorJobAttachments\ListJobsSectionsCostCentersContractorJobsAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\ContractorJobAttachments\UpdateJobsSectionsCostCentersContractorJobsAttachmentsFile;

class ContractorJobAttachments extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $contractorJobId  A valid contractor job id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listJobsSectionsCostCentersContractorJobsAttachmentsFiles(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $contractorJobId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListJobsSectionsCostCentersContractorJobsAttachmentsFiles($companyId, $jobId, $sectionId, $costCenterId, $contractorJobId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $contractorJobId  A valid contractor job id
     */
    public function createJobsSectionsCostCentersContractorJobsAttachmentsFiles(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $contractorJobId,
    ): Response {
        return $this->connector->send(new CreateJobsSectionsCostCentersContractorJobsAttachmentsFiles($companyId, $jobId, $sectionId, $costCenterId, $contractorJobId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $contractorJobId  A valid contractor job id
     * @param  mixed  $fileId  A valid file id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getJobsSectionsCostCentersContractorJobsAttachmentsFile(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $contractorJobId,
        mixed $fileId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetJobsSectionsCostCentersContractorJobsAttachmentsFile($companyId, $jobId, $sectionId, $costCenterId, $contractorJobId, $fileId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $contractorJobId  A valid contractor job id
     * @param  mixed  $fileId  A valid file id
     */
    public function deleteJobsSectionsCostCentersContractorJobsAttachmentsFile(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $contractorJobId,
        mixed $fileId,
    ): Response {
        return $this->connector->send(new DeleteJobsSectionsCostCentersContractorJobsAttachmentsFile($companyId, $jobId, $sectionId, $costCenterId, $contractorJobId, $fileId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $contractorJobId  A valid contractor job id
     * @param  mixed  $fileId  A valid file id
     */
    public function updateJobsSectionsCostCentersContractorJobsAttachmentsFile(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $contractorJobId,
        mixed $fileId,
    ): Response {
        return $this->connector->send(new UpdateJobsSectionsCostCentersContractorJobsAttachmentsFile($companyId, $jobId, $sectionId, $costCenterId, $contractorJobId, $fileId));
    }
}
