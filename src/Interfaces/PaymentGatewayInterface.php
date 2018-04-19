<?php
/**
 * Created by PhpStorm.
 * User: malcaino
 * Date: 19/04/18
 * Time: 02:09
 */

namespace MiguelAlcaino\PaymentGateway\Interfaces;


use MiguelAlcaino\PaymentGateway\Interfaces\Entity\TransactionItemInterface;
use MiguelAlcaino\PaymentGateway\Interfaces\Entity\TransactionRecordInterface;

interface PaymentGatewayInterface
{
    /**
     * @param TransactionRecordInterface $transactionRecord
     * @param TransactionItemInterface $transactionItem
     * @param string $creditCardToken
     * @return TransactionRecordInterface#
     */
    public function charge(TransactionRecordInterface $transactionRecord, TransactionItemInterface $transactionItem, string $creditCardToken);
}