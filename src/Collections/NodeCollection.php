<?php namespace Maclof\Kubernetes\Collections;

use Maclof\Kubernetes\Models\Node;

/**
 * @extends Collection<Node>
 */
class NodeCollection extends Collection
{
	/**
	 * The constructor.
	 */
	public function __construct(array $items)
	{
		parent::__construct($this->getNodes($items));
	}

	/**
	 * Get an array of nodes.
	 *
	 * @return Node[]
	 */
	protected function getNodes(array $items): array
	{
		foreach ($items as &$item) {
			if ($item instanceof Node) {
				continue;
			}
			
			$item = new Node($item);
		}

		return $items;
	}
}
