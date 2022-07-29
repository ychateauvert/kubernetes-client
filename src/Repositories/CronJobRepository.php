<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\CronJobCollection;
use Maclof\Kubernetes\Models\CronJob;

/**
 * @extends Repository<CronJob>
 */
class CronJobRepository extends Repository
{
	protected string $uri = 'cronjobs';

	protected function createCollection($response): CronJobCollection
	{
		return new CronJobCollection($response['items']);
	}
}
