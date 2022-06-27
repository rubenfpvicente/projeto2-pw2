<?php

class Portefolio implements Databaseable{
    use WithDatabaseable;

    protected $idPortefolio;
    protected $dataInicio;
    protected $dataFim;

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
     * Get the value of idPortefolio
     */ 
    public function getIdPortefolio()
    {
        return $this->idPortefolio;
    }

    /**
     * Set the value of idPortefolio
     *
     * @return  self
     */ 
    public function setIdPortefolio($idPortefolio)
    {
        $this->idPortefolio = $idPortefolio;

        return $this;
    }

    /**
     * Get the value of dataInicio
     */ 
    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    /**
     * Set the value of dataInicio
     *
     * @return  self
     */ 
    public function setDataInicio($dataInicio)
    {
        $this->dataInicio = $dataInicio;

        return $this;
    }

    /**
     * Get the value of dataFim
     */ 
    public function getDataFim()
    {
        return $this->dataFim;
    }

    /**
     * Set the value of dataFim
     *
     * @return  self
     */ 
    public function setDataFim($dataFim)
    {
        $this->dataFim = $dataFim;

        return $this;
    }
}
?>