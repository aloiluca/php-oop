<?php
/**
 * Created by PhpStorm.
 * User: luca.aloi
 * Date: 28/08/2019
 * Time: 10:30
 */

class person {
    var $name;

    /**
     * La funzione __constructor è un tipo speciale di funzione, viene eseguita ogni volta che si crea una nuova
     * istanza dell'oggetto eseguendo il codice contenuto all'interno del metodo.
     * person constructor.
     */
    function __construct()
    {
        echo "L'oggetto della classe ". __CLASS__." è stato istanziato";
    }


    /**
     * Per convenzione si utilizzano 2 diversi metodi per settare e recuperare i valori di un proprietà.
     *
     * @param $new_name
     */
    function set_name($new_name) {
        $this->name = $new_name;
    }


    /**
     * Il metodo get_proprietà restituisce la proprietà stessa
     *
     * @return mixed
     */
    function get_name() {
        return $this->name;
    }


    /**
     * Il metodo speciale __toString ...
     *
     * @return mixed
     */
    function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->name;
    }
}