<?php

namespace FooNamespace;

use ArrayIterator;
use DateTimeImmutable;

/**
 * @param int $a
 */
function simpleTypeHint(int $a)
{
}

/**
 * @param \Foo $a
 */
function fullyQualifiedClassTypeHint(\Foo $a)
{
}

/**
 * @param DateTimeImmutable $a
 */
function usedClassTypeHint(DateTimeImmutable $a)
{
}

/**
 * @param resource $a
 */
function unofficialTypeHint($a)
{
}

/**
 * @param int|null $a
 */
function nullableSimpleTypeHint(?int $a)
{
}

/**
 * @param null|int $a
 */
function nullableFirstSimpleTypeHint(?int $a)
{
}

/**
 * @param \Foo|null $a
 */
function nullableFullyQualifiedClassTypeHint(?\Foo $a)
{
}

/**
 * @param DateTimeImmutable|null $a
 */
function nullableUsedClassTypeHint(?DateTimeImmutable $a)
{
}

/**
 * @param resource|null $a
 */
function nullableUnofficialTypeHint($a)
{
}

/**
 * @param mixed[]|array $a
 */
function arrayTypeHint(array $a)
{
}

/**
 * @param array|mixed[] $a
 */
function arrayTypeHintFirst(array $a)
{
}

/**
 * @param mixed[]|iterable $a
 */
function iterableTypeHint(iterable $a)
{
}

/**
 * @param mixed[]|\Traversable $a
 */
function travesableFullyQualifiedTypeHint(\Traversable $a)
{
}

/**
 * @param mixed[]|ArrayIterator $a
 */
function travesableUsedTypeHint(ArrayIterator $a)
{
}

/**
 * @param string $a
 */
function reference(string &$a)
{

}

/**
 * @param string ...$a
 */
function varadic(string ...$a)
{

}

/**
 * @param string $a
 * @param bool $b
 * @param int $c
 * @param float $d
 * @param callable $e
 * @param array $f
 * @param iterable $g
 */
function more(string $a, bool $b, int $c, float $d, callable $e, array $f, iterable $g)
{

}

/**
 * @param string Description
 * @param bool|null
 */
function withoutTypeHintAndWithInvalidAnnotation($a, $b)
{
}

/**
 * @param string $b
 * @param bool|null
 * @param float $c
 */
function oneWithoutTypeHintAndWithInvalidAnnotation(string $a, string $b, float $c)
{
}

/**
 * @param mixed[] $a
 */
function traversableMixed(array $a)
{

}

/**
 * @param string[] $a
 */
function traversableStrings(array $a)
{

}

/**
 * @param \DateTimeImmutable[] $a
 */
function traversableDateTimeImmutable(array $a)
{

}

/**
 * @param $a string
 */
function invalidAnnotation($a)
{

}

abstract class Foo
{

	/**
	 * @param int $a
	 */
	public function simpleTypeHint(int $a)
	{
	}

	/**
	 * @param \Foo $a
	 */
	public function fullyQualifiedClassTypeHint(\Foo $a)
	{
	}

	/**
	 * @param DateTimeImmutable $a
	 */
	public function usedClassTypeHint(DateTimeImmutable $a)
	{
	}

	/**
	 * @param resource $a
	 */
	public function unofficialTypeHint($a)
	{
	}

	/**
	 * @param int|null $a
	 */
	private function nullableSimpleTypeHint(?int $a)
	{
	}

	/**
	 * @param null|int $a
	 */
	private function nullableFirstSimpleTypeHint(?int $a)
	{
	}

	/**
	 * @param \Foo|null $a
	 */
	private function nullableFullyQualifiedClassTypeHint(?\Foo $a)
	{
	}

	/**
	 * @param DateTimeImmutable|null $a
	 */
	private function nullableUsedClassTypeHint(?DateTimeImmutable $a)
	{
	}

	/**
	 * @param resource|null $a
	 */
	private function nullableUnofficialTypeHint($a)
	{
	}

	/**
	 * @param mixed[]|array $a
	 */
	protected function arrayTypeHint(array $a)
	{
	}

	/**
	 * @param array|mixed[] $a
	 */
	protected function arrayTypeHintFirst(array $a)
	{
	}

	/**
	 * @param mixed[]|iterable $a
	 */
	protected function iterableTypeHint(iterable $a)
	{
	}

	/**
	 * @param mixed[]|\Traversable $a
	 */
	protected function travesableFullyQualifiedTypeHint(\Traversable $a)
	{
	}

	/**
	 * @param mixed[]|ArrayIterator $a
	 */
	protected function travesableUsedTypeHint(ArrayIterator $a)
	{
	}

	/**
	 * @param string $a
	 */
	public function reference(string &$a)
	{

	}

	/**
	 * @param string ...$a
	 */
	private function varadic(string ...$a)
	{

	}

	/**
	 * @param string $a
	 * @param bool $b
	 * @param int $c
	 * @param float $d
	 * @param callable $e
	 * @param array $f
	 * @param iterable $g
	 */
	public function more(string $a, bool $b, int $c, float $d, callable $e, array $f, iterable $g)
	{

	}

	/**
	 * @param string $a
	 */
	abstract function abstractMethod(string $a);

	/**
	 * @param string $a
	 */
	public static function staticMethod(string $a)
	{

	}

	/**
	 * @param string Description
	 * @param bool|null
	 */
	public function withoutTypeHintAndWithInvalidAnnotation($a, $b)
	{
	}

	/**
	 * @param string $b
	 * @param bool|null
	 * @param float $c
	 */
	public function oneWithoutTypeHintAndWithInvalidAnnotation(string $a, string $b, float $c)
	{
	}

	/**
	 * @param mixed[] $a
	 */
	public function traversableMixed(array $a)
	{

	}

	/**
	 * @param string[] $a
	 */
	abstract public function traversableStrings(array $a);

	/**
	 * @param \DateTimeImmutable[] $a
	 */
	protected function traversableDateTimeImmutable(array $a)
	{

	}

	/**
	 * @param $a string
	 */
	private function invalidAnnotation($a)
	{

	}

}

class IntersectionAndGeneric
{

	/**
	 * @param (bool|int)[][] $a
	 */
	public function a(array $a): void
	{
	}

	/**
	 * @param \Foo<string>|null $b
	 */
	public function b(?\Foo $b): void
	{
	}

	/**
	 * @param null[]|\Traversable $c
	 */
	public function c(\Traversable $c): void
	{
	}

	/**
	 * @param array<int> $d
	 */
	public function d(array $d): void
	{
	}

	/**
	 * @param int[][]|null $e
	 */
	public function e(?array $e): void
	{
	}

}

class CallableType
{

	/**
	 * @param \Closure():array|null $parameter
	 */
	public function callableParameter(?\Closure $parameter): void
	{

	}

	/**
	 * @param array<\Closure():array> $parameter
	 */
	public function traversableCallableParameter(array $parameter): void
	{

	}

}

class ArrayShapes
{

	/**
	 * @param array{foo: iterable}|null $parameter
	 */
	public function arrayShapeParameter(?array $parameter): void
	{

	}

	/**
	 * @param array<array{foo: iterable}> $parameter
	 */
	public function traversableArrayShapeParameter(array $parameter): void
	{

	}

}
