<?php

namespace Hadonra\Bundle\TransactionBundle\DataFixtures\MongoDB\Sgen;

use \DateTime;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Hadonra\Bundle\TransactionBundle\Document\Sgen\Operation as SgenOperation;

class OperationData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $account = $manager->getRepository('HadonraTransactionBundle:Account')->findOneBy(['number' => '11111111111']);

        $operation1 = new SgenOperation();
        $operation1
            ->setAccount($account)
            ->setDescription('PRLV SFR MOBILE 8207002379EPRE131105AQ N.EMETTEUR: 332801')
            ->setReference('EAEOT5D')
            ->setAmount(-19.99)
            ->setTransactionAt(DateTime::createFromFormat('Y-m-d', '2013-11-17'))
        ;
        $manager->persist($operation1);

        $operation2 = new SgenOperation();
        $operation2
            ->setAccount($account)
            ->setDescription('EVI CPAM SEINE SAINT DEN 132810008628132810008628')
            ->setReference('CZ35ME9')
            ->setAmount(45)
            ->setTransactionAt(DateTime::createFromFormat('Y-m-d', '2013-11-17'))
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
        return 4;
    }
}
