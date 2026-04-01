<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixture extends Fixture
{
    private $hashpassword;

    public function __construct(UserPasswordHasherInterface $hashpassword)
    {
        $this->hashpassword=$hashpassword;
    }
    public function load(ObjectManager $manager): void
    {
            $user=new User();
            $user->setEmail("admin");
            $password="admin";
            $hashedPassword = $this->hashpassword->hashPassword($user, $password);
            $user->setPassword($hashedPassword);
            $user->setRoles(["ROLE_ADMIN"]);
            
            $manager->persist($user);
            $manager->flush();
    }
}
