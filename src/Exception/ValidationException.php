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

        parent::__construct( $reponse_code . ' '. $this->getErrors(), $reponse_code);

    }

    public function getErrors()
    {
        return $this->errors;
    }
}
