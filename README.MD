##PHP Object Oriented Programming
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
