<?php

declare(strict_types=1);

namespace VSB\IT\Model\Article;

use VSB\IT\Model\Article\State\ArticleStateEnum;
use VSB\IT\Model\Author\Author;

class ArticleData {

	public function __construct(
		public readonly string $name,
		public readonly Author $author,
		public readonly ArticleStateEnum $state,
		public readonly ?\DateTimeImmutable $publishedAt,
	) {
	}
}
