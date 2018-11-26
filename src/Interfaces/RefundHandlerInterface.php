<?php

namespace MiguelAlcaino\PaymentGateway\Interfaces;

use MiguelAlcaino\PaymentGateway\Interfaces\Entity\TransactionRecordInterface;

interface RefundHandlerInterface
{
    public function refund(TransactionRecordInterface $transactionRecord);
}