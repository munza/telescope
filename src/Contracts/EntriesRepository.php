<?php

namespace Laravel\Telescope\Contracts;

use Illuminate\Support\Collection;
use Laravel\Telescope\EntryResult;
use Laravel\Telescope\EntryQueryOptions;

interface EntriesRepository
{
    /**
     * Return an entry with the given ID.
     *
     * @param  mixed  $id
     * @return \Laravel\Telescope\EntryResult
     */
    public function find($id) : EntryResult;

    /**
     * Return all the entries of a given type.
     *
     * @param  int  $type
     * @param  \Laravel\Telescope\EntryQueryOptions  $options
     * @return \Illuminate\Support\Collection[\Laravel\Telescope\EntryResult]
     */
    public function get($type, EntryQueryOptions $options);

    /**
     * Store the given entries.
     *
     * @param  \Illuminate\Support\Collection[\Laravel\Telescope\IncomingEntry]  $entries
     * @return void
     */
    public function store(Collection $entries);
}
