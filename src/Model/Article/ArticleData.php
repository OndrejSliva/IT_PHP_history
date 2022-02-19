<?php

declare(strict_types=1);

namespace VSB\IT\Model\Article;

use VSB\IT\Model\Article\State\ArticleStateEnum;
use VSB\IT\Model\Author\Author;

class ArticleData {

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

	public function __construct(
		string $name,
		Author $author,
		ArticleStateEnum $state,
		?\DateTimeImmutable $publishedAt
	) {
		$this->name = $name;
		$this->author = $author;
		$this->state = $state;
		$this->publishedAt = $publishedAt;
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
