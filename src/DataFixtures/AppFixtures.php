<?php

namespace App\DataFixtures;

use App\Entity\Canape;
use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categorieLounge = new Categorie;
            $categorieLounge->setNom("Lounge");
            $categorieLounge->setCouleur("Bleu");
            $manager->persist($categorieLounge);

        $categorieConvertible = new Categorie;
            $categorieConvertible->setNom("Convertible");
            $categorieConvertible->setCouleur("Rouge");
            $manager->persist($categorieConvertible);

        $categorieAngle = new Categorie;
            $categorieAngle->setNom("Angle");
            $categorieAngle->setCouleur("Jaune");
            $manager->persist($categorieAngle);


        $canape1 = new Canape;
            $canape1->setMarque("Poltrone");
            $canape1->setModele("Venezia");
            $canape1->setCouleur("Gris");
            $canape1->setPrix(100.00);
            $canape1->setStock(3);
            $canape1->setCategorie($categorieLounge);
            $manager->persist($canape1);
        
        $canape2 = new Canape;
            $canape2->setMarque("Cuircenter");
            $canape2->setModele("Firenze");
            $canape2->setCouleur("Noir");
            $canape2->setPrix(150.00);
            $canape2->setStock(1);
            $canape2->setCategorie($categorieAngle);
            $manager->persist($canape2);

        $canape3 = new Canape;
            $canape3->setMarque("Poltrone");
            $canape3->setModele("Milano");
            $canape3->setCouleur("Beige");
            $canape3->setPrix(800.00);
            $canape3->setStock(1);
            $canape3->setCategorie($categorieConvertible);
            $manager->persist($canape3);

        $manager->flush();
    }
}
