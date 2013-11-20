<?php

namespace Hadonra\Bundle\TransactionBundle\Document;

use \Date;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Hadonra\Bundle\TransactionBundle\Model\Document\OperationInterface;

/**
 * @author Raldo CHEA <me@rchea.com>
 */
abstract class AbstractOperation implements OperationInterface
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $accountNumber;

    /**
     * @MongoDB\Date
     */
    protected $transactionAt;

    /**
     * @MongoDB\String
     */
    protected $description;

    /**
     * @MongoDB\String
     */
    protected $reference;

    /**
     * @MongoDB\Float
     */
    protected $amount;

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * {@inheritdoc}
     */
    public function setTransactionAt(Date $transactionAt)
    {
        $this->transactionAt = $transactionAt;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTransactionAt()
    {
        return $this->transactionAt;
    }
}
