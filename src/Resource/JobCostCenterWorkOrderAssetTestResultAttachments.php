<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\JobCostCenterWorkOrderAssetTestResultAttachments\CreateJobsSectionsCostCentersWorkOrdersAssetsTestResultsAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\JobCostCenterWorkOrderAssetTestResultAttachments\DeleteJobsSectionsCostCentersWorkOrdersAssetsTestResultsAttachmentsFile;
use StevenGrant\SimproSdk\Requests\JobCostCenterWorkOrderAssetTestResultAttachments\GetJobsSectionsCostCentersWorkOrdersAssetsTestResultsAttachmentsFile;
use StevenGrant\SimproSdk\Requests\JobCostCenterWorkOrderAssetTestResultAttachments\ListJobsSectionsCostCentersWorkOrdersAssetsTestResultsAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\JobCostCenterWorkOrderAssetTestResultAttachments\UpdateJobsSectionsCostCentersWorkOrdersAssetsTestResultsAttachmentsFile;

class JobCostCenterWorkOrderAssetTestResultAttachments extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $workOrderId  A valid work order id
     * @param  mixed  $assetId  A valid asset id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listJobsSectionsCostCentersWorkOrdersAssetsTestResultsAttachmentsFiles(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $workOrderId,
        mixed $assetId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListJobsSectionsCostCentersWorkOrdersAssetsTestResultsAttachmentsFiles($companyId, $jobId, $sectionId, $costCenterId, $workOrderId, $assetId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $workOrderId  A valid work order id
     * @param  mixed  $assetId  A valid asset id
     */
    public function createJobsSectionsCostCentersWorkOrdersAssetsTestResultsAttachmentsFiles(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $workOrderId,
        mixed $assetId,
    ): Response {
        return $this->connector->send(new CreateJobsSectionsCostCentersWorkOrdersAssetsTestResultsAttachmentsFiles($companyId, $jobId, $sectionId, $costCenterId, $workOrderId, $assetId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $workOrderId  A valid work order id
     * @param  mixed  $assetId  A valid asset id
     * @param  mixed  $fileId  A valid file id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getJobsSectionsCostCentersWorkOrdersAssetsTestResultsAttachmentsFile(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $workOrderId,
        mixed $assetId,
        mixed $fileId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetJobsSectionsCostCentersWorkOrdersAssetsTestResultsAttachmentsFile($companyId, $jobId, $sectionId, $costCenterId, $workOrderId, $assetId, $fileId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $workOrderId  A valid work order id
     * @param  mixed  $assetId  A valid asset id
     * @param  mixed  $fileId  A valid file id
     */
    public function deleteJobsSectionsCostCentersWorkOrdersAssetsTestResultsAttachmentsFile(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $workOrderId,
        mixed $assetId,
        mixed $fileId,
    ): Response {
        return $this->connector->send(new DeleteJobsSectionsCostCentersWorkOrdersAssetsTestResultsAttachmentsFile($companyId, $jobId, $sectionId, $costCenterId, $workOrderId, $assetId, $fileId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $workOrderId  A valid work order id
     * @param  mixed  $assetId  A valid asset id
     * @param  mixed  $fileId  A valid file id
     */
    public function updateJobsSectionsCostCentersWorkOrdersAssetsTestResultsAttachmentsFile(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $workOrderId,
        mixed $assetId,
        mixed $fileId,
    ): Response {
        return $this->connector->send(new UpdateJobsSectionsCostCentersWorkOrdersAssetsTestResultsAttachmentsFile($companyId, $jobId, $sectionId, $costCenterId, $workOrderId, $assetId, $fileId));
    }
}
