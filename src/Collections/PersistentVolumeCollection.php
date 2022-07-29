<?php namespace Maclof\Kubernetes\Collections;

use Maclof\Kubernetes\Models\PersistentVolume;
use Maclof\Kubernetes\Collections\Collection;

/**
 * @extends Collection<PersistentVolume>
 */
class PersistentVolumeCollection extends Collection
{
	/**
	 * The constructor.
	 */
	public function __construct(array $items)
	{
		parent::__construct($this->getPersistentVolumes($items));
	}

	/**
	 * Get an array of persistent volumes.
	 *
	 * @return PersistentVolume[]
	 */
	protected function getPersistentVolumes(array $items): array
	{
		foreach ($items as &$item) {
			if ($item instanceof PersistentVolume) {
				continue;
			}
			
			$item = new PersistentVolume($item);
		}

		return $items;
	}
}
