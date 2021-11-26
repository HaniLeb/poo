<?php
declare(strict_types=1);

class Maison{
    // public string $type;
    // public float $superficie;
    // public int $nbPieces;
    // public string $couleur;

    public function __construct(private string $type, private float $superficie, private int $nbPieces, private string $couleur, )
    {
        
    }

    public function getType(): string
    {
        return $this->type;
    }
        
    public function setType(string $type): Maison
    {
        $this->type = (string) $type;
        return $this;
    }

    public function majType()
    {
        $this->type = ucfirst($this->type);
        return $this;
    }
// --------------------------------------------------------------

    public function getSuperficie(): ?float
    {
        return $this->superficie;
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */ 

    public function setSuperficie(int|float $superficie): Maison
    {
        return $this->superficie = (float) $superficie;
        return $this;
    }

    /**
     * Get the value of nbPieces
     */ 
    public function getNbPieces(): ?int
    {
        return $this->nbPieces;
    }

    /**
     * Set the value of nbPieces
     *
     * @return  self
     */ 
    public function setNbPieces($nbPieces): Maison
    {
        $this->nbPieces = $nbPieces;

        return $this;
    }

    /**
     * Get the value of couleur
     */ 
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */ 
    public function setCouleur($couleur): Maison
    {
        $this->couleur = $couleur;

        return $this;
    }
}