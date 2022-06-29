<?php

class Modelo implements Databaseable{
    use WithDatabaseable;

    protected $idmodelo;
    protected $sexo;
    protected $nome;
    protected $medida1;
    protected $medida2;
    protected $medida3;
    protected $rua;
    protected $porta;
    protected $codigopostal;
    protected $cidade;
    protected $pais;
    protected $contacto;
    protected $nif;
    protected $altura;
    protected $idagente;  

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
     *
     * @return  self
     */ 
    public function setIdmodelo($idmodelo)
    {
        $this->idmodelo = $idmodelo;

        return $this;
    }

    /**
     * Get the value of sexo
     */ 
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     *
     * @return  self
     */ 
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of medida1
     */ 
    public function getMedida1()
    {
        return $this->medida1;
    }

    /**
     * Set the value of medida1
     *
     * @return  self
     */ 
    public function setMedida1($medida1)
    {
        $this->medida1 = $medida1;

        return $this;
    }

    /**
     * Get the value of medida2
     */ 
    public function getMedida2()
    {
        return $this->medida2;
    }

    /**
     * Set the value of medida2
     *
     * @return  self
     */ 
    public function setMedida2($medida2)
    {
        $this->medida2 = $medida2;

        return $this;
    }

    /**
     * Get the value of medida3
     */ 
    public function getMedida3()
    {
        return $this->medida3;
    }

    /**
     * Set the value of medida3
     *
     * @return  self
     */ 
    public function setMedida3($medida3)
    {
        $this->medida3 = $medida3;

        return $this;
    }

    /**
     * Get the value of rua
     */ 
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * Set the value of rua
     *
     * @return  self
     */ 
    public function setRua($rua)
    {
        $this->rua = $rua;

        return $this;
    }

    /**
     * Get the value of porta
     */ 
    public function getPorta()
    {
        return $this->porta;
    }

    /**
     * Set the value of porta
     *
     * @return  self
     */ 
    public function setPorta($porta)
    {
        $this->porta = $porta;

        return $this;
    }

    /**
     * Get the value of codigopostal
     */ 
    public function getCodigopostal()
    {
        return $this->codigopostal;
    }

    /**
     * Set the value of codigopostal
     *
     * @return  self
     */ 
    public function setCodigopostal($codigopostal)
    {
        $this->codigopostal = $codigopostal;

        return $this;
    }

    /**
     * Get the value of cidade
     */ 
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     *
     * @return  self
     */ 
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of pais
     */ 
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     *
     * @return  self
     */ 
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get the value of contacto
     */ 
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set the value of contacto
     *
     * @return  self
     */ 
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get the value of nif
     */ 
    public function getNif()
    {
        return $this->nif;
    }

    /**
     * Set the value of nif
     *
     * @return  self
     */ 
    public function setNif($nif)
    {
        $this->nif = $nif;

        return $this;
    }

    

    /**
     * Get the value of altura
     */ 
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     *
     * @return  self
     */ 
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
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
     *
     * @return  self
     */ 
    public function setIdagente($idagente)
    {
        $this->idagente = $idagente;

        return $this;
    }
}