<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\LaborRateOverhead\ListSetupLaborLaborRatesOverhead;
use StevenGrant\SimproSdk\Requests\LaborRateOverhead\UpdateSetupLaborLaborRatesOverhead;

class LaborRateOverhead extends BaseResource
{
    public function listSetupLaborLaborRatesOverhead(): Response
    {
        return $this->connector->send(new ListSetupLaborLaborRatesOverhead);
    }

    public function updateSetupLaborLaborRatesOverhead(): Response
    {
        return $this->connector->send(new UpdateSetupLaborLaborRatesOverhead);
    }
}
