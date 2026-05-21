<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\JobLock\CreateJobsLock;
use StevenGrant\SimproSdk\Requests\JobLock\DeleteJobsLock;

class JobLock extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     */
    public function createJobsLock(mixed $companyId, mixed $jobId): Response
    {
        return $this->connector->send(new CreateJobsLock($companyId, $jobId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     */
    public function deleteJobsLock(mixed $companyId, mixed $jobId): Response
    {
        return $this->connector->send(new DeleteJobsLock($companyId, $jobId));
    }
}
