<?php

namespace MiguelAlcaino\PaymentGateway\Interfaces\Factory;

use MiguelAlcaino\PaymentGateway\Interfaces\Entity\TransactionRecordInterface;

interface TransactionRecordFactoryInterface
{
    /**
     * @return TransactionRecordInterface
     */
    public function create();
}