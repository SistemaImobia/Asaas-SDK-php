<?php
namespace Imobia\Asaas\Api;

// Entities
use Imobia\Asaas\Entity\Pix as PixEntity;

/**
 * Customer API Endpoint
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class Pix extends \Imobia\Asaas\Api\AbstractApi
{
    /**
     * Get all Pix keys
     *
     * @param   array  $filters  Pix filters
     * @return  PixEntity
     */
    public function getAll(array $filters = [])
    {
        $chaves = $this->adapter->get(sprintf('%s/pix/addressKeys?%s', $this->endpoint, http_build_query($filters)));

        $chaves = json_decode($chaves);

        $meta = $this->extractMeta($chaves);

        $chavesData = $chaves->data;

        while ($meta->hasMore) {
            $filters['offset'] += $filters['offset'] > 0 ? $filters['limit'] : $filters['limit'] + 1;
            $chaves     = $this->adapter->get(sprintf('%s/pix/addressKeys?%s', $this->endpoint, http_build_query($filters)));
            $chaves     = json_decode($chaves);
            $meta       = $this->extractMeta($chaves);
            $chavesData = array_merge($chavesData, $chaves->data);
        }

        return array_map(function ($chave) {
            return new PixEntity($chave);
        }, $chavesData);
    }

    /**
     * Get Pix By Id
     *
     * @param   int  $id  Pix Id
     * @return  PixEntity
     */
    public function getById($id)
    {
        $chave = $this->adapter->get(sprintf('%s/pix/addressKeys/%s', $this->endpoint, $id));

        $chave = json_decode($chave);

        return new PixEntity($chave);
    }

    /**
     * Create a Pix key
     *
     * @param   array  data from Pix
     * @return  array  Pix key
     */
    public function create(array $data)
    {
        $chave = $this->adapter->post(sprintf('%s/pix/addressKeys', $this->endpoint), $data);

        $chave = json_decode($chave);

        return new PixEntity($chave);
    }

    /**
     * Delete Pix By Id
     *
     * @param  string|int  $id  Pix Id
     */
    public function delete($id)
    {
        $this->adapter->delete(sprintf('%s/pix/addressKeys/%s', $this->endpoint, $id));
    }
}
