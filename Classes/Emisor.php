<?php

class Emisor extends XML
{

    public $regimenFiscal;

    public function __construct()
    {
        $this->atributos = [];
        $this->atributos['Nombre'] = '';
        $this->atributos['RegimenFiscal'] = '';
        $this->rules = [];
        $this->rules['Nombre'] = 'R';
        $this->rules['RegimenFiscal'] = 'R';
    }

    public function getNode()
    {
        $xml = '<cfdi:Emisor ' . $this->getAtributes() . ' />';
        return $xml;
    }
}
