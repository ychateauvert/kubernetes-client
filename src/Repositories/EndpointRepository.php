<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\EndpointCollection;
use Maclof\Kubernetes\Models\Endpoint;

/**
 * @extends Repository<Endpoint>
 */
class EndpointRepository extends Repository
{
	protected string $uri = 'endpoints';

	protected function createCollection($response): EndpointCollection
	{
		return new EndpointCollection($response['items']);
	}
}
