<?php

namespace VSB\IT\Model;

use Ramsey\Uuid\Uuid;

trait UuidTrait {

	/**
	 * @var string
	 */
	private $uuid;

	/**
	 * @return string
	 */
	public function getUuid() {
		return $this->uuid;
	}

	/**
	 * @return string
	 */
	protected static function generateUuid4() {
		return Uuid::uuid4()->toString();
	}
}
