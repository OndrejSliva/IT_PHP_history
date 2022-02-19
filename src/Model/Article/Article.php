<?php

declare(strict_types=1);

namespace VSB\IT\Model\Article;

use VSB\IT\Model\Article\State\ArticleStateEnum;
use VSB\IT\Model\Author\Author;
use VSB\IT\Model\UuidTrait;

class Article {

	use UuidTrait;

	private string $name;

	private Author $author;

	private ArticleStateEnum $state;

	private ?\DateTimeImmutable $publishedAt;

	public function __construct(
		string $uuid,
		string $name,
		Author $author,
		ArticleStateEnum $state,
		?\DateTimeImmutable $publishedAt,
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
			$articleData->name,
			$articleData->author,
			$articleData->state,
			$articleData->publishedAt
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

	public function getPublishedAt(): ?\DateTimeImmutable {
		return $this->publishedAt;
	}
}
