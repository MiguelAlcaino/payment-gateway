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
    /**
     * Get id
     *
     * @return int
     */
    public function getId();

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName();

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return CustomerInterface
     */
    public function setFirstName($firstName);

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName();

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return CustomerInterface
     */
    public function setLastName($lastName);

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail();

    /**
     * Set email
     *
     * @param string $email
     *
     * @return CustomerInterface
     */
    public function setEmail($email);

    /**
     * Get merchantId
     *
     * @return string
     */
    public function getMerchantId();

    /**
     * Set merchantId
     *
     * @param string $merchantId
     *
     * @return CustomerInterface
     */
    public function setMerchantId($merchantId);
}