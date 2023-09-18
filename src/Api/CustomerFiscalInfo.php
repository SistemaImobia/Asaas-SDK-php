<?php
namespace Imobia\Asaas\Api;

/**
 * Customer Fiscal Info API Endpoint
 *
 * @author David Berri <dwbwill@gmail.com>
 */
class CustomerFiscalInfo extends \Imobia\Asaas\Api\AbstractApi
{
    public function getAll()
    {
        $info = $this->adapter->get(sprintf('%s/customerFiscalInfo', $this->endpoint));

        return json_decode($info);
    }

    public function create(array $data)
    {
        if (isset($data['certificateFile'])) {
            $multipartData = [];
            foreach ($data as $key => $value) {
                $multipartData[] = [
                    'name'     => $key,
                    'contents' => $value,
                ];
            }
            $info = $this->adapter->post(sprintf('%s/customerFiscalInfo', $this->endpoint), $multipartData, 'multipart');
            return $info;
        }

        $info = $this->adapter->post(sprintf('%s/customerFiscalInfo', $this->endpoint), $data);

        return json_decode($info);
    }

    public function getMunicipalOptions()
    {
        $info = $this->adapter->get(sprintf('%s/customerFiscalInfo/municipalOptions', $this->endpoint));

        return json_decode($info);
    }
}
