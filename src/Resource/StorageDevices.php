<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\StorageDevices\CreateStorageDevices;
use StevenGrant\SimproSdk\Requests\StorageDevices\DeleteStorageDevice;
use StevenGrant\SimproSdk\Requests\StorageDevices\GetStorageDevice;
use StevenGrant\SimproSdk\Requests\StorageDevices\ListStorageDevices;
use StevenGrant\SimproSdk\Requests\StorageDevices\UpdateStorageDevice;

class StorageDevices extends BaseResource
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
    public function listStorageDevices(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListStorageDevices($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createStorageDevices(mixed $companyId): Response
    {
        return $this->connector->send(new CreateStorageDevices($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $storageDeviceId  A valid storage device id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getStorageDevice(mixed $companyId, mixed $storageDeviceId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetStorageDevice($companyId, $storageDeviceId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $storageDeviceId  A valid storage device id
     */
    public function deleteStorageDevice(mixed $companyId, mixed $storageDeviceId): Response
    {
        return $this->connector->send(new DeleteStorageDevice($companyId, $storageDeviceId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $storageDeviceId  A valid storage device id
     */
    public function updateStorageDevice(mixed $companyId, mixed $storageDeviceId): Response
    {
        return $this->connector->send(new UpdateStorageDevice($companyId, $storageDeviceId));
    }
}
