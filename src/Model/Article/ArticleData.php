<?php

declare(strict_types=1);

namespace VSB\IT\Model\Article;

use VSB\IT\Model\Article\State\ArticleStateEnum;
use VSB\IT\Model\Author\Author;

class ArticleData {

	public function __construct(
		private string $name,
		private Author $author,
		private ArticleStateEnum $state,
		private ?\DateTimeImmutable $publishedAt,
	) {
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
