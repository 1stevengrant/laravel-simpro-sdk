<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\JobInvoices\CreateJobsInvoices;
use StevenGrant\SimproSdk\Requests\JobInvoices\DeleteJobsInvoice;
use StevenGrant\SimproSdk\Requests\JobInvoices\GetJobsInvoice;
use StevenGrant\SimproSdk\Requests\JobInvoices\ListJobsInvoices;
use StevenGrant\SimproSdk\Requests\JobInvoices\UpdateJobsInvoice;

class JobInvoices extends BaseResource
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
    public function listJobsInvoices(
        mixed $companyId,
        mixed $jobId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListJobsInvoices($companyId, $jobId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     */
    public function createJobsInvoices(mixed $companyId, mixed $jobId): Response
    {
        return $this->connector->send(new CreateJobsInvoices($companyId, $jobId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $invoiceId  A valid invoice id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getJobsInvoice(mixed $companyId, mixed $jobId, mixed $invoiceId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetJobsInvoice($companyId, $jobId, $invoiceId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $invoiceId  A valid invoice id
     */
    public function deleteJobsInvoice(mixed $companyId, mixed $jobId, mixed $invoiceId): Response
    {
        return $this->connector->send(new DeleteJobsInvoice($companyId, $jobId, $invoiceId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $invoiceId  A valid invoice id
     */
    public function updateJobsInvoice(mixed $companyId, mixed $jobId, mixed $invoiceId): Response
    {
        return $this->connector->send(new UpdateJobsInvoice($companyId, $jobId, $invoiceId));
    }
}
