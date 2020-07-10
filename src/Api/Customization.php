<?php

namespace Imobia\Asaas\Api;

use Imobia\Asaas\Entity\Customization as CustomizationEntity;

/**
 * PaymentCheckoutConfig API Endpoint
 * 
 * @author Mateus Belli <mateus@useimobia.com.br>
 */
class Customization extends \Imobia\Asaas\Api\AbstractApi
{
    /**
     * Recover customization
     * 
     * @return CustomizationEntity
     */
    public function get()
    {
        $customization = $this->adapter->get(sprintf('%s/myAccount/paymentCheckoutConfig', $this->endpoint));

        $customization = json_decode($customization);

        return new CustomizationEntity($customization);
    }

    /**
     * Update customization
     * 
     * @param array $data
     * @return CustomizationEntity
     */
    public function update(array $data)
    {
        $customization = $this->adapter->post(sprintf('%s/myAccount/paymentCheckoutConfig', $this->endpoint), $data);

        $customization = json_decode($customization);

        return new CustomizationEntity($customization);
    }
}