<?php

namespace Ben\DoctorsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultation
 *
 * @ORM\Table(name="consultation")
 * @ORM\Entity(repositoryClass="Ben\DoctorsBundle\Repository\ConsultationRepository")
 */
class Consultation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    public static $GENERAL  = 'Consultation generale';
    public static $SPECIAL  = 'Consultation spécialisé';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="motiftype", type="string", length=255, nullable=true)
     */
    private $motiftype;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="infrastructure", type="string", length=255, nullable=true)
     */
    private $infrastructure;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="date")
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="diagnostic", type="text", nullable=true)
     */
    private $diagnostic;

    /**
     * @var string
     *
     * @ORM\Column(name="traitement", type="text", nullable=true)
     */
    private $traitement;

    /**
     * @var string
     *
     * @ORM\Column(name="decision", type="text", nullable=true)
     */
    private $decision;

    /**
     * @var boolean
     *
     * @ORM\Column(name="chronic", type="boolean", nullable=true)
     */
    private $chronic;

    /**
     * @ORM\ManyToOne(targetEntity="Ben\DoctorsBundle\Entity\Patient", inversedBy="consultations")
     * @ORM\JoinColumn(name="patient_id", referencedColumnName="id", nullable=false)
     */
    private $patient;

    /**
     * @ORM\ManyToOne(targetEntity="Ben\UserBundle\Entity\User", inversedBy="consultations")
     * @ORM\JoinColumn(name="doc_id", referencedColumnName="id", nullable=false)
     */
    private $user;


    /**
     * @ORM\OneToMany(targetEntity="Ben\DoctorsBundle\Entity\ConsultationMeds", mappedBy="consultation", cascade={"remove", "persist"})
     */
    protected $consultationmeds;



    /************ constructeur ************/

    public function __construct()
    {
        $this->created = new \DateTime;
        $this->type = Consultation::$GENERAL;
        $this->consultationmeds = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /************ getters & setters  ************/

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Consultation
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Consultation
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set patient
     *
     * @param \Ben\DoctorsBundle\Entity\Patient $patient
     * @return Consultation
     */
    public function setPatient(\Ben\DoctorsBundle\Entity\Patient $patient)
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * Get patient
     *
     * @return \Ben\DoctorsBundle\Entity\Patient
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Set user
     *
     * @param \Ben\UserBundle\Entity\User $user
     * @return Consultation
     */
    public function setUser(\Ben\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Ben\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }



    /**
     * Add consultationmeds
     *
     * @param \Ben\DoctorsBundle\Entity\ConsultationMeds $consultationmeds
     * @return Consultation
     */
    public function addConsultationmed(\Ben\DoctorsBundle\Entity\ConsultationMeds $consultationmeds)
    {
        $consultationmeds->setConsultation($this);
        $this->consultationmeds->add($consultationmeds);

        return $this;
    }

    /**
     * Remove consultationmeds
     *
     * @param \Ben\DoctorsBundle\Entity\ConsultationMeds $consultationmeds
     */
    public function removeConsultationmed(\Ben\DoctorsBundle\Entity\ConsultationMeds $consultationmeds)
    {
        $this->consultationmeds->removeElement($consultationmeds);
    }

    /**
     * Get consultationmeds
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getConsultationmeds()
    {
        return $this->consultationmeds;
    }

    /**
     * Set diagnostic
     *
     * @param string $diagnostic
     * @return Consultation
     */
    public function setDiagnostic($diagnostic)
    {
        $this->diagnostic = $diagnostic;

        return $this;
    }

    /**
     * Get diagnosis
     *
     * @return string
     */
    public function getDiagnostic()
    {
        return $this->diagnostic;
    }

    /**
     * Set traitement
     *
     * @param string $traitement
     * @return Consultation
     */
    public function setTraitement($traitement)
    {
        $this->traitement = $traitement;

        return $this;
    }

    /**
     * Get traitement
     *
     * @return string
     */
    public function getTraitement()
    {
        return $this->traitement;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Consultation
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set motiftype
     *
     * @param string $motiftype
     * @return Consultation
     */
    public function setMotiftype($motiftype)
    {
        $this->motiftype = $motiftype;

        return $this;
    }

    /**
     * Get motiftype
     *
     * @return string
     */
    public function getMotiftype()
    {
        return $this->motiftype;
    }

    /**
     * Set infrastructure
     *
     * @param string $infrastructure
     * @return Consultation
     */
    public function setInfrastructure($infrastructure)
    {
        $this->infrastructure = $infrastructure;

        return $this;
    }

    /**
     * Get infrastructure
     *
     * @return string
     */
    public function getInfrastructure()
    {
        return $this->infrastructure;
    }

    public function isSpecial()
    {
        return ($this->type === Consultation::$SPECIAL);
    }

    /**
     * Set chronic
     *
     * @param boolean $chronic
     * @return Consultation
     */
    public function setChronic($chronic)
    {
        $this->chronic = $chronic;

        return $this;
    }

    /**
     * Get chronic
     *
     * @return boolean
     */
    public function getChronic()
    {
        return $this->chronic;
    }

    /**
     * Set decision
     *
     * @param string $decision
     * @return Consultation
     */
    public function setDecision($decision)
    {
        $this->decision = $decision;

        return $this;
    }

    /**
     * Get decision
     *
     * @return string
     */
    public function getDecision()
    {
        return $this->decision;
    }
}
