<?php

namespace MiguelAlcaino\PaymentGateway\Interfaces;

interface PaymentGatewayRouterInterface
{
    /**
     * @return string
     */
    public function getPaymentFormRoute();
}