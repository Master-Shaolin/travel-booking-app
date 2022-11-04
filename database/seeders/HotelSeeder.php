<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $hotelsArr = [
            [
                "name" => "Viceroy Riviera Maya",
                "city" => "Playa del Carmen",
                "country" => "Mexico",
                "description" => "A secluded adults-only sanctuary, this posh hotel is the epitome of barefoot luxury. Lounge on the white-sand beach, explore the paths through the jungle, take a yoga class, or never leave your villa and its private plunge pool, soaking tub, and indoor/outdoor showers.",
                "photos" => [
                  [
                    "url" => "https://www.travelandleisure.com/thmb/EjqGc_pajbt_yv_gpKtx1sTBskk=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/viceroy-riviera-maya-039-TOPHOTELSWB21-45f5428a12b54ac6bbd39055670837ca.jpg"
                  ]
                ]
            ],
            [
                "name" => "Banyan Tree Cabo Marqués",
                "city" => "Acapulco",
                "country" => "Mexico",
                "description" => "With sweeping ocean views, three restaurants offering Mexican and Asian cuisine, and spacious rooms with sleek décor, this resort in Punta Diamante feels far removed from partying Acapulco crowds. Many rooms feature private decks with hammocks and plunge pools.",
                "photos" => [
                  [
                    "url" => "https://www.travelandleisure.com/thmb/DTsqU1UUYO18-lKgZxxzp0S-agw=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/banyan-tree-cabo-marques-070-TOPHOTELSWB21-6817f673d2644e74bfd3591b51373d3b.jpg"
                  ]
                ]
            ],
            [
                "name" => "Mahekal Beach Resort",
                "city" => "Playa del Carmen",
                "country" => "Mexico",
                "description" => "Beach, tropical gardens, and the city come together for the ultimate Riviera Maya getaway. Guests have access to all three, thanks to the premier seaside location that's steps away from local shops and restaurants — if you actually want to leave the serene resort.",
                "photos" => [
                  [
                    "url" => "https://www.travelandleisure.com/thmb/7GtBT3BScJek0DIB8TPCMRbq0PA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/mahekal-beach-resort-076-TOPHOTELSWB21-82488914960b46358e4aad3f56c9fda4.jpg"
                  ]
                ]
            ],
            [
                "name" => "Rosewood Mayakoba",
                "city" => "Playa del Carmen",
                "country" => "Mexico",
                "description" => "Guests can partake in a rejuvenation session with a shaman, among other locally inspired experiences, at the 17,000-square-foot Sense Spa at Rosewood Mayakoba. In addition, there's the pristine white-sand beach, four pools, six restaurants, a food truck, and a bakery to explore before retiring to one of the 129 breezy waterfront suites.",
                "photos" => [
                  [
                    "url" => "https://www.travelandleisure.com/thmb/Aem_pmAIyjBb-5oUrXn4_cpq7y4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/rosewood-mayakoba-096-TOPHOTELSWB21-14602720bf4b45c4ba8ac2a39b2f7027.jpg"
                  ]
                ]
            ],
            [
                "name" => "Montage Los Cabos",
                "city" => "Cabo San Lucas",
                "country" => "Mexico",
                "description" => "At this luxe resort on the edge of Santa Maria Bay, guests can loll by the pool or beach, swing at the 19-hole Fred Couples Signature golf course with views of the Sea of Cortés, savor a handmade paleta, indulge in a tequila tasting, or bliss out at the spa.",
                "photos" => [
                    [
                      "url" => "https://www.travelandleisure.com/thmb/d9QKGVaJ2FxxsNRN4xZB15OcMYc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/montage-los-cabos-098-TOPHOTELSWB21-a64cdeda941f473fb6620df5fec487ab.jpg"
                    ]
                ]
            ],
            [
              "name" => "Mahali Mzuri",
              "city" => "Masai Mara",
              "country" => "Kenya",
              "description" => "Part of the Virgin Limited Edition collection, Sir Richard Branson's majestic safari camp in the Masai Mara is 'just perfect,' according to one voter. The seemingly space-age tents somehow rise up out of the landscape and blend in with it simultaneously. Wildlife remains abundant in the surrounding bush — ideal for the twice-daily game drives — and the guides are extremely knowledgeable. One respondent raved about the 'excellent service,' adding that 'the hospitality provided at Mahali Mzuri resembles the name,' which means beautiful place in Swahili. Another reader says simply that it's 'the best luxurious camp to visit on the African continent.",
              "photos" => [
                [
                  "url" => "https://www.travelandleisure.com/thmb/gPTrU_KX6xGQ1UBT_GHynGNOysk=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/mahali-mzuri-001-TOPHOTELSWB21-599a7f3e882b4ec9bef98fce099a8483.jpg"
                ]
              ]
            ],
            [
              "name" => "Nayara Tented Camp",
              "city" => "Arenal Volcano National Park",
              "country" => "Costa Rica",
              "description" => "The most recent entry to the Nayara brand has all the details covered. Cliff-top safari tents have spacious bathrooms with soaking tubs, private decks, and infinity plunge pools that overlook the lush Costa Rican rain forest and the imposing Arenal Volcano. Elsewhere on the property, guests can spot wildlife like sloths and toucans; take a dip in the dramatic, cantilevered, hot-spring-fed mineral pools; and indulge in the plush spa.",
              "photos" => [
                [
                  "url" => "https://www.travelandleisure.com/thmb/AhZhq_bMvJrghL-R7Q6JCSzh50w=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/nayara-tented-camp-002-TOPHOTELSWB21-8b8d953410eb40c492d7011f24bc30e5.jpg"
                ]
              ]
            ],
            [
              "name" => "The Opposite House",
              "city" => "Beijing",
              "country" => "China",
              "description" => "Japanese architect Kengo Kuma designed this emerald glass building with subtle references to traditional Chinese architecture. Rooms are minimalist with luxurious touches like oak soaking tubs and plush beds, the staff is über-attentive, and the location is close to all the Beijing attractions.",
              "photos" => [
                [
                  "url" => "https://www.travelandleisure.com/thmb/tWLICJw1UQOq_KwYj6ssWejlBtg=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/opposite-house-003-TOPHOTELSWB21-f34e34225c1d47b887829739d768fc69.jpg"
                ]
              ]
            ],
            [
              "name" => "Capella Bangkok",
              "city" => "Bangkok",
              "country" => "Thailand",
              "description" => "Situated on the east bank of the Chao Phraya River, this new urban retreat offers impressive views of the lively Thai capital. There are four dining venues, including one overseen by chef Mauro Colagreco of France's Michelin three-starred Mirazur, and a swank spa with treatments, therapies, and fitness classes.",
              "photos" => [
                [
                  "url" => "https://www.travelandleisure.com/thmb/jTtnWV1IbSv-kil_GGdJbk8cTkQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/capella-bangkok-004-TOPHOTELSWB21-fc4a3afc3272422799a46f5d08c0be4e.jpg"
                ]
              ]
            ],
            [
              "name" => "Capella Ubud",
              "city" => "Bali",
              "country" => "Indonesia",
              "description" => "Last year's Top 100 Hotels winner, this glamorous, Bill Bensley–designed resort features a dramatic suspension bridge leading to 22 tented hideaways surrounded by lush rain forest and the river Wos gurgling below. The on-site organic Keliki Garden supplies two restaurants and a bar, and the nightly campfire is the setting for storytelling, movies, and live music with s'mores and hot chocolate.",
              "photos" => [
                [
                  "url" => "https://www.travelandleisure.com/thmb/sz1VMdDf4ByhyCkBmzjpwm_y-P0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/capella-ubud-005-TOPHOTELSWB21-0fd268f594514cc5918b9aa3b68ba0da.jpg"
                ]
              ]
            ],
            [
              "name" => "Grace Hotel, Auberge Resorts Collection",
              "city" => "Santorini",
              "country" => "Grecia",
              "description" => "This whitewashed resort, tucked away on the quieter side of Santorini, has unobstructed views of the sparkling Aegean, minus the crowds found elsewhere. Stay on property to enjoy yoga alfresco (the cliff-top setting is magical), or ask the staff to coordinate a scenic hike or cruise to see the island from a different vantage point.",
              "photos" => [
                [
                  "url" => "https://www.travelandleisure.com/thmb/vuasWkhVp6Z_oXJ5oM6gFZ3Vah0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/grace-hotel-006-TOPHOTELSWB21-2cd81ef020dd496dbb91f1cf50fa2fc9.jpg"
                ]
              ]
            ],
            [
              "name" => "Kamalame Cay",
              "city" => "Andros Island",
              "country" => "Bahamas",
              "description" => "Although this serene Bahamian island resort is a bit hard to get to, it's worth the journey for guests who make it to its sparkling private shores. Guests can relax on the deck of their beachfront bungalows, have breakfast delivered daily in a wicker basket, and borrow golf carts and bikes to explore the 96-acre island.",
              "photos" => [
                [
                  "url" => "https://www.travelandleisure.com/thmb/89OxydF6dV_IJ9SdU_-rdkF3Z90=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/kamalame-cay-007-TOPHOTELSWB21-c617cd9161814797a9f6d7f501040613.jpg"
                ]
              ]
            ],
            [
              "name" => "The Oberoi Udaivilas",
              "city" => "Udaipur",
              "country" => "India",
              "description" => "It's not hard to feel like royalty in this extravagant palace hotel, where Udaipur's glittering Lake Pichola is front and center. Posh rooms have semi-private pools that create a kind of moat around the hotel, and staff are trained to anticipate guests' every desire.",
              "photos" => [
                [
                  "url" => "https://www.travelandleisure.com/thmb/xPIWOOft2i2_S7C43Gq8LgoJ5L4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/oberoi-udaivilas-008-TOPHOTELSWB21-a0bb1fe5da4a4aebab5c76bd0e672860.jpg"
                ]
              ]
            ],
            [
              "name" => "The Temple House",
              "city" => "Chengdu",
              "country" => "China",
              "description" => "Two modernist, glass mid-rise towers emerge from a century-old building and tree-filled courtyard, creating a refuge within Sichuan's bustling capital. Rooms are modern and minimal, and there are four food and beverage outlets, a spa, an indoor pool, and a house car to enjoy.",
              "photos" => [
                [
                  "url" => "https://www.travelandleisure.com/thmb/Pn_qcBDZZNDxIkm9QKzx3ishE_E=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/temple-house-009-TOPHOTELSWB21-68c30af647e644a2bd9385484028aa87.jpg"
                ]
              ]
            ],
            [
              "name" => "The Oberoi",
              "city" => "New Delhi",
              "country" => "India",
              "description" => "There are 220 well-appointed rooms in this luxury hotel situated near several Delhi attractions. Guests can unwind at either the indoor or outdoor swimming pool, then choose from seven restaurants and bars, including one by Alfred Prasad, formerly of the Michelin-starred Tamarind in London.",
              "photos" => [
                [
                  "url" => "https://www.travelandleisure.com/thmb/TtL23qKK3FMMTfVI9qH5OEN--gg=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/oberoi-new-delhi-010-TOPHOTELSWB21-1b70f44ef0e94ded99ba2f100dcfe6e0.jpg"
                ]
              ]
            ],
            [
              "name" => "Hotel Paracas, a Luxury Collection Resort",
              "city" => "Paracas",
              "country" => "Peru",
              "description" => "Located on the stunning Paracas Peninsula, this minimalist resort is flanked by a crystal-blue bay on one side and a desert on the other. Activities — paddleboarding, shell collecting, and sailing, among others — make the most of the hotel's natural surroundings.",
              "photos" => [
                [
                  "url" => "https://www.travelandleisure.com/thmb/7pJ0Bu2BqiflWDC_8zpAf86h-uA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/hotel-paracas-011-TOPHOTELSWB21-a7556a093cae4e7ca56ae34fa63aab21.jpg"
                ]
              ]
            ],
            [
              "name" => "Taj Holiday Village Resort & Spa",
              "city" => "Goa",
              "country" => "India",
              "description" => "At this 28-acre resort, charming, well-equipped beachfront cottages with terra-cotta roofs overlook the Arabian Sea. A tranquil spa, multiple restaurants, and a golf course round out the on-site offerings.",
              "photos" => [
                [
                  "url" => "https://www.travelandleisure.com/thmb/bTqlgmnfZWp_XyBPY_ykfCYFoi8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/taj-holiday-village-012-TOPHOTELSWB21-7a3f0490cff54f669ef2e3eea6bfc9ea.jpg"
                ]
              ]
            ],
            [
              "name" => "Savute Elephant Lodge, a Belmond Safari",
              "city" => "Chobe National Park",
              "country" => "Botswana",
              "description" => "In the heart of Chobe National Park along the Savute Channel, this 12-room oasis puts the savannah at guests' fingertips. The tented accommodations are on raised wooden decks with thatched roofs and feature four-poster beds, hammocks, and spacious bathrooms with outdoor showers.",
              "photos" => [
                [
                  "url" => "https://www.travelandleisure.com/thmb/AlGAQ64SvvKzQRBWE_3rtmpSRoQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/belmond-savute-elephant-lodge-013-TOPHOTELSWB21-ebcd47f7122849c79efb87de5fbb52f1.jpg"
                ]
              ]
            ],
            [
              "name" => "The Oberoi Vanyavilas Wildlife Resort",
              "city" => "Ranthambhore",
              "country" => "India",
              "description" => "Inspired by the royal camps of yesteryear, the safari-style tents at this property feature canopy beds, lush lounge chairs, teak floors, and claw-foot tubs — and all guests have a personal butler. The big draw here is wildlife, so days are spent in the surrounding jungle searching for tigers and other creatures.",
              "photos" => [
                [
                  "url" => "https://www.travelandleisure.com/thmb/PhaacjUVE0ipA6GYHcmbx-ZnGug=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/oberoi-vanyavilas-014-TOPHOTELSWB21-cbcf94a480644ad6b2c42d56ab24dd59.jpg"
                ]
              ]
            ],
            [
              "name" => "Mandarin Oriental",
              "city" => "Milan",
              "country" => "Italy",
              "description" => "This urban oasis just steps from La Scala opera house is inside four interconnected 18th-century palazzos. Each of the 104 rooms, designed by Italian architect Antonio Citterio, embodies understated luxury, with the clean lines, rich textiles, thoughtful details, and high-end finishes that Mandarin Oriental is known for. Guests can dine at the Michelin two-starred Seta restaurant, overseen by chef Antonio Guida, and get pampered in the 9,700-square-foot indoor spa and swimming pool.",
              "photos" => [
                [
                  "url" => "https://www.travelandleisure.com/thmb/XAWGaxF5axQWzOWxZb-JSnoF9cc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/mandarin-oriental-milan-015-TOPHOTELSWB21-6f80b5ee5a1348949b4a186f167555b8.jpg"
                ]
              ]
            ],
            // [
            //   "name" => "La Réserve Paris - Hôtel & Spa",
            //   "city" => "",
            //   "country" => "",
            //   "description" => "Just beyond the Champs-Élysées, this 19th-century Haussmannian mansion features lavish textiles, hardwoods, and marble fireplaces. The Michelin two-starred Le Gabriel offers upscale dining in a refined atmosphere, with dishes like monkfish with white asparagus and wasabi and French pigeon with crispy buckwheat.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/72Ih8EZrEXXKBtDByMgcib2-8SQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/la-reserve-paris-016-TOPHOTELSWB21-64d19b58ccba48b4b94f290a263c0036.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Nobu Ryokan Malibu",
            //   "city" => "California",
            //   "country" => "",
            //   "description" => "An intimate retreat perched above the Pacific Ocean, this Japanese-style inn is secluded and discreet. Magnificent landscaping, stunning views, and high-quality materials make up this ode to simple yet luxurious design.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/lZ669F6ZpUN5fe-rVrvJhUh7qr4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/nobu-ryokan-malibu-017-TOPHOTELSWB21-5968bd58dff54147bc94701368e5873a.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Soneva Fushi",
            //   "city" => "Baa Atoll",
            //   "country" => "Maldives",
            //   "description" => "Sixty-three beachfront villas and eight overwater bungalows make up this posh resort that sets the standard for the Maldives. From snorkeling and diving to glassblowing and private-sandbar dining, the memorable experiences are endless here.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/yVCB3rjozUp55DDwFYuUnxYDC74=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/soneva-fushi-017-TOPHOTELSWB21-1-f65fb8e1361b4cc9b586252b2e3970f3.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Shangri-La the Shard",
            //   "city" => "London",
            //   "country" => "",
            //   "description" => "Breathtaking views are standard at this hotel, which occupies 19 floors of Renzo Piano's dramatic glass skyscraper in Southwark. Rooms are luxuriously appointed with stellar service, and the four restaurants offer high-end dining experiences seemingly amid the clouds on the 52nd floor.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/f0FY9THdJ39E9BDPprIkTexKZ_Y=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/shangri-la-at-the-shard-019-TOPHOTELSWB21-b78be75e26c540a382bbcdc52fde4ba3.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Alila Manggis",
            //   "city" => "Bali",
            //   "country" => "Indonesia",
            //   "description" => "Tucked inside a coconut grove in the traditional and unspoiled town of Candidasa, this secluded resort has spectacular views, touches of Balinese design, and high-quality amenities. Service is warm and intuitive, and staff are always ready to help.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/Ne5VPxS__2XDTk2-DLoDJfolDQw=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/alila-manggis-new-020-TOPHOTELSWB21-f504f2eb1c294410ba3386a2de2b88ab.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "andBeyond Phinda Vlei Lodge",
            //   "city" => "Phinda Private Game Reserve",
            //   "country" => "South Africa",
            //   "description" => "Known for incredibly knowledgeable and engaging safari guides, andBeyond is also famous for well-appointed lodges in ideal locations for wildlife spotting. Phinda Vlei is intimate and romantic, with just six suites overlooking wetlands and a grassy meadow on the edge of a rare sand forest that attracts a variety of game at all hours.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/0_kyCaoXa8cRDHjhOmnnvlgtPbM=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/andbeyond-phinda-vlei-lodge-020-TOPHOTELSWB21-a8b523c6d8344308a06f799001e7ee67.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Il Sereno Lago di Como",
            //   "city" => "Torno",
            //   "country" => "Italy",
            //   "description" => "An all-suite hotel on the eastern side of Lake Como near the village of Torno, this sparkling resort features 30 suites, each with its own waterfront terrace overlooking the lake. Designed by Milan architect and designer Patricia Urquiola, rooms feature custom furnishings complemented by fixtures in earth tones of gray and walnut and pops of blue and green.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/_ITwNQY3wd-cb2Naq0nNH9iCEuo=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/il-sereno-lago-di-como-020-TOPHOTELSWB21-4d0c3f5a7f474a1191cec7a40c502d29.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Manoir Hovey",
            //   "city" => "North Hatley",
            //   "country" => "Quebec",
            //   "description" => "Housed inside a 19th-century mansion modelled after George Washington's Mount Vernon, this Relais & Châteaux property has 36 rooms and suites. Well-placed antiques, rich textiles, and curated art give the hotel an elegant country vibe. The restaurant and bar feature seasonal dishes that highlight the local bounty.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/w2QOdArf1akzksc0xPPKi1OKMNk=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/manoir-hovey-023-TOPHOTELSWB21-9563d7d3375e418486270e801189cd41.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Canaves Oia Epitome",
            //   "city" => "Santorini",
            //   "country" => "Greece",
            //   "description" => "Though only five minutes from the bustling town of Oia, this resort prioritizes privacy, barefoot luxury, and quiet calm. A minimalist design inspired by traditional Cycladic architecture informs the 24 secluded suites and villas, and the infinity pool lined with volcanic rock boasts epic sunset views of the Aegean Sea.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/AIX40kgM6CAZRT4ABb5oGKuaCEY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/canaves-oia-epitome-024-TOPHOTELSWB21-fa6e5fe2426d48928ea66d178fa9dce6.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Four Seasons Hotel Istanbul at Sultanahmet",
            //   "city" => "",
            //   "country" => "",
            //   "description" => "This location can't be beat for guests that want to be right in the middle of all of Istanbul's old-city attractions. Set inside a former prison, the 65 modern rooms are lavish and spacious, and what once served as the prison yard is now a fragrant, landscaped courtyard. Head up to the roof terrace for panoramic views across the domes and minarets of Hagia Sofia and the Blue Mosque and out to the glittering Bosporus.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/jkIMXWPLHtTky-IvGa6XeAEGZuU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/four-seasons-istanbul-sultanahmet-025-TOPHOTELSWB21-4cfa4910303e418b966686dbcc168c09.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "The Peninsula Manila",
            //   "city" => "",
            //   "country" => "",
            //   "description" => "A grande dame in the center of Manila's business district, this opulent hotel has 497 rooms and suites, eight restaurants and bars, a spa and fitness center, and an outdoor pool surrounded by tropical gardens. The staff are always at the ready, whether it's helping with sightseeing or room service.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/rN0WUat7yHF4sGXcdqZqx7BH12U=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/peninsula-manila-025-TOPHOTELSWB21-701643345970426694bf0f94bbe06595.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Hotel Il Pellicano",
            //   "city" => "Porto Ercole",
            //   "country" => "Italy",
            //   "description" => "A favorite hideaway for movie stars of Hollywood's golden age, Hotel Il Pellicano exudes timeless elegance and understated luxury. Perched on the Tuscan coast amid tranquil gardens, the hotel's rooms and suites have garden or sea views, and the restaurant features Italian cuisine that has earned it one Michelin star.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/QNqKYH0XCb53c3JX_mwlmfhDs2w=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/il-pellicano-027-TOPHOTELSWB21-71664161c8e4433fbf2656d4f1d286b7.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Hotel Fasano Boa Vista",
            //   "city" => "Porto Feliz",
            //   "country" => "Brazil",
            //   "description" => "Two thousand acres of sprawling farmland are the setting for this luxe countryside hotel, located about 45 minutes from São Paulo. Guests can enjoy an 18-hole golf course, horseback riding, relaxing at the heavenly spa, numerous lakes and natural pools, and dining on the bounty of the Boa Vista Ranch.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/ytPMFNFQdO3Bpn445tTu3x_WCwI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/fasano-boa-vista-028-TOPHOTELSWB21-0bce7ff34b5d45769ef7b9655d326310.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Halekulani Okinawa",
            //   "city" => "Japan",
            //   "country" => "",
            //   "description" => "Guests who book one of the classically elegant rooms can expect perks like ocean views, balconies, and marble bathrooms with soaking tubs. Five swimming pools ensure plenty of space for relaxing, but the white-sand beach and emerald sea are also hard to resist.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/ougvV0q9Cq9RSeyVPQxPblFI1z8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/halekulani-okinawa-029-TOPHOTELSWB21-e36bf85d672a434e9f8c8d08917bc50f.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "The Lake House on Canandaigua",
            //   "city" => "Canandaigua",
            //   "country" => "New York",
            //   "description" => "The Finger Lakes got a near-instant icon when this 124-room lakefront resort opened in 2020. Willowbrook Spa features Nordic-inspired barrel saunas overlooking the lake, along with a calming sunroom and a tranquil garden. Guests can swim in the outdoor pool, soak in the hot tub, or go out on the lake in canoes, kayaks, and stand-up paddleboards.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/lDc_pxZv83EOzSlSD6Ow_HwGRPc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/lake-house-on-canandaigua-030-TOPHOTELSWB21-936acd4cddfd43da9fac90a2b7adc8f7.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Hyatt Regency Amritsar",
            //   "city" => "Amritsar",
            //   "country" => "India",
            //   "description" => "Just a few miles from the Golden Temple, this luxury business hotel has tasteful rooms, three restaurants and bars, a spa, and a pool. The breakfast is especially tasty and the staff is warm and helpful.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/4lVLZto2if0xXXvrMBHt3mmNga8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/hyatt-regency-amritsar-031-TOPHOTELSWB21-f82243a9e4924b218c747caf5d8f8690.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "The Leela Palace Udaipur",
            //   "city" => "India",
            //   "country" => "",
            //   "description" => "Guests make their grand arrival by boat to the Leela Palace Udaipur, which is right on Lake Pichola. The 80 rooms and suites all have water views, with the Aravalli Hills in the background.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/oMeCcMLWiniD6PLlMwMjriAzI84=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/leela-palace-udaipur-032-TOPHOTELSWB21-464cd47ba47e45c0ab841c7376634228.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Nayara Gardens",
            //   "city" => "Arenal Volcano National Park",
            //   "country" => "Costa Rica",
            //   "description" => "This family-friendly resort takes full advantage of its surroundings — a verdant jungle and the striking Arenal Volcano. Details like cozy casitas with private outdoor showers, multiple pools and hot tubs, several dining venues with ample options, and an array of tours and wildlife experiences combine for an unforgettable experience.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/wyG79IxgVqhiZbF1x2JV-08RtrY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/nayara-gardens-033-TOPHOTELSWB21-3024584e79ed4fda87d1da24af1ceaa6.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Pickering House Inn",
            //   "city" => "Wolfeboro",
            //   "country" => "New Hampshire",
            //   "description" => "Occupying a historic landmark mansion just blocks from Lake Winnipesaukee, Pickering House Inn opened in 2018 as a contemporary guest house. Each of the 10 rooms has its own distinct design, and a delicious gourmet breakfast is included.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/dwm9TQciUj4rBFwDFD9mYH8XZC8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/pickering-house-inn-034-TOPHOTELSWB21-7d013b4a3c674eeb8c8bc0fcf8542477.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Rancho Valencia Resort & Spa",
            //   "city" => "San Diego",
            //   "country" => "",
            //   "description" => "Twenty-six pink casitas housing 52 suites make up this secluded resort just outside La Jolla. The hacienda-style rooms — set on 40 acres of verdant gardens and olive groves — feature fireplaces with hand-painted tiles. Visitors can enjoy tennis courts and the pampering spa.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/isdeGBb4tWfZCHCc-1peT0VOgCo=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/rancho-valencia-035-TOPHOTELSWB21-0d69b230d11a45179aa63fe500fad7f2.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Nihi Sumba",
            //   "city" => "Sumba",
            //   "country" => "Indonesia",
            //   "description" => "This all-villa resort on the island of Sumba, southeast of Bali, features rugged wilderness and a near-empty beach that overlooks a legendary surf break. Each of the 28 thatched-roof cottages and tree-house-style suites comes with a private plunge pool and a personal butler.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/-P2wLdTAkanpEcrXkPzSR7WGRPU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/nihi-sumba-036-TOPHOTELSWB21-6d9205fda17f44c2bc21d292bedfdaca.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "The Oberoi Mumbai",
            //   "city" => "",
            //   "country" => "",
            //   "description" => "The glittering Queen's Necklace, as Mumbai's Marine Drive is known, is the home of this modern hotel. Classic Indian cuisine is served at Ziya, Italian food can be had at Vetro and Enoteca, and Eau Bar and Champagne Lounge are perfect for craft cocktails and fine wine.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/DD-UeKUW8LzuFmt5TV3O_GrtZTA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/oberoi-mumbai-036-TOPHOTELSWB21-8aa030391b814e5eb82f4dcf1da82d7d.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Tierra Atacama Hotel & Spa",
            //   "city" => "San Pedro de Atacama",
            //   "country" => "Chile",
            //   "description" => "The spectacular night sky is on full display at Tierra Atacama, which has a welcoming terrace with a firepit, locally made furniture and textiles, and a glittering pool. The hotel arranges adventurous expeditions through the desert, and a stop at the Uma Spa at the end of the day is recommended.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/kfV5RYbuhHOUzfGeAsfu2Zs1nXY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/tierra-atacama-036-TOPHOTELSWB21-576a35665ef14b0f8c80edc9aea0d687.jpg"
            //     ]
            //   ]
            // ],

            // [
            //   "name" => "St",
            //   "city" => "",
            //   "country" => "",
            //   "description" => "Situated on the city's European side, in the posh shopping district of Nişantaşi, the St. Regis Istanbul features 118 rooms with pieces by contemporary Turkish artists and balconies overlooking the city. Guests can dine at an outpost of Wolfgang Puck's Spago or at the St. Regis Brasserie.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/rAVfOiQrSLJ2nFM8zTVTn0Cmegs=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/st-regis-istanbul-040-TOPHOTELSWB21-f1774f11cdcd45f0a94d32a99f2e871f.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Katikies Mykonos",
            //   "city" => "Greece",
            //   "country" => "",
            //   "description" => "The creativity of all-white design is taken to new heights at this seaside Mykonos resort. While the beach and pool beckon, be sure to set aside ample time for getting pampered at the sparkling spa.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/oY__bBJAAfCzC8umo0wb5iUERfI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/katikies-mykonos-041-TOPHOTELSWB21-c9beed9ae128490bbc791b2dcf08729b.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "The Lanesborough",
            //   "city" => "London",
            //   "country" => "",
            //   "description" => "A 93-room opulent hotel in Knightsbridge, the Lanesborough is walking distance from such iconic London attractions as Buckingham Palace and Hyde Park. Rooms feature Regency-period furnishings and marble bathrooms, and the 18,000-square-foot spa includes a hydrotherapy pool.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/PHIwN46ChRmRljgKNcR8kwOPjH4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/lanesborough-041-TOPHOTELSWB21-2e073c92d5d5409b98e653905be10873.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Mandarin Oriental Bangkok",
            //   "city" => "",
            //   "country" => "",
            //   "description" => "Expect high design at this landmark hotel on the banks of the Chao Phraya River. The 393 rooms feature Thai-style furnishings and design, and all guests have access to personal butlers. Grounds are meticulously landscaped, and there are two pools, two tennis courts, and an award-winning spa.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/PKrcEeHgbjEE_7FkZ15Ij1GgUJg=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/mandarin-oriental-bangkok-041-TOPHOTELSWB21-20bde708632b4db99ec11c1202340b98.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "The Roundtree",
            //   "city" => "Amagansett",
            //   "country" => "New York",
            //   "description" => "Last summer, the Hamptons welcomed this charming hotel, with airy individual cottages, rooms, and suites. The contemporary design features light wood and tasteful black-and-white photographs. A daily continental breakfast is served on the verdant lawn; guests can ride complimentary bikes to or get a ride in the beach cruiser to the ocean; and in the evening, s'mores are available at the firepit.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/yhkG-R9QTxSMu6NrgOwhwu4nhf0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/roundtree-amagansett-041-TOPHOTELSWB21-b15c123fd82d417585f02b4921cc0f76.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Mashpi Lodge",
            //   "city" => "Mashpi",
            //   "country" => "Ecuador",
            //   "description" => "Though closer to Quito than to the Amazon rainforest, Mashpi Lodge is still surrounded by dense jungle, where guests can watch for more than 400 species of birds, trees, frogs, and other wildlife. Ride the hotel's Dragonfly Canopy Gondola or hike to rushing waterfalls and rivers; return to unwind in rooms with floor-to-ceiling windows that put the rain forest on full display.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/6QTAOjBSMcCgsv3OEWgaeSrSWsU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/mashpi-lodge-045-TOPHOTELSWB21-79b09fbd703740f3848894331c02d81a.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Angama Mara",
            //   "city" => "Masai Mara",
            //   "country" => "Kenya",
            //   "description" => "Perched at the edge of a steep slope above Kenya's Great Rift Valley, this safari lodge has 15 deluxe tented suites, a private airfield, and customized game drives and walking safaris. Stop by the Shamba (garden) to sample fresh produce.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/qiR8GmYK3Q0I0B4h8z79sptbWeI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/angama-mara-046-TOPHOTELSWB21-e5514fa0776b48f19f4768383cdc6805.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Raffles Istanbul",
            //   "city" => "",
            //   "country" => "",
            //   "description" => "This respite within the high-end Zorlu Center development has a sleek design that lends itself to contemporary comfort. Technologically integrated rooms and top-notch facilities like a spa with three hammams, two pools, and a fitness center with yoga and Pilates studios ensure a true retreat from the bustling city just outside the doors.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/dv7e_XklymHmYRLNh1Y7N0p5KTs=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/raffles-istanbul-047-TOPHOTELSWB21-ca7e3fc79cea4967aa6f6164ca7e6a04.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Grand Hotel Excelsior Vittoria",
            //   "city" => "Sorrento",
            //   "country" => "Italy",
            //   "description" => "A grande dame in Sorrento, this historic resort has classic rooms overlooking the Bay of Naples and Mount Vesuvius in the distance. Breakfast is included, and there's a Michelin one-starred restaurant to indulge in.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/eTZzSeK8F5qDAcVbbw3LFxJD0pA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/grand-hotel-excelsior-vittoria-048-TOPHOTELSWB21-1576412a1e32418a8dd066ebcca97583.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Sumaq Machu Picchu Hotel",
            //   "city" => "Peru",
            //   "country" => "",
            //   "description" => "The 62 stylish suites at this Aguas Calientes hotel are well-appointed with plush textiles and rich finishes. Functioning as a refuge from the fray, the hotel offers experiences like pisco sour and ceviche classes, coca-leaf readings, and various tours of Machu Picchu.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/yUQqyhlxuqpLdAzag27DHDZnYHI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/sumaq-machu-picchu-049-TOPHOTELSWB21-fa5b6fc4a7464db0b487f759bdf66e2a.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Las Ventanas al Paraíso",
            //   "city" => "a Rosewood Resort",
            //   "country" => "San José del Cabo",
            //   "description" => "Guests here can enjoy extensive dining options (from upscale authentic Mexican to temaris sushi and Indonesian noodles), a lavish spa, and activities that include deep-sea fishing, world-class golf, and whale watching. Rooms have panoramic views of the Sea of Cortés, romantic fireplaces, and bowls of fresh fruit replenished daily by the personal butlers.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/c8d6tfDSHRy26ZM7JEKvYKnlmXQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/las-ventanas-al-paraiso-050-TOPHOTELSWB21-234243e8f7974d6b8095337fe868976b.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "The Oberoi Rajvilas",
            //   "city" => "Jaipur",
            //   "country" => "India",
            //   "description" => "Close to Jaipur's attractions, the Oberoi Rajvilas is built around a magnificent 18th-century temple on 32 acres of landscaped grounds. Mixing modern amenities with traditional Rajasthani style, the rooms, villas, and luxury tents feature details like block-printed fabrics, four-poster beds, and deep soaking tubs. Activities on property include meditation and cooking classes.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/99boUg7QeTAKBn6yedXPvfNS5bc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/oberoi-rajvilas-051-TOPHOTELSWB21-5ecf2ba416ab46299d50e2751e4ce7e0.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Viceroy Chicago",
            //   "city" => "",
            //   "country" => "",
            //   "description" => "Well-situated on Chicago's Gold Coast, the 180-room hotel features glamorous Midcentury Modern design with contemporary trimmings and views of the city and Lake Michigan. The chic rooftop lounge, Devereaux, provides a swank hangout, while the Somerset restaurant serves seasonal American food from chef Stephen Gillanders.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/rHe5QsJw-A8EozK0QykKxkAXAVs=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/viceroy-chicago-051-TOPHOTELSWB21-06f0c7a1e1ba4661a7db9d68b8dba3d4.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Gibb's Farm",
            //   "city" => "Karatu",
            //   "country" => "Tanzania",
            //   "description" => "A circa-1929 farmhouse on the slopes of the Ngorongoro Crater serves as the heart of Gibb's Farm, which encompasses an herb garden, rose garden, cactus garden, vegetable garden, and medicinal garden. Seventeen cottages and two houses look out over the Great Rift Valley, and there are a spa and swimming pool.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/d6d6AodXlLwwPCUY0jERYGSlROo=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/gibbs-farm-053-TOPHOTELSWB21-73a951a8b0ee4783adc2b380f9b4ca93.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Singita Grumeti",
            //   "city" => "Serengeti National Park",
            //   "country" => "Tanzania",
            //   "description" => "Grumeti is a vast 350,000-acre reserve that's integral to the wildebeest migration. Singita took over its management in 2006 and has set up five lavish lodges and tented camps across the vast terrain, ensuring premier access to wildlife sightings. The opulent Sasakwa Lodge, the jewel in Singita Grumeti's crown, has panoramic views of the Serengeti and sumptuous furnishings and décor.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/qBWBt_pMbJ7GpHOBnu9ssT6wBQk=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/singita-grumeti-054-TOPHOTELSWB21-52e6062368264aaba2a2e2128bc6acd4.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Four Seasons Hotel Bangkok at Chao Phraya River",
            //   "city" => "",
            //   "country" => "",
            //   "description" => "After shuttering a previous location in 2015, Four Seasons returned to the Thai capital last year with this sleek waterfront property in the Sathorn district. The hotel has 299 contemporary rooms, including a 4,800-square-foot presidential suite. Three restaurants offer a choice of Cantonese, French, or Italian cuisines. There are also outdoor lap and infinity pools, plus a peaceful spa with an anti-aging-focused Advanced Beauty Room, to encourage plenty of relaxation time.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/pEIBmsK5N3Kq-jN5bEm3enq0bIY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/four-seasons-bangkok-055-TOPHOTELSWB21-6ab0fb0a365b48eb836276b76230ac6e.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "The Goring",
            //   "city" => "London",
            //   "country" => "",
            //   "description" => "Dating back to 1910, this hotel has been run by the Goring family since its opening. Today, rooms and suites are splendid and opulent, yet unfussy and comfortable. Afternoon tea is a grand tradition and served daily in the greenery-filled Veranda, with views of the landscaped garden.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/wOGZ6INU7yTc-nzv0SPtePDKC70=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/goring-056-TOPHOTELSWB21-48e969bad96544e78cfd5cc38400a9fd.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "The Lodge & Spa at Brush Creek Ranch",
            //   "city" => "Saratoga",
            //   "country" => "Wyoming",
            //   "description" => "A favorite celebrity hideaway, this authentic ranch fills guests' schedules with activities that accentuate the beauty of the gorgeous Wyoming landscape. Horseback riding, ATV rides, aerial ropes courses, mountain biking, hiking, and fly-fishing are just a handful of the options. And it's perfect for families, thanks to the Lil Wranglers kids' program that's included in the price.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/CafzqJb6vkY9lftrl_zOdGjwHjg=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/lodge-and-spa-at-brush-creek-ranch-057-TOPHOTELSWB21-a34c553129a34bb1b5dc2c322673ed79.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Taj Palace",
            //   "city" => "New Delhi",
            //   "country" => "",
            //   "description" => "This massive hotel in New Delhi's diplomatic enclave has 403 rooms with spacious marble bathrooms, and multiple restaurants, including one designed like a train carriage on the Orient Express. There are also manicured lawns, mini golf, a large pool with a swim-up bar, luxe spa, and a 24-hour fitness center..",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/SkUCYlnCZVbO2xHy0gguIc3oM8c=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/taj-palace-057-TOPHOTELSWB21-6d41eac58ee54af4bc1d0e70dfde0987.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "St",
            //   "city" => "",
            //   "country" => "",
            //   "description" => "Housed in a 19th-century palace on the banks of the Arno River, this hotel offers an experience fit for royalty. Guests can witness the daily champagne sabering at the Winter Garden Bar, enjoy the decadent afternoon tea, and go on a tour of the city in one of the house Bentleys before retiring to their opulent rooms, with their dramatic, canopied beds.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/pW2Oe69zbPg3VzmPxli9kM6Xa7M=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/st-regis-florence-059-TOPHOTELSWB21-975d5841782f4799bbd4133de31d7512.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Mandarin Oriental Paris",
            //   "city" => "",
            //   "country" => "",
            //   "description" => "Chef Thierry Marx oversees this hotel's three restaurants, including the Michelin-starred Sur Mesure, ensuring any meal you indulge in is sure to be spectacular. Rooms are some of the largest in the city and feature an eye-catching Art Deco design.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/mJenGHK8-yW3d_1qAohR-FKKY_U=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/mandarin-oriental-paris-060-TOPHOTELSWB21-3dcd33fe01fb4173b2f0485089a03813.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Matetsi Victoria Falls",
            //   "city" => "Matetsi Private Game Reserve",
            //   "country" => "Zimbabwe",
            //   "description" => "Two camps set along the Zambezi River with nine suites each make up Matetsi Victoria Falls. Game viewing and visiting the gushing falls are the primary draws here, and when guests return from excursions, they can relax by the pool with river views or enjoy a massage to the sounds of wildlife calls outside.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/5brLCBBYew6sUIZsvDg0z2_xiC0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/matetsi-victoria-falls-060-TOPHOTELSWB21-1fff8f34f66b4663883b7f9d64f7a8d9.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Round Hill Hotel and Villas",
            //   "city" => "Montego Bay",
            //   "country" => "Jamaica",
            //   "description" => "Manicured grounds and a private beach make Round Hill an attractive destination to discerning travelers. Guests can enjoy beach barbecues, an infinity pool, and complimentary afternoon tea.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/u6goykWL_uZkDsQ6ljVLhpHnMYI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/round-hill-062-TOPHOTELSWB21-236ad72c4aba448ba5189018a24fc9e3.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Khwai River Lodge",
            //   "city" => "a Belmond Safari",
            //   "country" => "Moremi Game Reserve",
            //   "description" => "Each room or suite at this luxe lodge in the Okavango Delta comes with a spacious deck, where guests can watch the floodplains come alive with wildlife. Game drives are rounded out by spending time at the peaceful infinity pool, swapping stories by the fire, or indulging in a massage.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/zMsBiPPOE2u8hIB2cjMndElGFBY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/belmond-khwai-river-lodge-063-TOPHOTELSWB21-6f618bdf67774734905b7d32f620bffa.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Soneva Jani",
            //   "city" => "Noonu Atoll",
            //   "country" => "Maldives",
            //   "description" => "Extravagant overwater villas tricked out with waterslides (and serviced by personal butlers) are divided into two sections at Soneva Jani, with Chapter Two having 27 newer and slightly larger villas. All guests can make use of the lush spa and the overwater cinema, plus watercraft, snorkel and dive equipment, surfboards, and more. Book a private beach dinner or sunrise breakfast for a truly unforgettable experience.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/V8wG9ojbgx3TicxZV8J2s762HOU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/soneva-jani-064-TOPHOTELSWB21-289b90eaef774a1e930ac593368cefc5.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "The Oberoi Amarvilas",
            //   "city" => "Agra",
            //   "country" => "India",
            //   "description" => "Location is almost everything at the Oberoi Amarvilas, where all guest rooms have an unobstructed view of the Taj Mahal. There's also impeccable service, as well as both Mughlai and Italian dining options.vBonus: Guests can book a private dining experience at the Taj Mahal itself.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/x4YFBsmtqfeV3KcQGA90Uvj0fVA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/oberoi-amarvilas-065-TOPHOTELSWB21-ace11a6e73fe4ad4aaf2a9f0d526d7ec.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Inn of the Five Graces",
            //   "city" => "Santa Fe",
            //   "country" => "New Mexico",
            //   "description" => "Traditional adobe buildings are filled with colorful fabrics, kiva fireplaces, intricate mosaic-tiled bathrooms, and Silk Road rugs and textiles. Treatments at the Tibetan-inspired spa and New Mexican breakfasts enhance stays.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/LZX3owOC1JGaq-Y4E7JXfk0gv4M=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/inn-of-the-five-graces-066-TOPHOTELSWB21-e83066cecba14c3db900e916c88bacca.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Zadun",
            //   "city" => "a Ritz-Carlton Reserve",
            //   "country" => "San José del Cabo",
            //   "description" => "Indoor/outdoor living is an art form here, with 115 suites that capitalize on the beautiful ocean landscape. The three restaurants celebrate both street-food and elevated Mexican cuisine, with Peruvian and Japanese dishes on offer as well.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/hlUf9OLXJeAc0TWD6eYmGk2kR40=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/zadun-ritz-carlton-reserve-066-TOPHOTELSWB21-839cddc3b2d34fcba7092916c91af82e.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "The Bushcamp Company's Mfuwe Lodge",
            //   "city" => "South Luangwa National Park",
            //   "country" => "Zambia",
            //   "description" => "Just a few minutes' drive beyond the main gate of South Luangwa National Park, this lodge is made up of 18 chalets surrounded by two lagoons and a mahogany-and-ebony forest that attract a ton of wildlife, and a wild mango tree has been known to beckon elephants to wander right through the lobby. Game drives and walking safaris led by expert rangers ensure guests see plenty more animals during their stay.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/KxeNfUwD-m9vtG-tZFuh9nF_Oqs=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/bushcamp-company-mfuwe-lodge-068-TOPHOTELSWB21-a6797147fcd94b7dbca64627a8a4a44e.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "InterContinental Bora Bora Resort & Thalasso Spa",
            //   "city" => "French Polynesia",
            //   "country" => "",
            //   "description" => "Luxury overwater villas poised above a tranquil lagoon set the tone here. Even rooms at the spa feature glass bottoms so you can gaze at the crystal-clear sea during your treatment.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/pQJVPQ8U5H1vtbCyre_c9wAF8Sc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/intercontinental-bora-bora-resort-thalasso-spa-068-TOPHOTELSWB21-898980a3be9d47d885c881b53565e9c9.jpg"
            //     ]
            //   ]
            // ],

            // [
            //   "name" => "andBeyond Ngala Safari Lodge",
            //   "city" => "Kruger National Park Area",
            //   "country" => "South Africa",
            //   "description" => "Situated on a 36,000-acre private concession inside Kruger National Park, this timeless lodge consists of 20 thatched cottages. Guests can enjoy twice-daily game drives, interpretative bush-walks, a rhino conservation experience, and a romantic night in a secluded tree house under the stars.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/POo4uXV1rTOcy-LiMzsZsH8kfro=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/andbeyond-ngala-safari-lodge-071-TOPHOTELSWB21-a5b0aa70743f42728e34a4e34209e4d7.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Sasaab",
            //   "city" => "Samburu",
            //   "country" => "Kenya",
            //   "description" => "Set against a breathtaking backdrop of the Laikipia Plateau and the jagged peaks of Mount Kenya, Sasaab features nine tented rooms with private plunge pools and Moroccan-Swahili design. Game drives and safari experiences afford various wildlife encounters, including with the endangered Grévy's zebra, which are often seen in the nearby Samburu National Reserve.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/phidNWQZMZc_3F9KIzH6-MWtln8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/sasaab-071-TOPHOTELSWB21-2ca48c47ec8145058dbe89c0d086c7dc.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "The Sukhothai Bangkok",
            //   "city" => "",
            //   "country" => "",
            //   "description" => "A serene sanctuary in a bustling city, the 214-room hotel has an accommodating staff and well-appointed rooms, with details like celadon-finished showers and silk-covered furniture. The lotus ponds and manicured courtyards are also worth exploring.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/fhdn_GP3nvbyx4bGNl2RVRt_Rmk=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/sukhothai-bangkok-073-TOPHOTELSWB21-6f00f7d74e7a493db07be14e011b0cf5.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "The Oberoi Grand",
            //   "city" => "Kolkata",
            //   "country" => "India",
            //   "description" => "This 209-room grande dame occupies a prime spot overlooking the Maidan, the city's largest park. Neoclassical architecture and an inner courtyard with landscaped gardens nod to its Edwardian-era roots, but amenities such as the spa and 24-hour fitness center are thoroughly modern.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/Fk2zVeBBFT9Duif54P1nE6B5LtQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/oberoi-grand-074-TOPHOTELSWB21-f489296dcafa433b8123ecd92667f386.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Hôtel Plaza Athénée",
            //   "city" => "Paris",
            //   "country" => "",
            //   "description" => "Rooms on the first six floors are classic Parisian, while the seventh floor recently unveiled a transformation that showcases Art Deco design by Bruno Moinard and Claire Bétaille. But whichever room you stay in, sumptuous fabrics and furnishings are a given.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/JQ8NEolDfOKRrR-XJ-oCbAKCZVQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/hotel-plaza-athenee-075-TOPHOTELSWB21-9e48147ccb154cc0bac58b5baa13291c.jpg"
            //     ]
            //   ]
            // ],

            // [
            //   "name" => "The Fullerton Hotel Singapore",
            //   "city" => "",
            //   "country" => "",
            //   "description" => "Once home to the city's main post office, the 400-room Fullerton Hotel is well positioned within walking distance of several of Singapore's attractions. But come evening, it's worth returning to the hotel's 82-foot swimming pool to catch the sunset over the Singapore River.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/t4UxIfCir9myjAV00f-lsgPW1LE=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/fullerton-hotel-077-TOPHOTELSWB21-e7c77bdca8ea47c49b4cb03c18f9229e.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Jade Mountain",
            //   "city" => "Soufrière",
            //   "country" => "St. Lucia",
            //   "description" => "Rising majestically above Anse Chastanet with views of Petit Piton and Gros Piton mountains, Jade Mountain has 20 unique indoor/outdoor suites with either private whirlpools or infinity pools. The Chocolate Lab offers tastings and classes that celebrate the handcrafted sweets made from locally grown cacao.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/qGDBw7BjHZisLwQnQAnH1pW0WjE=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/jade-mountain-078-TOPHOTELSWB21-ed4b63b1c46442809ab6f71247b7b309.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Casa Chameleon",
            //   "city" => "Mal País",
            //   "country" => "Costa Rica",
            //   "description" => "Readers appreciate the fact that this resort is off the beaten path. Casa Chameleon at Mal País is tucked between the famous surf breaks of Santa Teresa and the thick jungle of Cabo Blanco Nature Preserve that's brimming with wildlife.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/3ebpRSEPSUyMpuGiDvi4NP4kV68=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/casa-chameleon-mal-pais-079-TOPHOTELSWB21-b4cd2e3bf794406da42b2f0ca09025c0.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Hôtel Crillon Le Brave",
            //   "city" => "Crillon-le-Brave",
            //   "country" => "France",
            //   "description" => "Secreted away in the Vaucluse region of Provence, this boutique hideaway features 16 rooms and 18 suites with design touches like terra-cotta tiles, neutral linen, and bold patterns. The hotel is spread out among various centuries-old buildings that blend into the village, encouraging guests to wander the twisting grounds and discover new passageways and hidden nooks.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/i2VQjsawIAgJo_OQ7jVuni6SJOM=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/crillon-le-brave-080-TOPHOTELSWB21-1bf002aa2f8f48d285d038a497da9279.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Le Bristol Paris",
            //   "city" => "",
            //   "country" => "",
            //   "description" => "Completely renovated in 2018, this Parisian icon is better than ever — although it has been a celebrity and fashion-industry favorite since 1925. Louis XV– and Louis XVI–era furnishings, original paintings, and designer fabrics can be found in the luxurious rooms, which have views of either the courtyard or the Rue du Faubourg St.-Honoré. Two Michelin-starred restaurants are on site, both under the direction of chef Eric Frechon.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/1pGLXvnrPW7urOGvvq3d9aYH_84=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/le-bristol-paris-080-TOPHOTELSWB21-957c1495eead489fa4fd32dfd53ed31c.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Mandapa",
            //   "city" => "a Ritz-Carlton Reserve",
            //   "country" => "Bali",
            //   "description" => "Opened in 2015 as the third resort in the Ritz-Carlton Reserve portfolio, Mandapa is situated at a bend in the Ayung River. Each of the 35 suites and 25 pool villas comes with a dedicated butler. A Balinese spa, four restaurants and lounges, and organic garden complete the experience.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/bbeMD10r__-s0MYT27upGuxTPwc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/mandapa-ritz-carlton-reserve-080-TOPHOTELSWB21-bd6f3bf0e59f4e22a704053efc0d0812.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Six Senses Laamu",
            //   "city" => "Maldives",
            //   "country" => "",
            //   "description" => "Sustainability is at the forefront at Six Senses Laamu: it has committed to reducing its carbon footprint, it partnered with the Blue Marine Foundation–which has a research center on property, and it monitors and protects the local coral reef and sea turtle population. It also has 97 dazzling ocean- and lagoon-side rooms, giving guests prime views of the environment the property is working so diligently to protect.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/DICR68fiBINoxL3WY9s1_MJEmKA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/six-senses-laamu-080-TOPHOTELSWB21-004cb8d02e7c4af89e8b3618b00d0af9.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Waldorf Astoria Maldives Ithaafushi",
            //   "city" => "Maldives",
            //   "country" => "",
            //   "description" => "Ithaafushi Island in the South Malé Atoll is the home of Waldorf Astoria Maldives Ithaafushi, a deluxe property comprising 119 villas. Some are directly over water, while others are on the beach; all have private pools and epic sea views.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/7wYwJdAVWn3eoeY9Yi0DN1O0OBA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/waldorf-astoria-maldives-ithaafushi-080-TOPHOTELSWB21-d42e357f00754973bbbfe987835f7319.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "The Wickaninnish Inn",
            //   "city" => "Tofino",
            //   "country" => "British Columbia",
            //   "description" => "Standing on a cliff above the churning Pacific Ocean, the Wickaninnish Inn has become a popular spot for weather-watching and adventuring. It even provides Helly Hansen rain gear, rain boots, and binoculars.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/14ujaVyHPoD8LK70fsJIg9saFks=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/wickaninnish-inn-080-TOPHOTELSWB21-98b96ce29fe54562afad2dd63d874bf9.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Penha Longa Resort",
            //   "city" => "Sintra",
            //   "country" => "Portugal",
            //   "description" => "At this idyllic resort, set amid rolling green hills within the Sintra-Cascais Natural Park, guests can spend their days working on their golf game and popping between seven dining options, including two that hold Michelin stars.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/f76-CQrt254XBcj61e3z0P93l7M=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/penha-longa-086-TOPHOTELSWB21-f7332c09c1e34097829d09ab79dd9755.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "The St",
            //   "city" => "French Polynesia",
            //   "country" => "",
            //   "description" => "This resort boasts the largest overwater villas in the South Pacific, each of which features glass floor panels to see the turquoise water below. The famous St. Regis butlers take care of guests' every desire, and the resort's private lagoonarium features hundreds of underwater species to admire while snorkeling.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/uAo5zculOmDIsNa2imrhWIxa9x0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/st-regis-bora-bora-087-TOPHOTELSWB21-996a2d7aa38a4752b00fc27c3704edb0.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Lion Sands Game Reserve",
            //   "city" => "Sabi Sand Game Reserve",
            //   "country" => "South Africa",
            //   "description" => "The Big Five are the star attractions at the Sabi Sand Game Reserve, where Lion Sands' six lodges and camps enjoy a premier location on the banks of the Sabie River. The Treehouse Experiences position guests above the bush, and daily game drives and nature walks offer plenty of opportunities to see the wildlife up close.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/Si01fmuPCGizmcVBKOD90NcI7qg=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/lion-sands-game-reserve-088-TOPHOTELSWB21-6fe27d63967147ae856067a767477216.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Rambagh Palace",
            //   "city" => "Jaipur",
            //   "country" => "India",
            //   "description" => "Built in 1916, and significantly enlarged in the 1930s, this 78-room Rajput masterpiece was once the home of Jaipur's last ruling maharaja. Preserved details like hand-carved marble latticework, sandstone balustrades, cupolas, and elaborate Moghul gardens ensure guests feel like royalty — a sentiment amplified by the accommodating staff.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/8HooGhHIihcu5nmDOSqeevGRddw=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/rambagh-palace-088-TOPHOTELSWB21-1b0fd69cb46f48559b4bb09485bce93a.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "The Oyster Box",
            //   "city" => "Umhlanga Rocks",
            //   "country" => "South Africa",
            //   "description" => "The iconic Oyster Box hotel is on a cliff overlooking Umhlanga beach and has sweeping views of the Indian Ocean. Timeless rooms feature elegant patterned textiles and artwork by KwaZulu-Natal locals.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/npWkZ92pjvZ8BP7Sxg8sud5iDlk=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/oyster-box-090-TOPHOTELSWB21-9ec040be2aad443898843d2efcf8b2f6.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "The Stafford",
            //   "city" => "London",
            //   "country" => "",
            //   "description" => "This urban oasis in the heart of St. James's began life as two private residences and a stable, all built in the 17th century. Today, the rooms reflect the unique history and character of each building, but they all boast plush textiles with bold patterns, bespoke furniture, and marble bathrooms.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/HO1iX9ygjKD9-1Rpmmlsvb2_Hdw=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/stafford-london-091-TOPHOTELSWB21-ca18d552968a447fa9203a240c6b7cbd.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Tambo del Inka",
            //   "city" => "a Luxury Collection Resort & Spa",
            //   "country" => "Scared Valley",
            //   "description" => "Making an idyllic home base for expeditions to Machu Picchu, Tambo del Inka has its own private train station to whisk guests to the famed historical site. The restaurant and bar feature organic, locally grown ingredients in dishes and drinks, and rooms have locally woven textiles.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/EtXykvfd8wa1XjJKMEzqiCB5yXM=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/tambo-del-inka-092-TOPHOTELSWB21-3ae92e92c28b475a80cb2a67fa1a2a07.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Cap Maison",
            //   "city" => "Gros Islet",
            //   "country" => "St. Lucia",
            //   "description" => "Hiking, kayaking, catamaran sailing, paddleboarding, windsurfing, and snorkeling are just some of the activities outdoorsy guests can try at Cap Maison. Those seeking a more low-key experience can luxuriate at the blissful spa or spend time at the pool.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/OcF6Oia9BsT0v8FlzTwDzfZ-UtM=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/cap-maison-093-TOPHOTELSWB21-72820326a9c7493b861f13166484dde1.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Tensing Pen",
            //   "city" => "Negril",
            //   "country" => "Jamaica",
            //   "description" => "Tensing Pen is perched on the West End cliffs, and its intimate thatched-roof cottages enjoy views of the sea or tropical gardens. Yoga classes and the peaceful spa ensure utter relaxation.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/pyqY5X-ut1hkiGHsqY0069QGb3Q=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/tensing-pen-093-TOPHOTELSWB21-3ccb89d1c3d64e72841ade415de901e7.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Hôtel Le Toiny",
            //   "city" => "Anse de Toiny",
            //   "country" => "St. Bart's",
            //   "description" => "A sparkling Relais & Chateaux property, this intimate Caribbean resort has just 22 villas, each with its own sundeck and plunge pool. While it's hard to leave the plush rooms, the chic beach club, acclaimed restaurant, and blissful spa beckon.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/z4ImL9m4B6wWW-6BXCwIfc6yxIg=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/hotel-le-toiny-095-TOPHOTELSWB21-5585781f5bd4406bbb3ccd82bcf7a49c.jpg"
            //     ]
            //   ]
            // ],

            // [
            //   "name" => "Canaves Oia Boutique Hotel",
            //   "city" => "Santorini",
            //   "country" => "Greece",
            //   "description" => "Although Oia is one of the busiest places on Santorini, the family-run Canaves Oia provides an oasis of calm. Its whitewashed buildings stand out against the glittering Aegean Sea, and guest rooms are minimalist but comfortable, with panoramic sea views.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/1pHKHlzCksPVC4PfrLR0DOtnnss=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/canaves-oia-097-TOPHOTELSWB21-6529be12a4f547459a964157f9c5cae4.jpg"
            //     ]
            //   ]
            // ],

            // [
            //   "name" => "Badrutt's Palace Hotel",
            //   "city" => "St. Moritz",
            //   "country" => "Switzerland",
            //   "description" => "The 'palace' name is fitting for this swanky 1896 mountainside hotel. Impressive amenities include an ice-skating rink and a pool with panoramic views of the Swiss Alps. The lobby is almost like a museum, with many of the original details, furnishings, and art still on view.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/nvEk5270yvayNV87YfmVowle0hE=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/badrutts-palace-099-TOPHOTELSWB21-ce795306ff85409693e37523dfe93466.jpg"
            //     ]
            //   ]
            // ],
            // [
            //   "name" => "Finca Cortesin Hotel Golf & Spa",
            //   "city" => "Málaga",
            //   "country" => "Spain",
            //   "description" => "A golf-and-beach resort with an expansive spa and five restaurants and bars, this Andalusian marvel wowed readers with its extremely friendly and helpful staff. The 67 rooms are peppered through landscaped gardens, ensuring beauty awaits around every corner.",
            //   "photos" => [
            //     [
            //       "url" => "https://www.travelandleisure.com/thmb/B4xjGBOFnm7JhjUpF1Xr9ho1Ym4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/finca-cortesin-100-TOPHOTELSWB21-37fc310ac0454ebb81f7c46154e1da54.jpg"
            //     ]
            //   ]
            // ]
        ];

        Hotel::factory()->times(20)->create();

        $hotels = Hotel::all();

		for($i = 0;  $i < count($hotelsArr); ++$i) {
			$hotels[$i]->name = $hotelsArr[$i]['name'];
			$hotels[$i]->city = $hotelsArr[$i]['city'];
			$hotels[$i]->country = $hotelsArr[$i]['country'];
			$hotels[$i]->description = $hotelsArr[$i]['description'];
			$hotels[$i]->photos = json_encode($hotelsArr[$i]['photos']);
			$hotels[$i]->save();
		}
    }
}
