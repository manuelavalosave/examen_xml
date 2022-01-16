<?php

class Emisor extends XML
{


    public function __construct()
    {

        $this->atributos = [];
        $this->atributos['Nombre'] = '';
        $this->atributos['RegimenFiscal'] = '';
        // seagrego el atributo Rfc
        $this->atributos['Rfc'] = '';
        $this->rules = [];
        $this->rules['Nombre'] = 'R';
        $this->rules['RegimenFiscal'] = 'R';
        // se agrego el atributo Rfc
        $this->rules['Rfc'] = 'R';
    }

    public function getNode()
    {
        $xml = '<cfdi:Emisor ' . $this->getAtributes() . ' />';
        return $xml;
    }
}
