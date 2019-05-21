<?php

namespace Levels\ReturnTypes;

class Foo
{

	/**
	 * @param int $i
	 * @param float $j
	 * @param int|string $k
	 * @param float|string $l
	 * @param int|null $m
	 * @return int
	 */
	public function doFoo(
		int $i,
		float $j,
		$k,
		$l,
		?int $m
	)
	{
		return $i;
		return $j;
		return $k;
		return $l;
		return $m;
		return;
	}

	/**
	 * @param int $i
	 * @param float $j
	 * @param int|string $k
	 * @param float|string $l
	 * @param int|null $m
	 * @return void
	 */
	public function doBar(
		int $i,
		float $j,
		$k,
		$l,
		?int $m
	)
	{
		return $i;
		return $j;
		return $k;
		return $l;
		return $m;
		return;
	}

	/**
	 * @param array<string, bool|int|string|null> $array
	 * @return string[]|null
	 */
	public function returnArrayOrNull(
		$array
	): ?array
	{
		return $array;
	}

	public function returnString(): string
	{
		$s = null;
		if (rand(0, 1) === 0) {
			$s = 'foo';
		}

		return $s;
	}

	public function returnString2(): string
	{
		$s = null;
		if (rand(0, 1) === 0) {
			$s = $this->returnString();
		}

		return $s;
	}

}
