<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ApiResource(
 * routePrefix="/admin",
 * attributes={"security"="is_granted('ROLE_AdminSystem')"},
 * )
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="user_type", type="string")
 * @ORM\DiscriminatorMap({"caissier"="Caissier","user"="User", "adminsysteme"="AdminSysteme", "adminagent"="AdminAgent" , "useragence"="UserAgence"})
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({ "read:user"})
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    protected $username;

    protected $roles = [];

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $password;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({ "read:user"})
     */
    protected $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({ "read:user"})
     */
    protected $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({ "read:user"})
     */
    protected $email;

    /**
     * @ORM\Column(type="blob", nullable=true)
     * @Groups({ "read:user"})
     */
    protected $avatar;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({ "read:user"})
     */
    protected $tel;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({ "read:user"})
     */
    protected $cni;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $archived;

    /**
     * @ORM\ManyToOne(targetEntity=Profil::class, inversedBy="users")
     * @Groups({ "read:user"})
     */
    protected $profil;

    /**
     * @ORM\OneToMany(targetEntity=Compte::class, mappedBy="user")
     * @Groups({ "read:user"})
     */
    protected $compte;

    /**
     * @ORM\OneToMany(targetEntity=Transaction::class, mappedBy="userDepot")
     */
    private $transactionDepot;

    /**
     * @ORM\OneToMany(targetEntity=Transaction::class, mappedBy="userRetrait")
     */
    private $transactionRetrait;

    /**
     * @ORM\ManyToOne(targetEntity=Agence::class, inversedBy="users")
     */
    private $agence;



    public function __construct()
    {
        $this->compte = new ArrayCollection();
        $this->transactionDepot = new ArrayCollection();
        $this->transactionRetrait = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_'.$this->profil->getLibelle();

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getCni(): ?string
    {
        return $this->cni;
    }

    public function setCni(string $cni): self
    {
        $this->cni = $cni;

        return $this;
    }

    public function getArchived(): ?bool
    {
        return $this->archived;
    }

    public function setArchived(bool $archived): self
    {
        $this->archived = $archived;

        return $this;
    }

    public function getProfil(): ?Profil
    {
        return $this->profil;
    }

    public function setProfil(?Profil $profil): self
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * @return Collection|Compte[]
     */
    public function getCompte(): Collection
    {
        return $this->compte;
    }

    public function addCompte(Compte $compte): self
    {
        if (!$this->compte->contains($compte)) {
            $this->compte[] = $compte;
            $compte->setUser($this);
        }

        return $this;
    }

    public function removeCompte(Compte $compte): self
    {
        if ($this->compte->removeElement($compte)) {
            // set the owning side to null (unless already changed)
            if ($compte->getUser() === $this) {
                $compte->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Transaction[]
     */
    public function getTransactionDepot(): Collection
    {
        return $this->transactionDepot;
    }

    public function addTransactionDepot(Transaction $transactionDepot): self
    {
        if (!$this->transactionDepot->contains($transactionDepot)) {
            $this->transactionDepot[] = $transactionDepot;
            $transactionDepot->setUserDepot($this);
        }

        return $this;
    }

    public function removeTransactionDepot(Transaction $transactionDepot): self
    {
        if ($this->transactionDepot->removeElement($transactionDepot)) {
            // set the owning side to null (unless already changed)
            if ($transactionDepot->getUserDepot() === $this) {
                $transactionDepot->setUserDepot(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Transaction[]
     */
    public function getTransactionRetrait(): Collection
    {
        return $this->transactionRetrait;
    }

    public function addTransactionRetrait(Transaction $transactionRetrait): self
    {
        if (!$this->transactionRetrait->contains($transactionRetrait)) {
            $this->transactionRetrait[] = $transactionRetrait;
            $transactionRetrait->setUserRetrait($this);
        }

        return $this;
    }

    public function removeTransactionRetrait(Transaction $transactionRetrait): self
    {
        if ($this->transactionRetrait->removeElement($transactionRetrait)) {
            // set the owning side to null (unless already changed)
            if ($transactionRetrait->getUserRetrait() === $this) {
                $transactionRetrait->setUserRetrait(null);
            }
        }

        return $this;
    }

    public function getAgence(): ?Agence
    {
        return $this->agence;
    }

    public function setAgence(?Agence $agence): self
    {
        $this->agence = $agence;

        return $this;
    }


}
