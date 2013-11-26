<?php

namespace Hadonra\Bundle\TransactionBundle\Document\Sgen;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;
use Hadonra\Bundle\TransactionBundle\Model\Document\OperationInterface;
use Hadonra\Bundle\TransactionBundle\Document\AbstractOperation;

/**
 * Bank transaction
 *
 * @author Raldo CHEA <me@rchea.com>
 *
 * @MongoDB\Document(repositoryClass="Hadonra\Bundle\TransactionBundle\Repository\Document\Sgen\OperationRepository")
 */
class Operation extends AbstractOperation implements OperationInterface
{
}
