<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\HorizontalPodAutoscalerCollection;
use Maclof\Kubernetes\Models\HorizontalPodAutoscaler;

/**
 * @extends Repository<HorizontalPodAutoscaler>
 */
class HorizontalPodAutoscalerRepository extends Repository
{
	protected string $uri = 'horizontalpodautoscalers';

	protected function createCollection($response): HorizontalPodAutoscalerCollection
	{
		return new HorizontalPodAutoscalerCollection($response['items']);
	}
}
