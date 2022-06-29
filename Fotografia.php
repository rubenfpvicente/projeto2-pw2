<?php

class Fotografia implements Databaseable{
    use WithDatabaseable;

    protected $idfotografia;
    protected $nome;
    protected $resolucao;
    protected $cores;
    protected $tipo;
    protected $localizacao;
    protected $idfotografo;

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
     *
     * @return  self
     */
    public function setIdfotografia($idfotografia)
    {
        $this->idfotografia = $idfotografia;

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
     * Get the value of resolucao
     */
    public function getResolucao()
    {
        return $this->resolucao;
    }

    /**
     * Set the value of resolucao
     *
     * @return  self
     */
    public function setResolucao($resolucao)
    {
        $this->resolucao = $resolucao;

        return $this;
    }
    
    /**
     * Get the value of cores
     */ 

    public function getCores()
    {
        return $this->cores;
    }

    /**
     * Set the value of cores
     *
     * @return  self
     */ 
    public function setCores($cores)
    {
        $this->cores = $cores;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of localizacao
     */ 
    public function getLocalizacao()
    {
        return $this->localizacao;
    }

    /**
     * Set the value of localizacao
     *
     * @return  self
     */ 
    public function setLocalizacao($localizacao)
    {
        $this->localizacao = $localizacao;

        return $this;
    }

    /**
     * Get the value of idfotografo
     */ 
    public function getIdfotografo()
    {
        return $this->idfotografo;
    }

    /**
     * Set the value of idfotografo
     *
     * @return  self
     */ 
    public function setIdfotografo($idfotografo)
    {
        $this->idfotografo = $idfotografo;

        return $this;
    }

}
    