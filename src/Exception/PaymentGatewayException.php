<?php
/**
 * Created by PhpStorm.
 * User: malcaino
 * Date: 21/04/18
 * Time: 20:28
 */

namespace MiguelAlcaino\PaymentGateway\Exception;


use Throwable;

class PaymentGatewayException extends \Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}