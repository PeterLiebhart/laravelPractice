<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;
use App\Models\Venue;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addresses = [
            [
                'venue_name' => 'Elbphilharmonie',
                'street_address' => 'Platz der Deutschen Einheit 1',
                'city' => 'Hamburg',
                'state' => 'Hamburg',
                'postal_code' => '20457',
                'country' => 'Deutschland',
                'latitude' => 53.541318,
                'longitude' => 9.984057,
                'formatted_address' => 'Platz der Deutschen Einheit 1, 20457 Hamburg, Deutschland',
                'google_place_id' => 'ChIJsSwwQEuPsEcRhAhJv6v6cfc',
            ],
            [
                'venue_name' => 'Berliner Philharmonie',
                'street_address' => 'Herbert-von-Karajan-Straße 1',
                'city' => 'Berlin',
                'state' => 'Berlin',
                'postal_code' => '10785',
                'country' => 'Deutschland',
                'latitude' => 52.514488,
                'longitude' => 13.367992,
                'formatted_address' => 'Herbert-von-Karajan-Straße 1, 10785 Berlin, Deutschland',
                'google_place_id' => 'ChIJwSwLZz9qhlQROBe0FrdyFP8',
            ],
            [
                'venue_name' => 'Schloss Schönbrunn',
                'street_address' => 'Schönbrunner Schloßstraße 47',
                'city' => 'Wien',
                'state' => 'Wien',
                'postal_code' => '1130',
                'country' => 'Österreich',
                'latitude' => 48.184516,
                'longitude' => 16.311722,
                'formatted_address' => 'Schönbrunner Schloßstraße 47, 1130 Wien, Österreich',
                'google_place_id' => 'ChIJD9Yxe3yGbUcR2OS4sQszeLY',
            ],
            [
                'venue_name' => 'Zürich Opera House',
                'street_address' => 'Falkenstrasse 1',
                'city' => 'Zürich',
                'state' => 'Zürich',
                'postal_code' => '8008',
                'country' => 'Schweiz',
                'latitude' => 47.366781,
                'longitude' => 8.546024,
                'formatted_address' => 'Falkenstrasse 1, 8008 Zürich, Schweiz',
                'google_place_id' => 'ChIJV7p0O42LkEcRBkHQ7Ag9h6E',
            ],
            [
                'venue_name' => 'Staatsoper Unter den Linden',
                'street_address' => 'Unter den Linden 7',
                'city' => 'Berlin',
                'state' => 'Berlin',
                'postal_code' => '10117',
                'country' => 'Deutschland',
                'latitude' => 52.517094,
                'longitude' => 13.396907,
                'formatted_address' => 'Unter den Linden 7, 10117 Berlin, Deutschland',
                'google_place_id' => 'ChIJA4CXXD1oQEcR2yys8_VwmD0',
            ],
            [
                'venue_name' => 'Wiener Staatsoper',
                'street_address' => 'Opernring 2',
                'city' => 'Wien',
                'state' => 'Wien',
                'postal_code' => '1010',
                'country' => 'Österreich',
                'latitude' => 48.202108,
                'longitude' => 16.368778,
                'formatted_address' => 'Opernring 2, 1010 Wien, Österreich',
                'google_place_id' => 'ChIJj-nSc4AGbUcR4eX2QYYzybQ',
            ],
            [
                'venue_name' => 'Kunsthaus Zürich',
                'street_address' => 'Heimplatz 1',
                'city' => 'Zürich',
                'state' => 'Zürich',
                'postal_code' => '8001',
                'country' => 'Schweiz',
                'latitude' => 47.370909,
                'longitude' => 8.548256,
                'formatted_address' => 'Heimplatz 1, 8001 Zürich, Schweiz',
                'google_place_id' => 'ChIJE-MFY62LkEcR9IrnKTyBri8',
            ],
            [
                'venue_name' => 'Festspielhaus Bregenz',
                'street_address' => 'Platz der Wiener Symphoniker 1',
                'city' => 'Bregenz',
                'state' => 'Vorarlberg',
                'postal_code' => '6900',
                'country' => 'Österreich',
                'latitude' => 47.504722,
                'longitude' => 9.738889,
                'formatted_address' => 'Platz der Wiener Symphoniker 1, 6900 Bregenz, Österreich',
                'google_place_id' => 'ChIJ33RXHzIPm0cR2_S73IJ23fw',
            ],
            [
                'venue_name' => 'Philharmonie Luxembourg',
                'street_address' => '1, Place de l\'Europe',
                'city' => 'Luxembourg',
                'state' => 'Luxembourg',
                'postal_code' => '1499',
                'country' => 'Luxembourg',
                'latitude' => 49.617982,
                'longitude' => 6.145817,
                'formatted_address' => '1, Place de l\'Europe, 1499 Luxembourg, Luxembourg',
                'google_place_id' => 'ChIJFZ7J9xkSlUcR4a0s93XxeXg',
            ],
            [
                'venue_name' => 'Tonhalle Düsseldorf',
                'street_address' => 'Ehrenhof 1',
                'city' => 'Düsseldorf',
                'state' => 'Nordrhein-Westfalen',
                'postal_code' => '40479',
                'country' => 'Deutschland',
                'latitude' => 51.233254,
                'longitude' => 6.770786,
                'formatted_address' => 'Ehrenhof 1, 40479 Düsseldorf, Deutschland',
                'google_place_id' => 'ChIJiy_4F5kxqEcR_iNmo9VZjSk',
            ],
            [
                'venue_name' => 'Schloss Neuschwanstein',
                'street_address' => 'Neuschwansteinstraße 20',
                'city' => 'Schwangau',
                'state' => 'Bayern',
                'postal_code' => '87645',
                'country' => 'Deutschland',
                'latitude' => 47.557574,
                'longitude' => 10.7498,
                'formatted_address' => 'Neuschwansteinstraße 20, 87645 Schwangau, Deutschland',
                'google_place_id' => 'ChIJgb4bJrJ6nkcRkFzZqRQ6peI',
            ],
            [
                'venue_name' => 'Grossmünster Zürich',
                'street_address' => 'Grossmünsterplatz',
                'city' => 'Zürich',
                'state' => 'Zürich',
                'postal_code' => '8001',
                'country' => 'Schweiz',
                'latitude' => 47.370357,
                'longitude' => 8.544033,
                'formatted_address' => 'Grossmünsterplatz, 8001 Zürich, Schweiz',
                'google_place_id' => 'ChIJY_zk3cWLkEcR6ATz0dkt3mg',
            ],
            [
                'venue_name' => 'Dresdner Frauenkirche',
                'street_address' => 'Neumarkt',
                'city' => 'Dresden',
                'state' => 'Sachsen',
                'postal_code' => '01067',
                'country' => 'Deutschland',
                'latitude' => 51.051438,
                'longitude' => 13.741635,
                'formatted_address' => 'Neumarkt, 01067 Dresden, Deutschland',
                'google_place_id' => 'ChIJTxpV9dZ2nkcRPI0SCbA3Kk4',
            ],
            [
                'venue_name' => 'Festspielhaus Baden-Baden',
                'street_address' => 'Beim Alten Bahnhof 2',
                'city' => 'Baden-Baden',
                'state' => 'Baden-Württemberg',
                'postal_code' => '76530',
                'country' => 'Deutschland',
                'latitude' => 48.763333,
                'longitude' => 8.238056,
                'formatted_address' => 'Beim Alten Bahnhof 2, 76530 Baden-Baden, Deutschland',
                'google_place_id' => 'ChIJPWiXhzGvmUcRYIGFHreIuP4',
            ],
            [
                'venue_name' => 'Olympiahalle München',
                'street_address' => 'Spiridon-Louis-Ring 21',
                'city' => 'München',
                'state' => 'Bayern',
                'postal_code' => '80809',
                'country' => 'Deutschland',
                'latitude' => 48.173721,
                'longitude' => 11.546858,
                'formatted_address' => 'Spiridon-Louis-Ring 21, 80809 München, Deutschland',
                'google_place_id' => 'ChIJc1E1l0Uw3kcRZqU_KeYvMCQ',
            ],
            [
                'venue_name' => 'Messe Basel',
                'street_address' => 'Messeplatz 10',
                'city' => 'Basel',
                'state' => 'Basel-Stadt',
                'postal_code' => '4005',
                'country' => 'Schweiz',
                'latitude' => 47.563281,
                'longitude' => 7.601549,
                'formatted_address' => 'Messeplatz 10, 4005 Basel, Schweiz',
                'google_place_id' => 'ChIJJ4M2aWNolUcRz14RbQFv7P0',
            ],
            [
                'venue_name' => 'Münchner Residenz',
                'street_address' => 'Residenzstraße 1',
                'city' => 'München',
                'state' => 'Bayern',
                'postal_code' => '80333',
                'country' => 'Deutschland',
                'latitude' => 48.141853,
                'longitude' => 11.579368,
                'formatted_address' => 'Residenzstraße 1, 80333 München, Deutschland',
                'google_place_id' => 'ChIJtc5fPfujnUcRlJ3-oU4fc5w',
            ],
            [
                'venue_name' => 'Kapellbrücke Luzern',
                'street_address' => 'Kapellplatz',
                'city' => 'Luzern',
                'state' => 'Luzern',
                'postal_code' => '6004',
                'country' => 'Schweiz',
                'latitude' => 47.051492,
                'longitude' => 8.307545,
                'formatted_address' => 'Kapellplatz, 6004 Luzern, Schweiz',
                'google_place_id' => 'ChIJrXeS8fNIj0cR4Z5GFGhhz_E',
            ],
            [
                'venue_name' => 'Universität Zürich',
                'street_address' => 'Rämistrasse 71',
                'city' => 'Zürich',
                'state' => 'Zürich',
                'postal_code' => '8006',
                'country' => 'Schweiz',
                'latitude' => 47.375434,
                'longitude' => 8.548296,
                'formatted_address' => 'Rämistrasse 71, 8006 Zürich, Schweiz',
                'google_place_id' => 'ChIJg1RskVwRkUcRBlZAXOM02Ck',
            ],
            [
                'venue_name' => 'ETH Zürich',
                'street_address' => 'Rämistrasse 101',
                'city' => 'Zürich',
                'state' => 'Zürich',
                'postal_code' => '8092',
                'country' => 'Schweiz',
                'latitude' => 47.376332,
                'longitude' => 8.548555,
                'formatted_address' => 'Rämistrasse 101, 8092 Zürich, Schweiz',
                'google_place_id' => 'ChIJqai7R6kRkUcR2ShcSt-ss0o',
            ],
        ];

        foreach ($addresses as $addressData) {
            $venue = Venue::where('name', $addressData['venue_name'])->first();

            if ($venue) {
                Address::create([
                    'venue_id' => $venue->id,
                    'street_address' => $addressData['street_address'],
                    'city' => $addressData['city'],
                    'state' => $addressData['state'],
                    'postal_code' => $addressData['postal_code'],
                    'country' => $addressData['country'],
                    'latitude' => $addressData['latitude'],
                    'longitude' => $addressData['longitude'],
                    'formatted_address' => $addressData['formatted_address'],
                    'google_place_id' => $addressData['google_place_id'],
                ]);
            } else {
                $this->command->warn("Venue '{$addressData['venue_name']}' not found. Skipping address seeding.");
            }
        }
    }
}
