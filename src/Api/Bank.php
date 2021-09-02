<?php
namespace Imobia\Asaas\Api;

use Imobia\Asaas\Entity\Bank as BankEntity;

/**
 * Bank API Endpoint
 *
 * @author Mateus Belli <mateusbelli@hotmail.com>
 */
class Bank extends \Imobia\Asaas\Api\AbstractApi
{
    public function getAll()
    {
        $balance = $this->adapter->get(sprintf('%s/banks', $this->endpoint));

        return new BankEntity(json_decode($balance));
    }
}
