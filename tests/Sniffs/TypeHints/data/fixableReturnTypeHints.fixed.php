<?php

namespace FooNamespace;

use ArrayIterator;
use DateTimeImmutable;

/**
 * @return int
 */
function simpleTypeHint(): int
{
	return 0;
}

/**
 * @return \Foo
 */
function fullyQualifiedClassTypeHint(): \Foo
{
	return new Foo();
}

/**
 * @return DateTimeImmutable
 */
function usedClassTypeHint(): DateTimeImmutable
{
	return new DateTimeImmutable();
}

/**
 * @return resource
 */
function unofficialTypeHint()
{
	return null;
}

/**
 * @return int|null
 */
function nullableSimpleTypeHint(): ?int
{
	return 0;
}

/**
 * @return null|int
 */
function nullableSimpleTypeHintFirst(): ?int
{
	return 0;
}

/**
 * @return \Foo|null
 */
function nullableFullyQualifiedClassTypeHint(): ?\Foo
{
	return new Foo();
}

/**
 * @return DateTimeImmutable|null
 */
function nullableUsedClassTypeHint(): ?DateTimeImmutable
{
	return new DateTimeImmutable();
}

/**
 * @return resource|null
 */
function nullableUnofficialTypeHint()
{
	return null;
}

/**
 * @return mixed[]|array
 */
function arrayTypeHint(): array
{
	return [];
}

/**
 * @return array|mixed[]
 */
function arrayTypeHintFirst(): array
{
	return [];
}

/**
 * @return mixed[]|iterable
 */
function iterableTypeHint(): iterable
{
	return [];
}

/**
 * @return mixed[]|\Traversable
 */
function travesableFullyQualifiedTypeHint(): \Traversable
{
	return new ArrayIterator();
}

/**
 * @return mixed[]|ArrayIterator
 */
function travesableUsedTypeHint(): ArrayIterator
{
	return new ArrayIterator();
}

/**
 * @return string[]|null
 */
function returnsNullableArrayOfStrings(): ?array
{
	return [];
}

/**
 * @return mixed[]
 */
function returnsTraversableMixed(): array
{
	return [];
}

/**
 * @return string[]
 */
function returnsTraversableStrings(): array
{
	return [];
}

/**
 * @return \DateTimeImmutable[]
 */
function returnsTraversableDateTimeImmutable(): array
{
	return [];
}

function returnsVoid(): void
{
	return;
}

function returnsNothing(): void
{
}

/**
 * @return void
 */
function voidAnnotation(): void
{

}

abstract class Foo
{

	/**
	 * @return int
	 */
	public function simpleTypeHint(): int
	{
		return 0;
	}

	/**
	 * @return \Foo
	 */
	public function fullyQualifiedClassTypeHint(): \Foo
	{
		return new Foo();
	}

	/**
	 * @return DateTimeImmutable
	 */
	public function usedClassTypeHint(): DateTimeImmutable
	{
		return new DateTimeImmutable();
	}

	/**
	 * @return resource
	 */
	public function unofficialTypeHint()
	{
		return null;
	}

	/**
	 * @return int|null
	 */
	private function nullableSimpleTypeHint(): ?int
	{
		return 0;
	}

	/**
	 * @return null|int
	 */
	private function nullableSimpleTypeHintFirst(): ?int
	{
		return 0;
	}

	/**
	 * @return \Foo|null
	 */
	private function nullableFullyQualifiedClassTypeHint(): ?\Foo
	{
		return new Foo();
	}

	/**
	 * @return DateTimeImmutable|null
	 */
	private function nullableUsedClassTypeHint(): ?DateTimeImmutable
	{
		return new DateTimeImmutable();
	}

	/**
	 * @return resource|null
	 */
	private function nullableUnofficialTypeHint()
	{
		return null;
	}

	/**
	 * @return mixed[]|array
	 */
	protected function arrayTypeHint(): array
	{
		return [];
	}

	/**
	 * @return array|mixed[]
	 */
	protected function arrayTypeHintFirst(): array
	{
		return [];
	}

	/**
	 * @return mixed[]|iterable
	 */
	protected function iterableTypeHint(): iterable
	{
		return [];
	}

	/**
	 * @return mixed[]|\Traversable
	 */
	protected function travesableFullyQualifiedTypeHint(): \Traversable
	{
		return new ArrayIterator();
	}

	/**
	 * @return mixed[]|ArrayIterator
	 */
	protected function travesableUsedTypeHint(): ArrayIterator
	{
		return new ArrayIterator();
	}

	/**
	 * @return string
	 */
	abstract function abstractMethod($a): string;

	/**
	 * @return string
	 */
	public static function staticMethod($a): string
	{
		return '';
	}

	/**
	 * @return string[]|null
	 */
	public function returnsNullableArrayOfStrings(): ?array
	{
		return [];
	}

	/**
	 * @return mixed[]
	 */
	private function returnsTraversableMixed(): array
	{
		return [];
	}

	/**
	 * @return string[]
	 */
	public static function returnsTraversableStrings(): array
	{
		return [];
	}

	/**
	 * @return \DateTimeImmutable[]
	 */
	abstract function returnsTraversableDateTimeImmutable(): array;

	public function __construct()
	{

	}

	public function __destruct()
	{

	}

	public function __clone()
	{

	}

	public function returnsVoid(): void
	{
		return;
	}

	protected function returnsNothing(): void
	{
	}

	/**
	 * @return void
	 */
	public abstract function voidAnnotation(): void;

}

function (): void {

};

function (): void {
	return;
};

function (): void {

};

function () use (& $foo): void {

};

class IntersectionAndGeneric
{

	/**
	 * @return (float|int)[]
	 */
	public function a(): array
	{
		return [];
	}

	/**
	 * @return \Boo<int, bool>|null
	 */
	public function b(): ?\Boo
	{
		return null;
	}

	/**
	 * @return bool[]|int[]|iterable
	 */
	public function c()
	{
		return true;
	}

	/**
	 * @return array<int, bool>
	 */
	public function d(): array
	{
		return [];
	}

	/**
	 * @return bool[][][]|null
	 */
	public function e(): ?array
	{
		return [];
	}

}

class CallableType
{

	/**
	 * @return callable(): void
	 */
	public function returnsCallable(): callable
	{

	}

	/**
	 * @return (callable(): void)[]|\Traversable
	 */
	public function returnsTraversableCallable(): \Traversable
	{

	}

}

class ArrayShapes
{

	/**
	 * @return array{int, int}: void
	 */
	public function returnsArrayShape(): array
	{

	}

	/**
	 * @return (array{int, int})[]|\Traversable
	 */
	public function returnsTraversableArrayShape(): \Traversable
	{

	}

}
