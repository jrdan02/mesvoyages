<?php

namespace App\Tests;

use App\Entity\Environnement;
use App\Entity\Visite;
use PHPUnit\Framework\TestCase;

class VisiteTest extends TestCase
{
    public function testGetDatecreationString(): void
    {
        $visite = new Visite();
        $visite->setDatecreation(new \DateTime('2025-10-20'));
       // $visite->setDatecreation(new \DateTime(('2025-10-23')));


        $this->assertEquals("20/10/2025", $visite->getDatecreation()->format('d/m/Y'));

    }
    public function testAddEnvironnement(){
        $environnement = new Environnement();
        $environnement->setNom("plage");
        $visite = new Visite();
        $visite->addEnvironnement($environnement);
        $nbEnvironnementAvant = $visite->getEnvironnements()->count();
        $visite->addEnvironnement($environnement);
        $nbEnvironnementApres = $visite->getEnvironnements()->count();
        $this->assertEquals($nbEnvironnementAvant, $nbEnvironnementApres, "ajout même environnement devrait échouer");
    }
}
    