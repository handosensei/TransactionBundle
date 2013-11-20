<?php

namespace Hadonra\Bundle\TransactionBundle\Document\Bprdp;

use \Date;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Hadonra\Bundle\TransactionBundle\Model\Document\OperationInterface;
use Hadonra\Bundle\TransactionBundle\Document\AbstractOperation;

/**
 * Bank transaction
 *
 * @author Raldo CHEA <me@rchea.com>
 *
 * @MongoDB\Document(repositoryClass="Hadonra\Bundle\TransactionBundle\Repository\Bprdp\OperationRepository")
 */
class Operation extends AbstractOperation implements OperationInterface
{
    /**
     * @MongoDB\Date
     */
    protected $accountingAt;

    /**
     * @MongoDB\Date
     */
    protected $valueAt;

    /**
     * @param  Date               $valueAt
     * @return OperationInterface
     */
    public function setValueAt(Date $valueAt)
    {
        $this->valueAt = $valueAt;

        return $this;
    }

    /**
     * @return Date
     */
    public function getValueAt()
    {
        return $this->valueAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setAccountingAt(Date $accountingAt)
    {
        $this->accountingAt = $accountingAt;
    }

    /**
     * {@inheritdoc}
     */
    public function getAccountingAt()
    {
        return $this->accountingAt;
    }
}
