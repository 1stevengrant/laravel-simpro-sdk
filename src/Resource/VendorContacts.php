<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\VendorContacts\CreateVendorsContacts;
use StevenGrant\SimproSdk\Requests\VendorContacts\DeleteVendorsContact;
use StevenGrant\SimproSdk\Requests\VendorContacts\GetVendorsContact;
use StevenGrant\SimproSdk\Requests\VendorContacts\ListVendorsContacts;
use StevenGrant\SimproSdk\Requests\VendorContacts\UpdateVendorsContact;

class VendorContacts extends BaseResource
{
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
    public function listVendorsContacts(
        mixed $companyId,
        mixed $vendorId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListVendorsContacts($companyId, $vendorId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorId  A valid vendor id
     */
    public function createVendorsContacts(mixed $companyId, mixed $vendorId): Response
    {
        return $this->connector->send(new CreateVendorsContacts($companyId, $vendorId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorId  A valid vendor id
     * @param  mixed  $contactId  A valid contact id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getVendorsContact(
        mixed $companyId,
        mixed $vendorId,
        mixed $contactId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetVendorsContact($companyId, $vendorId, $contactId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorId  A valid vendor id
     * @param  mixed  $contactId  A valid contact id
     */
    public function deleteVendorsContact(mixed $companyId, mixed $vendorId, mixed $contactId): Response
    {
        return $this->connector->send(new DeleteVendorsContact($companyId, $vendorId, $contactId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorId  A valid vendor id
     * @param  mixed  $contactId  A valid contact id
     */
    public function updateVendorsContact(mixed $companyId, mixed $vendorId, mixed $contactId): Response
    {
        return $this->connector->send(new UpdateVendorsContact($companyId, $vendorId, $contactId));
    }
}
