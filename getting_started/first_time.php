<?php
/**
 * Created by PhpStorm.
 * User: luca.aloi
 * Date: 29/08/2019
 * Time: 10:16
 */

// Creare una classe
class Person {

    // Proprietà
    public $name;

    // Costruttore
    public function __construct($name)
    {
        $this->name = $name;
    }

    // Metodo
    public function getName()
    {
        return $this->name;
    }

    /*
     * La pseudo-variabile $this è disponibile quando un metodo o una proprietà sono invocati dall'interno del contesto di un oggetto
     * e fa riferimento all'oggetto stesso.
     * */

}

// istanziare un oggetto della classe:
$persona = new Person('Marco Rossi');
echo $persona->getName().'<br/>';  // Marco Rossi


// Estendere una classe:
class Student extends Person {
    // ....
    // La classe Student estendendo la classe Person ha accesso anche ai metodi e le proprietà della classe estesa

}
$studente = new Student('Nome Studente');
echo $studente->getName().'<br/>';


// Risoluzione del nome della classe con ::class
/*namespace Europe {
    class Italy {
        // ...
    }
    echo Italy::class; // Europe\Italy;
}*/



// Costruttore e Distruttore
class Foo {

    // Il costruttore viene chiamato nella fase di creazione dell'istanze dell'oggetto:
    public function __construct()
    {
        echo "Costruttore: nuova istanza della classe ".__CLASS__."<br/>";
    }


    // Il distruttore viene chiamato prima che l'oggetto sia distrutto, tutti gli oggetti vengono distrutti dopo la response se non prima:
    public function __destruct()
    {
        echo "Distruttore: distrutta la istanza della classe ".__CLASS__."<br/>";
    }
}

$foo = new Foo();



/* Indicatori di visibilità

 - public: proprità e moetodi accessibili sia dall'interno che dall'esterno della classe e dalle classi derivate da essa.

 - private: proprità e moetodi accessibili solo all'interno della classe stessa.

 - protected: proprità e moetodi che possono essere utilizzati solo all'interno della classe e dalle classi derivate, ma non sono accessibili dall'esterno della classe.

/*

/*  Keyword static:
   Le proprietà e i metodi statici non appartengono a nessuna istanza, ma sono di fatto componenti statiche della classe stessa. Per richiamarle occorre usare l'operatore di risoluzione dell'ambito (::) oppure la keyword self.
*/

// Le Costanti
class Color {
    const RED = 'Red';
    const BLUE = 'Blue';

    public function getAll()
    {
        echo self::RED."<br/>";
        echo Color::BLUE."<br/>";
    }
}
$colore = new Color();
$colore->getAll();



// Caricamento automatico delle classi:
class MyClass1 {}
class MyClass2 {}

// nel file autoload.php
spl_autoload_register(function ($class_name){
    include $class_name.'.php';
});

$obj1 = new MyClass1();
$obj2 = new MyClass2();

var_dump($obj1);
var_dump($obj2);

/* Le prossime lezioni saranno su:
 - i Namesapce
 - l'Ereditarietà
 - l'Overriding
 - Le Trait
 - Le Classi Astratte
 - Le Interfacce
 - L'Overloading
 - La Clonazione
 - Il Type Hinting
 - I Metodi magici
 - Errori ed Eccezzioni
 - L'Iterazione
 - Le Classi anonime
 - Array access
 - Introspection
 - Reflection