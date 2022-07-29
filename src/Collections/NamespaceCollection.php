<?php namespace Maclof\Kubernetes\Collections;

use Maclof\Kubernetes\Models\NamespaceModel;

/**
 * @extends Collection<NamespaceModel>
 */
class NamespaceCollection extends Collection
{
	/**
	 * The constructor.
	 */
	public function __construct(array $items)
	{
		parent::__construct($this->getNamespaces($items));
	}

	/**
	 * Get an array of Namespaces.
	 *
	 * @return NamespaceModel[]
	 */
	protected function getNamespaces(array $items): array
	{
		foreach ($items as &$item) {
			if ($item instanceof NamespaceModel) {
				continue;
			}
			
			$item = new NamespaceModel($item);
		}

		return $items;
	}
}
