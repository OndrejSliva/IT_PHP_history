<?php

namespace VSB\IT\Model\Author;

use Ramsey\Uuid\Uuid;

class Author {

	/**
	 * @var string
	 */
	private $uuid;

	/**
	 * @var string
	 */
	private $firstName;

	/**
	 * @var string
	 */
	private $lastName;

	/**
	 * @param string $uuid
	 * @param string $firstName
	 * @param string $lastName
	 */
	public function __construct(
		$uuid,
		$firstName,
		$lastName
	) {
		$this->uuid = $uuid;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	/**
	 * @param string $firstName
	 * @param string $lastName
	 * @return \VSB\IT\Model\Author\Author
	 */
	public static function createFromFirstNameAndLastName($firstName, $lastName) {
		return new self(
			Uuid::uuid4()->toString(),
			$firstName,
			$lastName
		);
	}

	/**
	 * @return string
	 */
	public function getUuid() {
		return $this->uuid;
	}

	/**
	 * @return string
	 */
	public function getFirstName() {
		return $this->firstName;
	}

	/**
	 * @return string
	 */
	public function getLastName() {
		return $this->lastName;
	}

	/**
	 * @return string
	 */
	public function getFullName() {
		return sprintf('%s %s', $this->firstName, $this->lastName);
	}
}
