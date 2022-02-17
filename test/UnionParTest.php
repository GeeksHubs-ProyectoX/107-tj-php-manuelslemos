<?php

namespace Test;
use PHPUnit\Framework\TestCase;
use UnionPar\UnionPar;

class Test01Test extends TestCase
{
    public function test1 () {
        $expected = "null";
        $result = (new UnionPar())->apply(null);
        $this->assertEquals($result, $expected );
    }

    public function test2 () {
        $expected = "vacio";
        $result = (new UnionPar())->apply([]);
        $this->assertEquals($result, $expected );
    }

    public function test3 () {
        $expected = "a";
        $result = (new UnionPar())->apply(['a']);
        $this->assertEquals($result, $expected );
    }

    public function test4 () {
        $expected = "az";
        $result = (new UnionPar())->apply(['a', 'z']);
        $this->assertEquals($result, $expected );
    }

    public function test5 () {
        $expected = "xy";
        $result = (new UnionPar())->apply(['x', 'z', 'y']);
        $this->assertEquals($result, $expected );
    }

    public function test6 () {
        $expected = "hi!";
        $result = (new UnionPar())->apply(['h', 'z', 'i', '!']);
        $this->assertEquals($result, $expected );
    }

    public function test7 () {
        $expected = "[%]";
        $result = (new UnionPar())->apply(['[', 'o', '%', 'a', ']']);
        $this->assertEquals($result, $expected );
    }

    public function test8 () {
        $expected = "hl!";
        $result = (new UnionPar())->apply(['h', 'o', 'l', 'a', '!']);
        $this->assertEquals($result, $expected );
    }

    public function test9 () {
        $expected = "hola!";
        $result = (new UnionPar())->apply(['h', 'o', 'o', 'l', 'l', 'a', 'a', '!']);
        $this->assertEquals($result, $expected );
    }

    public function test10 () {
        $expected = "casa!";
        $result = (new UnionPar())->apply(['c', 'o', 'a', 'l', 's', 'a', 'a', '!']);
        $this->assertEquals($result, $expected );
    }

    public function test11 () {
        $expected = "geeks!";
        $result = (new UnionPar())->apply(['g', 'e', 'e', 'e', 'e', 'k', 'k', 's', 's', '!']);
        $this->assertEquals($result, $expected );
    }

    public function test12 () {
        $expected = "foo";
        $result = (new UnionPar())->apply(['f', 'o', 'o', 'o']);
        $this->assertEquals($result, $expected );
    }

    public function test13 () {
        $expected = "buu";
        $result = (new UnionPar())->apply(['b', 'u', 'u', 'u']);
        $this->assertEquals($result, $expected );
    }

    public function test14 () {
        $expected = "bu";
        $result = (new UnionPar())->apply(['b', 'u', 'u']);
        $this->assertEquals($result, $expected );
    }

}