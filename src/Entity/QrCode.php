<?php
namespace Imobia\Asaas\Entity;

/**
 * Base Meta Entity
 *
 * @author Marcelo Migliorini <celo_mig@hotmail.com>
 */
final class QrCode extends \Imobia\Asaas\Entity\AbstractEntity
{
    /**
     * @var string|null Identificador único do QR Code
     */
    public $id;

    /**
     * @var mixed|null Identificador de ponta a ponta
     */
    public $endToEndIdentifier;

    /**
     * @var mixed|null Finalidade do QR Code
     */
    public $finality;

    /**
     * @var int|null Valor do QR Code
     */
    public $value;

    /**
     * @var mixed|null Valor de troco
     */
    public $changeValue;

    /**
     * @var int|null Valor reembolsado
     */
    public $refundedValue;

    /**
     * @var string|null Data efetiva do QR Code
     */
    public $effectiveDate;

    /**
     * @var string|null Data agendada do QR Code
     */
    public $scheduledDate;

    /**
     * @var string|null Status do QR Code
     */
    public $status;

    /**
     * @var string|null Tipo do QR Code (DEBIT ou outro)
     */
    public $type;

    /**
     * @var string|null Tipo de origem do QR Code (DYNAMIC_QRCODE ou outro)
     */
    public $originType;

    /**
     * @var string|null Descrição do QR Code
     */
    public $description;

    /**
     * @var mixed|null URL do recibo da transação
     */
    public $transactionReceiptUrl;

    /**
     * @var mixed|null Motivo de recusa
     */
    public $refusalReason;

    /**
     * @var bool|null Indica se o QR Code pode ser cancelado
     */
    public $canBeCanceled;

    /**
     * @var mixed|null Transação original associada ao QR Code
     */
    public $originalTransaction;

    /**
     * @var array|null Conta externa associada ao QR Code
     */
    public $externalAccount;

    /**
     * @var array|null Informações específicas do QR Code
     */
    public $qrCode;

    /**
     * @var mixed|null Método de pagamento associado ao QR Code
     */
    public $payment;

    /**
     * @var bool|null Indica se o QR Code pode ser reembolsado
     */
    public $canBeRefunded;

    /**
     * @var mixed|null Motivo de desabilitação do reembolso
     */
    public $refundDisabledReason;

    /**
     * @var float|null Valor da taxa cobrada
     */
    public $chargedFeeValue;

    /**
     * @var string|null Data de criação do QR Code
     */
    public $dateCreated;

    /**
     * @var mixed|null Chave de endereço
     */
    public $addressKey;

    /**
     * @var mixed|null Tipo de chave de endereço
     */
    public $addressKeyType;

    /**
     * @var mixed|null ID de transferência
     */
    public $transferId;

    /**
     * @var mixed|null Referência externa associada ao QR Code
     */
    public $externalReference;
}

