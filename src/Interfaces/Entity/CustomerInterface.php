<?php
/**
 * Created by PhpStorm.
 * User: malcaino
 * Date: 21/04/18
 * Time: 21:02
 */

namespace MiguelAlcaino\PaymentGateway\Interfaces\Entity;


interface CustomerInterface
{
    public function getName();
    public function getPrice();

}