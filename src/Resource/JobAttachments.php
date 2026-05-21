<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\JobAttachments\CreateJobsAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\JobAttachments\DeleteJobsAttachmentsFile;
use StevenGrant\SimproSdk\Requests\JobAttachments\GetJobsAttachmentsFile;
use StevenGrant\SimproSdk\Requests\JobAttachments\ListJobsAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\JobAttachments\UpdateJobsAttachmentsFile;

class JobAttachments extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listJobsAttachmentsFiles(
        mixed $companyId,
        mixed $jobId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListJobsAttachmentsFiles($companyId, $jobId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     */
    public function createJobsAttachmentsFiles(mixed $companyId, mixed $jobId): Response
    {
        return $this->connector->send(new CreateJobsAttachmentsFiles($companyId, $jobId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $fileId  A valid file id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getJobsAttachmentsFile(
        mixed $companyId,
        mixed $jobId,
        mixed $fileId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetJobsAttachmentsFile($companyId, $jobId, $fileId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $fileId  A valid file id
     */
    public function deleteJobsAttachmentsFile(mixed $companyId, mixed $jobId, mixed $fileId): Response
    {
        return $this->connector->send(new DeleteJobsAttachmentsFile($companyId, $jobId, $fileId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $fileId  A valid file id
     */
    public function updateJobsAttachmentsFile(mixed $companyId, mixed $jobId, mixed $fileId): Response
    {
        return $this->connector->send(new UpdateJobsAttachmentsFile($companyId, $jobId, $fileId));
    }
}
