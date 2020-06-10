<?php
namespace Imobia\Asaas;

// API's
use Imobia\Asaas\Adapter\AdapterInterface;
use Imobia\Asaas\Api\Account;
use Imobia\Asaas\Api\Balance;
use Imobia\Asaas\Api\BankAccount;
use Imobia\Asaas\Api\Customer;
use Imobia\Asaas\Api\CustomerFiscalInfo;
use Imobia\Asaas\Api\Document;
use Imobia\Asaas\Api\FinancialTransaction;
use Imobia\Asaas\Api\Invoice;
use Imobia\Asaas\Api\Notification;
use Imobia\Asaas\Api\Payment;
use Imobia\Asaas\Api\Subscription;
use Imobia\Asaas\Api\Transfer;
use Imobia\Asaas\Api\Wallet;
use Imobia\Asaas\Api\Webhook;

/**
 * Asass API Wrapper
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class Asaas
{
    /**
     * Adapter Interface
     *
     * @var  AdapterInterface
     */
    protected $adapter;

    /**
     * Ambiente da API
     *
     * @var  string
     */
    protected $ambiente;

    /**
     * Versão da API
     *
     * @var  string
     */
    protected $versao;

    /**
     * Constructor
     *
     * @param  AdapterInterface  $adapter   Adapter Instance
     * @param  string            $ambiente  (optional) Ambiente da API
     */
    public function __construct(AdapterInterface $adapter, $ambiente = 'producao', $versao = 'v3')
    {
        $this->adapter = $adapter;

        $this->ambiente = $ambiente;

        $this->versao = $versao;
    }

    /**
     * Get customer endpoint
     *
     * @return  Customer
     */
    public function customer()
    {
        return new Customer($this->adapter, $this->ambiente, $this->versao);
    }

    /**
     * Get subscription endpoint
     *
     * @return  Subscription
     */
    public function subscription()
    {
        return new Subscription($this->adapter, $this->ambiente, $this->versao);
    }

    /**
     * Get payment endpoint
     *
     * @return  Payment
     */
    public function payment()
    {
        return new Payment($this->adapter, $this->ambiente, $this->versao);
    }

    /**
     * Get Notification API Endpoint
     *
     * @return  Notification
     */
    public function notification()
    {
        return new Notification($this->adapter, $this->ambiente, $this->versao);
    }

    /**
     * Get transfer endpoint
     *
     * @return  Transfer
     */
    public function transfer()
    {
        return new Transfer($this->adapter, $this->ambiente, $this->versao);
    }

    /**
     * Get Account endpoint
     *
     * @return  Account
     */
    public function account()
    {
        return new Account($this->adapter, $this->ambiente, $this->versao);
    }

    /**
     * Get Document endpoint
     *
     * @return  Document
     */
    public function document()
    {
        return new Document($this->adapter, $this->ambiente, $this->versao);
    }

    /**
     * Get Invoice endpoint
     *
     * @return  Invoice
     */
    public function invoice()
    {
        return new Invoice($this->adapter, $this->ambiente, $this->versao);
    }

    /**
     * Get customer fiscal info endpoint
     *
     * @return  CustomerFiscalInfo
     */
    public function customerFiscalInfo()
    {
        return new CustomerFiscalInfo($this->adapter, $this->ambiente, $this->versao);
    }

    /**
     * Get bank account endpoint
     *
     * @return  BankAccount
     */
    public function bankAccount()
    {
        return new BankAccount($this->adapter, $this->ambiente, $this->versao);
    }

    /**
     * Get balance endpoint
     *
     * @return  Balance
     */
    public function balance()
    {
        return new Balance($this->adapter, $this->ambiente, $this->versao);
    }

    /**
     * Get webhook endpoint
     *
     * @return  Webhook
     */
    public function webhook()
    {
        return new Webhook($this->adapter, $this->ambiente, $this->versao);
    }

    /**
     * Get wallets endpoint
     *
     * @return  Wallet
     */
    public function wallet()
    {
        return new Wallet($this->adapter, $this->ambiente, $this->versao);
    }

    /**
     * Get FinancialTransaction endpoint
     *
     * @return  Wallet
     */
    public function extrato()
    {
        return new FinancialTransaction($this->adapter, $this->ambiente, $this->versao);
    }
}
