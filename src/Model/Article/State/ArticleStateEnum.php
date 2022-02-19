<?php

declare(strict_types=1);

namespace VSB\IT\Model\Article\State;

class ArticleStateEnum {

	public const STATE_PUBLISHED = 1;
	public const STATE_CREATED = 2;

	private const STATES = [
		self::STATE_PUBLISHED,
		self::STATE_CREATED
	];

	private int $state;

	public function __construct(
		int $state
	) {
		if (!in_array($state, self::STATES, true)) {
			throw new \InvalidArgumentException(
				sprintf('State %s not exist', $state)
			);
		}
		$this->state = $state;
	}

	public static function createPublishedState(): self {
		return new self(self::STATE_PUBLISHED);
	}

	public static function createCreatedState(): self {
		return new self(self::STATE_CREATED);
	}

	public function getState(): int {
		return $this->state;
	}
}
