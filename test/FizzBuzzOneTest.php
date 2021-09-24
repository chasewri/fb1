<?php
// ./vendor/bin/phpunit test
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FizzBuzzOneTest extends TestCase
{
    public function test_correct_num_values(): void
    {
        $fb = new FizzBuzzOne(1, 100);
        $fb_str = $fb->result_string();
        $capture_arr = explode(" ", trim($fb_str));
        $this->assertSame(100, count($capture_arr));
    }

    public function test_multiples_of_three_assigned_fizz(): void
    {
        $fb = new FizzBuzzOne(1, 100);
        $test_arr = range(3, 100, 3);
        foreach ($test_arr as $key => $val) {
            if ($val % 5 !== 0) {
                $this->assertSame("fizz", trim($fb->get_single_result($val)));
            }
        }
    }

    public function test_multiples_of_five_assigned_buzz(): void
    {
        $fb = new FizzBuzzOne(1, 100);
        $test_arr = range(5, 100, 5);
        foreach ($test_arr as $key => $val) {
            if ($val % 3 !== 0) {
                $this->assertSame("buzz", trim($fb->get_single_result($val)));
            }
        }
    }

    public function test_multiples_of_15_assigned_fizzbuzz(): void
    {
        $fb = new FizzBuzzOne(1, 100);
        $test_arr = range(15, 100, 15);
        foreach ($test_arr as $key => $val) {
            $this->assertSame("fizzbuzz", trim($fb->get_single_result($val)));
        }
    }

    public function test_return_integers(): void
    {
        $fb = new FizzBuzzOne(1, 100);
        $test_arr = range(1, 100);
        foreach ($test_arr as $key => $val) {
            if ($val % 3 !== 0 && $val % 5 !== 0) {
                $this->assertGreaterThan(0, (int)trim($fb->get_single_result($val)));
            }
        }
    }

    public function test_reverse(): void
    {
        $fb = new FizzBuzzOne(1, 100);
        $fb_str = $fb->result_string();
        $capture_arr = explode(" ", trim($fb_str));
        $test_arr = range(1, 100);
        foreach ($capture_arr as $key => $val) {
            switch ($val) {
                case 'fizz':
                    $this->assertTrue($test_arr[$key] % 3 === 0);
                    break;
                case 'buzz':
                    $this->assertTrue($test_arr[$key] % 5 === 0);
                    break;
                case 'fizzbuzz':
                    $this->assertTrue($test_arr[$key] % 15 === 0);
                    break;
                default:
                    $this->assertSame((int)$capture_arr[$key], $test_arr[$key]);
                    break;
            }
        }
    }
}
