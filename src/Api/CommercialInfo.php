<?php

namespace Imobia\Asaas\Api;

use Imobia\Asaas\Entity\CommercialInfo as CommercialInfoEntity;

/**
 * PaymentCheckoutConfig API Endpoint
 *
 * @author Mateus Belli <mateusbelli@hotmail.com>
 */
class CommercialInfo extends \Imobia\Asaas\Api\AbstractApi
{
    /**
     * Recover customization
     *
     * @return CommercialInfoEntity
     */
    public function get()
    {
        $commercialInfo = $this->adapter->get(sprintf('%s/myAccount/commercialInfo', $this->endpoint));

        $commercialInfo = json_decode($commercialInfo);

        return new CommercialInfoEntity($commercialInfo);
    }
}
