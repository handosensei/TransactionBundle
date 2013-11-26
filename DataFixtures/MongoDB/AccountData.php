<?php

namespace Hadonra\Bundle\TransactionBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Hadonra\Bundle\TransactionBundle\Document\Account;

class AccountData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $bankBprdp = $manager->getRepository('HadonraTransactionBundle:Bank')->findOneBy(array('code' => 'Bprdp')) ;
        $bankSgen = $manager->getRepository('HadonraTransactionBundle:Bank')->findOneBy(array('code' => 'Sgen')) ;
        $account1 = new Account();
        $account1
            ->setNumber('20195136759')
            ->setBank($bankBprdp)
        ;

        $account2 = new Account();
        $account2
            ->setNumber('11111111111')
            ->setBank($bankSgen)
        ;

        $manager->persist($account1);
        $manager->persist($account2);
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2;
    }
}
