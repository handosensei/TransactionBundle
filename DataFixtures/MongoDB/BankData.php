<?php

namespace Hadonra\Bundle\TransactionBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Hadonra\Bundle\TransactionBundle\Document\Bank;

class BankData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $bank = new Bank();
        $bank
            ->setCode('Bprdp')
            ->setName('Banque pop')
        ;

        $bank2 = new Bank();
        $bank2
            ->setCode('Sgen')
            ->setName('Société générale')
        ;

        $manager->persist($bank);
        $manager->persist($bank2);
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1;
    }
}
