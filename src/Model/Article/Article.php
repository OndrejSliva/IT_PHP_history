<?php

namespace VSB\IT\Model\Article;

use VSB\IT\Model\UuidTrait;

class Article {

	use UuidTrait;

	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var \VSB\IT\Model\Author\Author
	 */
	private $author;

	/**
	 * @var \VSB\IT\Model\Article\State\ArticleStateEnum
	 */
	private $state;

	/**
	 * @var \DateTimeImmutable|null
	 */
	private $publishedAt;

	/**
	 * @param string $uuid
	 * @param string $name
	 * @param \VSB\IT\Model\Author\Author $author
	 * @param \VSB\IT\Model\Article\State\ArticleStateEnum $state
	 * @param \DateTimeImmutable|null $publishedAt
	 */
	public function __construct(
		$uuid,
		$name,
		$author,
		$state,
		$publishedAt
	) {
		$this->uuid = $uuid;
		$this->name = $name;
		$this->state = $state;
		$this->author = $author;
		$this->publishedAt = $publishedAt;
	}

	public static function createFromArticleData(ArticleData $articleData) {
		return new self(
			self::generateUuid4(),
			$articleData->getName(),
			$articleData->getAuthor(),
			$articleData->getState(),
			$articleData->getPublishedAt()
		);
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return \VSB\IT\Model\Author\Author
	 */
	public function getAuthor() {
		return $this->author;
	}

	/**
	 * @return \VSB\IT\Model\Article\State\ArticleStateEnum
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * @return \DateTimeImmutable|null
	 */
	public function getPublishedAt() {
		return $this->publishedAt;
	}
}
