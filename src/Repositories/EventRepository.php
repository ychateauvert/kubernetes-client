<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\EventCollection;
use Maclof\Kubernetes\Models\Event;

/**
 * @extends Repository<Event>
 */
class EventRepository extends Repository
{
	protected string $uri = 'events';

	protected function createCollection($response): EventCollection
	{
		return new EventCollection($response['items']);
	}
}
