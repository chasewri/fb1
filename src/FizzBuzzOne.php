<?php

declare(strict_types=1);

class FizzBuzzOne
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

    public function get_single_result(int $num): string
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

    public function result_string(): string
    {
        $result = "";
        for ($i = $this->start; $i < $this->stop + 1; $i++) {
            $result .= $this->get_single_result($i);
        }
        return $result;
    }

    public static function print_result(int $start, int $stop): int
    {
        return print((new FizzBuzzOne($start, $stop))->result_string() . "\n");
    }
}

FizzBuzzOne::print_result(1, 20);
