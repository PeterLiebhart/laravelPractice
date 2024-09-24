<?php

namespace App\Services;

use App\Models\Venue;
use App\Repositories\VenueRepository;
use Illuminate\Database\Eloquent\Collection;

class VenueService {

    private VenueRepository $venueRepository;

    public function __construct(VenueRepository $venueRepository) {
        $this->venueRepository = $venueRepository;
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getAllVenues(): Collection
    {
        return $this->venueRepository->findAll();
    }

   public function getAllPaginated(): \LaravelIdea\Helper\App\Models\_IH_Venue_C|\Illuminate\Pagination\LengthAwarePaginator|array
   {
       return $this->venueRepository->allPaginated();
   }

    public function createVenue(array $data): Venue
    {
        return $this->venueRepository->save($data);
    }

    public function updateVenue(array $data, int $id): Venue
    {
        return $this->venueRepository->updateById($data, $id);
    }

    public function deleteVenue(int $id): Venue
    {
        return $this->venueRepository->deleteById($id);
    }

}
