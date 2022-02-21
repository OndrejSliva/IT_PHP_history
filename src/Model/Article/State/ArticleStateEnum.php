<?php

declare(strict_types=1);

namespace VSB\IT\Model\Article\State;

enum ArticleStateEnum: int {

	case PUBLISHED = 1;
	case CREATED = 2;

}
