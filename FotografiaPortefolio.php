<?php

class FotografiaPortefolio implements Databaseable{
    use WithDatabaseable;

    protected $idfotografia;
    protected $idportefolio;

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
     * Get the value of idfotografia
     */
    public function getIdfotografia()
    {
        return $this->idfotografia;
    }

    /**
     * Set the value of idfotografia
     */
    public function setIdfotografia($idfotografia): self
    {
        $this->idfotografia = $idfotografia;

        return $this;
    }

    /**
     * Get the value of idportefolio
     */
    public function getIdportefolio()
    {
        return $this->idportefolio;
    }

    /**
     * Set the value of idportefolio
     */
    public function setIdportefolio($idportefolio): self
    {
        $this->idportefolio = $idportefolio;

        return $this;
    }
}