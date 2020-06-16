<?php
namespace Imobia\Asaas\Entity;

/**
 * Base Meta Entity
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
final class Meta extends \Imobia\Asaas\Entity\AbstractEntity
{
    /**
     * @var string
     */
    public $commercialInfo;

    /**
     * @var string
     */
    public $bankAccountInfo;

    /**
     * @var string
     */
    public $documentation;

    /**
     * @var string
     */
    public $general;
}