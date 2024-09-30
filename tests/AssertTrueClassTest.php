<?php 

declare(strict_types=1);
use PHPUnit\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class AssertTrueClassTest extends TestCase
{
    #[Test]
    #[TestDox("prueba asserttTrue")] 
    public function AssertTrueTest(): void
    {
        $expected=(2==2);

        $this->assertTrue($expected);
    }}

?>