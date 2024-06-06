<?php
namespace Imobia\Asaas\Api;

use Imobia\Asaas\Entity\Webhooks as WebhooksEntity;

/**
 * Webhooks API Endpoint
 *
 * @author David Berri <dwbwill@gmail.com>
 */
class Webhooks extends \Imobia\Asaas\Api\AbstractApi
{
    /**
     * Get the active Webhooks
     *
     * @return  WebhooksEntity
     */
    public function getAll()
    {
        $webhooks = $this->adapter->get(sprintf('%s/webhooks', $this->endpoint));

        $webhooks = json_decode($webhooks);

        return new WebhooksEntity($webhooks);
    }

    // public function getAllTransfers()
    // {
    //     $webhooks = $this->adapter->get(sprintf('%s/webhooks/transfer', $this->endpoint));

    //     $webhooks = json_decode($webhooks);

    //     return new WebhooksEntity($webhooks);
    // }

    // public function getAllInvoices()
    // {
    //     $webhooks = $this->adapter->get(sprintf('%s/webhooks/invoice', $this->endpoint));

    //     $webhooks = json_decode($webhooks);

    //     return new WebhooksEntity($webhooks);
    // }

    /**
     * Creates new Webhooks
     *
     * @param   array  $data  Webhooks Data
     * @return  WebhooksEntity
     */
    public function create(array $data)
    {
        $webhooks = $this->adapter->post(sprintf('%s/webhooks', $this->endpoint), $data);

        $webhooks = json_decode($webhooks);

        return new WebhooksEntity($webhooks);
    }

    // public function createTransfer(array $data)
    // {
    //     $webhooks = $this->adapter->post(sprintf('%s/webhooks/transfer', $this->endpoint), $data);

    //     $webhooks = json_decode($webhooks);

    //     return new WebhooksEntity($webhooks);
    // }

    // public function createInvoice(array $data)
    // {
    //     $webhooks = $this->adapter->post(sprintf('%s/webhooks/invoice', $this->endpoint), $data);

    //     $webhooks = json_decode($webhooks);

    //     return new WebhooksEntity($webhooks);
    // }
}
