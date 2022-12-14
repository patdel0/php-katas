<?php

/**
 * Kata 3: fizzbuzz() -- the classic game.
 */
declare(strict_types=1);

namespace Katas;

/**
 * Kata3.
 */
final class Kata3
{
	/**
	 * fizzBuzz() should print integers from 1 to 100 to the console, each
	 * separated by a newline, with the following rules:
	 *
	 *     1. If the number is divisible by 3 "Fizz" should be printed.
	 *     2. If the number is divisible by 5 "Buzz" should be printed.
	 *     3. If the number is divisible by 3 and 5 "FizzBuzz" should be printed.
	 *     4. Otherwise, the number itself should be printed.
	 */
	public static function fizzBuzz(): void
	{
		for ($i = 1; $i <= 100; $i++) {
			if ($i % 3 === 0 && $i % 5 === 0) {
				echo "FizzBuzz\n";
			} elseif ($i % 3 === 0) {
				echo "Fizz\n";
			} elseif ($i % 5 === 0) {
				echo "Buzz\n";
			} else {
				echo "$i\n";
			}
		}
	}
}
