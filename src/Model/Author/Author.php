<?php

declare(strict_types=1);

namespace VSB\IT\Model\Author;

use VSB\IT\Model\UuidTrait;

class Author {

	use UuidTrait;

	private string $firstName;

	private string $lastName;

	public function __construct(
		string $uuid,
		string $firstName,
		string $lastName
	) {
		$this->uuid = $uuid;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	public static function createFromFirstNameAndLastName(string $firstName, string $lastName): self {
		return new self(
			self::generateUuid4(),
			$firstName,
			$lastName,
		);
	}

	public function getFirstName(): string {
		return $this->firstName;
	}

	public function getLastName(): string {
		return $this->lastName;
	}

	public function getFullName(): string {
		return sprintf('%s %s', $this->firstName, $this->lastName);
	}
}
