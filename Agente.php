<?php

class Agente implements Databaseable
{
    use WithDatabaseable;

    protected $idagente;
    protected $nome;
    protected $rua;
    protected $porta;
    protected $codigopostal;
    protected $cidade;
    protected $pais;
    protected $contacto;
    protected $nif;    

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
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->idagente;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->idagente = $id;

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
}