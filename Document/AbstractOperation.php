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
     * {@inheritDoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritDoc}
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * {@inheritDoc}
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * {@inheritDoc}
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * {@inheritDoc}
     */
    public function setTransactionAt(Date $transactionAt)
    {
        $this->transactionAt = $transactionAt;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getTransactionAt()
    {
        return $this->transactionAt;
    }
}
