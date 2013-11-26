<?php

namespace Hadonra\Bundle\TransactionBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Hadonra\Bundle\TransactionBundle\Model\Document\AccountInterface;
use Hadonra\Bundle\TransactionBundle\Model\Document\BankInterface;
use Hadonra\Bundle\TransactionBundle\Model\Document\OperationInterface;

/**
 * @author Raldo CHEA <me@rchea.com>
 *
 * @MongoDB\Document(repositoryClass="Hadonra\Bundle\TransactionBundle\Repository\Document\BankRepository")
 */
class Account implements AccountInterface
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $number;

    /**
     * @MongoDB\ReferenceOne(targetDocument="Bank", inversedBy="accounts")
     */
    protected $bank;

    /**
     * @MongoDB\ReferenceMany(targetDocument="Operation", mappedBy="account")
     */
    protected $operations;

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
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * {@inheritDoc}
     */
    public function setBank(BankInterface $bank)
    {
        $this->bank = $bank;
        $bank->addAccount($this);

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * {@inheritDoc}
     */
    public function addOperation(OperationInterface $operation)
    {
        $this->operations[] = $operation;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getOperations()
    {
        return $this->operations;
    }
}
