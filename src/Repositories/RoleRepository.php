<?php

declare(strict_types=1);

namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\RoleCollection;
use Maclof\Kubernetes\Models\Role;
use Maclof\Kubernetes\Collections\Collection;

/**
 * @extends Repository<Role>
 */
class RoleRepository extends Repository
{
    protected string $uri = 'roles';

    /**
     * @param array{items: array<int, array|Role>} $response
     */
    protected function createCollection(array $response): Collection
    {
        return new RoleCollection($response['items']);
    }
}
