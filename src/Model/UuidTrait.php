<?php

declare(strict_types=1);

namespace VSB\IT\Model;

use Ramsey\Uuid\Uuid;

trait UuidTrait {

	private string $uuid;

	public function getUuid(): string {
		return $this->uuid;
	}

	protected static function generateUuid4(): string {
		return Uuid::uuid4()->toString();
	}
}
