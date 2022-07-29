<?php

declare(strict_types=1);

namespace Maclof\Kubernetes\Collections;

use Maclof\Kubernetes\Models\RoleBinding;

/**
 * @extends Collection<RoleBinding>
 */
class RoleBindingCollection extends Collection
{
    /**
     * @param array<int, array<mixed>|RoleBinding> $items
     */
    public function __construct(array $items)
    {
        parent::__construct($this->getServiceAccounts($items));
    }

    /**
     * Get an array of serviceAccounts.
     *
     * @param  array<int, array|RoleBinding> $items
     * @return RoleBinding[]
     */
    protected function getServiceAccounts(array $items): array
    {
        $final = [];
        foreach ($items as &$item) {
            if (!$item instanceof RoleBinding) {
                $final[] = new RoleBinding($item);
            } else {
                $final[] = $item;
            }
        }

        return $final;
    }
}
