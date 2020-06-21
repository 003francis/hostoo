<?php

namespace hostoo\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="hostoo\UserBundle\Repository\UtilisateurRepository")
 */
class Utilisateur extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="postnom", type="string", length=20)
     */
    private $postnom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=20, nullable=true)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenaissance", type="datetime")
     */
    private $datenaissance;

    /**
     *
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Service", cascade={"persist"})
     */
    private $service;

    /**
     *
     * @ORM\OneToMany(targetEntity="hostoo\SanteBundle\Entity\Episode", mappedBy="utilisateur")
     *
     */
    private $episode;

    /**
     *
     * @ORM\OneToMany(targetEntity="hostoo\SanteBundle\Entity\OrdonnanceLabo", mappedBy="medecin")
     */
    private $ordonnancelabos;

    /**
     *
     * @ORM\OneToMany(targetEntity="hostoo\SanteBundle\Entity\OrdonnanceImg", mappedBy="medecin")
     */
    private $ordonnanceimgs;

    /**
     *
     * @ORM\OneToMany(targetEntity="hostoo\HospisBundle\Entity\Hospitalisation", mappedBy="medecin")
     */
    private $hospitalisations;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=20, nullable=true)
     */
    private $specialite;





    public function __construct()
    {
        parent::__construct();
        $this->ordonnancelabos=  new \Doctrine\Common\Collections\ArrayCollection();


        //var_dump($this->em); die('ok');

        // your own logic
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set postnom
     *
     * @param string $postnom
     * @return Utilisateur
     */
    public function setPostnom($postnom)
    {
        $this->postnom = $postnom;

        return $this;
    }

    /**
     * Get postnom
     *
     * @return string 
     */
    public function getPostnom()
    {
        return $this->postnom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     * @return Utilisateur
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime 
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set service
     *
     * @param \hostoo\SanteBundle\Entity\Service $service
     * @return Utilisateur
     */
    public function setService(\hostoo\SanteBundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \hostoo\SanteBundle\Entity\Service 
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set msq
     *
     * @param \hostoo\MsgBundle\Entity\Message $msq
     * @return Utilisateur
     */
    public function setMsq(\hostoo\MsgBundle\Entity\Message $msq = null)
    {
        $this->msq = $msq;

        return $this;
    }

    /**
     * Get msq
     *
     * @return \hostoo\MsgBundle\Entity\Message 
     */
    public function getMsq()
    {
        return $this->msq;
    }


    /**
     * Set specialite
     *
     * @param string $specialite
     * @return Utilisateur
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return string 
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }


    /**
     * Add episode
     *
     * @param \hostoo\SanteBundle\Entity\Episode $episode
     * @return Utilisateur
     */
    public function addEpisode(\hostoo\SanteBundle\Entity\Episode $episode)
    {
        $this->episode[] = $episode;

        return $this;
    }

    /**
     * Remove episode
     *
     * @param \hostoo\SanteBundle\Entity\Episode $episode
     */
    public function removeEpisode(\hostoo\SanteBundle\Entity\Episode $episode)
    {
        $this->episode->removeElement($episode);
    }

    /**
     * Get episode
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEpisode()
    {
        return $this->episode;
    }


    /**
     * Add ordonnancelabo
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceLabo $ordonnancelabo
     * @return Utilisateur
     */
    public function addOrdonnancelabo(\hostoo\SanteBundle\Entity\OrdonnanceLabo $ordonnancelabo)
    {
        $this->ordonnancelabos[] = $ordonnancelabo;

        return $this;
    }

    /**
     * Remove ordonnancelabo
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceLabo $ordonnancelabo
     */
    public function removeOrdonnancelabo(\hostoo\SanteBundle\Entity\OrdonnanceLabo $ordonnancelabo)
    {
        $this->ordonnancelabos->removeElement($ordonnancelabo);
    }

    /**
     * Get ordonnancelabos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrdonnancelabos()
    {
        return $this->ordonnancelabos;
    }

    /**
     * Add ordonnanceimgs
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceImg $ordonnanceimgs
     * @return Utilisateur
     */
    public function addOrdonnanceimg(\hostoo\SanteBundle\Entity\OrdonnanceImg $ordonnanceimgs)
    {
        $this->ordonnanceimgs[] = $ordonnanceimgs;

        return $this;
    }

    /**
     * Remove ordonnanceimgs
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceImg $ordonnanceimgs
     */
    public function removeOrdonnanceimg(\hostoo\SanteBundle\Entity\OrdonnanceImg $ordonnanceimgs)
    {
        $this->ordonnanceimgs->removeElement($ordonnanceimgs);
    }

    /**
     * Get ordonnanceimgs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrdonnanceimgs()
    {
        return $this->ordonnanceimgs;
    }

    /**
     * Add hospitalisations
     *
     * @param \hostoo\HospisBundle\Entity\Hospitalisation $hospitalisations
     * @return Utilisateur
     */
    public function addHospitalisation(\hostoo\HospisBundle\Entity\Hospitalisation $hospitalisations)
    {
        $this->hospitalisations[] = $hospitalisations;

        return $this;
    }

    /**
     * Remove hospitalisations
     *
     * @param \hostoo\HospisBundle\Entity\Hospitalisation $hospitalisations
     */
    public function removeHospitalisation(\hostoo\HospisBundle\Entity\Hospitalisation $hospitalisations)
    {
        $this->hospitalisations->removeElement($hospitalisations);
    }

    /**
     * Get hospitalisations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHospitalisations()
    {
        return $this->hospitalisations;
    }

    public function mesConsultations()
    {
        $som=0;
        foreach ($this->getEpisode() as $mesepisodes)
        {
            if($mesepisodes->getPatient()->getSociete()->getId()==15 && (date_format($mesepisodes->getDateepisode(),'Y-m') == date('Y-m')) )
            {
                $som+=1;
            }
        }
        return $som;
    }

    public function monMontant()
    {
        {
            $som=0;
            foreach ($this->getEpisode() as $mesepisodes)
            {
                if($mesepisodes->getPatient()->getSociete()->getId()==15 && (date_format($mesepisodes->getDateepisode(),'Y-m') == date('Y-m')) )
                {
                    foreach ($mesepisodes->getFactures() as $facture)
                    {
                        $som+=$facture->getPrix();
                    }
                }
            }
            return $som;
        }
    }

    public function lesExamensDuLabo()
    {
        $n=0;
        if(@count($this->getOrdonnancelabos()) >= 0 ){
            foreach ($this->getOrdonnancelabos() as $ordonnancelabo => $ord) {
                if (date_format($ord->getDateordo(), 'Y-m') == date('Y-m'))
                    $n += @count($ord->getResultats());

            }
        }


        return $n;
    }



    public function lesExamensEcho()
    {
        $n=0;
        if(@count($this->getOrdonnanceimgs()) >= 0 ){
            foreach ($this->getOrdonnanceimgs() as $ordonnancelabo => $ord) {
                if (date_format($ord->getDateordo(), 'Y-m') == date('Y-m'))

                    $n += @count($ord->getResultats());
            }
        }


        return $n;
    }

    public function __toString()
    {
        return $this->getNom()." ".$this->getPostnom(); // TODO: Change the autogenerated stub
    }

}
