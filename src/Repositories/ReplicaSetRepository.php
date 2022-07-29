<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\ReplicaSetCollection;
use Maclof\Kubernetes\Models\ReplicaSet;

/**
 * @extends Repository<ReplicaSet>
 */
class ReplicaSetRepository extends Repository
{
	protected string $uri = 'replicasets';

	protected function createCollection($response): ReplicaSetCollection
	{
		return new ReplicaSetCollection($response['items']);
	}
}
