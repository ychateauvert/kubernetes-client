<?php namespace Maclof\Kubernetes\Collections;

use Maclof\Kubernetes\Models\Service;

/**
 * @extends Collection<Service>
 */
final class ServiceCollection extends Collection
{
	public function __construct(array $items)
	{
		parent::__construct($this->getServices($items));
	}

	/**
	 * Get an array of services.
	 *
	 * @return Service[]
	 */
	protected function getServices(array $items): array
	{
		foreach ($items as &$item) {
			if ($item instanceof Service) {
				continue;
			}

			$item = new Service($item);
		}

		return $items;
	}
}
