<?php

/**
 * Operadores bitwise
 * São utilizados para movimentar bits (ligar e desligar) em inteiros e strings, no caso das strings,
 * seus valores são representados na tabela ASCII.
 */

class BitwiseTest extends PHPUnit_Framework_TestCase
{
    // $a & $b (E) - os bits ligados entre $a e $b são ativados.
    public function testCondicaoANDusandoInteiros()
    {
        $a = 10; // 00001010
        $b = 2; //  00000010

        $resultado = $a & $b; // 00000010
        $this->assertEquals(2, $resultado);

        $a = 20; // 00010100
        $b = 15; // 00001111

        $resultado = $a & $b; // 00000100
        $this->assertEquals(4, $resultado);
    }

    // $a | $b (OU) - os bits ligados entre $a ou em $b são ativados.
    public function testCondicaoORusandoInteiros()
    {
        $a = 10; // 00001010
        $b = 2; //  00000010

        $resultado = $a | $b; // 00001010
        $this->assertEquals(10, $resultado);

        $a = 20; // 00010100
        $b = 15; // 00001111

        $resultado = $a | $b; // 00011111
        $this->assertEquals(31, $resultado);
    }

    // $a ^ $b (XOR) - os bits que estão ativos em $a ou em $b, mas não em ambos, são ativados.
    public function testCondicaoXORusandoInteiros()
    {
        $a = 10; // 00001010
        $b = 2; //  00000010

        $resultado = $a ^ $b; // 00001000
        $this->assertEquals(8, $resultado);

        $a = 20; // 00010100
        $b = 15; // 00001111

        $resultado = $a ^ $b; // 00011011
        $this->assertEquals(27, $resultado);
    }

    // ~ $a  (NÃO) - os bits que estão ativos em $a não são ativados, e vice-versa.
    public function testCondicaoNAOusandoInteiros()
    {
        $a = 11; // 00001011
        
        $resultado = ~ $a;
        $this->assertEquals(-12, $resultado);
    }

    // $a << $b  -  deslocamento à esquerda Desloca os bits de $a $b passos para a esquerda (cada passo significa "multiplica por dois")
    public function testCondicaoDeslocamentoEsquerdausandoInteiros()
    {
        $a = 5; // 00000101
        $b = 3; // 00000011

        $resultado = $a << $b; // (((5*2)*2)*2)
        $this->assertEquals(40, $resultado);
    }

    // $a >> $b  -  Deslocamento à direita  Desloca os bits de $a $b passos para a direita (cada passo significa "divide por dois")
    public function testCondicaoDeslocamentoDireitausandoInteiros()
    {
        $a = 100; // 01100100
        $b = 3; // 00000011

        $resultado = $a >> $b; // (((100/2)/2)/2) arredonda 12,5 para 12
        $this->assertEquals(12, $resultado);
    }
}
