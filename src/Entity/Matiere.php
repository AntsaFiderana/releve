<?php

namespace App\Entity;

use App\Repository\MatiereRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatiereRepository::class)]
class Matiere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column]
    private ?int $credit = null;

    #[ORM\ManyToOne(targetEntity:Semestre::class)]
    #[ORM\JoinColumn(nullable:false,name:"idsemestre",referencedColumnName:"id")]
    private ?Semestre $semestre=null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCredit(): ?int
    {
        return $this->credit;
    }

    public function setCredit(int $credit): static
    {
        $this->credit = $credit;

        return $this;
    }

	/**
	 * @return 
	 */
	public function getSemestre(): ?App\Entity\Semestre {
		return $this->semestre;
	}
	
	/**
	 * @param  $semestre 
	 * @return self
	 */
	public function setSemestre(?App\Entity\Semestre $semestre): self {
		$this->semestre = $semestre;
		return $this;
	}
}
