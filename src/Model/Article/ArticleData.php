<?php

namespace VSB\IT\Model\Article;

class ArticleData {

	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var string
	 */
	private $author;

	/**
	 * @var string
	 */
	private $state;

	/**
	 * @var \DateTimeImmutable|null
	 */
	private $publishedAt;

	/**
	 * @param string $name
	 * @param \VSB\IT\Model\Author\Author $author
	 * @param \VSB\IT\Model\Article\State\ArticleStateEnum $state
	 * @param \DateTimeImmutable|null $publishedAt
	 */
	public function __construct(
		$name,
		$author,
		$state,
		$publishedAt
	) {
		$this->name = $name;
		$this->author = $author;
		$this->state = $state;
		$this->publishedAt = $publishedAt;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return string
	 */
	public function getAuthor() {
		return $this->author;
	}

	/**
	 * @return string
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
