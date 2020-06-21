<?php

namespace Ramsey\TagBundle\Form\DataTransformer;

use Doctrine\Common\Persistence\ObjectManager;
use Ramsey\TagBundle\Entity\Tag;
use Symfony\Component\Form\DataTransformerInterface;

class TagTransformer implements DataTransformerInterface
{
    /*
     * @var ObjectManager
     */

    private $manager;

    public function __construct(ObjectManager $manager)
    {
        $this->manager=$manager;
    }

    public function transform($value):string
    {
        // TODO: Implement transform() method.

        return implode(',',$value);
    }

    public function reverseTransform($string): array
    {
        // TODO: Implement reverseTransform() method.
        $names=array_unique(array_filter(array_map('trim',explode(',',$string))));
        //$tags=[];
        $tags=$this->manager->getRepository('RamseyTagBundle:Tag')->findBy(
            ['nom'=>$names]
        );
        $newNames=array_diff($names,$tags);
        foreach ($newNames as $name){
            $tag= new Tag();
            $tag->setNom($name);
            $tags[]=$tag;
        }
        return $tags;
    }
}