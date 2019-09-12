## Why this Repo?
Questo repository è una guida alla programmazione ad oggetti in Php.

Per scaricare il progetto clonare sul pc il repository tramite Git.
Avviate il vostro server ed iniziate a scoprire la programmazione OOP di Php.

Gli step da seguire sono:

1. leggere il file getting_started/first_time.php dove vengono spiegati con esempi pratici la base della programmazione 
ad oggetti: questa cartella spiegherà a livello basico, perciò è imporatante comprendere il codice per gli step successivi.

2. Successivamente potete vedere il codice del file /getting_started/class_lib.php che sempre a livello basico fa altri 
esempi ed utilizza la Php Doc che serve per documentare classi e metodi per facilitare il lavoro di terze parti sul progetto.

3. Una volta capito il concetto di classe, metodo, proprietà ecc.., una volta eseguito il codice d'esempio sarete in grado di 
proseguire con la cartella /model, dove all'interno ci saranno diverse classi, tutte quante caricate nel file /index.php.


Il codice è pieno di commenti per facilitare l'utilizzo e lo studio del codice stesso.
I contentuti sono in costante aggioranamento quindi sempre sintonizzati.  


## PHP Object Oriented Programming
La programmazione ad oggetti è un concetto molto diffuso nei linguaggi di programmazione, non solo in PHP.

Php è un linguaggio lato server: ogni qual volta viene richiesto un certo URI il server php si fa carico di elaborare e 
rispondere alla richiesta interessata per poi chiudere la connessione subito dopo.

Per questo è un linguaggio lato server, perchè appunto necessita di un server che elabora la richiesta e quindi le informazioni
e solo dopo può restituire una response: insomma in poche parole un server PHP è il core di un sito o una webapp.


Con la nascita della programmazione ad oggetti è cambiato radicalmente il modo in cui si sviluppa l'ecositema di internet.
Con l'OOP oggi è molto più semplice creare ad esempio piattaforme che gestiscono una grande mole di dati in modo automatico.

La OOP si base su concetto di classe: una classe è l'elemento madre da cui vengono creati o meglio istanziati degli oggetti.
Ad esempio:

``` php
class Flavor {
    $nome_comune = ... ;
    $nome_scentifico = ... ;
    $anno_scoperta = ... ;
}
```

Ogni qual volta viene creata una nuova istanza dell'oggetto Flavor esso prenderà le stessa caratteristiche della classe.


Una classe ha principalmente delle proprietà e dei metodi, ad esempio:


``` php

class Person {
    $nome = ... ;
    $cognome = ... ;
    $anno_nascita = ... ;ù
    $sesso = ... ;
    $indirizzo = ... ;
    
    function getNome(){
        return $this->nome;
    }
}
```

I metodi delle funzione sono metodi che agiscono sui dati dell'oggetto principalemente.
Possono restituire un valore come nel caso di getName() che appunto restituisce come valore il nome dell'istanza 
sulla quale viene eseguita la funzione.


La variabile speciale $this fa riferimento all'istanza, perciò si riferisce all'oggetto stesso.
