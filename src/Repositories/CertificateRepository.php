<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\CertificateCollection;
use Maclof\Kubernetes\Models\Certificate;
use Maclof\Kubernetes\Repositories\Strategy\PatchMergeTrait;

/**
 * @extends Repository<Certificate>
 */
class CertificateRepository extends Repository
{
    use PatchMergeTrait;

    protected string $uri = 'certificates';

    protected function createCollection($response): CertificateCollection
    {
        return new CertificateCollection($response['items']);
    }

}
