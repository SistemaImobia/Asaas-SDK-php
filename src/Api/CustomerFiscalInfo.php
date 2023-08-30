<?php
namespace Imobia\Asaas\Api;

use Imobia\Asaas\Entity\CustomerFiscalInfo as EntityCustomerFiscalInfo;

/**
 * Customer Fiscal Info API Endpoint
 *
 * @author David Berri <dwbwill@gmail.com>
 */
class CustomerFiscalInfo extends \Imobia\Asaas\Api\AbstractApi
{
    public function index()
    {
        $info = $this->adapter->get(sprintf('%s/customerFiscalInfo', $this->endpoint));

        return json_decode($info);
    }

    public function update(array $data)
    {
        $info = $this->adapter->post(sprintf('%s/customerFiscalInfo'), $data);

        return new EntityCustomerFiscalInfo($info);
    }

    public function getMunicipalOptions()
    {
        $info = $this->adapter->get(sprintf('%s/customerFiscalInfo/municipalOptions', $this->endpoint));

        return new EntityCustomerFiscalInfo($info);
    }
}
