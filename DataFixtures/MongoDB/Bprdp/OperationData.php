<?php

namespace Hadonra\Bundle\TransactionBundle\DataFixtures\MongoDB\Bprdp;

use \DateTime;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Hadonra\Bundle\TransactionBundle\Document\Account;
use Hadonra\Bundle\TransactionBundle\Document\Bprdp\Operation as BprdpOperation;

class OperationData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $account = $manager->getRepository('HadonraTransactionBundle:Account')->findOneBy(['number' => '20195136759']);

        $operation1 = new BprdpOperation();
        $operation1
            ->setAccount($account)
            ->setDescription('COTIS EQUIPAGE 2 XCCNV010 2013111800030684000001 CONTRAT CNV0055190133')
            ->setReference('30684')
            ->setAmount(-13.68)
            ->setAccountingAt(DateTime::createFromFormat('Y-m-d', '2013-11-17'))
            ->setTransactionAt(DateTime::createFromFormat('Y-m-d', '2013-11-17'))
            ->setValueAt(DateTime::createFromFormat('Y-m-d', '2013-11-17'))
        ;
        $manager->persist($operation1);

        $operation2 = new BprdpOperation();
        $operation2
            ->setAccount($account)
            ->setDescription('PRLV TRESOR PUBLIC   93 MENM393007810682003 N.EMETTEUR: 005002')
            ->setReference('J420SAT')
            ->setAmount(-45)
            ->setAccountingAt(DateTime::createFromFormat('Y-m-d', '2013-11-17'))
            ->setTransactionAt(DateTime::createFromFormat('Y-m-d', '2013-11-17'))
            ->setValueAt(DateTime::createFromFormat('Y-m-d', '2013-11-17'))
        ;
        $manager->persist($operation1);
        $manager->persist($operation2);
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 3;
    }
}
