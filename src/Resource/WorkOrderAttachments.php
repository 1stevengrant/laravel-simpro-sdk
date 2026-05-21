<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\WorkOrderAttachments\CreateJobsSectionsCostCentersWorkOrdersAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\WorkOrderAttachments\CreateQuotesSectionsCostCentersWorkOrdersAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\WorkOrderAttachments\DeleteJobsSectionsCostCentersWorkOrdersAttachmentsFile;
use StevenGrant\SimproSdk\Requests\WorkOrderAttachments\DeleteQuotesSectionsCostCentersWorkOrdersAttachmentsFile;
use StevenGrant\SimproSdk\Requests\WorkOrderAttachments\GetJobsSectionsCostCentersWorkOrdersAttachmentsFile;
use StevenGrant\SimproSdk\Requests\WorkOrderAttachments\GetQuotesSectionsCostCentersWorkOrdersAttachmentsFile;
use StevenGrant\SimproSdk\Requests\WorkOrderAttachments\ListJobsSectionsCostCentersWorkOrdersAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\WorkOrderAttachments\ListQuotesSectionsCostCentersWorkOrdersAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\WorkOrderAttachments\UpdateJobsSectionsCostCentersWorkOrdersAttachmentsFile;
use StevenGrant\SimproSdk\Requests\WorkOrderAttachments\UpdateQuotesSectionsCostCentersWorkOrdersAttachmentsFile;

class WorkOrderAttachments extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $workOrderId  A valid work order id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listJobsSectionsCostCentersWorkOrdersAttachmentsFiles(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $workOrderId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListJobsSectionsCostCentersWorkOrdersAttachmentsFiles($companyId, $jobId, $sectionId, $costCenterId, $workOrderId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $workOrderId  A valid work order id
     */
    public function createJobsSectionsCostCentersWorkOrdersAttachmentsFiles(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $workOrderId,
    ): Response {
        return $this->connector->send(new CreateJobsSectionsCostCentersWorkOrdersAttachmentsFiles($companyId, $jobId, $sectionId, $costCenterId, $workOrderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $workOrderId  A valid work order id
     * @param  mixed  $fileId  A valid file id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getJobsSectionsCostCentersWorkOrdersAttachmentsFile(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $workOrderId,
        mixed $fileId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetJobsSectionsCostCentersWorkOrdersAttachmentsFile($companyId, $jobId, $sectionId, $costCenterId, $workOrderId, $fileId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $workOrderId  A valid work order id
     * @param  mixed  $fileId  A valid file id
     */
    public function deleteJobsSectionsCostCentersWorkOrdersAttachmentsFile(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $workOrderId,
        mixed $fileId,
    ): Response {
        return $this->connector->send(new DeleteJobsSectionsCostCentersWorkOrdersAttachmentsFile($companyId, $jobId, $sectionId, $costCenterId, $workOrderId, $fileId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $workOrderId  A valid work order id
     * @param  mixed  $fileId  A valid file id
     */
    public function updateJobsSectionsCostCentersWorkOrdersAttachmentsFile(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $workOrderId,
        mixed $fileId,
    ): Response {
        return $this->connector->send(new UpdateJobsSectionsCostCentersWorkOrdersAttachmentsFile($companyId, $jobId, $sectionId, $costCenterId, $workOrderId, $fileId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $quoteId  A valid quote id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $workOrderId  A valid work order id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listQuotesSectionsCostCentersWorkOrdersAttachmentsFiles(
        mixed $companyId,
        mixed $quoteId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $workOrderId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListQuotesSectionsCostCentersWorkOrdersAttachmentsFiles($companyId, $quoteId, $sectionId, $costCenterId, $workOrderId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $quoteId  A valid quote id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $workOrderId  A valid work order id
     */
    public function createQuotesSectionsCostCentersWorkOrdersAttachmentsFiles(
        mixed $companyId,
        mixed $quoteId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $workOrderId,
    ): Response {
        return $this->connector->send(new CreateQuotesSectionsCostCentersWorkOrdersAttachmentsFiles($companyId, $quoteId, $sectionId, $costCenterId, $workOrderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $quoteId  A valid quote id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $workOrderId  A valid work order id
     * @param  mixed  $fileId  A valid file id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getQuotesSectionsCostCentersWorkOrdersAttachmentsFile(
        mixed $companyId,
        mixed $quoteId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $workOrderId,
        mixed $fileId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetQuotesSectionsCostCentersWorkOrdersAttachmentsFile($companyId, $quoteId, $sectionId, $costCenterId, $workOrderId, $fileId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $quoteId  A valid quote id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $workOrderId  A valid work order id
     * @param  mixed  $fileId  A valid file id
     */
    public function deleteQuotesSectionsCostCentersWorkOrdersAttachmentsFile(
        mixed $companyId,
        mixed $quoteId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $workOrderId,
        mixed $fileId,
    ): Response {
        return $this->connector->send(new DeleteQuotesSectionsCostCentersWorkOrdersAttachmentsFile($companyId, $quoteId, $sectionId, $costCenterId, $workOrderId, $fileId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $quoteId  A valid quote id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $workOrderId  A valid work order id
     * @param  mixed  $fileId  A valid file id
     */
    public function updateQuotesSectionsCostCentersWorkOrdersAttachmentsFile(
        mixed $companyId,
        mixed $quoteId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $workOrderId,
        mixed $fileId,
    ): Response {
        return $this->connector->send(new UpdateQuotesSectionsCostCentersWorkOrdersAttachmentsFile($companyId, $quoteId, $sectionId, $costCenterId, $workOrderId, $fileId));
    }
}
