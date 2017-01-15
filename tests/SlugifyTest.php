<?php

use SouNoob\Slugifier;

class SlugifyTest extends \PHPUnit\Framework\TestCase
{
    public function testSlugify()
    {
        $slugifier = new Slugifier();
        $this->assertEquals('sou-noob', $slugifier->slugify('Sou Noob'));
    }
}