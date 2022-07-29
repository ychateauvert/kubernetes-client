<?php

declare(strict_types=1);

namespace Maclof\Kubernetes\Exceptions;

use RuntimeException;

final class ParsingException extends RuntimeException {

	public function __construct(
		public readonly int $lineNo,
		public readonly int $charNo,
		string $message
	) {
		parent::__construct($message);
	}
}
