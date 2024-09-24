@extends("layouts.main")

@section('content')
    <div class="q2e-container">
        <!-- Header Section -->
        <div class="row mb-4 align-items-center">
            <div class="col-md-8">
                <h3 class="mb-0">Alle Veranstaltungsorte</h3>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0 text-right">
                <a href="{{ route('venues.create') }}" class="btn q2e-btn-secondary">
                    <i class="bi bi-plus-lg"></i> Neuen Veranstaltungsort erstellen
                </a>
            </div>
        </div>

        @if($venues->count() > 0)
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="q2e-table">
                            <thead class="table-dark">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Ort</th>
                                <th scope="col">Website</th>
                                <th scope="col">Aktionen</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($venues as $venue)
                                <tr>
                                    <td class="q2e-td">{{ $venue->name }}</td>
                                    <td class="q2e-td">{{ $venue->address->city }} {{ $venue->address->postal_code }}</td>
                                    <td class="q2e-td">
                                        <a href="{{ $venue->website }}" >
                                            {{ $venue->name }}
                                        </a>
                                    </td>
                                    <td class="q2e-td">
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ route('venues.show', $venue) }}" class="q2e-btn-primary">
                                                <i class="bi bi-eye"></i> Anzeigen
                                            </a>
                                            <a href="{{ route('venues.edit', $venue) }}" class="q2e-btn-secondary">
                                                <i class="bi bi-pencil-square"></i> Bearbeiten
                                            </a>
                                            <form action="{{ route('venues.destroy', $venue) }}" method="POST" class="d-inline" onsubmit="return confirm('Möchten Sie diesen Veranstaltungsort wirklich löschen?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="q2e-btn-danger">
                                                    <i class="bi bi-trash"></i> Löschen
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @else
            <!-- No Venues Alert -->
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-warning text-center" role="alert">
                        Keine Veranstaltungsorte gefunden...
                    </div>
                </div>
            </div>
        @endif
    </div> <!-- End of container -->
    <div class="row justify-content-center">
        <!-- Pagination Links -->
        {{ $venues->links('vendor.pagination.bootstrap-4') }}
    </div>

@endsection
