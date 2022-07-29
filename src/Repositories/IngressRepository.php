<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\IngressCollection;
use Maclof\Kubernetes\Models\Ingress;

/**
 * @extends Repository<Ingress>
 */
class IngressRepository extends Repository
{
	protected string $uri = 'ingresses';

	protected function createCollection($response): IngressCollection
	{
		return new IngressCollection($response['items']);
	}
}
