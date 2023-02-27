
<?php

class Perro
{
    public $nombre;
    public function ladrar(){
        print "Guau!";
    }
}
class Bulldog extends Perro {
    public function ladrar(){
        print "Woof!";
    }
}
$cachorro = new Bulldog();
$cachorro->nombre = "BunBuns";
print $cachorro->nombre; // Devuelve: BunBuns
$cachorro->ladrar();


/*pruebas
$puppy= new perro();
$puppy->nombre = "dart";
print $puppy->nombre; // Devuelve: dart
$puppy->ladrar();
*/

/*Un ejemplo clásico de poliformismo es el siguiente. Podemos crear dos clases distintas: Gato y Perro, 
que heredan de la superclase Animal. La clase Animal tiene el método abstracto makesound() 
que se implementa de forma distinta en cada una de las subclases (gatos y perros suenan de forma distinta).
*/





?>