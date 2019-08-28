<?php

// Include delle classi interessate
include('Person.php');
include('Utente.php');
include('Post.php');

/* Creazione di 2 istanze della classe Utente che estende la classe Person */

// Utente numero 1 (pax1) Luca Aloi
$pax1 = new \MySpace\Utente\Utente('Luca','Aloi','09/10/1997','M','3770896207');

// Utente numero 2 (pax2) Stefano De Almeida
$pax2 = new \MySpace\Utente\Utente('Stefano','De Almeida','03/08/1997','M','3801566647');


// Ora creiamo le 2 utenze registrando email e password:
$pax1->createUtente('aloiluca.dev@gmail.com','luca','luca');
$pax2->createUtente('stefanodealmeida03@gmail.com','stefano','stefano');


// Visualizziamo le 2 istanze tramite la funzione custom showUtente():
$pax1->showUtente();
$pax2->showUtente();

// Cambiamo la password della pax1 con la funzione custom changePassword():
$pax1->changePassword('luca','prova','prova');
$pax1->showUtente();

// Cambiamo la mail della pax1 con la funzione custom changeEmail()
$pax2->changeEmail('stefanodealmeida03@gmail.com','stefano03@gmail.com');
$pax2->showUtente();

// Questa funzione custom effettua il var_dump dell'oggetto.
$pax1->showPersonData();


// Cambiamo alcune proprietà con i nostri metodi custom:
$pax1->changeNome('Mohamed','Bounane');
$pax1->changeDataNascita('03/01/1996');
$pax1->changeSesso('M');
$pax1->changeNumero('3331681469');

// Cambiamo il ruolo da semplice Utente ad Admin:
$pax1->changeRuolo(1);
$pax1->showUtente();
$pax1->showPersonData();


// Creazione di un istanza della classe Post a partire dalla funzione custom createPost:
//$pax1 = new \Post\Post('MYTitolo','MySottoTitolo','Questo è il corpo dell\'articoloooooooooooo','https://www.google.com','17/08/2019');
$post = $pax2->createPost('MYTitolo','MySottoTitolo','Questo è il corpo dell\'articoloooooooooooo','https://www.google.com','17/08/2019');

// Visualizzo il post
$post->showPost();

// Inserisco dei like
$post->putLike();
$post->putLike();
$post->putLike();

// Visualizzo il post
$post->showPost();




