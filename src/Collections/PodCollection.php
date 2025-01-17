<?php namespace Maclof\Kubernetes\Collections;

use Maclof\Kubernetes\Models\Pod;

/**
 * @extends Collection<Pod>
 */
class PodCollection extends Collection
{
	/**
	 * The constructor.
	 */
	public function __construct(array $items)
	{
		parent::__construct($this->getPods($items));
	}

	/**
	 * Get an array of pods.
	 *
	 * @return Pod[]
	 */
	protected function getPods(array $items): array
	{
		foreach ($items as &$item) {
			if ($item instanceof Pod) {
				continue;
			}
			
			$item = new Pod($item);
		}

		return $items;
	}
}
