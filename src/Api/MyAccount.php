<?php
namespace Imobia\Asaas\Api;

use Imobia\Asaas\Entity\MyAccount as MyAccountEntity;

/**
 * Account API Endpoint
 *
 * @author Mateus Belli <mateus@useimobia.com>
 */
class MyAccount extends \Imobia\Asaas\Api\AbstractApi
{
    /**
     * Get registration situation
     *
     * @return  MyAccountEntity
     */
    public function status()
    {
        $status = $this->adapter->get(sprintf('%s/myAccount/status', $this->endpoint));

        return $status;
    }

    /**
     * Get documentation situation
     *
     * @return  MyAccountEntity
     */
    public function documentation()
    {
        $documentation = $this->adapter->get(sprintf('%s/myAccount/status/documentation', $this->endpoint));

        return $documentation;
    }
}