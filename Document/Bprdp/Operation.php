<?php

namespace Hadonra\Bundle\TransactionBundle\Document\Bprdp;

use \Datetime;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;
use Hadonra\Bundle\TransactionBundle\Model\Document\OperationInterface;
use Hadonra\Bundle\TransactionBundle\Document\AbstractOperation;

/**
 * Bank transaction
 *
 * @author Raldo CHEA <me@rchea.com>
 *
 * @MongoDB\Document(repositoryClass="Hadonra\Bundle\TransactionBundle\Repository\Document\Bprdp\OperationRepository")
 */
class Operation extends AbstractOperation implements OperationInterface
{
    /**
     * @MongoDB\Date
     * @Assert\DateTime()
     */
    protected $accountingAt;

    /**
     * @MongoDB\Date
     * @Assert\DateTime()
     */
    protected $valueAt;

    /**
     * @param  DateTime           $valueAt
     * @return OperationInterface
     */
    public function setValueAt(\DateTime $valueAt)
    {
        $this->valueAt = $valueAt;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getValueAt()
    {
        return $this->valueAt;
    }

    /**
     * @param  DateTime           $accountingAt
     * @return OperationInterface
     */
    public function setAccountingAt(\DateTime $accountingAt)
    {
        $this->accountingAt = $accountingAt;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getAccountingAt()
    {
        return $this->accountingAt;
    }
}
