<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\SecretCollection;
use Maclof\Kubernetes\Models\Secret;

/**
 * @extends Repository<Secret>
 */
class SecretRepository extends Repository
{
	protected string $uri = 'secrets';

	protected function createCollection($response): SecretCollection
	{
		return new SecretCollection($response['items']);
	}
}
