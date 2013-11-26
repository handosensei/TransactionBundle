<?php

namespace Hadonra\Bundle\TransactionBundle\Model\Document;

use \DateTime;

/**
 * Interface OperationInterface
 *
 * @author Raldo CHEA <me@rchea.com>
 * @package Hadonra
 * @subpackage TransactionBundle
 */
interface OperationInterface
{
    /**
     * @param  string             $accountNumber
     * @return OperationInterface
     */
    public function setAccountNumber($accountNumber);

    /**
     * @return string
     */
    public function getAccountNumber();

    /**
     * @param  float              $amount
     * @return OperationInterface
     */
    public function setAmount($amount);

    /**
     * @return float
     */
    public function getAmount();

    /**
     * @param  string             $description
     * @return OperationInterface
     */
    public function setDescription($description);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param  string             $reference
     * @return OperationInterface
     */
    public function setReference($reference);

    /**
     * @return string
     */
    public function getReference();

    /**
     * @param  DateTime            $transactionAt
     * @return OperationInterface
     */
    public function setTransactionAt(\DateTime $transactionAt);

    /**
     * @return DateTime
     */
    public function getTransactionAt();
}
