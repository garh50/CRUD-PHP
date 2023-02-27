<?php 
require_once('conexion.php');
class conexiontest extends PHPUnit\Framework\TestCase   ///renombrada desde 6 class MyTest extends PHPUnit_Framework_TestCase
{
     public function testCanInstatiate(){
         $conexion = new conexion('localhost', 'root', '', 'curso');
         //$conexion->consultaRetorno('select id from usuario where rowid=1' );
     }
}

?>