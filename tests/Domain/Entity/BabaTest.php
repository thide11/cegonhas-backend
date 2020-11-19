<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Cegonhas\Domain\Entity\Baba;

final class BabaTest extends TestCase
{
    public function testBabaFunctionamento(): void
    {

        $baba = new Baba();
        $baba->setNome("Claudia");
        $baba->setCartaoDados(false);
        

        $this->assertEquals(
            $baba->getNome(),
            "Claudia"
        );
    }
}