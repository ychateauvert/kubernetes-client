<?php namespace Maclof\Kubernetes\Collections;

use Maclof\Kubernetes\Models\ReplicaSet;

/**
 * @extends Collection<ReplicaSet>
 */
class ReplicaSetCollection extends Collection
{
	/**
	 * The constructor.
	 */
	public function __construct(array $items)
	{
		parent::__construct($this->getReplicaSets($items));
	}

	/**
	 * Get an array of replication sets.
	 *
	 * @return ReplicaSet[]
	 */
	protected function getReplicaSets(array $items): array
	{
		foreach ($items as &$item) {
			if ($item instanceof ReplicaSet) {
				continue;
			}
			
			$item = new ReplicaSet($item);
		}

		return $items;
	}
}
