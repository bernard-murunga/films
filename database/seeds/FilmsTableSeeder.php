<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
          [
          'name' => 'The Dark Knight',
          'description' => 'With the help of allies Lt. Jim Gordon (Gary Oldman)
           and DA Harvey Dent (Aaron Eckhart), Batman (Christian Bale) has been able
            to keep a tight lid on crime in Gotham City. But when a vile young criminal
            calling himself the Joker (Heath Ledger) suddenly throws the town into chaos,
            the caped Crusader begins to tread a fine line between heroism and vigilantism.',
          'release_date' => '2008-06-16',
          'rating' => 4.7,
          'ticket_price' => 12.00,
          'country' => 'U.S.A',
          'genre' => 'Action',
          'photo' => './images/dark_knight.jpg',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
          ],
          [
            'name' => 'Hall Pass',
            'description' => 'Best friends Rick (Owen Wilson) and Fred (Jason Sudeikis) each
             have been married for a long time, and they are showing signs of restlessness.
             To revitalize their marriages, their wives (Jenna Fischer, Christina Applegate) grant
              them one week to do whatever they please, no questions asked. At first, the deal sounds
               like a dream come true, but as the week marches on, the two friends discover that their
                expectations are wildly out of sync with reality.',
            'release_date' => '2011-02-09',
            'rating' => 3.5,
            'ticket_price' => 8.00,
            'country' => 'U.S.A',
            'genre' => 'Comedy',
            'photo' => './images/hall_pass.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
          ],
          [
            'name' => 'Star Wars: The Force Awakens',
            'description' => 'Thirty years after the defeat of the Galactic Empire, the galaxy faces
            a new threat from the evil Kylo Ren (Adam Driver) and the First Order. When a defector named
            Finn (John Boyega) crash-lands on a desert planet, he meets Rey (Daisy Ridley), a tough scavenger
            whose droid contains a top-secret map. Together, the young duo joins forces with Han Solo (Harrison Ford)
             to make sure the Resistance receives the intelligence concerning the whereabouts of Luke Skywalker
              (Mark Hamill), the last of the Jedi Knights.',
            'release_date' => '2015-12-20',
            'rating' => 3.5,
            'ticket_price' => 9.00,
            'country' => 'U.S.A',
            'genre' => 'Sci-fi',
            'photo' => './images/force_awakens.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
          ]

        ]);
    }
}
