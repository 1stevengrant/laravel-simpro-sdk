<?php

namespace StevenGrant\SimproSdk\Requests\WorkOrderAttachments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getQuotesSectionsCostCentersWorkOrdersAttachmentsFile
 */
class GetQuotesSectionsCostCentersWorkOrdersAttachmentsFile extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/quotes/{$this->quoteId}/sections/{$this->sectionId}/costCenters/{$this->costCenterId}/workOrders/{$this->workOrderId}/attachments/files/{$this->fileId}";
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
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $quoteId,
        protected mixed $sectionId,
        protected mixed $costCenterId,
        protected mixed $workOrderId,
        protected mixed $fileId,
        protected mixed $columns = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['columns' => $this->columns]);
    }
}
