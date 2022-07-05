<?php

class ModeloFotografia implements Databaseable{
    use WithDatabaseable;

    protected $idmodelo;
    protected $idfotografia;

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
     * Get the value of idmodelo
     */
    public function getIdmodelo()
    {
        return $this->idmodelo;
    }

    /**
     * Set the value of idmodelo
     */
    public function setIdmodelo($idmodelo): self
    {
        $this->idmodelo = $idmodelo;

        return $this;
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
}