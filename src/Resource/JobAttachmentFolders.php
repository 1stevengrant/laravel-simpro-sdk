<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\JobAttachmentFolders\CreateJobsAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\JobAttachmentFolders\DeleteJobsAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\JobAttachmentFolders\GetJobsAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\JobAttachmentFolders\ListJobsAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\JobAttachmentFolders\UpdateJobsAttachmentsFolder;

class JobAttachmentFolders extends BaseResource
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
    public function listJobsAttachmentsFolders(
        mixed $companyId,
        mixed $jobId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListJobsAttachmentsFolders($companyId, $jobId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     */
    public function createJobsAttachmentsFolders(mixed $companyId, mixed $jobId): Response
    {
        return $this->connector->send(new CreateJobsAttachmentsFolders($companyId, $jobId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $folderId  A valid folder id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getJobsAttachmentsFolder(
        mixed $companyId,
        mixed $jobId,
        mixed $folderId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetJobsAttachmentsFolder($companyId, $jobId, $folderId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $folderId  A valid folder id
     */
    public function deleteJobsAttachmentsFolder(mixed $companyId, mixed $jobId, mixed $folderId): Response
    {
        return $this->connector->send(new DeleteJobsAttachmentsFolder($companyId, $jobId, $folderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $folderId  A valid folder id
     */
    public function updateJobsAttachmentsFolder(mixed $companyId, mixed $jobId, mixed $folderId): Response
    {
        return $this->connector->send(new UpdateJobsAttachmentsFolder($companyId, $jobId, $folderId));
    }
}
