<?php

use SouNoob\Slugifier;

class SlugifyTest extends \PHPUnit\Framework\TestCase
{
    protected $slugifier;

    protected function setUp()
    {
        $this->slugifier = new Slugifier();
    }

    public function testSlugify()
    {
        $this->assertEquals('sou-noob', $this->slugifier->slugify('Sou Noob'));   
    }

    public function testASouNookPostTitle()
    {
        $this->assertEquals('404-a-pagina-nao-encontrada', $this->slugifier->slugify('404 a página não encontrada'));
    }

    public function testSpacesBetween()
    {
        $this->assertEquals('eu-tenho-dois-espacos', $this->slugifier->slugify('Eu  Tenho  Dois  Espaços'));
    }

    public function testSpacesAround()
    {
        $this->assertEquals('eu-tenho-espacos-nas-pontas', $this->slugifier->slugify('  Eu  Tenho Espaços nas  Pontas  '));
    }

    public function testQuotes()
    {
        $this->assertEquals('eu-tenho-aspas', $this->slugifier->slugify('Eu tenho "aspas"'));
    }

    public function testNumeral()
    {
        $this->assertEquals('eu-tenho-numeral-no', $this->slugifier->slugify('Eu tenho numeral nº'));
    }
}