
<?php
/*

Las clases abstractas son clases que no se instancian y sólo pueden ser heredadas, trasladando así un funcionamiento obligatorio a clases hijas. Mejoran la calidad del código y ayudan a reducir la cantidad de código duplicado.

Las clases abstractas pueden extenderse unas a otras, así como extender clases normales.

*/

abstract class CocheAbstract {

    public function getRuedas()
    {
        return 4;
    }
    abstract public function setPotencia($potencia);
    abstract public function getPotencia();
}
class Audi extends CocheAbstract {
    public $brand = 'Audi';
    protected $potencia;
    public function setPotencia($potencia)
    {
        $this->potencia = $potencia;
    }
    public function getPotencia()
    {
        return $this->potencia;
    }
}
$audi = new Audi;
$ruedas = $audi->getRuedas();
$audi->setPotencia(100);
$potencia = $audi->getPotencia();

echo "Coche " . $audi->brand . " de " . $ruedas . " ruedas " . "y " . $potencia . " cv de potencia";
// Devuelve Coche Audi de 4 ruedas y 100 cv de potencia

/*el método getRuedas() será igual para todas las marcas de coches, por eso se define en la clase abstracta. 
La clase Audi tendrá ese método para usar, y además deberá definir los métodos setPotencia() y getPotencia(). 
Además estos métodos deben tener igual o mayor visibilidad que en la clase madre, Public > Protected > Private. 
Si en la clase madre se ha definido un método como protected, 
la clase hija deberá adoptarlo como protected o como public, nunca como private*/

?>