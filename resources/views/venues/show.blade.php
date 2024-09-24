@extends("layouts.main")

@section('content')
    <div class="q2e-container">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-5">
                <table class="q2e-table">
                    <thead class="table-dark">
                    <tr>
                        <th>Detailansicht</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><strong>Name:</strong> {{ $venue->name }}</td>
                    </tr>
                    <tr>
                        <td><strong>Rufnummer:</strong> {{ $venue->telephone }}</td>
                    </tr>
                    <tr>
                        <td><strong>Email:</strong> {{ $venue->email_address }}</td>
                    </tr>
                    <tr>
                        <td><strong>Website:</strong> <a href="{{ $venue->website }}">{{ $venue->website }}</a></td>
                    </tr>
                    <tr>
                        <td><strong>BesitzerIn:</strong> {{ $venue->owner }}</td>
                    </tr>
                    <tr>
                        <td><strong>Buchbar:</strong> {{ $venue->bookable_for_events ? 'Ja' : 'Nein' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Adresse:</strong> {{ $venue->address->formatted_address }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12 col-lg-7">
                <div class="gMap" id="map"></div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <a href="{{ route('venues.index') }}">
            <div class="q2e-btn-danger mb-3">Zurück zur Übersicht</div>
        </a>
    </div>

    <script>

            let coordinates = { lat: {{ $venue->address->latitude }}, lng: {{ $venue->address->longitude }} };

    </script>
    <script src="{{ asset("js/maps.js") }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config("services.google_maps.key") }}&callback=initMap" async defer></script>

@endsection
