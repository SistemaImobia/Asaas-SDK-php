<?php
namespace Imobia\Asaas\Api;

use Imobia\Asaas\Entity\MyAccount as MyAccountEntity;

/**
 * MyAccount API Endpoint
 *
 * @author Mateus Belli <mateusbelli@hotmail.com>
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

        return new MyAccountEntity(json_decode($status));
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

    public function documents()
    {
        $documents = $this->adapter->get(sprintf('%s/myAccount/documents', $this->endpoint));

        return $documents;
    }

    public function createDocument(array $data, string $id)
    {
        $documents = $this->adapter->post(sprintf('%s/myAccount/documents/' . $id, $this->endpoint), $data);

        return $documents;
    }
}
