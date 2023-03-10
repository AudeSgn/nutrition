<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once "./src/controllers/homeController.php";

class controllerTest extends TestCase
{
    public function testCalories()
    {
        $this->assertEquals(2000, calculCalorie(70, 180, 30, 1, 2));
    }

    public function testIMC()
    {
        $this->assertEquals(23, BMIcalc(70, 180));
    }
}

// Pour les tests : faites un composer install / et au moment de 
// l'exécution des tests, pensez à bien commenter les parties indiquées 
// dans le homecontroller
// Commande d'exécution des tests : .vendor/bin/phpunit
