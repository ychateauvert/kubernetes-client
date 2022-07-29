<?php

declare(strict_types=1);

namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\RoleBindingCollection;
use Maclof\Kubernetes\Models\RoleBinding;
use Maclof\Kubernetes\Collections\Collection;

/**
 * @extends Repository<RoleBinding>
 */
class RoleBindingRepository extends Repository
{
    protected string $uri = 'rolebindings';

    /**
     * @param array{items: array<int, array|RoleBinding>} $response
     */
    protected function createCollection(array $response): Collection
    {
        return new RoleBindingCollection($response['items']);
    }
}
