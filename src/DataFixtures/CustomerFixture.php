<?php

namespace App\DataFixtures;

use App\Entity\Customer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class CustomerFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        //
        $faker = Factory::create('fr_FR');
        for ($i = 0;$i<100;$i++){
            $customer = new Customer();
            $customer
                ->setCustomerName($faker->firstName())
                ->setCustomerAddress($faker->address)
                ->setCustomerBirthdate($faker->dateTimeThisCentury)
                ->setCustomerPostalCode($faker->postcode)
                ->setCustomerLastname($faker->lastName)
                ->setCustomerEmail($faker->email)
                ->setCustomerCity($faker->city)
                ->setCustomerPassword($faker->word);

            $manager->persist($customer);
        }

        $manager->flush();
    }
}
