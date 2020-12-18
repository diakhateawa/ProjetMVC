<?php
    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity() @ORM\Table(name="roles")
     **/
    class Roles
    {
        /**
         * @ORM\Id()
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")*
         */
        private $id;
        /** @ORM\Column(type="string") **/
        private $nom;
        /**
         *Many Roles has many Users.
         * @ORM\ManyToMany(targetEntity="User", inversedBy="roles")
         */
        private $users;

        /**
         * Roles constructor.
         */
        public function __construct()
        {
            $this->users = new ArrayCollection();
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
        public function getUsers()
        {
            return $this->users;
        }

        /**
         * @param mixed $users
         */
        public function setUsers($users)
        {
            $this->users = $users;
        }

    }
?>