<?php

namespace Hadonra\Bundle\TransactionBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Hadonra\Bundle\TransactionBundle\Model\Document\AccountInterface;

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
     * @MongoDB\ReferenceOne(targetDocument="Bank", mappedBy="bank")
     */
    protected $bank;

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
    public function setBank($bank)
    {
        $this->bank = $bank;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getBank()
    {
        return $this->bank;
    }
}
