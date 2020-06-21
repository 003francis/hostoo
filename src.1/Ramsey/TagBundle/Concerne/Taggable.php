<?php

     namespace Ramsey\TagBundle\Concerne;

     trait Taggable {

         /**
          * @var array
          *
          * @ORM\ManyToMany(targetEntity="Ramsey\TagBundle\Entity\Tag", cascade={"persist"})
          */
         private $Diagnostiques;


         /**
          * Add Diagnostiques
          *
          * @param \Ramsey\TagBundle\Entity\Tag $diagnostiques
          * @return Diagnostic
          */
         public function addDiagnostique(\Ramsey\TagBundle\Entity\Tag $diagnostiques)
         {
             $this->Diagnostiques[] = $diagnostiques;

             return $this;
         }

         /**
          * Remove Diagnostiques
          *
          * @param \Ramsey\TagBundle\Entity\Tag $diagnostiques
          */
         public function removeDiagnostique(\Ramsey\TagBundle\Entity\Tag $diagnostiques)
         {
             $this->Diagnostiques->removeElement($diagnostiques);
         }

         /**
          * Get Diagnostiques
          *
          * @return \Doctrine\Common\Collections\Collection
          */
         public function getDiagnostiques()
         {
             return $this->Diagnostiques;
         }

     }