<?php

namespace Hadonra\Bundle\TransactionBundle\Model\Document;

use Hadonra\Bundle\TransactionBundle\Model\Document\BankInterface;

/**
 * @author Raldo CHEA <me@rchea.com>
 */
interface AccountInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param  string           $number
     * @return AccountInterface
     */
    public function setNumber($number);

    /**
     * @return string
     */
    public function getNumber();

    /**
     * @param  BankInterface    $bank
     * @return AccountInterface
     */
    public function setBank($bank);

    /**
     * @return BankInterface
     */
    public function getBank();
}
