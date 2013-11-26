<?php

namespace Hadonra\Bundle\TransactionBundle\Document;

use \DateTime;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;
use Hadonra\Bundle\TransactionBundle\Model\Document\AccountInterface;
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
     * @Assert\DateTime()
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
     * @MongoDB\ReferenceOne(targetDocument="Hadonra\Bundle\TransactionBundle\Document\Account", inversedBy="operations")
     */
    protected $account;

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
        $this->amount = (float) $amount;

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
    public function setTransactionAt(\DateTime $transactionAt)
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

    /**
     * {@inheritDoc}
     */
    public function setAccount(AccountInterface $account)
    {
        $this->account = $account;
        $account->addOperation($this);

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getAccount()
    {
        return $this->account;
    }
}
