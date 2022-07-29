<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\ConfigMapCollection;
use Maclof\Kubernetes\Models\ConfigMap;

/**
 * @extends Repository<ConfigMap>
 */
class ConfigMapRepository extends Repository
{
	protected string $uri = 'configmaps';

	protected function createCollection($response): ConfigMapCollection
	{
		return new ConfigMapCollection($response['items']);
	}
}
