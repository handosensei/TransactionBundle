<?php

namespace Hadonra\Bundle\TransactionBundle\Model\Document;

use Hadonra\Bundle\TransactionBundle\Model\Document\AccountInterface;

/**
 * @author Raldo CHEA <me@rchea.com>
 */
interface BankInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param  string        $name
     * @return BankInterface
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param  string        $code
     * @return BankInterface
     */
    public function setCode($code);

    /**
     * @return string
     */
    public function getCode();

    /**
     * @param  AccountInterface $account
     * @return BankInterface
     */
    public function addAccount(AccountInterface $account);

    /**
     * @return Collection
     */
    public function getAccounts();
}
