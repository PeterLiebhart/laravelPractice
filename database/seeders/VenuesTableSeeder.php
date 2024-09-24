<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Venue;

class VenuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $venues = [
            [
                'name' => 'Elbphilharmonie',
                'telephone' => '040-35766666',
                'email_address' => 'info@elbphilharmonie.de',
                'website' => 'https://www.elbphilharmonie.de',
                'owner' => 'Michael Schneider',
                'bookable_for_events' => true,
            ],
            [
                'name' => 'Berliner Philharmonie',
                'telephone' => '030-254880',
                'email_address' => 'kontakt@berliner-philharmonie.de',
                'website' => 'https://www.berliner-philharmonie.de',
                'owner' => 'Sabine Schulz',
                'bookable_for_events' => true,
            ],
            [
                'name' => 'Schloss Schönbrunn',
                'telephone' => '01-81113239',
                'email_address' => 'office@schoenbrunn.at',
                'website' => 'https://www.schoenbrunn.at',
                'owner' => 'Franz Bauer',
                'bookable_for_events' => false,
            ],
            [
                'name' => 'Zürich Opera House',
                'telephone' => '044-2686666',
                'email_address' => 'kontakt@oper-zuerich.ch',
                'website' => 'https://www.opernhaus.ch',
                'owner' => 'Urs Meier',
                'bookable_for_events' => true,
            ],
            [
                'name' => 'Staatsoper Unter den Linden',
                'telephone' => '030-20354555',
                'email_address' => 'service@staatsoper-berlin.de',
                'website' => 'https://www.staatsoper-berlin.de',
                'owner' => 'Anna Mayer',
                'bookable_for_events' => true,
            ],
            [
                'name' => 'Wiener Staatsoper',
                'telephone' => '01-51444400',
                'email_address' => 'info@wiener-staatsoper.at',
                'website' => 'https://www.wiener-staatsoper.at',
                'owner' => 'Johann Fischer',
                'bookable_for_events' => true,
            ],
            [
                'name' => 'Kunsthaus Zürich',
                'telephone' => '044-2538484',
                'email_address' => 'info@kunsthaus.ch',
                'website' => 'https://www.kunsthaus.ch',
                'owner' => 'Martina Vogel',
                'bookable_for_events' => false,
            ],
            [
                'name' => 'Festspielhaus Bregenz',
                'telephone' => '05574-4076',
                'email_address' => 'info@bregenzerfestspiele.com',
                'website' => 'https://www.bregenzerfestspiele.com',
                'owner' => 'Thomas Huber',
                'bookable_for_events' => true,
            ],
            [
                'name' => 'Philharmonie Luxembourg',
                'telephone' => '352-26322632',
                'email_address' => 'contact@philharmonie.lu',
                'website' => 'https://www.philharmonie.lu',
                'owner' => 'Claudia Klein',
                'bookable_for_events' => true,
            ],
            [
                'name' => 'Tonhalle Düsseldorf',
                'telephone' => '0211-8996123',
                'email_address' => 'info@tonhalle.de',
                'website' => 'https://www.tonhalle.de',
                'owner' => 'Christian Neumann',
                'bookable_for_events' => true,
            ],
            [
                'name' => 'Schloss Neuschwanstein',
                'telephone' => '08362-939880',
                'email_address' => 'info@neuschwanstein.de',
                'website' => 'https://www.neuschwanstein.de',
                'owner' => 'Ludwig Müller',
                'bookable_for_events' => false,
            ],
            [
                'name' => 'Grossmünster Zürich',
                'telephone' => '044-2525949',
                'email_address' => 'info@grossmuenster.ch',
                'website' => 'https://www.grossmuenster.ch',
                'owner' => 'Roger Wenger',
                'bookable_for_events' => true,
            ],
            [
                'name' => 'Dresdner Frauenkirche',
                'telephone' => '0351-65606100',
                'email_address' => 'info@frauenkirche-dresden.de',
                'website' => 'https://www.frauenkirche-dresden.de',
                'owner' => 'Peter Hoffmann',
                'bookable_for_events' => true,
            ],
            [
                'name' => 'Festspielhaus Baden-Baden',
                'telephone' => '07221-3013101',
                'email_address' => 'info@festspielhaus.de',
                'website' => 'https://www.festspielhaus.de',
                'owner' => 'Eva Stein',
                'bookable_for_events' => true,
            ],
            [
                'name' => 'Olympiahalle München',
                'telephone' => '089-30670',
                'email_address' => 'info@olympiapark.de',
                'website' => 'https://www.olympiapark.de',
                'owner' => 'Georg Baumann',
                'bookable_for_events' => true,
            ],
            [
                'name' => 'Messe Basel',
                'telephone' => '061-6862040',
                'email_address' => 'info@messe.ch',
                'website' => 'https://www.messe.ch',
                'owner' => 'Monika Frei',
                'bookable_for_events' => true,
            ],
            [
                'name' => 'Münchner Residenz',
                'telephone' => '089-290671',
                'email_address' => 'info@residenz-muenchen.de',
                'website' => 'https://www.residenz-muenchen.de',
                'owner' => 'Stefan Weiss',
                'bookable_for_events' => true,
            ],
            [
                'name' => 'Kapellbrücke Luzern',
                'telephone' => '041-4102508',
                'email_address' => 'info@luzern.com',
                'website' => 'https://www.luzern.com',
                'owner' => 'Werner Müller',
                'bookable_for_events' => false,
            ],
            [
                'name' => 'Universität Zürich',
                'telephone' => '044-6341111',
                'email_address' => 'info@uzh.ch',
                'website' => 'https://www.uzh.ch',
                'owner' => 'Ruth Arnold',
                'bookable_for_events' => false,
            ],
            [
                'name' => 'ETH Zürich',
                'telephone' => '044-6321111',
                'email_address' => 'info@ethz.ch',
                'website' => 'https://www.ethz.ch',
                'owner' => 'Andreas Keller',
                'bookable_for_events' => false,
            ],
        ];

        foreach ($venues as $venue) {
            Venue::create($venue);
        }
    }
}
