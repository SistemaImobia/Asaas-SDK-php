<?php

namespace Imobia\Asaas\Exception;

class ValidationException extends HttpException
{
    public $errors;

    public function __construct($error_message, $reponse_code, $errors)
    {

        $this->errors = array_map(function ($error) {
            return $error->description;
        }, $errors);

        parent::__construct($response_code . ' ' . $error_message, $reponse_code, $this->getErrors());

    }

    public function getErrors()
    {
        return $this->errors;
    }
}
