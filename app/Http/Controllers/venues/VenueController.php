<?php

namespace App\Http\Controllers\venues;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVenueRequest;
use App\Models\Venue;
use App\Services\VenueService;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class VenueController extends Controller
{

    private VenueService $venueService;

    public function __construct(VenueService $venueService)
    {
        $this->venueService = $venueService;
    }

    // Views
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Show the view for listing all venues.
    public function index(): View
    {
        $venues = $this->venueService->getAllPaginated();
        return view('venues.index', compact('venues'));
    }

    // Show the view for creating a new venue.
    public function create(): View
    {
        return view('venues.create');
    }

    // Show the view for updating the specified venue.
    public function edit(Venue $venue): View
    {
        return view('venues.edit', compact('venue'));
    }

    // Show the view listing a specific venue's details
    public function show(Venue $venue): View
    {
        return view('venues.show', compact('venue'));
    }

    // Actions
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Request creation of a new venue in the database.
    public function store(StoreVenueRequest $request): JsonResponse
    {
        $validatedData = $request->validated();

        $createdVenue = $this->venueService->createVenue($validatedData);

        return response()->json(
            [
            'message' => 'Venue created successfully.',
            'data' => $createdVenue
            ],
            201);
    }

    // Request updating the specified venue in the database.
    public function update(StoreVenueRequest $request, Venue $venue): JsonResponse
    {
        $validatedData = $request->validated();

        $updatedVenue = $this->venueService->updateVenue($validatedData, $venue->id);

        return response()->json(
            [
                'message' => 'Venue updated successfully.',
                'data' => $updatedVenue
            ]
        );
    }

    // Request removal of the specified venue from the database.
    public function destroy(Venue $venue)
    {
        $this->venueService->deleteVenue($venue->id);

        return redirect()->route('venues.index')->with('success', 'Venue deleted successfully.');

    }
}
