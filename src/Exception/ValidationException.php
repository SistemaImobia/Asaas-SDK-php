<?php

namespace Imobia\Asaas\Exception;

class ValidationException extends HttpException
{
    public $errors;

    public function __construct($error_message, $reponse_code, $errors)
    {
        $errorLine    = "";
        $this->errors = array_map(function ($error) use ($errorLine) {
            $errorLine .= ' ' . $error->description;
            return $error->description;
        }, $errors);

        parent::__construct($reponse_code . ' ' . $errorLine, $reponse_code);

    }

    public function getErrors()
    {
        return $this->errors;
    }
}
