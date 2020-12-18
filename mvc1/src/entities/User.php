<?php
    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity()
     * @ORM\Table(name="user")
     **/
    class User
    {
        /**
         * @ORM\Id()
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")*
         */
        private $id;
        /** @ORM\Column(type="string") **/
        private $nom;
        /** @ORM\Column(type="string") **/
        private $prenom;
        /** @ORM\Column(type="string") **/
        private $email;
        /** @ORM\Column(type="string") **/
        private $password;
        /**
         *One user has many lieux. This is the inverse side
         * @ORM\OneToMany(targetEntity="Lieu", mappedBy="user")
         */
        private $lieux;
        /**
         *Many Users has many  Roles.
         * @ORM\ManyToMany(targetEntity="Roles", inversedBy="user")
         * @ORM\JoinTable(name="users_roles")
         */
        private $roles;

        /**
         * User constructor.
         */
        public function __construct()
        {
            $this->lieux = new ArrayCollection();
            $this->roles = new ArrayCollection();
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
        public function getPrenom()
        {
            return $this->prenom;
        }

        /**
         * @param mixed $prenom
         */
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
        }

        /**
         * @return mixed
         */
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * @param mixed $email
         */
        public function setEmail($email)
        {
            $this->email = $email;
        }

        /**
         * @return mixed
         */
        public function getPassword()
        {
            return $this->password;
        }

        /**
         * @param mixed $password
         */
        public function setPassword($password)
        {
            $this->password = $password;
        }

        /**
         * @return mixed
         */
        public function getLieux()
        {
            return $this->lieux;
        }

        /**
         * @param mixed $lieux
         */
        public function setLieux($lieux)
        {
            $this->lieux = $lieux;
        }

        /**
         * @return mixed
         */
        public function getRoles()
        {
            return $this->roles;
        }

        /**
         * @param mixed $roles
         */
        public function setRoles($roles)
        {
            $this->roles = $roles;
        }
    }
?>