<?php

class PlaceSeeder extends Seeder
{
    public function run()
    {

        $typi_places = array(
            array('id'=>50,'address'=>'Av. des Millepertuis, 14 - 1070 Bruxelles','email'=>'','phone'=>'02 521 04 92','fax'=>'','website'=>'http://www.steinerschoolbrussel.be','image'=>null,'latitude'=>50.8135045,'longitude'=>4.2838474,'created_at'=>'2014-01-19 15:29:19','updated_at'=>'2014-01-19 15:29:19'),
            array('id'=>51,'address'=>'Paterdupierreuxlaan, 29 – 3080 Tervuren','email'=>'','phone'=>'','fax'=>'','website'=>'http://www.steinerschooltervuren.be','image'=>null,'latitude'=>50.8334817,'longitude'=>4.5308044,'created_at'=>'2014-01-19 15:29:51','updated_at'=>'2014-01-19 15:29:51'),
            array('id'=>52,'address'=>'La Ferme Blanche, Rue de la Quenique, 18 1490 Court St Etienne','email'=>'','phone'=>'010 61 20 64','fax'=>'','website'=>'http://www.ecole-steiner.be','image'=>null,'latitude'=>50.647135,'longitude'=>4.5863618999999,'created_at'=>'2014-01-19 15:30:31','updated_at'=>'2014-01-19 15:30:31'),
            array('id'=>53,'address'=>'Drève des Gendarmes, 45 - 1180 Bruxelles','email'=>'','phone'=>'02 375 26 96','fax'=>'','website'=>'http://www.ecoledecroly.be','image'=>null,'latitude'=>50.7975205,'longitude'=>4.3792691,'created_at'=>'2014-01-19 15:31:02','updated_at'=>'2014-01-19 15:31:02'),
            array('id'=>54,'address'=>'Avenue Hamoir, 31 - 1180 Bruxelles','email'=>'hamaide@freegates.be','phone'=>'02 374 78 90','fax'=>'','website'=>'http://www.ecolehamaide.be','image'=>null,'latitude'=>50.7978728,'longitude'=>4.3659198,'created_at'=>'2014-01-19 15:31:53','updated_at'=>'2014-01-19 15:31:53'),
            array('id'=>55,'address'=>'Av. Notre Dame, 40 - 1140 Bruxelles','email'=>'direction@clairvivre.be','phone'=>'02 247 63 65/66','fax'=>'','website'=>'http://www.clairvivre.be','image'=>null,'latitude'=>50.8708579,'longitude'=>4.3963941,'created_at'=>'2014-01-19 15:32:43','updated_at'=>'2014-01-19 15:32:43'),
            array('id'=>56,'address'=>'Place Govaert, 1 - 1160 Bruxelles','email'=>'paul.absil@autre-ecole.org','phone'=>'02 660 72 38','fax'=>'02 660 72 38','website'=>'http://www.autre-ecole.org','image'=>null,'latitude'=>50.8209748,'longitude'=>4.4275588,'created_at'=>'2014-01-19 15:33:19','updated_at'=>'2014-01-19 15:33:40'),
            array('id'=>57,'address'=>'Route de Renipont, 4 - 1380 Ohain-Lasne','email'=>'','phone'=>'02 633 66 52','fax'=>'','website'=>'http://www.acmontessorikids.com','image'=>null,'latitude'=>50.7013493,'longitude'=>4.4747397,'created_at'=>'2014-01-19 15:34:37','updated_at'=>'2014-01-19 15:34:37'),
            array('id'=>58,'address'=>'Rue Pergère, 117 - 1420 Braine l’Alleud','email'=>'info@montessorihouse.net','phone'=>'02 385 15 03','fax'=>'','website'=>'http://www.montessorihouse.net','image'=>null,'latitude'=>50.6918413,'longitude'=>4.3916243,'created_at'=>'2014-01-19 15:35:35','updated_at'=>'2014-01-19 15:35:35'),
            array('id'=>59,'address'=>'Avenue Dolez, 458B - 1180 Bruxelles','email'=>'catherine.vigreux@gmail.com','phone'=>'02 375 61 84','fax'=>'','website'=>'','image'=>null,'latitude'=>50.778884,'longitude'=>4.3556055,'created_at'=>'2014-01-19 15:37:39','updated_at'=>'2014-01-19 15:37:39'),
            array('id'=>60,'address'=>'Rotselaarlaan, 1 - 3080 Tervuren','email'=>'montessori-tervuren@online.be','phone'=>'02 767 63 60','fax'=>'02 767 63 60','website'=>'http://www.international-montessori.org','image'=>null,'latitude'=>50.8351968,'longitude'=>4.5278097,'created_at'=>'2014-01-19 15:39:22','updated_at'=>'2014-01-19 15:39:22'),
            array('id'=>61,'address'=>'Mechelsesteenweg, 79 1933 Sterrebeek','email'=>'','phone'=>'02 784 27 84','fax'=>'02 784 27 84','website'=>'http://www.international-montessori.org','image'=>null,'latitude'=>50.8534156,'longitude'=>4.5090345,'created_at'=>'2014-01-19 15:41:00','updated_at'=>'2014-01-19 15:41:00'),
            array('id'=>62,'address'=>'Molenweg, 4 1970 Wezembeek-Oppem','email'=>'','phone'=>'02 782 12 36','fax'=>'02 782 12 36','website'=>'http://www.international-montessori.org','image'=>null,'latitude'=>50.8537853,'longitude'=>4.495645,'created_at'=>'2014-01-19 15:42:25','updated_at'=>'2014-01-19 15:42:25'),
            array('id'=>63,'address'=>'Kleinenbergstraat, 97-99 1932 St. Stevens-Woluwe','email'=>'montessori-tervuren@online.be','phone'=>'02 767 63 60','fax'=>'02 767 63 60','website'=>'http://www.international-montessori.org','image'=>null,'latitude'=>50.8589568,'longitude'=>4.4462012,'created_at'=>'2014-01-19 15:43:25','updated_at'=>'2014-01-19 15:43:25'),
            array('id'=>64,'address'=>'Avenue Beau Séjour, 12 – 1410 Waterloo','email'=>'','phone'=>'02 354 00 33','fax'=>'02 351 50 99','website'=>'','image'=>null,'latitude'=>50.7254063,'longitude'=>4.3964999,'created_at'=>'2014-01-19 15:44:17','updated_at'=>'2014-01-19 15:44:17'),
            array('id'=>65,'address'=>'Av. Chapelle aux Champs, 67 - 1200 Bruxelles','email'=>'info@ecolesingelijn.be','phone'=>'02 770 06 22','fax'=>'02 770 03 48','website'=>'http://www.ecolesingelijn.be','image'=>null,'latitude'=>50.8505551,'longitude'=>4.4437341,'created_at'=>'2014-01-19 15:45:53','updated_at'=>'2014-01-19 15:46:08'),
            array('id'=>66,'address'=>'Rue du Melkriek, 3 - 1180 Bruxelles','email'=>'','phone'=>'02 376 11 76','fax'=>'','website'=>'http://www.ganenou.com','image'=>null,'latitude'=>50.7876959,'longitude'=>4.3259826,'created_at'=>'2014-01-19 15:46:37','updated_at'=>'2014-01-19 15:46:37'),
            array('id'=>67,'address'=>'Boulevard Poincaré, 67 - 1070 Bruxelles','email'=>'','phone'=>'02 523 63 36','fax'=>'','website'=>'http://www.maimo.be','image'=>null,'latitude'=>50.8416101,'longitude'=>4.3396683,'created_at'=>'2014-01-19 15:47:23','updated_at'=>'2014-01-19 15:47:23'),
            array('id'=>68,'address'=>'Avenue Molière, 123 1190 Bruxelles','email'=>'','phone'=>'02 347 37 19','fax'=>'','website'=>'http://www.beth-aviv.org','image'=>null,'latitude'=>50.816088,'longitude'=>4.3457602999999,'created_at'=>'2014-01-19 15:48:02','updated_at'=>'2014-01-19 15:48:16')
        );

        $typi_place_translations = array(
            array('title'=>'École Steiner','slug'=>'ecole-steiner','status'=>1,'place_id'=>50,'locale'=>'en','body'=>'','created_at'=>'2014-01-19 15:29:19','updated_at'=>'2014-01-19 15:29:19'),
            array('title'=>'Kristoffelschool','slug'=>'kristoffelschool','status'=>1,'place_id'=>51,'locale'=>'en','body'=>'','created_at'=>'2014-01-19 15:29:51','updated_at'=>'2014-01-19 15:29:51'),
            array('title'=>'Libre Ecole Rudolf Steiner','slug'=>'libre-ecole-rudolf-steiner','status'=>1,'place_id'=>52,'locale'=>'en','body'=>'','created_at'=>'2014-01-19 15:30:31','updated_at'=>'2014-01-19 15:30:31'),
            array('title'=>'École Decroly','slug'=>'ecole-decroly','status'=>1,'place_id'=>53,'locale'=>'en','body'=>'','created_at'=>'2014-01-19 15:31:02','updated_at'=>'2014-01-19 15:31:02'),
            array('title'=>'Ecole Hamaide','slug'=>'ecole-hamaide','status'=>1,'place_id'=>54,'locale'=>'en','body'=>'','created_at'=>'2014-01-19 15:31:53','updated_at'=>'2014-01-19 15:31:53'),
            array('title'=>'Clair-Vivre','slug'=>'clair-vivre','status'=>1,'place_id'=>55,'locale'=>'en','body'=>'','created_at'=>'2014-01-19 15:32:43','updated_at'=>'2014-01-19 15:32:43'),
            array('title'=>'L’autre école','slug'=>'l-autre-ecole','status'=>1,'place_id'=>56,'locale'=>'en','body'=>'','created_at'=>'2014-01-19 15:33:19','updated_at'=>'2014-01-19 15:33:19'),
            array('title'=>'A.C. Montessori Kids','slug'=>'ac-montessori-kids','status'=>1,'place_id'=>57,'locale'=>'en','body'=>'Ecole bilingue français-anglais de 1 an 1/2 à 9 ans qui accueille vos enfants dans un environnement adapté aux besoins de chacun dans un site rural et sécurisé.','created_at'=>'2014-01-19 15:34:37','updated_at'=>'2014-01-19 15:34:37'),
            array('title'=>'Montessori House Belgium','slug'=>'montessori-house-belgium','status'=>1,'place_id'=>58,'locale'=>'en','body'=>'3 classes, day nursery, nursery and primary. Ages 2 to 9.','created_at'=>'2014-01-19 15:35:35','updated_at'=>'2014-01-19 15:35:35'),
            array('title'=>'La Maison des Enfants Montessori','slug'=>'la-maison-des-enfants-montessori','status'=>1,'place_id'=>59,'locale'=>'en','body'=>'Established in 1994, The Children’s House Montessori school welcomes 2 1/2 to 6 year olds in a pleasant green setting. Bilingual English/ French Montessori education is offered in a multicultural family atmosphere. The school is organised to meet the children’s needs at each development stage and to provide a warm and secure community environment. It really is a preparation for life!','created_at'=>'2014-01-19 15:37:39','updated_at'=>'2014-01-19 15:37:39'),
            array('title'=>'The International Montessori School','slug'=>'the-international-montessori-school','status'=>1,'place_id'=>60,'locale'=>'en','body'=>'Catering to children aged 3 to 16 years old. Bilingual English-French environments staffed by 2 teachers per classroom. International Baccalaureate Middle School Programme with additional Dutch and German for children aged 11 to 16. Children receive an individualised approach, which stimulates personal growth and responsibility towards self and others. Every child in the Primary and Middle School plays a musical instrument. Emphasis on an integrated curriculum, motivation and joy in learning. School bus and After School Hour programme available.','created_at'=>'2014-01-19 15:39:22','updated_at'=>'2014-01-19 15:39:22'),
            array('title'=>'International Montessori Children’s Centre','slug'=>'international-montessori-children-s-centre','status'=>1,'place_id'=>61,'locale'=>'en','body'=>'From 2 1⁄2 to 6 years old. Part-time and full-time programmes available. Individualised education in bilingual English/French environments. Emphasis on the development of self esteem and independence. Caring environment with gardens and playground. Door-to-door bus service available.','created_at'=>'2014-01-19 15:41:00','updated_at'=>'2014-01-19 15:41:00'),
            array('title'=>'International Montessori « Learning Centre »','slug'=>'international-montessori-learning-centre','status'=>1,'place_id'=>62,'locale'=>'en','body'=>'Children of all nationalities between the ages of 2 1⁄2 to 6. Attractive bilingual classrooms in English/French with 2 teachers per class. Children learn independently and in small groups. Classrooms offer a large variety of concrete activities helping children to absorb languages and concepts. Optional instruction in violin and piano. Gym and outdoor area for daily physical activities.','created_at'=>'2014-01-19 15:42:25','updated_at'=>'2014-01-19 15:42:25'),
            array('title'=>'International Montessori ‘Hof Kleinenberg’','slug'=>'international-montessori-hof-kleinenberg','status'=>1,'place_id'=>63,'locale'=>'en','body'=>'From 2 to 16 years old. Bilingual English/French environments in a completely ecologically renovated historic farm built in 1651. Large outdoor play area. Door-to-door bus service. After-school programme hours available till 6 pm. International Baccalaureate Middle Year Programme (MYP) offered.','created_at'=>'2014-01-19 15:43:25','updated_at'=>'2014-01-19 15:43:25'),
            array('title'=>'The European Montessori School','slug'=>'the-european-montessori-school','status'=>1,'place_id'=>64,'locale'=>'en','body'=>'Bilingual English-French primary school from 18 months.','created_at'=>'2014-01-19 15:44:17','updated_at'=>'2014-01-19 15:44:17'),
            array('title'=>'Singelijn','slug'=>'singelijn','status'=>1,'place_id'=>65,'locale'=>'en','body'=>'Traditional educational structure, but with a constant search for new teaching methods. Achieves excellent results.','created_at'=>'2014-01-19 15:45:53','updated_at'=>'2014-01-19 15:45:53'),
            array('title'=>'Athénée Ganenou','slug'=>'athenee-ganenou','status'=>1,'place_id'=>66,'locale'=>'en','body'=>'','created_at'=>'2014-01-19 15:46:37','updated_at'=>'2014-01-19 15:46:37'),
            array('title'=>'Athénée Maïmonide de Bruxelles','slug'=>'athenee-maimonide-de-bruxelles','status'=>1,'place_id'=>67,'locale'=>'en','body'=>'From 3 months to 18 years old.','created_at'=>'2014-01-19 15:47:23','updated_at'=>'2014-01-19 15:47:23'),
            array('title'=>'École Beth Aviv','slug'=>'ecole-beth-aviv','status'=>1,'place_id'=>68,'locale'=>'en','body'=>'Pre-school and primary school.','created_at'=>'2014-01-19 15:48:02','updated_at'=>'2014-01-19 15:48:02'),
            array('title'=>'École Steiner','slug'=>'ecole-steiner','status'=>1,'place_id'=>50,'locale'=>'fr','body'=>'','created_at'=>'2014-01-19 15:29:19','updated_at'=>'2014-01-19 15:29:19'),
            array('title'=>'Kristoffelschool','slug'=>'kristoffelschool','status'=>1,'place_id'=>51,'locale'=>'fr','body'=>'','created_at'=>'2014-01-19 15:29:51','updated_at'=>'2014-01-19 15:29:51'),
            array('title'=>'Libre Ecole Rudolf Steiner','slug'=>'libre-ecole-rudolf-steiner','status'=>1,'place_id'=>52,'locale'=>'fr','body'=>'','created_at'=>'2014-01-19 15:30:31','updated_at'=>'2014-01-19 15:30:31'),
            array('title'=>'École Decroly','slug'=>'ecole-decroly','status'=>1,'place_id'=>53,'locale'=>'fr','body'=>'','created_at'=>'2014-01-19 15:31:02','updated_at'=>'2014-01-19 15:31:02'),
            array('title'=>'Ecole Hamaide','slug'=>'ecole-hamaide','status'=>1,'place_id'=>54,'locale'=>'fr','body'=>'','created_at'=>'2014-01-19 15:31:53','updated_at'=>'2014-01-19 15:31:53'),
            array('title'=>'Clair-Vivre','slug'=>'clair-vivre','status'=>1,'place_id'=>55,'locale'=>'fr','body'=>'','created_at'=>'2014-01-19 15:32:43','updated_at'=>'2014-01-19 15:32:43'),
            array('title'=>'L’autre école','slug'=>'l-autre-ecole','status'=>1,'place_id'=>56,'locale'=>'fr','body'=>'','created_at'=>'2014-01-19 15:33:19','updated_at'=>'2014-01-19 15:33:19'),
            array('title'=>'A.C. Montessori Kids','slug'=>'ac-montessori-kids','status'=>1,'place_id'=>57,'locale'=>'fr','body'=>'Ecole bilingue français-anglais de 1 an 1/2 à 9 ans qui accueille vos enfants dans un environnement adapté aux besoins de chacun dans un site rural et sécurisé.','created_at'=>'2014-01-19 15:34:37','updated_at'=>'2014-01-19 15:34:37'),
            array('title'=>'Montessori House Belgium','slug'=>'montessori-house-belgium','status'=>1,'place_id'=>58,'locale'=>'fr','body'=>'3 classes, day nursery, nursery and primary. Ages 2 to 9.','created_at'=>'2014-01-19 15:35:35','updated_at'=>'2014-01-19 15:35:35'),
            array('title'=>'La Maison des Enfants Montessori','slug'=>'la-maison-des-enfants-montessori','status'=>1,'place_id'=>59,'locale'=>'fr','body'=>'Established in 1994, The Children’s House Montessori school welcomes 2 1/2 to 6 year olds in a pleasant green setting. Bilingual English/ French Montessori education is offered in a multicultural family atmosphere. The school is organised to meet the children’s needs at each development stage and to provide a warm and secure community environment. It really is a preparation for life!','created_at'=>'2014-01-19 15:37:39','updated_at'=>'2014-01-19 15:37:39'),
            array('title'=>'The International Montessori School','slug'=>'the-international-montessori-school','status'=>1,'place_id'=>60,'locale'=>'fr','body'=>'Catering to children aged 3 to 16 years old. Bilingual English-French environments staffed by 2 teachers per classroom. International Baccalaureate Middle School Programme with additional Dutch and German for children aged 11 to 16. Children receive an individualised approach, which stimulates personal growth and responsibility towards self and others. Every child in the Primary and Middle School plays a musical instrument. Emphasis on an integrated curriculum, motivation and joy in learning. School bus and After School Hour programme available.','created_at'=>'2014-01-19 15:39:22','updated_at'=>'2014-01-19 15:39:22'),
            array('title'=>'International Montessori Children’s Centre','slug'=>'international-montessori-children-s-centre','status'=>1,'place_id'=>61,'locale'=>'fr','body'=>'From 2 1⁄2 to 6 years old. Part-time and full-time programmes available. Individualised education in bilingual English/French environments. Emphasis on the development of self esteem and independence. Caring environment with gardens and playground. Door-to-door bus service available.','created_at'=>'2014-01-19 15:41:00','updated_at'=>'2014-01-19 15:41:00'),
            array('title'=>'International Montessori « Learning Centre »','slug'=>'international-montessori-learning-centre','status'=>1,'place_id'=>62,'locale'=>'fr','body'=>'Children of all nationalities between the ages of 2 1⁄2 to 6. Attractive bilingual classrooms in English/French with 2 teachers per class. Children learn independently and in small groups. Classrooms offer a large variety of concrete activities helping children to absorb languages and concepts. Optional instruction in violin and piano. Gym and outdoor area for daily physical activities.','created_at'=>'2014-01-19 15:42:25','updated_at'=>'2014-01-19 15:42:25'),
            array('title'=>'International Montessori ‘Hof Kleinenberg’','slug'=>'international-montessori-hof-kleinenberg','status'=>1,'place_id'=>63,'locale'=>'fr','body'=>'From 2 to 16 years old. Bilingual English/French environments in a completely ecologically renovated historic farm built in 1651. Large outdoor play area. Door-to-door bus service. After-school programme hours available till 6 pm. International Baccalaureate Middle Year Programme (MYP) offered.','created_at'=>'2014-01-19 15:43:25','updated_at'=>'2014-01-19 15:43:25'),
            array('title'=>'The European Montessori School','slug'=>'the-european-montessori-school','status'=>1,'place_id'=>64,'locale'=>'fr','body'=>'Bilingual English-French primary school from 18 months.','created_at'=>'2014-01-19 15:44:17','updated_at'=>'2014-01-19 15:44:17'),
            array('title'=>'Singelijn','slug'=>'singelijn','status'=>1,'place_id'=>65,'locale'=>'fr','body'=>'Traditional educational structure, but with a constant search for new teaching methods. Achieves excellent results.','created_at'=>'2014-01-19 15:45:53','updated_at'=>'2014-01-19 15:45:53'),
            array('title'=>'Athénée Ganenou','slug'=>'athenee-ganenou','status'=>1,'place_id'=>66,'locale'=>'fr','body'=>'','created_at'=>'2014-01-19 15:46:37','updated_at'=>'2014-01-19 15:46:37'),
            array('title'=>'Athénée Maïmonide de Bruxelles','slug'=>'athenee-maimonide-de-bruxelles','status'=>1,'place_id'=>67,'locale'=>'fr','body'=>'From 3 months to 18 years old.','created_at'=>'2014-01-19 15:47:23','updated_at'=>'2014-01-19 15:47:23'),
            array('title'=>'École Beth Aviv','slug'=>'ecole-beth-aviv','status'=>1,'place_id'=>68,'locale'=>'fr','body'=>'Pre-school and primary school.','created_at'=>'2014-01-19 15:48:02','updated_at'=>'2014-01-19 15:48:02'),
            array('title'=>'École Steiner','slug'=>'ecole-steiner','status'=>1,'place_id'=>50,'locale'=>'nl','body'=>'','created_at'=>'2014-01-19 15:29:19','updated_at'=>'2014-01-19 15:29:19'),
            array('title'=>'Kristoffelschool','slug'=>'kristoffelschool','status'=>1,'place_id'=>51,'locale'=>'nl','body'=>'','created_at'=>'2014-01-19 15:29:51','updated_at'=>'2014-01-19 15:29:51'),
            array('title'=>'Libre Ecole Rudolf Steiner','slug'=>'libre-ecole-rudolf-steiner','status'=>1,'place_id'=>52,'locale'=>'nl','body'=>'','created_at'=>'2014-01-19 15:30:31','updated_at'=>'2014-01-19 15:30:31'),
            array('title'=>'École Decroly','slug'=>'ecole-decroly','status'=>1,'place_id'=>53,'locale'=>'nl','body'=>'','created_at'=>'2014-01-19 15:31:02','updated_at'=>'2014-01-19 15:31:02'),
            array('title'=>'Ecole Hamaide','slug'=>'ecole-hamaide','status'=>1,'place_id'=>54,'locale'=>'nl','body'=>'','created_at'=>'2014-01-19 15:31:53','updated_at'=>'2014-01-19 15:31:53'),
            array('title'=>'Clair-Vivre','slug'=>'clair-vivre','status'=>1,'place_id'=>55,'locale'=>'nl','body'=>'','created_at'=>'2014-01-19 15:32:43','updated_at'=>'2014-01-19 15:32:43'),
            array('title'=>'L’autre école','slug'=>'l-autre-ecole','status'=>1,'place_id'=>56,'locale'=>'nl','body'=>'','created_at'=>'2014-01-19 15:33:19','updated_at'=>'2014-01-19 15:33:19'),
            array('title'=>'A.C. Montessori Kids','slug'=>'ac-montessori-kids','status'=>1,'place_id'=>57,'locale'=>'nl','body'=>'Ecole bilingue français-anglais de 1 an 1/2 à 9 ans qui accueille vos enfants dans un environnement adapté aux besoins de chacun dans un site rural et sécurisé.','created_at'=>'2014-01-19 15:34:37','updated_at'=>'2014-01-19 15:34:37'),
            array('title'=>'Montessori House Belgium','slug'=>'montessori-house-belgium','status'=>1,'place_id'=>58,'locale'=>'nl','body'=>'3 classes, day nursery, nursery and primary. Ages 2 to 9.','created_at'=>'2014-01-19 15:35:35','updated_at'=>'2014-01-19 15:35:35'),
            array('title'=>'La Maison des Enfants Montessori','slug'=>'la-maison-des-enfants-montessori','status'=>1,'place_id'=>59,'locale'=>'nl','body'=>'Established in 1994, The Children’s House Montessori school welcomes 2 1/2 to 6 year olds in a pleasant green setting. Bilingual English/ French Montessori education is offered in a multicultural family atmosphere. The school is organised to meet the children’s needs at each development stage and to provide a warm and secure community environment. It really is a preparation for life!','created_at'=>'2014-01-19 15:37:39','updated_at'=>'2014-01-19 15:37:39'),
            array('title'=>'The International Montessori School','slug'=>'the-international-montessori-school','status'=>1,'place_id'=>60,'locale'=>'nl','body'=>'Catering to children aged 3 to 16 years old. Bilingual English-French environments staffed by 2 teachers per classroom. International Baccalaureate Middle School Programme with additional Dutch and German for children aged 11 to 16. Children receive an individualised approach, which stimulates personal growth and responsibility towards self and others. Every child in the Primary and Middle School plays a musical instrument. Emphasis on an integrated curriculum, motivation and joy in learning. School bus and After School Hour programme available.','created_at'=>'2014-01-19 15:39:22','updated_at'=>'2014-01-19 15:39:22'),
            array('title'=>'International Montessori Children’s Centre','slug'=>'international-montessori-children-s-centre','status'=>1,'place_id'=>61,'locale'=>'nl','body'=>'From 2 1⁄2 to 6 years old. Part-time and full-time programmes available. Individualised education in bilingual English/French environments. Emphasis on the development of self esteem and independence. Caring environment with gardens and playground. Door-to-door bus service available.','created_at'=>'2014-01-19 15:41:00','updated_at'=>'2014-01-19 15:41:00'),
            array('title'=>'International Montessori « Learning Centre »','slug'=>'international-montessori-learning-centre','status'=>1,'place_id'=>62,'locale'=>'nl','body'=>'Children of all nationalities between the ages of 2 1⁄2 to 6. Attractive bilingual classrooms in English/French with 2 teachers per class. Children learn independently and in small groups. Classrooms offer a large variety of concrete activities helping children to absorb languages and concepts. Optional instruction in violin and piano. Gym and outdoor area for daily physical activities.','created_at'=>'2014-01-19 15:42:25','updated_at'=>'2014-01-19 15:42:25'),
            array('title'=>'International Montessori ‘Hof Kleinenberg’','slug'=>'international-montessori-hof-kleinenberg','status'=>1,'place_id'=>63,'locale'=>'nl','body'=>'From 2 to 16 years old. Bilingual English/French environments in a completely ecologically renovated historic farm built in 1651. Large outdoor play area. Door-to-door bus service. After-school programme hours available till 6 pm. International Baccalaureate Middle Year Programme (MYP) offered.','created_at'=>'2014-01-19 15:43:25','updated_at'=>'2014-01-19 15:43:25'),
            array('title'=>'The European Montessori School','slug'=>'the-european-montessori-school','status'=>1,'place_id'=>64,'locale'=>'nl','body'=>'Bilingual English-French primary school from 18 months.','created_at'=>'2014-01-19 15:44:17','updated_at'=>'2014-01-19 15:44:17'),
            array('title'=>'Singelijn','slug'=>'singelijn','status'=>1,'place_id'=>65,'locale'=>'nl','body'=>'Traditional educational structure, but with a constant search for new teaching methods. Achieves excellent results.','created_at'=>'2014-01-19 15:45:53','updated_at'=>'2014-01-19 15:45:53'),
            array('title'=>'Athénée Ganenou','slug'=>'athenee-ganenou','status'=>1,'place_id'=>66,'locale'=>'nl','body'=>'','created_at'=>'2014-01-19 15:46:37','updated_at'=>'2014-01-19 15:46:37'),
            array('title'=>'Athénée Maïmonide de Bruxelles','slug'=>'athenee-maimonide-de-bruxelles','status'=>1,'place_id'=>67,'locale'=>'nl','body'=>'From 3 months to 18 years old.','created_at'=>'2014-01-19 15:47:23','updated_at'=>'2014-01-19 15:47:23'),
            array('title'=>'École Beth Aviv','slug'=>'ecole-beth-aviv','status'=>1,'place_id'=>68,'locale'=>'nl','body'=>'Pre-school and primary school.','created_at'=>'2014-01-19 15:48:02','updated_at'=>'2014-01-19 15:48:02'),
        );

        DB::table('places')->insert( $typi_places );
        DB::table('place_translations')->insert( $typi_place_translations );

    }

}
