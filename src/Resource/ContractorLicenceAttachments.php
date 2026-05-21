<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\ContractorLicenceAttachments\CreateContractorsLicencesAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\ContractorLicenceAttachments\DeleteContractorsLicencesAttachmentsFile;
use StevenGrant\SimproSdk\Requests\ContractorLicenceAttachments\GetContractorsLicencesAttachmentsFile;
use StevenGrant\SimproSdk\Requests\ContractorLicenceAttachments\ListContractorsLicencesAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\ContractorLicenceAttachments\UpdateContractorsLicencesAttachmentsFile;

class ContractorLicenceAttachments extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     * @param  mixed  $licenceId  A valid licence id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listContractorsLicencesAttachmentsFiles(
        mixed $companyId,
        mixed $contractorId,
        mixed $licenceId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListContractorsLicencesAttachmentsFiles($companyId, $contractorId, $licenceId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     * @param  mixed  $licenceId  A valid licence id
     */
    public function createContractorsLicencesAttachmentsFiles(
        mixed $companyId,
        mixed $contractorId,
        mixed $licenceId,
    ): Response {
        return $this->connector->send(new CreateContractorsLicencesAttachmentsFiles($companyId, $contractorId, $licenceId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     * @param  mixed  $licenceId  A valid licence id
     * @param  mixed  $fileId  A valid file id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getContractorsLicencesAttachmentsFile(
        mixed $companyId,
        mixed $contractorId,
        mixed $licenceId,
        mixed $fileId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetContractorsLicencesAttachmentsFile($companyId, $contractorId, $licenceId, $fileId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     * @param  mixed  $licenceId  A valid licence id
     * @param  mixed  $fileId  A valid file id
     */
    public function deleteContractorsLicencesAttachmentsFile(
        mixed $companyId,
        mixed $contractorId,
        mixed $licenceId,
        mixed $fileId,
    ): Response {
        return $this->connector->send(new DeleteContractorsLicencesAttachmentsFile($companyId, $contractorId, $licenceId, $fileId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     * @param  mixed  $licenceId  A valid licence id
     * @param  mixed  $fileId  A valid file id
     */
    public function updateContractorsLicencesAttachmentsFile(
        mixed $companyId,
        mixed $contractorId,
        mixed $licenceId,
        mixed $fileId,
    ): Response {
        return $this->connector->send(new UpdateContractorsLicencesAttachmentsFile($companyId, $contractorId, $licenceId, $fileId));
    }
}
