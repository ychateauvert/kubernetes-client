<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\JobCollection;
use Maclof\Kubernetes\Models\Job;

/**
 * @extends Repository<Job>
 */
class JobRepository extends Repository
{
	protected string $uri = 'jobs';

	protected function createCollection($response): JobCollection
	{
		return new JobCollection($response['items']);
	}
}
