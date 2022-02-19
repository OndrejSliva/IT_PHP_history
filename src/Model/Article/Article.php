<?php

namespace VSB\IT\Model\Article;

use Ramsey\Uuid\Uuid;

class Article {

	/**
	 * @var string
	 */
	private $uuid;

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

	/**
	 * @param \VSB\IT\Model\Article\ArticleData $articleData
	 * @return \VSB\IT\Model\Article\Article
	 */
	public static function createFromArticleData($articleData) {
		return new self(
			Uuid::uuid4()->toString(),
			$articleData->getName(),
			$articleData->getAuthor(),
			$articleData->getState(),
			$articleData->getPublishedAt()
		);
	}

	/**
	 * @return string
	 */
	public function getUuid() {
		return $this->uuid;
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
