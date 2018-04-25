<?php

namespace Ben\DoctorsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patient
 *
 * @ORM\Table(name="patient")
 * @ORM\Entity(repositoryClass="Ben\DoctorsBundle\Repository\PatientRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Patient
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=255)
     */
    private $cin;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string" , length=255)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_naissance", type="string", length=255)
     */
    private $villeNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="etablissement", type="string", length=255, nullable=true)
     */
    private $etablissement;

    /**
     * @var string
     *
     * @ORM\Column(name="gsm", type="string", length=255, nullable=true)
     */
    private $gsm;

    /**
     * @var string
     *
     * @ORM\Column(name="parent_name", type="string", length=255, nullable=true)
     */
    private $parentName;

    /**
     * @var string
     *
     * @ORM\Column(name="parent_address", type="string", length=255, nullable=true)
     */
    private $parentAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="parent_gsm", type="string", length=255, nullable=true)
     */
    private $parentGsm;

    /**
     * @var string
     *
     * @ORM\Column(name="parent_fixe", type="string", length=255, nullable=true)
     */
    private $parentFixe;

    /**
     * @var boolean
     * @ORM\Column(name="ishandicap", type="boolean", nullable=true)
     *
     */
    private $ishandicap;

    /**
     * @var string
     *
     * @ORM\Column(name="handicap", type="string", length=255, nullable=true)
     */
    private $handicap;

    /**
     * @var \DateTime $created
     *
     * @ORM\Column(name="created", type="datetime")
     */
    protected $created;

    /**
     * @ORM\OneToMany(targetEntity="Ben\DoctorsBundle\Entity\Consultation", mappedBy="patient", cascade={"remove", "persist"})
     */
    protected $consultations;

    /************ constructeur ************/

    public function __construct()
    {
        $this->created = new \DateTime;
        $this->antecedents = new \Doctrine\Common\Collections\ArrayCollection();
        $this->consultations = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Patient
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Patient
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
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Patient
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set cin
     *
     * @param string $cin
     *
     * @return Patient
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Patient
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Patient
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Patient
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Patient
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Patient
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Patient
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set villeNaissance
     *
     * @param string $villeNaissance
     *
     * @return Patient
     */
    public function setVilleNaissance($villeNaissance)
    {
        $this->villeNaissance = $villeNaissance;

        return $this;
    }

    /**
     * Get villeNaissance
     *
     * @return string
     */
    public function getVilleNaissance()
    {
        return $this->villeNaissance;
    }

    /**
     * Set etablissement
     *
     * @param string $etablissement
     *
     * @return Patient
     */
    public function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get etablissement
     *
     * @return string
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }


    /**
     * Set gsm
     *
     * @param string $gsm
     *
     * @return Patient
     */
    public function setGsm($gsm)
    {
        $this->gsm = $gsm;

        return $this;
    }

    /**
     * Get gsm
     *
     * @return string
     */
    public function getGsm()
    {
        return $this->gsm;
    }

    /**
     * Set parentName
     *
     * @param string $parentName
     *
     * @return Patient
     */
    public function setParentName($parentName)
    {
        $this->parentName = $parentName;

        return $this;
    }

    /**
     * Get parentName
     *
     * @return string
     */
    public function getParentName()
    {
        return $this->parentName;
    }

    /**
     * Set parentAddress
     *
     * @param string $parentAddress
     *
     * @return Patient
     */
    public function setParentAddress($parentAddress)
    {
        $this->parentAddress = $parentAddress;

        return $this;
    }

    /**
     * Get parentAddress
     *
     * @return string
     */
    public function getParentAddress()
    {
        return $this->parentAddress;
    }

    /**
     * Set parentGsm
     *
     * @param string $parentGsm
     *
     * @return Patient
     */
    public function setParentGsm($parentGsm)
    {
        $this->parentGsm = $parentGsm;

        return $this;
    }

    /**
     * Get parentGsm
     *
     * @return string
     */
    public function getParentGsm()
    {
        return $this->parentGsm;
    }

    /**
     * Set parentFixe
     *
     * @param string $parentFixe
     *
     * @return Patient
     */
    public function setParentFixe($parentFixe)
    {
        $this->parentFixe = $parentFixe;

        return $this;
    }

    /**
     * Get parentFixe
     *
     * @return string
     */
    public function getParentFixe()
    {
        return $this->parentFixe;
    }

    /**
     * Set ishandicap
     *
     * @param boolean $ishandicap
     *
     * @return Patient
     */
    public function setIshandicap($ishandicap)
    {
        $this->ishandicap = $ishandicap;

        return $this;
    }

    /**
     * Get ishandicap
     *
     * @return boolean
     */
    public function getIshandicap()
    {
        return $this->ishandicap;
    }

    /**
     * Set handicap
     *
     * @param string $handicap
     *
     * @return Patient
     */
    public function setHandicap($handicap)
    {
        $this->handicap = $handicap;

        return $this;
    }

    /**
     * Get handicap
     *
     * @return string
     */
    public function getHandicap()
    {
        return $this->handicap;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Patient
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
     * Add consultation
     *
     * @param \Ben\DoctorsBundle\Entity\Consultation $consultation
     *
     * @return Patient
     */
    public function addConsultation(\Ben\DoctorsBundle\Entity\Consultation $consultation)
    {
        $this->consultations[] = $consultation;

        return $this;
    }

    /**
     * Remove consultation
     *
     * @param \Ben\DoctorsBundle\Entity\Consultation $consultation
     */
    public function removeConsultation(\Ben\DoctorsBundle\Entity\Consultation $consultation)
    {
        $this->consultations->removeElement($consultation);
    }

    /**
     * Get consultations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConsultations()
    {
        return $this->consultations;
    }
}
