<?php

namespace VSB\IT\Model\Article\State;

class ArticleStateEnum {

	const STATE_PUBLISHED = 1;
	const STATE_CREATED = 2;

	const STATES = [
		self::STATE_PUBLISHED,
		self::STATE_CREATED
	];

	/**
	 * @var int
	 */
	private $state;

	/**
	 * @param int $state
	 */
	public function __construct(
		$state
	) {
		if (!in_array($state, self::STATES, true)) {
			throw new \InvalidArgumentException(
				sprintf('State %s not exist', $state)
			);
		}
		$this->state = $state;
	}

	/**
	 * @return \VSB\IT\Model\Article\State\ArticleStateEnum
	 */
	public static function createPublishedState() {
		return new self(self::STATE_PUBLISHED);
	}

	/**
	 * @return \VSB\IT\Model\Article\State\ArticleStateEnum
	 */
	public static function createCreatedState() {
		return new self(self::STATE_CREATED);
	}

	/**
	 * @return int
	 */
	public function getState() {
		return $this->state;
	}
}
