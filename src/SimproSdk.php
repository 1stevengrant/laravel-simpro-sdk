<?php

namespace StevenGrant\SimproSdk;

use Saloon\Contracts\Authenticator;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
use StevenGrant\SimproSdk\Resource\AccountingCategories;
use StevenGrant\SimproSdk\Resource\Activities;
use StevenGrant\SimproSdk\Resource\ActivitySchedules;
use StevenGrant\SimproSdk\Resource\AssetAttachmentFolders;
use StevenGrant\SimproSdk\Resource\AssetAttachments;
use StevenGrant\SimproSdk\Resource\AssetCustomFields;
use StevenGrant\SimproSdk\Resource\AssetServiceLevels;
use StevenGrant\SimproSdk\Resource\AssetTestHistories;
use StevenGrant\SimproSdk\Resource\AssetTransfers;
use StevenGrant\SimproSdk\Resource\AssetTypeAttachmentFolders;
use StevenGrant\SimproSdk\Resource\AssetTypeAttachments;
use StevenGrant\SimproSdk\Resource\AssetTypeCustomFields;
use StevenGrant\SimproSdk\Resource\AssetTypes;
use StevenGrant\SimproSdk\Resource\AssetTypeServiceLevels;
use StevenGrant\SimproSdk\Resource\BusinessGroups;
use StevenGrant\SimproSdk\Resource\CatalogAttachmentFolders;
use StevenGrant\SimproSdk\Resource\CatalogAttachments;
use StevenGrant\SimproSdk\Resource\CatalogCurrencies;
use StevenGrant\SimproSdk\Resource\CatalogCustomFields;
use StevenGrant\SimproSdk\Resource\CatalogGroups;
use StevenGrant\SimproSdk\Resource\CatalogInventories;
use StevenGrant\SimproSdk\Resource\CatalogItemCustomFieldsSetup;
use StevenGrant\SimproSdk\Resource\CatalogPricingTierPrices;
use StevenGrant\SimproSdk\Resource\CatalogPricingTiers;
use StevenGrant\SimproSdk\Resource\Catalogs;
use StevenGrant\SimproSdk\Resource\CatalogSubGroups;
use StevenGrant\SimproSdk\Resource\CatalogVendors;
use StevenGrant\SimproSdk\Resource\ChartOfAccounts;
use StevenGrant\SimproSdk\Resource\CombineTaxCodes;
use StevenGrant\SimproSdk\Resource\Commissions;
use StevenGrant\SimproSdk\Resource\Companies;
use StevenGrant\SimproSdk\Resource\CompanyDefaultSettings;
use StevenGrant\SimproSdk\Resource\ComponentTaxCodes;
use StevenGrant\SimproSdk\Resource\ContactCustomFieldsSetup;
use StevenGrant\SimproSdk\Resource\ContactLogs;
use StevenGrant\SimproSdk\Resource\Contacts;
use StevenGrant\SimproSdk\Resource\ContractorAttachmentFolders;
use StevenGrant\SimproSdk\Resource\ContractorAttachments;
use StevenGrant\SimproSdk\Resource\ContractorCustomFields;
use StevenGrant\SimproSdk\Resource\ContractorCustomFieldsSetup;
use StevenGrant\SimproSdk\Resource\ContractorInvoiceAttachmentFolders;
use StevenGrant\SimproSdk\Resource\ContractorInvoiceAttachments;
use StevenGrant\SimproSdk\Resource\ContractorInvoiceCustomFields;
use StevenGrant\SimproSdk\Resource\ContractorInvoiceCustomFieldsSetup;
use StevenGrant\SimproSdk\Resource\ContractorInvoices;
use StevenGrant\SimproSdk\Resource\ContractorInvoiceVariances;
use StevenGrant\SimproSdk\Resource\ContractorJobAttachmentFolders;
use StevenGrant\SimproSdk\Resource\ContractorJobAttachments;
use StevenGrant\SimproSdk\Resource\ContractorJobCustomFields;
use StevenGrant\SimproSdk\Resource\ContractorJobCustomFieldsSetup;
use StevenGrant\SimproSdk\Resource\ContractorJobLogs;
use StevenGrant\SimproSdk\Resource\ContractorJobs;
use StevenGrant\SimproSdk\Resource\ContractorLicenceAttachments;
use StevenGrant\SimproSdk\Resource\ContractorLicences;
use StevenGrant\SimproSdk\Resource\Contractors;
use StevenGrant\SimproSdk\Resource\ContractorTimesheets;
use StevenGrant\SimproSdk\Resource\ContractorVariances;
use StevenGrant\SimproSdk\Resource\CostCenters;
use StevenGrant\SimproSdk\Resource\CostToCompleteFinancialView;
use StevenGrant\SimproSdk\Resource\CostToCompleteOperationsView;
use StevenGrant\SimproSdk\Resource\CreditNoteCustomFields;
use StevenGrant\SimproSdk\Resource\CreditNoteNotes;
use StevenGrant\SimproSdk\Resource\CreditNotes;
use StevenGrant\SimproSdk\Resource\Currencies;
use StevenGrant\SimproSdk\Resource\CurrentUser;
use StevenGrant\SimproSdk\Resource\CustomerAssets;
use StevenGrant\SimproSdk\Resource\CustomerAssignedCompanies;
use StevenGrant\SimproSdk\Resource\CustomerAttachmentFolders;
use StevenGrant\SimproSdk\Resource\CustomerAttachments;
use StevenGrant\SimproSdk\Resource\CustomerContactCustomFields;
use StevenGrant\SimproSdk\Resource\CustomerContactCustomFieldsSetup;
use StevenGrant\SimproSdk\Resource\CustomerContacts;
use StevenGrant\SimproSdk\Resource\CustomerContractCustomFields;
use StevenGrant\SimproSdk\Resource\CustomerContractCustomFieldsSetup;
use StevenGrant\SimproSdk\Resource\CustomerContractInflation;
use StevenGrant\SimproSdk\Resource\CustomerContractLaborRates;
use StevenGrant\SimproSdk\Resource\CustomerContracts;
use StevenGrant\SimproSdk\Resource\CustomerContractSearch;
use StevenGrant\SimproSdk\Resource\CustomerContractServiceLevelAssetTypes;
use StevenGrant\SimproSdk\Resource\CustomerContractServiceLevels;
use StevenGrant\SimproSdk\Resource\CustomerCustomFields;
use StevenGrant\SimproSdk\Resource\CustomerCustomFieldsSetup;
use StevenGrant\SimproSdk\Resource\CustomerGroups;
use StevenGrant\SimproSdk\Resource\CustomerInvoiceLogs;
use StevenGrant\SimproSdk\Resource\CustomerInvoices;
use StevenGrant\SimproSdk\Resource\CustomerInvoiceStatusCodes;
use StevenGrant\SimproSdk\Resource\CustomerLaborRates;
use StevenGrant\SimproSdk\Resource\CustomerLaborRateSearch;
use StevenGrant\SimproSdk\Resource\CustomerLogs;
use StevenGrant\SimproSdk\Resource\CustomerMemberships;
use StevenGrant\SimproSdk\Resource\CustomerNotes;
use StevenGrant\SimproSdk\Resource\CustomerPayments;
use StevenGrant\SimproSdk\Resource\CustomerProfiles;
use StevenGrant\SimproSdk\Resource\CustomerResponseTimes;
use StevenGrant\SimproSdk\Resource\CustomerResponseTimeSearch;
use StevenGrant\SimproSdk\Resource\Customers;
use StevenGrant\SimproSdk\Resource\CustomerTags;
use StevenGrant\SimproSdk\Resource\CustomerTasks;
use StevenGrant\SimproSdk\Resource\CustomFields;
use StevenGrant\SimproSdk\Resource\DataFeedEvents;
use StevenGrant\SimproSdk\Resource\EmployeeAttachmentFolders;
use StevenGrant\SimproSdk\Resource\EmployeeAttachments;
use StevenGrant\SimproSdk\Resource\EmployeeCustomFields;
use StevenGrant\SimproSdk\Resource\EmployeeCustomFieldsSetup;
use StevenGrant\SimproSdk\Resource\EmployeeLicenceAttachments;
use StevenGrant\SimproSdk\Resource\EmployeeLicences;
use StevenGrant\SimproSdk\Resource\Employees;
use StevenGrant\SimproSdk\Resource\EmployeeTimesheets;
use StevenGrant\SimproSdk\Resource\FailurePoints;
use StevenGrant\SimproSdk\Resource\FitTimes;
use StevenGrant\SimproSdk\Resource\Info;
use StevenGrant\SimproSdk\Resource\InventoryJournals;
use StevenGrant\SimproSdk\Resource\InvoiceAttachForms;
use StevenGrant\SimproSdk\Resource\InvoiceCostCenters;
use StevenGrant\SimproSdk\Resource\InvoiceCreditNoteCustomFields;
use StevenGrant\SimproSdk\Resource\InvoiceCreditNotes;
use StevenGrant\SimproSdk\Resource\InvoiceCustomFields;
use StevenGrant\SimproSdk\Resource\InvoiceCustomFieldsSetup;
use StevenGrant\SimproSdk\Resource\InvoiceForms;
use StevenGrant\SimproSdk\Resource\InvoiceFormTemplates;
use StevenGrant\SimproSdk\Resource\InvoiceNotes;
use StevenGrant\SimproSdk\Resource\InvoicePaymentLink;
use StevenGrant\SimproSdk\Resource\Invoices;
use StevenGrant\SimproSdk\Resource\JobArchiveReasons;
use StevenGrant\SimproSdk\Resource\JobAttachForms;
use StevenGrant\SimproSdk\Resource\JobAttachmentFolders;
use StevenGrant\SimproSdk\Resource\JobAttachments;
use StevenGrant\SimproSdk\Resource\JobContractorJobCustomFields;
use StevenGrant\SimproSdk\Resource\JobContractorJobs;
use StevenGrant\SimproSdk\Resource\JobCostCenterAssets;
use StevenGrant\SimproSdk\Resource\JobCostCenterCatalogItems;
use StevenGrant\SimproSdk\Resource\JobCostCenterLaborItems;
use StevenGrant\SimproSdk\Resource\JobCostCenterLocks;
use StevenGrant\SimproSdk\Resource\JobCostCenterOneOffItems;
use StevenGrant\SimproSdk\Resource\JobCostCenterPrebuildItems;
use StevenGrant\SimproSdk\Resource\JobCostCenters;
use StevenGrant\SimproSdk\Resource\JobCostCenterSchedules;
use StevenGrant\SimproSdk\Resource\JobCostCenterServiceFees;
use StevenGrant\SimproSdk\Resource\JobCostCenterStockItems;
use StevenGrant\SimproSdk\Resource\JobCostCenterTasks;
use StevenGrant\SimproSdk\Resource\JobCostCenterWorkOrderAssets;
use StevenGrant\SimproSdk\Resource\JobCostCenterWorkOrderAssetTestResultAttachments;
use StevenGrant\SimproSdk\Resource\JobCostCenterWorkOrderCustomFields;
use StevenGrant\SimproSdk\Resource\JobCostCenterWorkOrderMobileSignatures;
use StevenGrant\SimproSdk\Resource\JobCostCenterWorkOrders;
use StevenGrant\SimproSdk\Resource\JobCustomFields;
use StevenGrant\SimproSdk\Resource\JobForms;
use StevenGrant\SimproSdk\Resource\JobFormTemplates;
use StevenGrant\SimproSdk\Resource\JobInvoiceCustomFields;
use StevenGrant\SimproSdk\Resource\JobInvoices;
use StevenGrant\SimproSdk\Resource\JobLock;
use StevenGrant\SimproSdk\Resource\JobLogs;
use StevenGrant\SimproSdk\Resource\JobNotes;
use StevenGrant\SimproSdk\Resource\Jobs;
use StevenGrant\SimproSdk\Resource\JobSections;
use StevenGrant\SimproSdk\Resource\JobTasks;
use StevenGrant\SimproSdk\Resource\JobTimelines;
use StevenGrant\SimproSdk\Resource\JobWorkOrders;
use StevenGrant\SimproSdk\Resource\Journals;
use StevenGrant\SimproSdk\Resource\LaborRateOverhead;
use StevenGrant\SimproSdk\Resource\LaborRates;
use StevenGrant\SimproSdk\Resource\LeadArchiveReasons;
use StevenGrant\SimproSdk\Resource\LeadAttachmentFolders;
use StevenGrant\SimproSdk\Resource\LeadAttachments;
use StevenGrant\SimproSdk\Resource\LeadCustomFields;
use StevenGrant\SimproSdk\Resource\Leads;
use StevenGrant\SimproSdk\Resource\LeadSchedules;
use StevenGrant\SimproSdk\Resource\Licences;
use StevenGrant\SimproSdk\Resource\Memberships;
use StevenGrant\SimproSdk\Resource\MergeCatalogs;
use StevenGrant\SimproSdk\Resource\MobileStatusLogs;
use StevenGrant\SimproSdk\Resource\Notes;
use StevenGrant\SimproSdk\Resource\PayableContacts;
use StevenGrant\SimproSdk\Resource\PayableInvoices;
use StevenGrant\SimproSdk\Resource\PaymentMethods;
use StevenGrant\SimproSdk\Resource\PaymentTerms;
use StevenGrant\SimproSdk\Resource\PlantAndEquipment;
use StevenGrant\SimproSdk\Resource\PlantAndEquipmentAttachmentFolders;
use StevenGrant\SimproSdk\Resource\PlantAndEquipmentAttachments;
use StevenGrant\SimproSdk\Resource\PlantAndEquipmentCustomFields;
use StevenGrant\SimproSdk\Resource\PlantAndEquipmentServices;
use StevenGrant\SimproSdk\Resource\PlantRates;
use StevenGrant\SimproSdk\Resource\PlantTimesheets;
use StevenGrant\SimproSdk\Resource\PlantTypeCustomFields;
use StevenGrant\SimproSdk\Resource\PlantTypes;
use StevenGrant\SimproSdk\Resource\PrebuildAttachmentFolders;
use StevenGrant\SimproSdk\Resource\PrebuildAttachments;
use StevenGrant\SimproSdk\Resource\PrebuildCatalogs;
use StevenGrant\SimproSdk\Resource\PrebuildCustomFields;
use StevenGrant\SimproSdk\Resource\PrebuildGroups;
use StevenGrant\SimproSdk\Resource\PrebuildItemCustomFieldsSetup;
use StevenGrant\SimproSdk\Resource\Prebuilds;
use StevenGrant\SimproSdk\Resource\PrebuildSubGroups;
use StevenGrant\SimproSdk\Resource\PricingTiers;
use StevenGrant\SimproSdk\Resource\ProjectCustomFieldsSetup;
use StevenGrant\SimproSdk\Resource\ProjectStatusCodes;
use StevenGrant\SimproSdk\Resource\ProjectTags;
use StevenGrant\SimproSdk\Resource\PurchasingStages;
use StevenGrant\SimproSdk\Resource\QuoteArchiveReasons;
use StevenGrant\SimproSdk\Resource\QuoteAttachmentFolders;
use StevenGrant\SimproSdk\Resource\QuoteAttachments;
use StevenGrant\SimproSdk\Resource\QuoteContractorJobAttachmentFolders;
use StevenGrant\SimproSdk\Resource\QuoteContractorJobAttachments;
use StevenGrant\SimproSdk\Resource\QuoteContractorJobCustomFields;
use StevenGrant\SimproSdk\Resource\QuoteContractorJobs;
use StevenGrant\SimproSdk\Resource\QuoteCostCenterAssets;
use StevenGrant\SimproSdk\Resource\QuoteCostCenterCatalogItems;
use StevenGrant\SimproSdk\Resource\QuoteCostCenterLaborItems;
use StevenGrant\SimproSdk\Resource\QuoteCostCenterOneOffItems;
use StevenGrant\SimproSdk\Resource\QuoteCostCenterPrebuildItems;
use StevenGrant\SimproSdk\Resource\QuoteCostCenters;
use StevenGrant\SimproSdk\Resource\QuoteCostCenterSchedules;
use StevenGrant\SimproSdk\Resource\QuoteCostCenterServiceFees;
use StevenGrant\SimproSdk\Resource\QuoteCostCenterTasks;
use StevenGrant\SimproSdk\Resource\QuoteCostCenterWorkOrders;
use StevenGrant\SimproSdk\Resource\QuoteCostCenterWorkOrdersAssets;
use StevenGrant\SimproSdk\Resource\QuoteCostCenterWorkOrdersCustomFields;
use StevenGrant\SimproSdk\Resource\QuoteCustomFields;
use StevenGrant\SimproSdk\Resource\QuoteLock;
use StevenGrant\SimproSdk\Resource\QuoteLogs;
use StevenGrant\SimproSdk\Resource\QuoteNotes;
use StevenGrant\SimproSdk\Resource\Quotes;
use StevenGrant\SimproSdk\Resource\QuoteSections;
use StevenGrant\SimproSdk\Resource\QuoteTasks;
use StevenGrant\SimproSdk\Resource\QuoteTimelines;
use StevenGrant\SimproSdk\Resource\QuoteWorkOrders;
use StevenGrant\SimproSdk\Resource\ReceivableContacts;
use StevenGrant\SimproSdk\Resource\ReceivableInvoices;
use StevenGrant\SimproSdk\Resource\ReceivablePayments;
use StevenGrant\SimproSdk\Resource\Recommendations;
use StevenGrant\SimproSdk\Resource\RecurringInvoiceAttachmentFolders;
use StevenGrant\SimproSdk\Resource\RecurringInvoiceAttachments;
use StevenGrant\SimproSdk\Resource\RecurringInvoiceCostCenterCatalogItems;
use StevenGrant\SimproSdk\Resource\RecurringInvoiceCostCenterLaborItems;
use StevenGrant\SimproSdk\Resource\RecurringInvoiceCostCenterOneOffItems;
use StevenGrant\SimproSdk\Resource\RecurringInvoiceCostCenterPrebuildItems;
use StevenGrant\SimproSdk\Resource\RecurringInvoiceCostCenters;
use StevenGrant\SimproSdk\Resource\RecurringInvoiceCostCenterServiceFees;
use StevenGrant\SimproSdk\Resource\RecurringInvoiceCustomFields;
use StevenGrant\SimproSdk\Resource\RecurringInvoiceLogs;
use StevenGrant\SimproSdk\Resource\RecurringInvoices;
use StevenGrant\SimproSdk\Resource\RecurringInvoiceSections;
use StevenGrant\SimproSdk\Resource\RecurringInvoiceTimeline;
use StevenGrant\SimproSdk\Resource\RecurringJobAttachmentFolders;
use StevenGrant\SimproSdk\Resource\RecurringJobAttachments;
use StevenGrant\SimproSdk\Resource\RecurringJobCostCenterAssets;
use StevenGrant\SimproSdk\Resource\RecurringJobCostCenterCatalogs;
use StevenGrant\SimproSdk\Resource\RecurringJobCostCenterLabors;
use StevenGrant\SimproSdk\Resource\RecurringJobCostCenterOneOffs;
use StevenGrant\SimproSdk\Resource\RecurringJobCostCenterPrebuilds;
use StevenGrant\SimproSdk\Resource\RecurringJobCostCenters;
use StevenGrant\SimproSdk\Resource\RecurringJobCostCenterServiceFees;
use StevenGrant\SimproSdk\Resource\RecurringJobCustomFields;
use StevenGrant\SimproSdk\Resource\RecurringJobNotes;
use StevenGrant\SimproSdk\Resource\RecurringJobs;
use StevenGrant\SimproSdk\Resource\RecurringJobSections;
use StevenGrant\SimproSdk\Resource\RecurringJobTimelines;
use StevenGrant\SimproSdk\Resource\ResponseTimes;
use StevenGrant\SimproSdk\Resource\Retainages;
use StevenGrant\SimproSdk\Resource\ScheduleLogs;
use StevenGrant\SimproSdk\Resource\ScheduleRates;
use StevenGrant\SimproSdk\Resource\Schedules;
use StevenGrant\SimproSdk\Resource\SecurityGroups;
use StevenGrant\SimproSdk\Resource\ServiceFees;
use StevenGrant\SimproSdk\Resource\ServiceLevels;
use StevenGrant\SimproSdk\Resource\SingleTaxCodes;
use StevenGrant\SimproSdk\Resource\SiteAttachmentFolders;
use StevenGrant\SimproSdk\Resource\SiteAttachments;
use StevenGrant\SimproSdk\Resource\SiteContactCustomFields;
use StevenGrant\SimproSdk\Resource\SiteContactCustomFieldsSetup;
use StevenGrant\SimproSdk\Resource\SiteContacts;
use StevenGrant\SimproSdk\Resource\SiteCustomFields;
use StevenGrant\SimproSdk\Resource\SiteCustomFieldsSetup;
use StevenGrant\SimproSdk\Resource\SiteLaborRates;
use StevenGrant\SimproSdk\Resource\SitePreferredTechnicians;
use StevenGrant\SimproSdk\Resource\Sites;
use StevenGrant\SimproSdk\Resource\Staff;
use StevenGrant\SimproSdk\Resource\StockAllocations;
use StevenGrant\SimproSdk\Resource\StockItems;
use StevenGrant\SimproSdk\Resource\StockTakeReasons;
use StevenGrant\SimproSdk\Resource\StockTakes;
use StevenGrant\SimproSdk\Resource\StockTransferReasons;
use StevenGrant\SimproSdk\Resource\StockTransfers;
use StevenGrant\SimproSdk\Resource\StorageDevices;
use StevenGrant\SimproSdk\Resource\TakeOffTemplateCatalogs;
use StevenGrant\SimproSdk\Resource\TakeOffTemplateFromTakeOffTemplate;
use StevenGrant\SimproSdk\Resource\TakeOffTemplateGroups;
use StevenGrant\SimproSdk\Resource\TakeOffTemplateLabors;
use StevenGrant\SimproSdk\Resource\TakeOffTemplateLock;
use StevenGrant\SimproSdk\Resource\TakeOffTemplateOneOffs;
use StevenGrant\SimproSdk\Resource\TakeOffTemplatePrebuilds;
use StevenGrant\SimproSdk\Resource\TakeOffTemplates;
use StevenGrant\SimproSdk\Resource\TakeOffTemplateServiceFees;
use StevenGrant\SimproSdk\Resource\TakeOffTemplatesForRecurringInvoiceCostCenter;
use StevenGrant\SimproSdk\Resource\TakeOffTemplatesForRecurringJobCostCenter;
use StevenGrant\SimproSdk\Resource\TakeOffTemplateSubGroups;
use StevenGrant\SimproSdk\Resource\TaskAttachmentFolders;
use StevenGrant\SimproSdk\Resource\TaskAttachments;
use StevenGrant\SimproSdk\Resource\TaskCategories;
use StevenGrant\SimproSdk\Resource\TaskCustomFields;
use StevenGrant\SimproSdk\Resource\TaskCustomFieldsSetup;
use StevenGrant\SimproSdk\Resource\Tasks;
use StevenGrant\SimproSdk\Resource\TaxCodes;
use StevenGrant\SimproSdk\Resource\Teams;
use StevenGrant\SimproSdk\Resource\TechnicianAvailabilities;
use StevenGrant\SimproSdk\Resource\TestHistories;
use StevenGrant\SimproSdk\Resource\TestReadings;
use StevenGrant\SimproSdk\Resource\Timesheets;
use StevenGrant\SimproSdk\Resource\UnitsOfMeasurement;
use StevenGrant\SimproSdk\Resource\VendorAttachmentFolders;
use StevenGrant\SimproSdk\Resource\VendorAttachments;
use StevenGrant\SimproSdk\Resource\VendorBranches;
use StevenGrant\SimproSdk\Resource\VendorCatalogPrices;
use StevenGrant\SimproSdk\Resource\VendorContactCustomFields;
use StevenGrant\SimproSdk\Resource\VendorContactCustomFieldsSetup;
use StevenGrant\SimproSdk\Resource\VendorContacts;
use StevenGrant\SimproSdk\Resource\VendorCreditCatalogs;
use StevenGrant\SimproSdk\Resource\VendorCreditItems;
use StevenGrant\SimproSdk\Resource\VendorCredits;
use StevenGrant\SimproSdk\Resource\VendorCustomFields;
use StevenGrant\SimproSdk\Resource\VendorCustomFieldsSetup;
use StevenGrant\SimproSdk\Resource\VendorOrderAttachmentFolders;
use StevenGrant\SimproSdk\Resource\VendorOrderAttachments;
use StevenGrant\SimproSdk\Resource\VendorOrderCatalogs;
use StevenGrant\SimproSdk\Resource\VendorOrderCustomFields;
use StevenGrant\SimproSdk\Resource\VendorOrderCustomFieldsSetup;
use StevenGrant\SimproSdk\Resource\VendorOrderItemAllocations;
use StevenGrant\SimproSdk\Resource\VendorOrderItems;
use StevenGrant\SimproSdk\Resource\VendorOrderLogs;
use StevenGrant\SimproSdk\Resource\VendorOrders;
use StevenGrant\SimproSdk\Resource\VendorOrderStatusCodes;
use StevenGrant\SimproSdk\Resource\VendorQuoteCatalogs;
use StevenGrant\SimproSdk\Resource\VendorQuotes;
use StevenGrant\SimproSdk\Resource\VendorQuoteVendors;
use StevenGrant\SimproSdk\Resource\VendorReceipt;
use StevenGrant\SimproSdk\Resource\VendorReceiptCatalogs;
use StevenGrant\SimproSdk\Resource\VendorReceiptCredits;
use StevenGrant\SimproSdk\Resource\VendorReceiptItemAllocations;
use StevenGrant\SimproSdk\Resource\VendorReceiptItems;
use StevenGrant\SimproSdk\Resource\VendorReceipts;
use StevenGrant\SimproSdk\Resource\Vendors;
use StevenGrant\SimproSdk\Resource\WebhookSubscriptions;
use StevenGrant\SimproSdk\Resource\WorkOrderAssets;
use StevenGrant\SimproSdk\Resource\WorkOrderAttachments;
use StevenGrant\SimproSdk\Resource\WorkOrderCustomFieldsSetup;
use StevenGrant\SimproSdk\Resource\WorkOrders;
use StevenGrant\SimproSdk\Resource\Zones;

/**
 * Simpro Rest API
 */
class SimproSdk extends Connector
{
    public function __construct(
        protected string $baseUrl,
        protected ?string $accessToken = null,
        protected ?string $apiKey = null,
    ) {}

    public function resolveBaseUrl(): string
    {
        return rtrim($this->baseUrl, '/');
    }

    protected function defaultAuth(): ?Authenticator
    {
        return match (true) {
            $this->accessToken !== null => new TokenAuthenticator($this->accessToken),
            $this->apiKey !== null => new TokenAuthenticator($this->apiKey),
            default => null,
        };
    }

    public function accountingCategories(): AccountingCategories
    {
        return new AccountingCategories($this);
    }

    public function activities(): Activities
    {
        return new Activities($this);
    }

    public function activitySchedules(): ActivitySchedules
    {
        return new ActivitySchedules($this);
    }

    public function assetAttachmentFolders(): AssetAttachmentFolders
    {
        return new AssetAttachmentFolders($this);
    }

    public function assetAttachments(): AssetAttachments
    {
        return new AssetAttachments($this);
    }

    public function assetCustomFields(): AssetCustomFields
    {
        return new AssetCustomFields($this);
    }

    public function assetServiceLevels(): AssetServiceLevels
    {
        return new AssetServiceLevels($this);
    }

    public function assetTestHistories(): AssetTestHistories
    {
        return new AssetTestHistories($this);
    }

    public function assetTransfers(): AssetTransfers
    {
        return new AssetTransfers($this);
    }

    public function assetTypeAttachmentFolders(): AssetTypeAttachmentFolders
    {
        return new AssetTypeAttachmentFolders($this);
    }

    public function assetTypeAttachments(): AssetTypeAttachments
    {
        return new AssetTypeAttachments($this);
    }

    public function assetTypeCustomFields(): AssetTypeCustomFields
    {
        return new AssetTypeCustomFields($this);
    }

    public function assetTypeServiceLevels(): AssetTypeServiceLevels
    {
        return new AssetTypeServiceLevels($this);
    }

    public function assetTypes(): AssetTypes
    {
        return new AssetTypes($this);
    }

    public function businessGroups(): BusinessGroups
    {
        return new BusinessGroups($this);
    }

    public function catalogAttachmentFolders(): CatalogAttachmentFolders
    {
        return new CatalogAttachmentFolders($this);
    }

    public function catalogAttachments(): CatalogAttachments
    {
        return new CatalogAttachments($this);
    }

    public function catalogCurrencies(): CatalogCurrencies
    {
        return new CatalogCurrencies($this);
    }

    public function catalogCustomFields(): CatalogCustomFields
    {
        return new CatalogCustomFields($this);
    }

    public function catalogGroups(): CatalogGroups
    {
        return new CatalogGroups($this);
    }

    public function catalogInventories(): CatalogInventories
    {
        return new CatalogInventories($this);
    }

    public function catalogItemCustomFieldsSetup(): CatalogItemCustomFieldsSetup
    {
        return new CatalogItemCustomFieldsSetup($this);
    }

    public function catalogPricingTierPrices(): CatalogPricingTierPrices
    {
        return new CatalogPricingTierPrices($this);
    }

    public function catalogPricingTiers(): CatalogPricingTiers
    {
        return new CatalogPricingTiers($this);
    }

    public function catalogSubGroups(): CatalogSubGroups
    {
        return new CatalogSubGroups($this);
    }

    public function catalogVendors(): CatalogVendors
    {
        return new CatalogVendors($this);
    }

    public function catalogs(): Catalogs
    {
        return new Catalogs($this);
    }

    public function chartOfAccounts(): ChartOfAccounts
    {
        return new ChartOfAccounts($this);
    }

    public function combineTaxCodes(): CombineTaxCodes
    {
        return new CombineTaxCodes($this);
    }

    public function commissions(): Commissions
    {
        return new Commissions($this);
    }

    public function companies(): Companies
    {
        return new Companies($this);
    }

    public function companyDefaultSettings(): CompanyDefaultSettings
    {
        return new CompanyDefaultSettings($this);
    }

    public function componentTaxCodes(): ComponentTaxCodes
    {
        return new ComponentTaxCodes($this);
    }

    public function contactCustomFieldsSetup(): ContactCustomFieldsSetup
    {
        return new ContactCustomFieldsSetup($this);
    }

    public function contactLogs(): ContactLogs
    {
        return new ContactLogs($this);
    }

    public function contacts(): Contacts
    {
        return new Contacts($this);
    }

    public function contractorAttachmentFolders(): ContractorAttachmentFolders
    {
        return new ContractorAttachmentFolders($this);
    }

    public function contractorAttachments(): ContractorAttachments
    {
        return new ContractorAttachments($this);
    }

    public function contractorCustomFields(): ContractorCustomFields
    {
        return new ContractorCustomFields($this);
    }

    public function contractorCustomFieldsSetup(): ContractorCustomFieldsSetup
    {
        return new ContractorCustomFieldsSetup($this);
    }

    public function contractorInvoiceAttachmentFolders(): ContractorInvoiceAttachmentFolders
    {
        return new ContractorInvoiceAttachmentFolders($this);
    }

    public function contractorInvoiceAttachments(): ContractorInvoiceAttachments
    {
        return new ContractorInvoiceAttachments($this);
    }

    public function contractorInvoiceCustomFields(): ContractorInvoiceCustomFields
    {
        return new ContractorInvoiceCustomFields($this);
    }

    public function contractorInvoiceCustomFieldsSetup(): ContractorInvoiceCustomFieldsSetup
    {
        return new ContractorInvoiceCustomFieldsSetup($this);
    }

    public function contractorInvoiceVariances(): ContractorInvoiceVariances
    {
        return new ContractorInvoiceVariances($this);
    }

    public function contractorInvoices(): ContractorInvoices
    {
        return new ContractorInvoices($this);
    }

    public function contractorJobAttachmentFolders(): ContractorJobAttachmentFolders
    {
        return new ContractorJobAttachmentFolders($this);
    }

    public function contractorJobAttachments(): ContractorJobAttachments
    {
        return new ContractorJobAttachments($this);
    }

    public function contractorJobCustomFields(): ContractorJobCustomFields
    {
        return new ContractorJobCustomFields($this);
    }

    public function contractorJobCustomFieldsSetup(): ContractorJobCustomFieldsSetup
    {
        return new ContractorJobCustomFieldsSetup($this);
    }

    public function contractorJobLogs(): ContractorJobLogs
    {
        return new ContractorJobLogs($this);
    }

    public function contractorJobs(): ContractorJobs
    {
        return new ContractorJobs($this);
    }

    public function contractorLicenceAttachments(): ContractorLicenceAttachments
    {
        return new ContractorLicenceAttachments($this);
    }

    public function contractorLicences(): ContractorLicences
    {
        return new ContractorLicences($this);
    }

    public function contractorTimesheets(): ContractorTimesheets
    {
        return new ContractorTimesheets($this);
    }

    public function contractorVariances(): ContractorVariances
    {
        return new ContractorVariances($this);
    }

    public function contractors(): Contractors
    {
        return new Contractors($this);
    }

    public function costCenters(): CostCenters
    {
        return new CostCenters($this);
    }

    public function costToCompleteFinancialView(): CostToCompleteFinancialView
    {
        return new CostToCompleteFinancialView($this);
    }

    public function costToCompleteOperationsView(): CostToCompleteOperationsView
    {
        return new CostToCompleteOperationsView($this);
    }

    public function creditNoteCustomFields(): CreditNoteCustomFields
    {
        return new CreditNoteCustomFields($this);
    }

    public function creditNoteNotes(): CreditNoteNotes
    {
        return new CreditNoteNotes($this);
    }

    public function creditNotes(): CreditNotes
    {
        return new CreditNotes($this);
    }

    public function currencies(): Currencies
    {
        return new Currencies($this);
    }

    public function currentUser(): CurrentUser
    {
        return new CurrentUser($this);
    }

    public function customFields(): CustomFields
    {
        return new CustomFields($this);
    }

    public function customerAssets(): CustomerAssets
    {
        return new CustomerAssets($this);
    }

    public function customerAssignedCompanies(): CustomerAssignedCompanies
    {
        return new CustomerAssignedCompanies($this);
    }

    public function customerAttachmentFolders(): CustomerAttachmentFolders
    {
        return new CustomerAttachmentFolders($this);
    }

    public function customerAttachments(): CustomerAttachments
    {
        return new CustomerAttachments($this);
    }

    public function customerContactCustomFields(): CustomerContactCustomFields
    {
        return new CustomerContactCustomFields($this);
    }

    public function customerContactCustomFieldsSetup(): CustomerContactCustomFieldsSetup
    {
        return new CustomerContactCustomFieldsSetup($this);
    }

    public function customerContacts(): CustomerContacts
    {
        return new CustomerContacts($this);
    }

    public function customerContractCustomFields(): CustomerContractCustomFields
    {
        return new CustomerContractCustomFields($this);
    }

    public function customerContractCustomFieldsSetup(): CustomerContractCustomFieldsSetup
    {
        return new CustomerContractCustomFieldsSetup($this);
    }

    public function customerContractInflation(): CustomerContractInflation
    {
        return new CustomerContractInflation($this);
    }

    public function customerContractLaborRates(): CustomerContractLaborRates
    {
        return new CustomerContractLaborRates($this);
    }

    public function customerContractSearch(): CustomerContractSearch
    {
        return new CustomerContractSearch($this);
    }

    public function customerContractServiceLevelAssetTypes(): CustomerContractServiceLevelAssetTypes
    {
        return new CustomerContractServiceLevelAssetTypes($this);
    }

    public function customerContractServiceLevels(): CustomerContractServiceLevels
    {
        return new CustomerContractServiceLevels($this);
    }

    public function customerContracts(): CustomerContracts
    {
        return new CustomerContracts($this);
    }

    public function customerCustomFields(): CustomerCustomFields
    {
        return new CustomerCustomFields($this);
    }

    public function customerCustomFieldsSetup(): CustomerCustomFieldsSetup
    {
        return new CustomerCustomFieldsSetup($this);
    }

    public function customerGroups(): CustomerGroups
    {
        return new CustomerGroups($this);
    }

    public function customerInvoiceLogs(): CustomerInvoiceLogs
    {
        return new CustomerInvoiceLogs($this);
    }

    public function customerInvoiceStatusCodes(): CustomerInvoiceStatusCodes
    {
        return new CustomerInvoiceStatusCodes($this);
    }

    public function customerInvoices(): CustomerInvoices
    {
        return new CustomerInvoices($this);
    }

    public function customerLaborRateSearch(): CustomerLaborRateSearch
    {
        return new CustomerLaborRateSearch($this);
    }

    public function customerLaborRates(): CustomerLaborRates
    {
        return new CustomerLaborRates($this);
    }

    public function customerLogs(): CustomerLogs
    {
        return new CustomerLogs($this);
    }

    public function customerMemberships(): CustomerMemberships
    {
        return new CustomerMemberships($this);
    }

    public function customerNotes(): CustomerNotes
    {
        return new CustomerNotes($this);
    }

    public function customerPayments(): CustomerPayments
    {
        return new CustomerPayments($this);
    }

    public function customerProfiles(): CustomerProfiles
    {
        return new CustomerProfiles($this);
    }

    public function customerResponseTimeSearch(): CustomerResponseTimeSearch
    {
        return new CustomerResponseTimeSearch($this);
    }

    public function customerResponseTimes(): CustomerResponseTimes
    {
        return new CustomerResponseTimes($this);
    }

    public function customerTags(): CustomerTags
    {
        return new CustomerTags($this);
    }

    public function customerTasks(): CustomerTasks
    {
        return new CustomerTasks($this);
    }

    public function customers(): Customers
    {
        return new Customers($this);
    }

    public function dataFeedEvents(): DataFeedEvents
    {
        return new DataFeedEvents($this);
    }

    public function employeeAttachmentFolders(): EmployeeAttachmentFolders
    {
        return new EmployeeAttachmentFolders($this);
    }

    public function employeeAttachments(): EmployeeAttachments
    {
        return new EmployeeAttachments($this);
    }

    public function employeeCustomFields(): EmployeeCustomFields
    {
        return new EmployeeCustomFields($this);
    }

    public function employeeCustomFieldsSetup(): EmployeeCustomFieldsSetup
    {
        return new EmployeeCustomFieldsSetup($this);
    }

    public function employeeLicenceAttachments(): EmployeeLicenceAttachments
    {
        return new EmployeeLicenceAttachments($this);
    }

    public function employeeLicences(): EmployeeLicences
    {
        return new EmployeeLicences($this);
    }

    public function employeeTimesheets(): EmployeeTimesheets
    {
        return new EmployeeTimesheets($this);
    }

    public function employees(): Employees
    {
        return new Employees($this);
    }

    public function failurePoints(): FailurePoints
    {
        return new FailurePoints($this);
    }

    public function fitTimes(): FitTimes
    {
        return new FitTimes($this);
    }

    public function info(): Info
    {
        return new Info($this);
    }

    public function inventoryJournals(): InventoryJournals
    {
        return new InventoryJournals($this);
    }

    public function invoiceAttachForms(): InvoiceAttachForms
    {
        return new InvoiceAttachForms($this);
    }

    public function invoiceCostCenters(): InvoiceCostCenters
    {
        return new InvoiceCostCenters($this);
    }

    public function invoiceCreditNoteCustomFields(): InvoiceCreditNoteCustomFields
    {
        return new InvoiceCreditNoteCustomFields($this);
    }

    public function invoiceCreditNotes(): InvoiceCreditNotes
    {
        return new InvoiceCreditNotes($this);
    }

    public function invoiceCustomFields(): InvoiceCustomFields
    {
        return new InvoiceCustomFields($this);
    }

    public function invoiceCustomFieldsSetup(): InvoiceCustomFieldsSetup
    {
        return new InvoiceCustomFieldsSetup($this);
    }

    public function invoiceFormTemplates(): InvoiceFormTemplates
    {
        return new InvoiceFormTemplates($this);
    }

    public function invoiceForms(): InvoiceForms
    {
        return new InvoiceForms($this);
    }

    public function invoiceNotes(): InvoiceNotes
    {
        return new InvoiceNotes($this);
    }

    public function invoicePaymentLink(): InvoicePaymentLink
    {
        return new InvoicePaymentLink($this);
    }

    public function invoices(): Invoices
    {
        return new Invoices($this);
    }

    public function jobArchiveReasons(): JobArchiveReasons
    {
        return new JobArchiveReasons($this);
    }

    public function jobAttachForms(): JobAttachForms
    {
        return new JobAttachForms($this);
    }

    public function jobAttachmentFolders(): JobAttachmentFolders
    {
        return new JobAttachmentFolders($this);
    }

    public function jobAttachments(): JobAttachments
    {
        return new JobAttachments($this);
    }

    public function jobContractorJobCustomFields(): JobContractorJobCustomFields
    {
        return new JobContractorJobCustomFields($this);
    }

    public function jobContractorJobs(): JobContractorJobs
    {
        return new JobContractorJobs($this);
    }

    public function jobCostCenterAssets(): JobCostCenterAssets
    {
        return new JobCostCenterAssets($this);
    }

    public function jobCostCenterCatalogItems(): JobCostCenterCatalogItems
    {
        return new JobCostCenterCatalogItems($this);
    }

    public function jobCostCenterLaborItems(): JobCostCenterLaborItems
    {
        return new JobCostCenterLaborItems($this);
    }

    public function jobCostCenterLocks(): JobCostCenterLocks
    {
        return new JobCostCenterLocks($this);
    }

    public function jobCostCenterOneOffItems(): JobCostCenterOneOffItems
    {
        return new JobCostCenterOneOffItems($this);
    }

    public function jobCostCenterPrebuildItems(): JobCostCenterPrebuildItems
    {
        return new JobCostCenterPrebuildItems($this);
    }

    public function jobCostCenterSchedules(): JobCostCenterSchedules
    {
        return new JobCostCenterSchedules($this);
    }

    public function jobCostCenterServiceFees(): JobCostCenterServiceFees
    {
        return new JobCostCenterServiceFees($this);
    }

    public function jobCostCenterStockItems(): JobCostCenterStockItems
    {
        return new JobCostCenterStockItems($this);
    }

    public function jobCostCenterTasks(): JobCostCenterTasks
    {
        return new JobCostCenterTasks($this);
    }

    public function jobCostCenterWorkOrderAssetTestResultAttachments(): JobCostCenterWorkOrderAssetTestResultAttachments
    {
        return new JobCostCenterWorkOrderAssetTestResultAttachments($this);
    }

    public function jobCostCenterWorkOrderAssets(): JobCostCenterWorkOrderAssets
    {
        return new JobCostCenterWorkOrderAssets($this);
    }

    public function jobCostCenterWorkOrderCustomFields(): JobCostCenterWorkOrderCustomFields
    {
        return new JobCostCenterWorkOrderCustomFields($this);
    }

    public function jobCostCenterWorkOrderMobileSignatures(): JobCostCenterWorkOrderMobileSignatures
    {
        return new JobCostCenterWorkOrderMobileSignatures($this);
    }

    public function jobCostCenterWorkOrders(): JobCostCenterWorkOrders
    {
        return new JobCostCenterWorkOrders($this);
    }

    public function jobCostCenters(): JobCostCenters
    {
        return new JobCostCenters($this);
    }

    public function jobCustomFields(): JobCustomFields
    {
        return new JobCustomFields($this);
    }

    public function jobFormTemplates(): JobFormTemplates
    {
        return new JobFormTemplates($this);
    }

    public function jobForms(): JobForms
    {
        return new JobForms($this);
    }

    public function jobInvoiceCustomFields(): JobInvoiceCustomFields
    {
        return new JobInvoiceCustomFields($this);
    }

    public function jobInvoices(): JobInvoices
    {
        return new JobInvoices($this);
    }

    public function jobLock(): JobLock
    {
        return new JobLock($this);
    }

    public function jobLogs(): JobLogs
    {
        return new JobLogs($this);
    }

    public function jobNotes(): JobNotes
    {
        return new JobNotes($this);
    }

    public function jobSections(): JobSections
    {
        return new JobSections($this);
    }

    public function jobTasks(): JobTasks
    {
        return new JobTasks($this);
    }

    public function jobTimelines(): JobTimelines
    {
        return new JobTimelines($this);
    }

    public function jobWorkOrders(): JobWorkOrders
    {
        return new JobWorkOrders($this);
    }

    public function jobs(): Jobs
    {
        return new Jobs($this);
    }

    public function journals(): Journals
    {
        return new Journals($this);
    }

    public function laborRateOverhead(): LaborRateOverhead
    {
        return new LaborRateOverhead($this);
    }

    public function laborRates(): LaborRates
    {
        return new LaborRates($this);
    }

    public function leadArchiveReasons(): LeadArchiveReasons
    {
        return new LeadArchiveReasons($this);
    }

    public function leadAttachmentFolders(): LeadAttachmentFolders
    {
        return new LeadAttachmentFolders($this);
    }

    public function leadAttachments(): LeadAttachments
    {
        return new LeadAttachments($this);
    }

    public function leadCustomFields(): LeadCustomFields
    {
        return new LeadCustomFields($this);
    }

    public function leadSchedules(): LeadSchedules
    {
        return new LeadSchedules($this);
    }

    public function leads(): Leads
    {
        return new Leads($this);
    }

    public function licences(): Licences
    {
        return new Licences($this);
    }

    public function memberships(): Memberships
    {
        return new Memberships($this);
    }

    public function mergeCatalogs(): MergeCatalogs
    {
        return new MergeCatalogs($this);
    }

    public function mobileStatusLogs(): MobileStatusLogs
    {
        return new MobileStatusLogs($this);
    }

    public function notes(): Notes
    {
        return new Notes($this);
    }

    public function payableContacts(): PayableContacts
    {
        return new PayableContacts($this);
    }

    public function payableInvoices(): PayableInvoices
    {
        return new PayableInvoices($this);
    }

    public function paymentMethods(): PaymentMethods
    {
        return new PaymentMethods($this);
    }

    public function paymentTerms(): PaymentTerms
    {
        return new PaymentTerms($this);
    }

    public function plantAndEquipment(): PlantAndEquipment
    {
        return new PlantAndEquipment($this);
    }

    public function plantAndEquipmentAttachmentFolders(): PlantAndEquipmentAttachmentFolders
    {
        return new PlantAndEquipmentAttachmentFolders($this);
    }

    public function plantAndEquipmentAttachments(): PlantAndEquipmentAttachments
    {
        return new PlantAndEquipmentAttachments($this);
    }

    public function plantAndEquipmentCustomFields(): PlantAndEquipmentCustomFields
    {
        return new PlantAndEquipmentCustomFields($this);
    }

    public function plantAndEquipmentServices(): PlantAndEquipmentServices
    {
        return new PlantAndEquipmentServices($this);
    }

    public function plantRates(): PlantRates
    {
        return new PlantRates($this);
    }

    public function plantTimesheets(): PlantTimesheets
    {
        return new PlantTimesheets($this);
    }

    public function plantTypeCustomFields(): PlantTypeCustomFields
    {
        return new PlantTypeCustomFields($this);
    }

    public function plantTypes(): PlantTypes
    {
        return new PlantTypes($this);
    }

    public function prebuildAttachmentFolders(): PrebuildAttachmentFolders
    {
        return new PrebuildAttachmentFolders($this);
    }

    public function prebuildAttachments(): PrebuildAttachments
    {
        return new PrebuildAttachments($this);
    }

    public function prebuildCatalogs(): PrebuildCatalogs
    {
        return new PrebuildCatalogs($this);
    }

    public function prebuildCustomFields(): PrebuildCustomFields
    {
        return new PrebuildCustomFields($this);
    }

    public function prebuildGroups(): PrebuildGroups
    {
        return new PrebuildGroups($this);
    }

    public function prebuildItemCustomFieldsSetup(): PrebuildItemCustomFieldsSetup
    {
        return new PrebuildItemCustomFieldsSetup($this);
    }

    public function prebuildSubGroups(): PrebuildSubGroups
    {
        return new PrebuildSubGroups($this);
    }

    public function prebuilds(): Prebuilds
    {
        return new Prebuilds($this);
    }

    public function pricingTiers(): PricingTiers
    {
        return new PricingTiers($this);
    }

    public function projectCustomFieldsSetup(): ProjectCustomFieldsSetup
    {
        return new ProjectCustomFieldsSetup($this);
    }

    public function projectStatusCodes(): ProjectStatusCodes
    {
        return new ProjectStatusCodes($this);
    }

    public function projectTags(): ProjectTags
    {
        return new ProjectTags($this);
    }

    public function purchasingStages(): PurchasingStages
    {
        return new PurchasingStages($this);
    }

    public function quoteArchiveReasons(): QuoteArchiveReasons
    {
        return new QuoteArchiveReasons($this);
    }

    public function quoteAttachmentFolders(): QuoteAttachmentFolders
    {
        return new QuoteAttachmentFolders($this);
    }

    public function quoteAttachments(): QuoteAttachments
    {
        return new QuoteAttachments($this);
    }

    public function quoteContractorJobAttachmentFolders(): QuoteContractorJobAttachmentFolders
    {
        return new QuoteContractorJobAttachmentFolders($this);
    }

    public function quoteContractorJobAttachments(): QuoteContractorJobAttachments
    {
        return new QuoteContractorJobAttachments($this);
    }

    public function quoteContractorJobCustomFields(): QuoteContractorJobCustomFields
    {
        return new QuoteContractorJobCustomFields($this);
    }

    public function quoteContractorJobs(): QuoteContractorJobs
    {
        return new QuoteContractorJobs($this);
    }

    public function quoteCostCenterAssets(): QuoteCostCenterAssets
    {
        return new QuoteCostCenterAssets($this);
    }

    public function quoteCostCenterCatalogItems(): QuoteCostCenterCatalogItems
    {
        return new QuoteCostCenterCatalogItems($this);
    }

    public function quoteCostCenterLaborItems(): QuoteCostCenterLaborItems
    {
        return new QuoteCostCenterLaborItems($this);
    }

    public function quoteCostCenterOneOffItems(): QuoteCostCenterOneOffItems
    {
        return new QuoteCostCenterOneOffItems($this);
    }

    public function quoteCostCenterPrebuildItems(): QuoteCostCenterPrebuildItems
    {
        return new QuoteCostCenterPrebuildItems($this);
    }

    public function quoteCostCenterSchedules(): QuoteCostCenterSchedules
    {
        return new QuoteCostCenterSchedules($this);
    }

    public function quoteCostCenterServiceFees(): QuoteCostCenterServiceFees
    {
        return new QuoteCostCenterServiceFees($this);
    }

    public function quoteCostCenterTasks(): QuoteCostCenterTasks
    {
        return new QuoteCostCenterTasks($this);
    }

    public function quoteCostCenterWorkOrders(): QuoteCostCenterWorkOrders
    {
        return new QuoteCostCenterWorkOrders($this);
    }

    public function quoteCostCenterWorkOrdersAssets(): QuoteCostCenterWorkOrdersAssets
    {
        return new QuoteCostCenterWorkOrdersAssets($this);
    }

    public function quoteCostCenterWorkOrdersCustomFields(): QuoteCostCenterWorkOrdersCustomFields
    {
        return new QuoteCostCenterWorkOrdersCustomFields($this);
    }

    public function quoteCostCenters(): QuoteCostCenters
    {
        return new QuoteCostCenters($this);
    }

    public function quoteCustomFields(): QuoteCustomFields
    {
        return new QuoteCustomFields($this);
    }

    public function quoteLock(): QuoteLock
    {
        return new QuoteLock($this);
    }

    public function quoteLogs(): QuoteLogs
    {
        return new QuoteLogs($this);
    }

    public function quoteNotes(): QuoteNotes
    {
        return new QuoteNotes($this);
    }

    public function quoteSections(): QuoteSections
    {
        return new QuoteSections($this);
    }

    public function quoteTasks(): QuoteTasks
    {
        return new QuoteTasks($this);
    }

    public function quoteTimelines(): QuoteTimelines
    {
        return new QuoteTimelines($this);
    }

    public function quoteWorkOrders(): QuoteWorkOrders
    {
        return new QuoteWorkOrders($this);
    }

    public function quotes(): Quotes
    {
        return new Quotes($this);
    }

    public function receivableContacts(): ReceivableContacts
    {
        return new ReceivableContacts($this);
    }

    public function receivableInvoices(): ReceivableInvoices
    {
        return new ReceivableInvoices($this);
    }

    public function receivablePayments(): ReceivablePayments
    {
        return new ReceivablePayments($this);
    }

    public function recommendations(): Recommendations
    {
        return new Recommendations($this);
    }

    public function recurringInvoiceAttachmentFolders(): RecurringInvoiceAttachmentFolders
    {
        return new RecurringInvoiceAttachmentFolders($this);
    }

    public function recurringInvoiceAttachments(): RecurringInvoiceAttachments
    {
        return new RecurringInvoiceAttachments($this);
    }

    public function recurringInvoiceCostCenterCatalogItems(): RecurringInvoiceCostCenterCatalogItems
    {
        return new RecurringInvoiceCostCenterCatalogItems($this);
    }

    public function recurringInvoiceCostCenterLaborItems(): RecurringInvoiceCostCenterLaborItems
    {
        return new RecurringInvoiceCostCenterLaborItems($this);
    }

    public function recurringInvoiceCostCenterOneOffItems(): RecurringInvoiceCostCenterOneOffItems
    {
        return new RecurringInvoiceCostCenterOneOffItems($this);
    }

    public function recurringInvoiceCostCenterPrebuildItems(): RecurringInvoiceCostCenterPrebuildItems
    {
        return new RecurringInvoiceCostCenterPrebuildItems($this);
    }

    public function recurringInvoiceCostCenterServiceFees(): RecurringInvoiceCostCenterServiceFees
    {
        return new RecurringInvoiceCostCenterServiceFees($this);
    }

    public function recurringInvoiceCostCenters(): RecurringInvoiceCostCenters
    {
        return new RecurringInvoiceCostCenters($this);
    }

    public function recurringInvoiceCustomFields(): RecurringInvoiceCustomFields
    {
        return new RecurringInvoiceCustomFields($this);
    }

    public function recurringInvoiceLogs(): RecurringInvoiceLogs
    {
        return new RecurringInvoiceLogs($this);
    }

    public function recurringInvoiceSections(): RecurringInvoiceSections
    {
        return new RecurringInvoiceSections($this);
    }

    public function recurringInvoiceTimeline(): RecurringInvoiceTimeline
    {
        return new RecurringInvoiceTimeline($this);
    }

    public function recurringInvoices(): RecurringInvoices
    {
        return new RecurringInvoices($this);
    }

    public function recurringJobAttachmentFolders(): RecurringJobAttachmentFolders
    {
        return new RecurringJobAttachmentFolders($this);
    }

    public function recurringJobAttachments(): RecurringJobAttachments
    {
        return new RecurringJobAttachments($this);
    }

    public function recurringJobCostCenterAssets(): RecurringJobCostCenterAssets
    {
        return new RecurringJobCostCenterAssets($this);
    }

    public function recurringJobCostCenterCatalogs(): RecurringJobCostCenterCatalogs
    {
        return new RecurringJobCostCenterCatalogs($this);
    }

    public function recurringJobCostCenterLabors(): RecurringJobCostCenterLabors
    {
        return new RecurringJobCostCenterLabors($this);
    }

    public function recurringJobCostCenterOneOffs(): RecurringJobCostCenterOneOffs
    {
        return new RecurringJobCostCenterOneOffs($this);
    }

    public function recurringJobCostCenterPrebuilds(): RecurringJobCostCenterPrebuilds
    {
        return new RecurringJobCostCenterPrebuilds($this);
    }

    public function recurringJobCostCenterServiceFees(): RecurringJobCostCenterServiceFees
    {
        return new RecurringJobCostCenterServiceFees($this);
    }

    public function recurringJobCostCenters(): RecurringJobCostCenters
    {
        return new RecurringJobCostCenters($this);
    }

    public function recurringJobCustomFields(): RecurringJobCustomFields
    {
        return new RecurringJobCustomFields($this);
    }

    public function recurringJobNotes(): RecurringJobNotes
    {
        return new RecurringJobNotes($this);
    }

    public function recurringJobSections(): RecurringJobSections
    {
        return new RecurringJobSections($this);
    }

    public function recurringJobTimelines(): RecurringJobTimelines
    {
        return new RecurringJobTimelines($this);
    }

    public function recurringJobs(): RecurringJobs
    {
        return new RecurringJobs($this);
    }

    public function responseTimes(): ResponseTimes
    {
        return new ResponseTimes($this);
    }

    public function retainages(): Retainages
    {
        return new Retainages($this);
    }

    public function scheduleLogs(): ScheduleLogs
    {
        return new ScheduleLogs($this);
    }

    public function scheduleRates(): ScheduleRates
    {
        return new ScheduleRates($this);
    }

    public function schedules(): Schedules
    {
        return new Schedules($this);
    }

    public function securityGroups(): SecurityGroups
    {
        return new SecurityGroups($this);
    }

    public function serviceFees(): ServiceFees
    {
        return new ServiceFees($this);
    }

    public function serviceLevels(): ServiceLevels
    {
        return new ServiceLevels($this);
    }

    public function singleTaxCodes(): SingleTaxCodes
    {
        return new SingleTaxCodes($this);
    }

    public function siteAttachmentFolders(): SiteAttachmentFolders
    {
        return new SiteAttachmentFolders($this);
    }

    public function siteAttachments(): SiteAttachments
    {
        return new SiteAttachments($this);
    }

    public function siteContactCustomFields(): SiteContactCustomFields
    {
        return new SiteContactCustomFields($this);
    }

    public function siteContactCustomFieldsSetup(): SiteContactCustomFieldsSetup
    {
        return new SiteContactCustomFieldsSetup($this);
    }

    public function siteContacts(): SiteContacts
    {
        return new SiteContacts($this);
    }

    public function siteCustomFields(): SiteCustomFields
    {
        return new SiteCustomFields($this);
    }

    public function siteCustomFieldsSetup(): SiteCustomFieldsSetup
    {
        return new SiteCustomFieldsSetup($this);
    }

    public function siteLaborRates(): SiteLaborRates
    {
        return new SiteLaborRates($this);
    }

    public function sitePreferredTechnicians(): SitePreferredTechnicians
    {
        return new SitePreferredTechnicians($this);
    }

    public function sites(): Sites
    {
        return new Sites($this);
    }

    public function staff(): Staff
    {
        return new Staff($this);
    }

    public function stockAllocations(): StockAllocations
    {
        return new StockAllocations($this);
    }

    public function stockItems(): StockItems
    {
        return new StockItems($this);
    }

    public function stockTakeReasons(): StockTakeReasons
    {
        return new StockTakeReasons($this);
    }

    public function stockTakes(): StockTakes
    {
        return new StockTakes($this);
    }

    public function stockTransferReasons(): StockTransferReasons
    {
        return new StockTransferReasons($this);
    }

    public function stockTransfers(): StockTransfers
    {
        return new StockTransfers($this);
    }

    public function storageDevices(): StorageDevices
    {
        return new StorageDevices($this);
    }

    public function takeOffTemplateCatalogs(): TakeOffTemplateCatalogs
    {
        return new TakeOffTemplateCatalogs($this);
    }

    public function takeOffTemplateFromTakeOffTemplate(): TakeOffTemplateFromTakeOffTemplate
    {
        return new TakeOffTemplateFromTakeOffTemplate($this);
    }

    public function takeOffTemplateGroups(): TakeOffTemplateGroups
    {
        return new TakeOffTemplateGroups($this);
    }

    public function takeOffTemplateLabors(): TakeOffTemplateLabors
    {
        return new TakeOffTemplateLabors($this);
    }

    public function takeOffTemplateLock(): TakeOffTemplateLock
    {
        return new TakeOffTemplateLock($this);
    }

    public function takeOffTemplateOneOffs(): TakeOffTemplateOneOffs
    {
        return new TakeOffTemplateOneOffs($this);
    }

    public function takeOffTemplatePrebuilds(): TakeOffTemplatePrebuilds
    {
        return new TakeOffTemplatePrebuilds($this);
    }

    public function takeOffTemplateServiceFees(): TakeOffTemplateServiceFees
    {
        return new TakeOffTemplateServiceFees($this);
    }

    public function takeOffTemplateSubGroups(): TakeOffTemplateSubGroups
    {
        return new TakeOffTemplateSubGroups($this);
    }

    public function takeOffTemplates(): TakeOffTemplates
    {
        return new TakeOffTemplates($this);
    }

    public function takeOffTemplatesForRecurringInvoiceCostCenter(): TakeOffTemplatesForRecurringInvoiceCostCenter
    {
        return new TakeOffTemplatesForRecurringInvoiceCostCenter($this);
    }

    public function takeOffTemplatesForRecurringJobCostCenter(): TakeOffTemplatesForRecurringJobCostCenter
    {
        return new TakeOffTemplatesForRecurringJobCostCenter($this);
    }

    public function taskAttachmentFolders(): TaskAttachmentFolders
    {
        return new TaskAttachmentFolders($this);
    }

    public function taskAttachments(): TaskAttachments
    {
        return new TaskAttachments($this);
    }

    public function taskCategories(): TaskCategories
    {
        return new TaskCategories($this);
    }

    public function taskCustomFields(): TaskCustomFields
    {
        return new TaskCustomFields($this);
    }

    public function taskCustomFieldsSetup(): TaskCustomFieldsSetup
    {
        return new TaskCustomFieldsSetup($this);
    }

    public function tasks(): Tasks
    {
        return new Tasks($this);
    }

    public function taxCodes(): TaxCodes
    {
        return new TaxCodes($this);
    }

    public function teams(): Teams
    {
        return new Teams($this);
    }

    public function technicianAvailabilities(): TechnicianAvailabilities
    {
        return new TechnicianAvailabilities($this);
    }

    public function testHistories(): TestHistories
    {
        return new TestHistories($this);
    }

    public function testReadings(): TestReadings
    {
        return new TestReadings($this);
    }

    public function timesheets(): Timesheets
    {
        return new Timesheets($this);
    }

    public function unitsOfMeasurement(): UnitsOfMeasurement
    {
        return new UnitsOfMeasurement($this);
    }

    public function vendorAttachmentFolders(): VendorAttachmentFolders
    {
        return new VendorAttachmentFolders($this);
    }

    public function vendorAttachments(): VendorAttachments
    {
        return new VendorAttachments($this);
    }

    public function vendorBranches(): VendorBranches
    {
        return new VendorBranches($this);
    }

    public function vendorCatalogPrices(): VendorCatalogPrices
    {
        return new VendorCatalogPrices($this);
    }

    public function vendorContactCustomFields(): VendorContactCustomFields
    {
        return new VendorContactCustomFields($this);
    }

    public function vendorContactCustomFieldsSetup(): VendorContactCustomFieldsSetup
    {
        return new VendorContactCustomFieldsSetup($this);
    }

    public function vendorContacts(): VendorContacts
    {
        return new VendorContacts($this);
    }

    public function vendorCreditCatalogs(): VendorCreditCatalogs
    {
        return new VendorCreditCatalogs($this);
    }

    public function vendorCreditItems(): VendorCreditItems
    {
        return new VendorCreditItems($this);
    }

    public function vendorCredits(): VendorCredits
    {
        return new VendorCredits($this);
    }

    public function vendorCustomFields(): VendorCustomFields
    {
        return new VendorCustomFields($this);
    }

    public function vendorCustomFieldsSetup(): VendorCustomFieldsSetup
    {
        return new VendorCustomFieldsSetup($this);
    }

    public function vendorOrderAttachmentFolders(): VendorOrderAttachmentFolders
    {
        return new VendorOrderAttachmentFolders($this);
    }

    public function vendorOrderAttachments(): VendorOrderAttachments
    {
        return new VendorOrderAttachments($this);
    }

    public function vendorOrderCatalogs(): VendorOrderCatalogs
    {
        return new VendorOrderCatalogs($this);
    }

    public function vendorOrderCustomFields(): VendorOrderCustomFields
    {
        return new VendorOrderCustomFields($this);
    }

    public function vendorOrderCustomFieldsSetup(): VendorOrderCustomFieldsSetup
    {
        return new VendorOrderCustomFieldsSetup($this);
    }

    public function vendorOrderItemAllocations(): VendorOrderItemAllocations
    {
        return new VendorOrderItemAllocations($this);
    }

    public function vendorOrderItems(): VendorOrderItems
    {
        return new VendorOrderItems($this);
    }

    public function vendorOrderLogs(): VendorOrderLogs
    {
        return new VendorOrderLogs($this);
    }

    public function vendorOrderStatusCodes(): VendorOrderStatusCodes
    {
        return new VendorOrderStatusCodes($this);
    }

    public function vendorOrders(): VendorOrders
    {
        return new VendorOrders($this);
    }

    public function vendorQuoteCatalogs(): VendorQuoteCatalogs
    {
        return new VendorQuoteCatalogs($this);
    }

    public function vendorQuoteVendors(): VendorQuoteVendors
    {
        return new VendorQuoteVendors($this);
    }

    public function vendorQuotes(): VendorQuotes
    {
        return new VendorQuotes($this);
    }

    public function vendorReceipt(): VendorReceipt
    {
        return new VendorReceipt($this);
    }

    public function vendorReceiptCatalogs(): VendorReceiptCatalogs
    {
        return new VendorReceiptCatalogs($this);
    }

    public function vendorReceiptCredits(): VendorReceiptCredits
    {
        return new VendorReceiptCredits($this);
    }

    public function vendorReceiptItemAllocations(): VendorReceiptItemAllocations
    {
        return new VendorReceiptItemAllocations($this);
    }

    public function vendorReceiptItems(): VendorReceiptItems
    {
        return new VendorReceiptItems($this);
    }

    public function vendorReceipts(): VendorReceipts
    {
        return new VendorReceipts($this);
    }

    public function vendors(): Vendors
    {
        return new Vendors($this);
    }

    public function webhookSubscriptions(): WebhookSubscriptions
    {
        return new WebhookSubscriptions($this);
    }

    public function workOrderAssets(): WorkOrderAssets
    {
        return new WorkOrderAssets($this);
    }

    public function workOrderAttachments(): WorkOrderAttachments
    {
        return new WorkOrderAttachments($this);
    }

    public function workOrderCustomFieldsSetup(): WorkOrderCustomFieldsSetup
    {
        return new WorkOrderCustomFieldsSetup($this);
    }

    public function workOrders(): WorkOrders
    {
        return new WorkOrders($this);
    }

    public function zones(): Zones
    {
        return new Zones($this);
    }
}
