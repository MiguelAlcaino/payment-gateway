<?php
/**
 * Created by PhpStorm.
 * User: malcaino
 * Date: 21/04/18
 * Time: 20:30
 */

namespace MiguelAlcaino\PaymentGateway\Exception\Charge;


use MiguelAlcaino\PaymentGateway\Exception\PaymentGatewayException;
use Throwable;

class NotPaidException extends PaymentGatewayException
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}