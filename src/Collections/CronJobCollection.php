<?php namespace Maclof\Kubernetes\Collections;

use Maclof\Kubernetes\Models\CronJob;

/**
 * @extends Collection<CronJob>
 */
class CronJobCollection extends Collection
{
	/**
	 * The constructor.
	 */
	public function __construct(array $items)
	{
		parent::__construct($this->getCronJobs($items));
	}

	/**
	 * Get an array of cron jobs.
	 *
	 * @return CronJob[]
	 */
	protected function getCronJobs(array $items): array
	{
		foreach ($items as &$item) {
			if ($item instanceof CronJob) {
				continue;
			}
			
			$item = new CronJob($item);
		}

		return $items;
	}
}
