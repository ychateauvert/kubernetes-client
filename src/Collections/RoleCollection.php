<?php

declare(strict_types=1);

namespace Maclof\Kubernetes\Collections;

use Maclof\Kubernetes\Models\Role;

/**
 * @extends Collection<Role>
 */
class RoleCollection extends Collection
{
    public function __construct(array $items)
    {
        parent::__construct($this->getServiceAccounts($items));
    }

    /**
     * Get an array of serviceAccounts.
     *
     * @param  array<int, array|Role> $items
     * @return Role[]
     */
    protected function getServiceAccounts(array $items): array
    {
        $final = [];
        foreach ($items as &$item) {
            if (!$item instanceof Role) {
                $final[] = new Role($item);
            } else {
                $final[] = $item;
            }
        }

        return $final;
    }
}
