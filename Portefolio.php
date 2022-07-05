<?php

class Portefolio implements Databaseable{
    use WithDatabaseable;

    protected $idportefolio;
    protected $datainicio;
    protected $datafim;

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

    /**
     * Get the value of datainicio
     */
    public function getDatainicio()
    {
        return $this->datainicio;
    }

    /**
     * Set the value of datainicio
     */
    public function setDatainicio($datainicio): self
    {
        $this->datainicio = $datainicio;

        return $this;
    }

    /**
     * Get the value of datafim
     */
    public function getDatafim()
    {
        return $this->datafim;
    }

    /**
     * Set the value of datafim
     */
    public function setDatafim($datafim): self
    {
        $this->datafim = $datafim;

        return $this;
    }
}
?>