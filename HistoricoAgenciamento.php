<?php

require_once('WithDatabaseable.php');
require_once('Databaseable.php');
require_once('MyConnect.php');

class HistoricoAgenciamento implements Databaseable
{
    use WithDatabaseable;

    protected $idagente;
    protected $idmodelo;
    protected $datainicio;
    protected $datafim;
    protected $motivo;

    public function __construct(array $parameters)
    {
        $properties = array_keys(get_class_vars(get_class()));
        foreach ($parameters as $key => $parameter) {
            if (in_array($key, $properties)) {
                $this->{$key} = $parameter;
            }
        }    
    }
    

    /**
     * Get the value of idagente
     */
    public function getIdagente()
    {
        return $this->idagente;
    }

    /**
     * Set the value of idagente
     */
    public function setIdagente($idagente): self
    {
        $this->idagente = $idagente;

        return $this;
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

    /**
     * Get the value of motivo
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set the value of motivo
     */
    public function setMotivo($motivo): self
    {
        $this->motivo = $motivo;

        return $this;
    }
}