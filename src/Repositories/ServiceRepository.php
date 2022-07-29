<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\ServiceCollection;
use Maclof\Kubernetes\Models\Service;

/**
 * @extends Repository<Service>
 */
class ServiceRepository extends Repository
{
	protected string $uri = 'services';

	protected function createCollection($response): ServiceCollection
	{
		return new ServiceCollection($response['items']);
	}
}
