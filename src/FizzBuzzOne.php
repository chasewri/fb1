<?php

declare(strict_types=1);

final class FizzBuzzOne
{
    // int > 0
    private $start;
    // int >= $start
    private $stop;

    public function __construct(int $start, int $stop)
    {
        $this->start = $start;
        $this->stop = $stop;
    }

    public function getSingleResult(int $num): string
    {
        $return_val = "";
        if ($num % 3 === 0) {
            $return_val .= 'fizz';
        }
        if ($num % 5 === 0) {
            $return_val .= 'buzz';
        }
        return strlen($return_val) > 0 ? $return_val . " " : strval($num) . " ";
    }

    public function resultString(): string
    {
        $result = "";
        for ($i = $this->start; $i < $this->stop + 1; $i++) {
            $result .= $this->getSingleResult($i);
        }
        return $result;
    }

    public static function printResult(int $start, int $stop): int
    {
        return print((new self($start, $stop))->resultString() . "\n");
    }
}

FizzBuzzOne::printResult(1, 20);
