<?php

declare(strict_types=1);

namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\ServiceAccountCollection;
use Maclof\Kubernetes\Models\ServiceAccount;
use Maclof\Kubernetes\Collections\Collection;

/**
 * @extends Repository<ServiceAccount>
 */
class ServiceAccountRepository extends Repository
{
    protected string $uri = 'serviceaccounts';

    /**
     * @param array{items: array<int, array|ServiceAccount>} $response
     */
    protected function createCollection(array $response): Collection
    {
        return new ServiceAccountCollection($response['items']);
    }
}
