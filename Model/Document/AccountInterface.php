<?php

namespace Hadonra\Bundle\TransactionBundle\Model\Document;

use Hadonra\Bundle\TransactionBundle\Model\Document\BankInterface;
use Hadonra\Bundle\TransactionBundle\Model\Document\OperationInterface;

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
     * @param  string $number
     * @return AccountInterface
     */
    public function setNumber($number);

    /**
     * @return string
     */
    public function getNumber();

    /**
     * @param  BankInterface $bank
     * @return AccountInterface
     */
    public function setBank(BankInterface $bank);

    /**
     * @return BankInterface
     */
    public function getBank();

    /**
     * @param  OperationInterface $operation
     * @return AccountInterface
     */
    public function addOperation(OperationInterface $operation);

    /**
     * @return Collection
     */
    public function getOperations();
}
