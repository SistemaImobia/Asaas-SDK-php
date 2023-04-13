<?php
namespace Imobia\Asaas\Api;

use Imobia\Asaas\Entity\BankAccount as BankAccountEntity;

/**
 * BankAccount API Endpoint
 *
 * @author David Berri <dwbwill@gmail.com>
 */
class BankAccount extends \Imobia\Asaas\Api\AbstractApi
{
    public function getAll()
    {
        $balance = $this->adapter->get(sprintf('%s/bankAccounts/mainAccount', $this->endpoint));

        return new BankAccountEntity(json_decode($balance));
    }

    public function getAllAccounts()
    {
        $balance = $this->adapter->get(sprintf('%s/bankAccounts', $this->endpoint));

        return new BankAccountEntity(json_decode($balance));
    }

    /**
     * Creates new BankAccount
     *
     * @param   array  $data  BankAccount Data
     * @return  BankAccountEntity
     */
    public function create(array $data)
    {
        $bankAccount = $this->adapter->post(sprintf('%s/bankAccounts/mainAccount', $this->endpoint), $data);

        $bankAccount = json_decode($bankAccount);

        return new BankAccountEntity($bankAccount);
    }

    /**
     * Delete a BankAccount
     *
     * @param   array  $data  BankAccount Data
     * @return  BankAccountEntity
     */
    public function delete($id)
    {
        $bankAccount = $this->adapter->delete(sprintf('%s/bankAccounts?id=', $this->endpoint, $id));

        $bankAccount = json_decode($bankAccount);

        return new BankAccountEntity($bankAccount);
    }
}
