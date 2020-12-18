<?php
    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity() @ORM\Table(name="lieu")
 **/
    class Lieu
    {
        /**
         * @ORM\Id()
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")*
         */
        private $id;
        /**
         * @ORM\Column(type="string") *
         */
        private $nom;
        /**
         * @ORM\Column(type="decimal") *
         */
        private $longitude;
        /**
         * @ORM\Column(type="decimal") *
         */
        private $latitude;
        /**
         *One lieu has many formations. This is the inverse side
         * @ORM\OneToMany(targetEntity="Formation", mappedBy="lieu")
         */
        private $formations;
        /**
         *Many lieux have one user has many formations. This is the owning side
         * @ORM\ManyToOne(targetEntity="User", inversedBy="lieux")
         * @ORM\JoinColumn(name="user_id" )
         */
        private $user;

        /**
         * Lieu constructor.
         */
        public function __construct()
        {
            $this->formations = new ArrayCollection();
        }

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getNom()
        {
            return $this->nom;
        }

        /**
         * @param mixed $nom
         */
        public function setNom($nom)
        {
            $this->nom = $nom;
        }

        /**
         * @return mixed
         */
        public function getLongitude()
        {
            return $this->longitude;
        }

        /**
         * @param mixed $longitude
         */
        public function setLongitude($longitude)
        {
            $this->longitude = $longitude;
        }

        /**
         * @return mixed
         */
        public function getLatitude()
        {
            return $this->latitude;
        }

        /**
         * @param mixed $latitude
         */
        public function setLatitude($latitude)
        {
            $this->latitude = $latitude;
        }

        /**
         * @return mixed
         */
        public function getFormations()
        {
            return $this->formations;
        }

        /**
         * @param mixed $formations
         */
        public function setFormations($formations)
        {
            $this->formations = $formations;
        }

        /**
         * @return mixed
         */
        public function getUser()
        {
            return $this->user;
        }

        /**
         * @param mixed $user
         */
        public function setUser($user)
        {
            $this->user = $user;
        }
    }
?>
