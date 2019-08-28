<?php
/**
 * Created by PhpStorm.
 * User: luca.aloi
 * Date: 27/08/2019
 * Time: 15:12
 */

namespace MySpace\Person;


class Person
{
    protected $nome;
    protected $cognome;
    protected $data_nascita;
    protected $sesso;
    protected $numero;


    function __construct($nome,$cognome,$data_nascita,$sesso,$numero)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->data_nascita = $data_nascita;
        $this->sesso = $sesso;
        $this->numero = $numero;

        echo "La persona $nome $cognome è stata creata correttamente!<br/><br/>";
    }

    function showPersonData(){
        var_dump($this);
    }

}