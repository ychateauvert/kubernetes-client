<?php

declare(strict_types=1);

namespace Maclof\Kubernetes\Collections;

use Maclof\Kubernetes\Models\ServiceAccount;

/**
 * @extends Collection<ServiceAccount>
 */
class ServiceAccountCollection extends Collection
{
    public function __construct(array $items)
    {
        parent::__construct($this->getServiceAccounts($items));
    }

    /**
     * Get an array of serviceAccounts.
     *
     * @param  array<int, array|ServiceAccount> $items
     * @return ServiceAccount[]
     */
    protected function getServiceAccounts(array $items): array
    {
        $final = [];
        foreach ($items as &$item) {
            if (!$item instanceof ServiceAccount) {
                $final[] = new ServiceAccount($item);
            } else {
                $final[] = $item;
            }
        }

        return $final;
    }
}
