<?php

namespace App\Repositories;

use App\Models\Venue;
use Illuminate\Database\Eloquent\Collection;

class VenueRepository implements AbstractRepository {

    protected Venue $venue;

    public function __construct(Venue $venue)
    {
        $this->venue = $venue;
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////

    public function findAll(): Collection
    {
        return $this->venue->all();
    }

    public function allPaginated(): \LaravelIdea\Helper\App\Models\_IH_Venue_C|\Illuminate\Pagination\LengthAwarePaginator|array
    {
        return $this->venue->paginate(6);
    }

    public function findById(int $id): Venue
    {
        return $this->venue->findOrFail($id);
    }

    public function save(array $data): Venue
    {
        return $this->venue->create($data);
    }

    public function updateById(array $data, int $id): Venue
    {
        $originalVenue = $this->venue->findOrFail($id);
        $originalVenue->update($data);
        return $originalVenue;
    }

    public function deleteById(int $id): Venue
    {
        $originalVenue = $this->venue->findOrFail($id);
        $originalVenue->delete();
        return $originalVenue;
    }
}
