<?php

/**
 * Kata 4: bubble_sort() sorts an integer array.
 */
declare(strict_types=1);

namespace Katas;

/**
 * Kata4.
 */
final class Kata4
{
	/**
	 * bubble_sort() should sort an integer array into ascending order. For
	 * example, the array:
	 *
	 * { 9, 1, 5, 2, 7 }
	 *
	 * should be sorted as: { 1, 2, 5, 7, 9 }
	 *
	 * bubble_sort() should move along the array and swap any two adjacent
	 * elements which are not in order. It should stop sorting when no swaps
	 * have been made. For example the array above should be sorted like this:
	 *
	 * { 9, 1, 5, 2, 7 } // Swap elements 0, 1
	 *
	 * { 1, 9, 5, 2, 7 } // Swap elements 1, 2
	 *
	 * { 1, 5, 9, 2, 7 } // Swap elements 2, 3
	 *
	 * { 1, 5, 2, 9, 7 } // Swap elements 3, 4
	 *
	 * { 1, 5, 2, 7, 9 } // Swap elements 1, 2
	 *
	 * { 1, 2, 5, 7, 9 } // No more swaps, array is sorted!
	 *
	 * HINT: You may want to add a second (private) method to help you here.
	 */
	/** @param array<int> $array*/
	public static function bubbleSort(array $array): array
	{
		for ($i = 0; $i < count($array); $i++) {
			for ($j = 0; $j < count($array) - $i - 1; $j++) {
				if ($array[$j] > $array[$j + 1]) {
					self::swap($array, $j, $j + 1);
				}
			}
		}

		return $array;
	}

	/** @param array<int> $array*/
	private static function swap(array &$array, int $currentIndex, int $nextIndex): void
	{
		[$array[$currentIndex], $array[$nextIndex]] = [$array[$nextIndex], $array[$currentIndex]];
	}
}
