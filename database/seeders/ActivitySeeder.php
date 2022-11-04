<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $activityArray = [
          [
            "name" => "Danube Sunset Cruise",
            "description" => "Budapest is one of the most beautiful cities by night with its dazzling attractions lit up. Take a 1-hour cruise along the Danube and enjoy breath-taking views.",
            "price" => "19.56",
            "rating" => 4.5,
            "duration" => "1",
            "language" => "English",
            "thumbnail" => "https://cdn2.civitatis.com/hungria/budapest/galeria/puente-cadenas-iluminado.jpg",
            "city" => "Budapest"
          ],
          [
            "name" => "Buda Castle Free Tour",
            "description" => "Explore one of Budapest's most emblematic monuments on this free guided tour of Buda Castle and discover the secrets of the historic palace.",
            "price" => "0.00",
            "rating" => 4.5,
            "duration" => "3",
            "language" => "English",
            "thumbnail" => "https://admin.freetour.com/images/tours/2/free-red-budapest-tour-37.jpg",
            "city" => "Budapest"
          ],
          [
            "name" => "Historic Budapest Free Tour",
            "description" => "The Historic Budapest Free Tour will take you on a journey through the most significant events of the past few centuries in this amazing cultural crossroads.",
            "price" => "0.00",
            "rating" => 5,
            "duration" => "3",
            "language" => "English",
            "thumbnail" => "https://cdn2.civitatis.com/hungria/budapest/galeria/san-esteban-basilica.jpg",
            "city" => "Budapest"
          ],
          [
            "name" => "Jewish Quarter Free Tour",
            "description" => "Discover the heroes of World War II with this Jewish Quarter Free Tour. Explore one of Budapest's must-see neighbourhoods & learn about its rich history.",
            "price" => "0.00",
            "rating" => 4.5,
            "duration" => "2",
            "language" => "English",
            "thumbnail" => "https://free-budapest-tours.com/wp-content/uploads/2015/03/tomas-anton-escobar-toPZFTestI-unsplash-scaled.jpg",
            "city" => "Budapest"
          ],
          [
            "name" => "Transfers in Budapest",
            "description" => "Door to door private service at the best prices. A chauffeur will wait for you at the airport, at your hotel or any other indicated address and will take you to your destination quickly and safely.",
            "price" => "32.79",
            "rating" => 5,
            "duration" => "0",
            "language" => "",
            "thumbnail" => "https://www.varennatransfers.com/wp-content/uploads/2017/09/IMG_8661-1024x768.jpg",
            "city" => "Budapest"
          ],
          [
            "name" => "Heineken Experience and Canal Boat Trip",
            "description" => "Enjoy this double excursion, which includes tickets to the old Heineken Experience brewery and a boat trip along the Amsterdam canals.",
            "price" => "34.84",
            "rating" => 4.5,
            "duration" => "3",
            "language" => "",
            "thumbnail" => "https://top20.amsterdam/images/heineken-experience.jpg",
            "city" => "Amsterdam"
          ],
          [
            "name" => "Amsterdam Canal Cruise",
            "description" => "A visit to Amsterdam is not complete without enjoying a cruise along its scenic canals. Discover the city's most iconic landmarks from the water on a one hour open-top boat tour.",
            "price" => "15.37",
            "rating" => 4,
            "duration" => "1",
            "language" => "English",
            "thumbnail" => "https://www.iamsterdam.com/media/canals-and-cityscapes/canalcompany-boat-nc.jpg",
            "city" => "Amsterdam"
          ],
          [
            "name" => "Amsterdam Bike Tour",
            "description" => "Exploring Amsterdam on a bike is an unmissable experience. Visit the city like a local accompanied by an English-speaking guide and discover its top sights!",
            "price" => "25.62",
            "rating" => 5,
            "duration" => "3",
            "language" => "English",
            "thumbnail" => "https://media.tacdn.com/media/attractions-splice-spp-674x446/06/6c/7b/24.jpg",
            "city" => "Amsterdam"
          ],
          [
            "name" => "Anne Frank Jewish Quarter Tour",
            "description" => "Get to know Amsterdam through the story of Anne Frank, passing though the Jewish Quarter while discovering the relationship between the Dutch city and the Nazi Regime.",
            "price" => "29.20",
            "rating" => 5,
            "duration" => "2",
            "language" => "English",
            "thumbnail" => "https://www.gpsmycity.com/img/gd_sight/6213.jpg",
            "city" => "Amsterdam"
          ],
          [// Me quedé aquí de cambiar las fotos
            "name" => "Van Gogh Museum & Canal Cruise",
            "description" => "If you're in Amsterdam, these are two unmissable experiences: the Van Gogh Museum and a cruise along the canals in the Venice of the North!",
            "price" => "36.18",
            "rating" => 4.5,
            "duration" => "0",
            "language" => "",
            "thumbnail" => "https://cdn2.civitatis.com/paises-bajos/amsterdam/museo-van-gogh-crucero-canales-list.jpg",
            "city" => "Amsterdam"
          ],
          [
            "name" => "Teotihuacán Hot Air Balloon Ride",
            "description" => "Can you imagine flying over the Teotihucán Valley? Have an unforgettable experience, admiring one of the most important Mesoamerican civilisations from above.",
            "price" => "140.07",
            "rating" => 5,
            "duration" => "8",
            "language" => "English",
            "thumbnail" => "https://cdn2.civitatis.com/mexico/ciudad-de-mexico/paseo-globo-teotihuacan-list.jpg",
            "city" => "Mexico City"
          ],
          [
            "name" => "Teotihuacán Pyramids Tour",
            "description" => "On this tour we'll get up close with the most visited archaeological site in Mexico, admiring the mythical Teotihuacán pyramids.",
            "price" => "36.87",
            "rating" => 5,
            "duration" => "9",
            "language" => "English",
            "thumbnail" => "https://cdn2.civitatis.com/mexico/ciudad-de-mexico/excursion-piramides-teotihuacan-list.jpg",
            "city" => "Mexico City"
          ],
          [
            "name" => "Tolantongo Caves Excursion",
            "description" => "Discover one of the most Instagrammable natural spaces in the world on this excursion to the Tolantongo Caves from Mexico City. You won't want to leave this paradise!",
            "price" => "92.55",
            "rating" => 4.5,
            "duration" => "14",
            "language" => "English",
            "thumbnail" => "https://cdn2.civitatis.com/mexico/ciudad-de-mexico/excursion-grutas-tolantongo-list.jpg",
            "city" => "Mexico City"
          ],
          [
            "name" => "Mexico City Free Walking Tour",
            "description" => "Discover the Mexican capital and the mix of cultures and influences both indigenous and Hispanic which co-inhabit the same city. Why not, it's free!",
            "price" => "0.00",
            "rating" => 4.5,
            "duration" => "2",
            "language" => "English",
            "thumbnail" => "https://cdn2.civitatis.com/mexico/ciudad-de-mexico/free-tour-ciudad-mexico-list.jpg",
            "city" => "Mexico City"
          ],
          [
            "name" => "Transfers in Mexico City",
            "description" => "A private service or shared shuttle, door to door and at the best possible price. We'll be waiting at the airport or hotel to take you to your destination quickly and safely.",
            "price" => "25.01",
            "rating" => 5,
            "duration" => "0",
            "language" => "",
            "thumbnail" => "https://cdn2.civitatis.com/images/promos/traslados-list.jpg",
            "city" => "Mexico City"
          ],
          [
            "name" => "Free Walking Tour of Paris",
            "description" => "Immerse yourself in 'The City of Lights' with a guided tour around the French Capital, discovering the Louvre, the Siene and Notre Dame. What's more, it's free!",
            "price" => "0.00",
            "rating" => 4.5,
            "duration" => "3",
            "language" => "English",
            "thumbnail" => "https://cdn2.civitatis.com/francia/paris/visita-guiada-paris-list.jpg",
            "city" => "Paris"
          ],
          [
            "name" => "Paris Hop On Hop Off Bus",
            "description" => "A Hop-On Hop-Off bus tour is one of the most comfortable and enjoyable ways of exploring Paris. Discover the city on the various lines and hop off and back on at any of its stops.",
            "price" => "38.73",
            "rating" => 4,
            "duration" => "12",
            "language" => "English",
            "thumbnail" => "https://cdn2.civitatis.com/francia/paris/autobus-turistico-paris-list.jpg",
            "city" => "Paris"
          ],
          [
            "name" => "Seine River Cruise",
            "description" => "Drifting down the Seine River on a panoramic river boat during the day or at night-time is an unforgettable experience and offers unparalleled views of Paris.",
            "price" => "16.39",
            "rating" => 4.5,
            "duration" => "1",
            "language" => "",
            "thumbnail" => "https://cdn2.civitatis.com/francia/paris/paseo-barco-sena-list.jpg",
            "city" => "Paris"
          ],
          [
            "name" => "Montmartre Free Walking Tour",
            "description" => "Take a free tour through the narrow streets of the most cultural and artistic of Paris' districts, where Picasso and Van Gogh sought out inspiration.",
            "price" => "0.00",
            "rating" => 4.5,
            "duration" => "3",
            "language" => "English",
            "thumbnail" => "https://cdn2.civitatis.com/francia/paris/free-tour-montmartre-list.jpg",
            "city" => "Paris"
          ],
          [
            "name" => "Transfers in Paris",
            "description" => "Door to door private service at the best prices. A chauffeur will wait for you at the airport, at your hotel or any other indicated address and will take you to your destination quickly and safely.",
            "price" => "87.09",
            "rating" => 5,
            "duration" => "0",
            "language" => "",
            "thumbnail" => "https://cdn2.civitatis.com/images/promos/traslados-list.jpg",
            "city" => "Paris"
          ]
        ];
        Activity::factory()->times(20)->create();

        $activities = Activity::all();

        for($i = 0;  $i < count($activityArray); ++$i) {
            $activities[$i]->name = $activityArray[$i]['name'];
            $activities[$i]->description = $activityArray[$i]['description'];
            $activities[$i]->price = $activityArray[$i]['price'];
            $activities[$i]->rating = $activityArray[$i]['rating'];
            $activities[$i]->duration = $activityArray[$i]['duration'];
            $activities[$i]->language = json_encode(['language' => $activityArray[$i]['language']]);
            $activities[$i]->thumbnail = $activityArray[$i]['thumbnail'];
            $activities[$i]->city = $activityArray[$i]['city'];
            $activities[$i]->save();
        }
    }
}
