<?php

declare(strict_types=1);

use VSB\IT\Model\Article\Article;
use VSB\IT\Model\Article\ArticleData;
use VSB\IT\Model\Article\State\ArticleStateEnum;
use VSB\IT\Model\Author\Author;

require_once __DIR__ . '/vendor/autoload.php';

$author = Author::createFromFirstNameAndLastName('Ondřej', 'Slíva');
$articleData = new ArticleData(
	'awesome article',
	$author,
	ArticleStateEnum::CREATED,
	null,
);
$article = Article::createFromArticleData($articleData);

var_dump($article->getName());
var_dump($article->getAuthor()->getFullName());
var_dump($article->getPublishedAt());
var_dump($article->getPublishedAt()?->format('d.m.Y'));
var_dump($article);
