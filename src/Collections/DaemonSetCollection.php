<?php namespace Maclof\Kubernetes\Collections;

use Maclof\Kubernetes\Models\DaemonSet;

/**
 * @extends Collection<DaemonSet>
 */
class DaemonSetCollection extends Collection
{
	/**
	 * The constructor.
	 */
	public function __construct(array $items)
	{
		parent::__construct($this->getDaemonSets($items));
	}

	/**
	 * Get an array of daemon sets.
	 *
	 * @return DaemonSet[]
	 */
	protected function getDaemonSets(array $items): array
	{
		foreach ($items as &$item) {
			if ($item instanceof DaemonSet) {
				continue;
			}
			
			$item = new DaemonSet($item);
		}

		return $items;
	}
}
