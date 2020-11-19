<?php

use Cegonhas\Domain\Entity\Baba;
use PHPUnit\Framework\TestCase;
use Cegonhas\Infrastructure\Dao\BabaDao;
use Cegonhas\Infrastructure\Dao\ClienteDao;
use Cegonhas\Domain\Entity\Cliente;

use function PHPUnit\Framework\assertInstanceOf;
use function PHPUnit\Framework\assertIsArray;
use function PHPUnit\Framework\assertTrue;

final class ClienteDaoTest extends TestCase
{

    public function testClienteDaoCreate(): void {
        $clienteDao = new ClienteDao();
        $cliente = new Cliente();
        
        $cliente->setCartaoDados(10);
        $cliente->setNome("Claudia cliente");
        $cliente->setSobrenome("Freitamore");
        $cliente->setEmail("Claudiacliente@gmail.com.br");
        $cliente->setCpf("532.412.634-43");
        $cliente->setTelefone("(18) 948541121");
        $cliente->setRg("25323566");
        $cliente->setEndereco("Emilio ligabone, 234");
        $clienteDao->create($cliente);

        assertTrue(true);
    }

    public function testClienteDaoUpdate(): void {
        $clienteDao = new ClienteDao();
        $cliente = new Cliente();
        $cliente->setId(4);
        $cliente->setCartaoDados(10);
        $cliente->setNome("Claudia cliente alterado, olha que massa");
        $cliente->setSobrenome("Freitamore");
        $cliente->setEmail("Claudiacliente@gmail.com.br");
        $cliente->setCpf("532.412.634-43");
        $cliente->setTelefone("(18) 948541121");
        $cliente->setRg("25323566");
        $cliente->setEndereco("Emilio ligabone, 234");
        $clienteDao->update($cliente);
        assertTrue(true);
    }

    public function testClienteDaoList(): void {
        $clienteDao = new ClienteDao();
        
        $clientes = $clienteDao->list();
        assertIsArray($clientes);
        foreach($clientes as $cliente) {
            assertInstanceOf(Cliente::class, $cliente);
        }
    }

    public function testClienteDaofindById(): void {
        $clienteDao = new ClienteDao();
        $id_find = 4;
        $return_value = $clienteDao->findById($id_find);

        assertInstanceOf(Cliente::class, $return_value);
    }

    public function testBabaDaoDelete(): void {
        $clienteDao = new ClienteDao();
        $clienteDao->delete(8);
        assertTrue(true);
    }
    

}