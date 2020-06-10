<?php
namespace Softr\Asaas\Api;

use Softr\Asaas\Entity\MyAccount as MyAccountEntity;

/**
 * Account API Endpoint
 *
 * @author Mateus Belli <mateus@useimobia.com>
 */
class MyAccount extends \Softr\Asaas\Api\AbstractApi
{
    /**
     * Get registration situation
     *
     * @param   array  $data  Account Data
     * @return  MyAccountEntity
     */
    public function status(array $data)
    {
        $status = $this->adapter->get(sprintf('%s/myAccount/status', $this->endpoint));

        return $status;
    }

    /**
     * Get documentation situation
     *
     * @param   array  $data  Account Data
     * @return  MyAccountEntity
     */
    public function documentation(array $data)
    {
        $documentation = $this->adapter->get(sprintf('%s/myAccount/status/documentation', $this->endpoint));

        return $documentation;
    }
}