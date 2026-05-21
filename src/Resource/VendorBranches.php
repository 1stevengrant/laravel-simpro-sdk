<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\VendorBranches\CreateVendorsBranches;
use StevenGrant\SimproSdk\Requests\VendorBranches\DeleteVendorsBranche;
use StevenGrant\SimproSdk\Requests\VendorBranches\GetVendorBranche;
use StevenGrant\SimproSdk\Requests\VendorBranches\GetVendorsBranche;
use StevenGrant\SimproSdk\Requests\VendorBranches\ListVendorBranches;
use StevenGrant\SimproSdk\Requests\VendorBranches\ListVendorsBranches;
use StevenGrant\SimproSdk\Requests\VendorBranches\UpdateVendorsBranche;

class VendorBranches extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listVendorBranches(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListVendorBranches($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorBranchId  A valid vendor branch id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getVendorBranche(mixed $companyId, mixed $vendorBranchId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetVendorBranche($companyId, $vendorBranchId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorId  A valid vendor id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listVendorsBranches(
        mixed $companyId,
        mixed $vendorId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListVendorsBranches($companyId, $vendorId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorId  A valid vendor id
     */
    public function createVendorsBranches(mixed $companyId, mixed $vendorId): Response
    {
        return $this->connector->send(new CreateVendorsBranches($companyId, $vendorId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorId  A valid vendor id
     * @param  mixed  $branchId  A valid branch id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getVendorsBranche(
        mixed $companyId,
        mixed $vendorId,
        mixed $branchId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetVendorsBranche($companyId, $vendorId, $branchId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorId  A valid vendor id
     * @param  mixed  $branchId  A valid branch id
     */
    public function deleteVendorsBranche(mixed $companyId, mixed $vendorId, mixed $branchId): Response
    {
        return $this->connector->send(new DeleteVendorsBranche($companyId, $vendorId, $branchId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorId  A valid vendor id
     * @param  mixed  $branchId  A valid branch id
     */
    public function updateVendorsBranche(mixed $companyId, mixed $vendorId, mixed $branchId): Response
    {
        return $this->connector->send(new UpdateVendorsBranche($companyId, $vendorId, $branchId));
    }
}
