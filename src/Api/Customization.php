<?php

namespace Imobia\Asaas\Api;

use Imobia\Asaas\Entity\Customization as CustomizationEntity;

/**
 * PaymentCheckoutConfig API Endpoint
 *
 * @author Mateus Belli <mateusbelli@hotmail.com>
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

        if (array_key_exists('logoFile', $data)) {
            $multipartData = [];

            foreach ($data as $key => $value) {
                $multipartElement = [
                    'name'     => $key,
                    'contents' => $value,
                ];
            }

            $customization = $this->adapter->post(sprintf('%s/myAccount/paymentCheckoutConfig', $this->endpoint), $multipartData, 'multipart');

            return json_decode($customization, true);
        }

        $customization = $this->adapter->post(sprintf('%s/myAccount/paymentCheckoutConfig', $this->endpoint), $data);

        $customization = json_decode($customization);

        return new CustomizationEntity($customization);
    }
}
