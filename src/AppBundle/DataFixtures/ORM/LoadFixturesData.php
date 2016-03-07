<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;

class LoadFixturesData implements FixtureInterface {

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {
        $files = [];
        $files[] = __DIR__ . '/User/user.yml';

        Fixtures::load($files, $manager, [
            'locale'    => 'fr_FR',
            'persist_once' => true,
        ]);

        $manager->flush();
    }

}
