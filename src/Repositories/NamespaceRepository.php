<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\NamespaceCollection;
use Maclof\Kubernetes\Models\NamespaceModel;

/**
 * @extends Repository<NamespaceModel>
 */
class NamespaceRepository extends Repository
{
	protected string $uri = 'namespaces';
	protected bool $namespace = false;

	protected function createCollection($response): NamespaceCollection
	{
		return new NamespaceCollection($response['items']);
	}
}
