<?php

declare(strict_types=1);

namespace VSB\IT\Model\Article;

use VSB\IT\Model\Article\State\ArticleStateEnum;
use VSB\IT\Model\Author\Author;
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
	 * @param \DateTimeImmutable|null $publishedAt
	 */
	public function __construct(
		string $uuid,
		string $name,
		Author $author,
		ArticleStateEnum $state,
		$publishedAt
	) {
		$this->uuid = $uuid;
		$this->name = $name;
		$this->state = $state;
		$this->author = $author;
		$this->publishedAt = $publishedAt;
	}

	public static function createFromArticleData(ArticleData $articleData): self {
		return new self(
			self::generateUuid4(),
			$articleData->getName(),
			$articleData->getAuthor(),
			$articleData->getState(),
			$articleData->getPublishedAt()
		);
	}

	public function getName(): string {
		return $this->name;
	}

	public function getAuthor(): Author {
		return $this->author;
	}

	public function getState(): ArticleStateEnum {
		return $this->state;
	}

	/**
	 * @return \DateTimeImmutable|null
	 */
	public function getPublishedAt() {
		return $this->publishedAt;
	}
}
