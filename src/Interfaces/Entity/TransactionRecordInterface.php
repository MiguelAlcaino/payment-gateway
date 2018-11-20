<?php
/**
 * Created by PhpStorm.
 * User: malcaino
 * Date: 19/04/18
 * Time: 01:38
 */

namespace MiguelAlcaino\PaymentGateway\Interfaces\Entity;

interface TransactionRecordInterface
{
    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount();

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return TransactionRecordInterface
     */
    public function setAmount($amount);

    public function getTaxAmount();

    public function getInstallments();

    /**
     * @param $paymentGatewayResponse
     *
     * @return TransactionRecordInterface
     */
    public function setPaymentGatewayResponse($paymentGatewayResponse);

    /**
     * @param $paymentTransaction
     *
     * @return TransactionRecordInterface
     */
    public function setPaymentTransaction($paymentTransaction);

    /**
     * @param $creditCardChargeId
     *
     * @return TransactionRecordInterface
     */
    public function setCreditCardChargeId($creditCardChargeId);

    /**
     * @param $paymentGatewayFee
     *
     * @return TransactionRecordInterface
     */
    public function setPaymentGatewayFee($paymentGatewayFee);

    /**
     * @param $status
     *
     * @return TransactionRecordInterface
     */
    public function setStatus($status);

    /**
     * @param $authorizationCode
     *
     * @return TransactionRecordInterface
     */
    public function setAuthorizationCode($authorizationCode);

    /**
     * @return CustomerInterface
     */
    public function getCustomer();

    /**
     * Returns the collection of $transactionItems
     *
     * @return TransactionItemInterface[]
     */
    public function getTransactionItems();

    /**
     * Adds a TransactionItem instance to the collection $transactionItems;
     *
     * @param TransactionItemInterface $transactionItem
     *
     * @return TransactionRecordInterface
     */
    public function addTransactionItem(TransactionItemInterface $transactionItem);

    /**
     * @param TransactionItemInterface $transactionItem
     *
     * @return TransactionItemInterface
     */
    public function removeTransactionItem(TransactionItemInterface $transactionItem);
}