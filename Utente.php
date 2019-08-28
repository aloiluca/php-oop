<?php
/**
 * Created by PhpStorm.
 * User: luca.aloi
 * Date: 27/08/2019
 * Time: 15:22
 */

namespace MySpace\Utente;

use MySpace\Person\Person;
use Post\Post;

class Utente extends Person
{


    protected $ruoloAdmin = 0;
    protected $email;
    private $password;



    /**
     * La funzione crea un utente a partire da una email ed una password, l'utente estende la classe Person
     *
     * @param $email
     * @param $password
     * @param $pwd_verify
     */
    function createUtente($email, $password, $pwd_verify)
    {
        if ($password == $pwd_verify) {
            $this->email = $email;
            $this->password = $password;
//            $this->ruolo = 'Admin';
            echo "L'utenza è stata creata correttamente con email $email<br/><br/>";
        }else {
            echo "Le password inserite non corrispondono, riprova!<br/><br/>";
        }
    }

    /**
     * La funzione mostra ad output i dati dell'utente
     */
    function showUtente() {
        echo "Nome: $this->nome<br/>";
        echo "Cognome: $this->cognome<br/>";
        echo "Data di Nascita: $this->data_nascita<br/>";
        echo "Sesso: $this->sesso<br/>";
        echo "Numero di telefono: $this->numero<br/>";
        echo "Email: $this->email<br/>";
        if ($this->ruoloAdmin == 1) {
            echo "Ruolo: Admin<br/>";
        }else {
            echo "Ruolo: Utente<br/>";
        }
        echo "Password:$this->password<br/><br/>";
    }

    /**
     * La funzione permette di cambiare la password dell'utente solo se fornisce la vecchia password.
     *
     * @param $password
     * @param $new_password
     * @param $confirm_password
     */
    function changePassword($password, $new_password, $confirm_password) {
        if ($password == $this->password) {
            if ($new_password == $confirm_password) {
                $this->password = $new_password;
                echo "La password è stata cambiata correttamente!<br/><br/>";
            }
            else {
                echo "Le due password inserite non corrispondono, riprova!<br/><br/>";
            }
        }
        else {
            echo "La password inserita non corrisponde con la tua password!<br/><br/>";
        }
    }

    /**
     * La funzione permette di cambiare la mail dell'utente con una nuova.
     *
     * @param $old_mail
     * @param $email
     */
    function changeEmail($old_mail, $email) {
        if ($old_mail == $this->email) {
            $this->email = $email;
        }
        echo "Email cambiata correttamente in: $this->email<br/>";
    }

    function changeNome($new_nome, $new_cognome = null) {
        $this->nome = $new_nome;
        if ($new_cognome) {
            $this->cognome = $new_cognome;
        }
        echo "Il nome è cambiato correttamente in: $this->nome $this->cognome<br/><br/>";
    }

    function changeDataNascita($data) {
        $this->data_nascita = $data;
        echo "Data di nascita cambiata correttamente in: $this->data_nascita<br/><br/>";
    }

    function changeSesso($sex) {
        $this->sesso = $sex;
        echo "Sesso cambiato correttamente in: $this->sesso<br/><br/>";
    }

    function changeNumero($numero) {
        $this->numero = $numero;
        echo "Numero cambiato correttamente in: $this->numero<br/><br/>";
    }

    function changeRuolo($value) {
        $this->ruoloAdmin = $value;
        if ($this->ruoloAdmin == 1) {
            $value = 'Administrator';
        }
        else {
            $value = 'Utente';
        }
        echo "Ruolo cambiato correttamente in $value<br/><br/>";
    }

    function getNomeUtente() {
        $result_array = array(Utente::$nome, Utente::$cognome);
        return $result_array;
    }

    function createPost($titolo, $sotto_titolo, $corpo, $link, $data) {
        $autore = $this->nome. $this->cognome;
        $post = new Post($autore, $titolo, $sotto_titolo, $corpo, $link, $data);
        return $post;
    }
}