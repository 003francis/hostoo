<?php

namespace Ramsey\TagBundle\Tests\Form\DataTransformer;

use Doctrine\Common\Persistence\ObjectManager;
use Ramsey\TagBundle\Form\DataTransformer\TagTransformer;

class TagTranformerTest extends \PHPUnit\Framework\TestCase {
    public function testCreateTagsArrayToString(){
        $transformer=$this->getMockedTransformer();
    }

    private function getMockedTransformer()
    {
        $entityManager=$this->getMockedBuilder(ObjectManager::class)
        ->disableOriginalConstructor()
        ->getMock();
        return new TagTransformer($entityManager);
    }
}