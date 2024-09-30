<?php 
declare (strict_types=1);
require_once './suma.php';
use prueba\suma;

use PHPUnit\Framework\TestCase;

final class StackTest extends TestCase {

    public function test_suma(): void{

    $num1=1;
    $num2= 2;

    $suma = new suma();
    $result= $suma->sumar(numero1: $num1, numero2: $num2);

    $this->assertSame(3,$result);

 }}
