<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Plat;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Bdd extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        include 'categorie.php';
        include 'plats.php';
        $categorieRepo = $manager->getRepository(Categorie::class);

        foreach ($categorie as $cate){
            $categorieDB = new Categorie();
            $categorieDB
             ->setId($cate['id'])
             ->setLibelle($cate['libelle'])
             ->setImage($cate['image'])
             ->setActive($cate['active']);

             $manager->persist($categorieDB);

             $metadata =$manager->getClassMetaData(Categorie::class);
             $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        }

        $manager->flush();
        

        foreach ($plat as $plats){
            $platDB = new Plat();
            $platDB
             ->setId($plats['id'])
             ->setLibelle($plats['libelle'])
             ->setDescription($plats['description'])
             ->setPrix($plats['prix'])
             ->setImage($plats['image'])
             ->setActive($plats['active']);
            $categorie = $categorieRepo->find($plats['categorie_id']);
            $platDB->setCategorie($categorie);
            $manager->persist($platDB);

        }

        $manager->flush();
    }
}
