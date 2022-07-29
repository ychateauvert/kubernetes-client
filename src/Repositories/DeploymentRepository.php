<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\DeploymentCollection;
use Maclof\Kubernetes\Models\Deployment;

/**
 * @extends Repository<Deployment>
 */
class DeploymentRepository extends Repository
{
	protected string $uri = 'deployments';

	protected function createCollection($response): DeploymentCollection
	{
		return new DeploymentCollection($response['items']);
	}
}
