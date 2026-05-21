<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\SiteContactCustomFields\GetSitesContactsCustomField;
use StevenGrant\SimproSdk\Requests\SiteContactCustomFields\ListSitesContactsCustomFields;
use StevenGrant\SimproSdk\Requests\SiteContactCustomFields\UpdateSitesContactsCustomField;

class SiteContactCustomFields extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $contactId  A valid contact id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listSitesContactsCustomFields(
        mixed $companyId,
        mixed $siteId,
        mixed $contactId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSitesContactsCustomFields($companyId, $siteId, $contactId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $contactId  A valid contact id
     * @param  mixed  $customFieldId  A valid custom field id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSitesContactsCustomField(
        mixed $companyId,
        mixed $siteId,
        mixed $contactId,
        mixed $customFieldId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetSitesContactsCustomField($companyId, $siteId, $contactId, $customFieldId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $contactId  A valid contact id
     * @param  mixed  $customFieldId  A valid custom field id
     */
    public function updateSitesContactsCustomField(
        mixed $companyId,
        mixed $siteId,
        mixed $contactId,
        mixed $customFieldId,
    ): Response {
        return $this->connector->send(new UpdateSitesContactsCustomField($companyId, $siteId, $contactId, $customFieldId));
    }
}
