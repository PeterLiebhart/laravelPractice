@extends("layouts.main")

@section("content")
    <div class="q2e-container">
        <div class="row justify-content-between mb-3">
            <div class="col">
                <h3>Erstelle einen Veranstaltungsort:</h3>
            </div>
        </div>

        <form action="{{ route('venues.store') }}" method="POST">
        <div class="row justify-content-between">
                @csrf
                <div class="col-12 col-lg-5">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control border-dark" id="name">
                    </div>
                    <div class="form-group">
                        <label for="autocomplete">Adresse:</label>
                        <input type="text" class="form-control border-dark" id="autocomplete">
                    </div>
                    <div class="form-group">
                        <label for="phone-number">Rufnummer:</label>
                        <input type="text" class="form-control border-dark" id="phone-number">
                    </div>
                    <div class="form-group">
                        <label for="e-mail">eMail:</label>
                        <input type="text" class="form-control border-dark" id="e-mail">
                    </div>
                    <div class="form-group">
                        <label for="website">Website:</label>
                        <input type="text" class="form-control border-dark" id="website">
                    </div>
                    <div class="form-group">
                        <label for="owner">BesitzerIn:</label>
                        <input type="text" class="form-control border-dark" id="owner">
                    </div>
                    <div class="form-group">
                        <label for="bookable">Buchbar:</label>
                        <input type="text" class="form-control border-dark" id="bookable">
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="gMap" id="map"></div>
                </div>
            </div>
        </form>

        </div>
@endsection
<script src="{{ asset("js/maps.js") }}"></script>
<script async
        src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.key') }}&loading=async&libraries=places&callback=initAutocomplete">
</script>

