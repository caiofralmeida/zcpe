<?php

/**
 * Funções prontas para serem utilizadas na manipulação de arrays
 */

class ArrayFunctionsTest extends PHPUnit_Framework_TestCase
{
    /**
     * Altera o "CASE" de todas as chaves de um array, podendo ser maiusculo ou minusculo
     */
    public function testArrayChangeKeyCase()
    {
        $a = array('ProgramadOr' => 1, 'TesTeR' => 2);

        $this->assertEquals(
            array('programador' => 1, 'tester' => 2),
            array_change_key_case($a) // padrão é minusculo
        );

        $this->assertEquals(
            array('PROGRAMADOR' => 1, 'TESTER' => 2),
            array_change_key_case($a, CASE_UPPER)
        );
    }

    /**
     * Divide um array em quantos pedaços forem definidos, podendo manter os indices ou não
     */
    public function testArrayChunk()
    {
        $a = array(5 => 'melancia', 7 => 'abacate', 1 => 'tomate', 10 => 'laranja');

        $this->assertEquals(
            array(
                array('melancia','abacate'),
                array('tomate', 'laranja')
            ),
            array_chunk($a, 2) // padrão reseta o indice
        );

        $this->assertEquals(
            array(
                array(5 => 'melancia', 7 => 'abacate'),
                array(1 => 'tomate', 10 => 'laranja')
            ),
            array_chunk($a, 2, true)
        );
    }

    /**
     * Procura todos valores que contem a coluna passada em um array, formando um novo
     * @param PHP 5.5
     */
    public function testArrayColumn()
    {
        $a = array(
            array(
                'id'   => 10,
                'nome' => 'Joao',
                'idade' => 5
            ),
            array(
                'id'   => 11,
                'nome' => 'Maria',
                'idade' => 2
            ),
            array(
                'id'   => 13,
                'nome' => 'Pedro',
                'idade' => 7
            ),
        );


        $this->assertEquals(
            array(
                10 => 'Joao',
                11 => 'Maria',
                13 => 'Pedro'
            ),
            array_column($a, 'nome', 'id')
        );
    }

    /**
     * a partir de 2 array cria um unico, montando chave e valor.
     */
    public function testArrayCombine()
    {
        $keys = array(10, 20, 30, 40);
        $values = array('a', 'b', 'c', 'd'); 

        $this->assertEquals(
            array(
                10 => 'a',
                20 => 'b',
                30 => 'c',
                40 => 'd'
            ),
            array_combine($keys, $values)
        );
    }

    /**
     * retorna um array com os valores na chave e o total de ocorrencias no valor
     */
    public function testArrayCountValues()
    {
        $values = array('ola', 10, 10, 10, 'ola');

        $this->assertEquals(
            array(
                'ola' => 2,
                10    => 3
            ),
            array_count_values($values)
        );
    }

    /**
     * retorna a diferença entre dois arrays comparando chave e valor
     */
    public function testArrayDiffAssoc()
    {
        $a = array('ola', 1, 10);
        $b = array(5 => 'ola', 1, 7 => 10);

        $this->assertEquals(
            array(
                'ola', 1, 10
            ),
            array_diff_assoc($a, $b)
        );
    }

    /**
     * filtra valores de um array com base na função de callback
     */
    public function testArrayFilter()
    {
        $retorno = array_filter(
            array('ola', 10, 'joao', 'maria', 1, 5, 9, 0),
            function ($valor) {
                return (is_string($valor));
            }
        );

        $this->assertEquals(
            array('ola', 2 => 'joao', 3 => 'maria'),
            $retorno
        );

        // array filter sem callback remove valores falsos
        $this->assertEquals(
            array('a'),
            array_filter(array('a', false, '', null, 0, 0.0, "0", array()))
        );
    }

    /**
     * inverte valor em chaves e chaves em valores
     */
    public function testArrayFlip()
    {
        $this->assertEquals(
            array('v1' => 0, 'v2' => 1),
            array_flip(array('v1', 'v2'))
        );
    }

    /**
     * modifica todos os valores de um ou mais arrays com base em um callback
     */
    public function testArrayMap()
    {
        $modificados = array_map(
            function ($valor) {
                if (is_integer($valor)) {
                    return $valor + 1;
                }
            },
            array(10, 20, 30, 'a', 1, 'b')
        );

        $this->assertEquals(
            array(11, 21, 31, null, 2, null),
            $modificados
        );
    }
}
