<?php

class FotografiaPortefolio implements Databaseable{
    use WithDatabaseable;

    protected $idFotografia;
    protected $idPortefolio;

    public function __construct($parameters)
    {
        $properties = array_keys(get_class_vars(get_class()));
        foreach ($parameters as $key => $parameter) {
            if (in_array($key, $properties)) {
                $this->{$key} = $parameter;
            }
        }
    }

     /**
     * Get the value of idFotografia
     */
    public function getIdFotografia()
    {
        return $this->idFotografia;
    }

    /**
     * Set the value of idFotografia
     */
    public function setIdFotografia($idFotografia): self
    {
        $this->idFotografia = $idFotografia;

        return $this;
    }

    /**
     * Get the value of idPortefolio
     */
    public function getIdPortefolio()
    {
        return $this->idPortefolio;
    }

    /**
     * Set the value of idPortefolio
     */
    public function setIdPortefolio($idPortefolio): self
    {
        $this->idPortefolio = $idPortefolio;

        return $this;
    }
}