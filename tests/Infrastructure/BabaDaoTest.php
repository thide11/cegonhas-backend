<?php

use Cegonhas\Domain\Entity\Baba;
use PHPUnit\Framework\TestCase;
use Cegonhas\Infrastructure\Dao\BabaDao;

use function PHPUnit\Framework\assertInstanceOf;
use function PHPUnit\Framework\assertIsArray;
use function PHPUnit\Framework\assertTrue;

final class BabaDaoTest extends TestCase
{

    public function testBabaDaoCreate(): void {
        $babaDao = new BabaDao();
        $baba = new Baba();
        $baba->setCartaoDados(10);
        $baba->setNome("Claudia");
        $baba->setSobrenome("Freitas");
        $baba->setEmail("Claudia@gmail.com.br");
        $baba->setCpf("442.913.018-39");
        $baba->setTelefone("(18) 996483321");
        $baba->setRg("123412414");
        $baba->setEndereco("Castro alvez, 364");
        $baba->setQtdSessoesAgendadas(5);
        $babaDao->create($baba);
        assertTrue(true);
    }

    public function testBabaDaoUpdate(): void {
        $babaDao = new BabaDao();
        $baba = new Baba();
        $baba->setId(1);
        $baba->setCartaoDados(10);
        $baba->setNome("Claudia editada!");
        $baba->setSobrenome("Freitas");
        $baba->setEmail("Claudia@gmail.com.br");
        $baba->setCpf("442.913.018-39");
        $baba->setTelefone("(18) 996483321");
        $baba->setRg("123412414");
        $baba->setEndereco("Castro alvez, 364");
        $baba->setQtdSessoesAgendadas(5);
        $babaDao->update($baba);
        assertTrue(true);
    }

    public function testBabaDaoList(): void {
        $babaDao = new BabaDao();
        echo "Find by id data : ";
        $babas = $babaDao->list();
        assertIsArray($babas);
        foreach($babas as $baba) {
            assertInstanceOf(Baba::class, $baba);
        }
    }

    public function testBabaDaofindById(): void {
        $babaDao = new BabaDao();
        $id_find = 2;
        $return_value = $babaDao->findById($id_find);

        assertInstanceOf(Baba::class, $return_value);
    }

    public function testBabaDaoDelete(): void {
        $babaDao = new BabaDao();
        $babaDao->delete(1);
        assertTrue(true);
    }
    

}