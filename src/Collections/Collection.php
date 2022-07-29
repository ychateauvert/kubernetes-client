<?php namespace Maclof\Kubernetes\Collections;

use Illuminate\Support\Collection as IlluminateCollection;

/**
 * @template TValue of \Maclof\Kubernetes\Models\Model
 *
 * @extends IlluminateCollection<array-key, TValue>
 */
abstract class Collection extends IlluminateCollection
{
	//
}
