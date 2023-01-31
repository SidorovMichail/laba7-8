<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $role = new Role();
        $role->setUser(1);
        $role->setAdmin(0);
        $manager->persist($role);

        for ($i = 0; $i < 5; $i++) {
            $post = new Post();
            $post->setNamepost("Name".$i);
            $post->setCountsee(0);
            $post->setDescriptionpost("Descrip".$i);
            $post->setDatapost(new \DateTime());
            $manager->persist($post);
        }

        $manager->flush();
    }
}
