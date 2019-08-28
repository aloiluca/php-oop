<?php
/**
 * Created by PhpStorm.
 * User: luca.aloi
 * Date: 27/08/2019
 * Time: 17:07
 */

namespace Post;


use MySpace\Person\Person;
use MySpace\Utente\Utente;

class Post
{

    protected $titolo;
    protected $sotto_titolo;
    protected $corpo;
    protected $link;
    protected $autore;
    protected $data;

    protected $like = 0;


    function __construct($autore, $titolo, $sotto_titolo, $corpo, $link, $data)
    {
        $this->autore = $autore;
        $this->titolo = $titolo;
        $this->sotto_titolo = $sotto_titolo;
        $this->corpo = $corpo;
        $this->link = $link;
        $this->data = $data;

        echo "L'articolo con titolo $this->titolo è stato creato correttamente.<br/><br/>";
    }


    function showPost() {
        echo "Titolo: $this->titolo <br/>";
        echo "SottoTitolo: $this->sotto_titolo <br/>";
        echo "Corpo: $this->corpo <br/>";
        echo "Link: $this->link <br/>";
        echo "Data: $this->data<br/>";
        echo "Autore: $this->autore<br/>";
        echo "Like: $this->like<br/><br/>";
    }

    function changeTitolo($new_titolo) {
        $this->titolo = $new_titolo;
    }

    function changeSottoTitolo($new_sotto_titolo) {
        $this->sotto_titolo = $new_sotto_titolo;
    }

    function changeCorpo($new_corpo){
        $this->corpo = $new_corpo;
    }

    function changeLink($new_link) {
        $this->link = $new_link;
    }

    function changeData($new_data) {
        $this->data = $new_data;
    }

    function putLike() {
        $this->like += 1;
    }

    function removeLike() {
        $this->like -= 1;
    }
}