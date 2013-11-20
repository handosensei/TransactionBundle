<?php

namespace Hadonra\Bundle\TransactionBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\Common\Collections\ArrayCollection;
use Hadonra\Bundle\TransactionBundle\Model\Document\BankInterface;
use Hadonra\Bundle\TransactionBundle\Model\Document\AccountInterface;

/**
 * @author Raldo CHEA <me@rchea.com>
 *
 * @MongoDB\Document(repositoryClass="Hadonra\Bundle\TransactionBundle\Repository\Document\BankRepository")
 */
class Bank implements BankInterface
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $name;

    /**
     * @MongoDB\String
     */
    protected $code;

    /**
     * @MongoDB\ReferenceMany(targetDocument="Account", mappedBy="bank")
     */
    protected $accounts = array();

    public function __construct()
    {
        $this->accounts = new ArrayCollection();
    }

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
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritDoc}
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * {@inheritDoc}
     */
    public function addAccount(AccountInterface $account)
    {
        $this->accounts[] = $account;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getAccounts()
    {
        return $this->accounts;
    }
}
