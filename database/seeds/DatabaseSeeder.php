<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'id' =>1,
            'role_id'=>2,
            'name' => 'Dominik1810',
            'email' => 'dominik.al.burkert@gmail.com',
            'password' => bcrypt('derder'),
            'avatar' => NULL,
            'firstName' => 'Dominik',
            'lastName' => 'Burkert',
            'mobile' => '0124553952',
            'geburtsdatum' => '1997'.'10'.'18',
            'ort' => 'Spaichingen',
            'geschlecht' => 'male',
            'strasse' => 'Auf Michelfeld 7',
            'plz' => 78549,
            'created_at' => NOW(),
            'updated_at' => NOW(),


        ]);
        DB::table('users')->insert([
            'id' =>2,
            'role_id'=>2,
            'name' => 'Sedrik17',
            'email' => 'sedrik.cirzel@gmail.com',
            'password' => bcrypt('passwort'),
            'avatar' =>NULL,
            'firstName' => 'Sedrik',
            'lastName' => 'Cirzel',
            'mobile' => '110',
            'geburtsdatum' => '1998'.'07'.'17',
            'ort' => 'Spaichingen',
            'geschlecht' => 'male',
            'strasse' => 'Kastanienweg 17',
            'plz' => 78549,
            'created_at' => NOW(),
            'updated_at' => NOW(),


        ]);
        DB::table('users')->insert([
            'id' =>3,
            'role_id'=>2,
            'name' => 'M.Eigelsperger',
            'email' => 'markus.eigelsperger@htwg-konstanz.de',
            'password' => bcrypt('admin'),
            'avatar' =>NULL,
            'firstName' => 'Markus',
            'lastName' => 'Eigelsperger',
            'mobile' => '110',
            'geburtsdatum' => NULL,
            'ort' => 'Konstanz',
            'geschlecht' => 'male',
            'strasse' => 'Rheingutstrasse',
            'plz' => 78546,
            'created_at' => NOW(),
            'updated_at' => NOW(),


        ]);
        DB::table('users')->insert([
            'id' =>4,
            'role_id'=>1,
            'name' => 'M.Giretti',
            'email' => 'marco.giretti@htwg-konstanz.de',
            'password' => bcrypt('passwort'),
            'avatar' =>NULL,
            'firstName' => 'Marco',
            'lastName' => 'Giretti',
            'mobile' => '01769058051',
            'geburtsdatum' => '1996'.'07'.'08',
            'ort' => 'Trossingen',
            'geschlecht' => 'male',
            'strasse' => 'Hegaustrasse 23',
            'plz' => 78546,
            'created_at' => NOW(),
            'updated_at' => NOW(),


        ]);

        //Veranstaltungen erstellen
            DB::table('veranstaltungen')->insert([
            'id' =>1,
            'Name' => '22. Geburtstag',
            'Ort' => 'Trossingen',
            'Genre' => 'Party',
            'Veranstalter' => 'M.Giretti',
            'Datum' => '2018'.'07'.'08',
        ]);

        DB::table('teilnahme')->insert([
            'id' =>1,
            'VeranstaltungsID' => 1,
            'name' => 'M.Giretti',
            'antwort' => 0,
        ]);
        DB::table('teilnahme')->insert([
            'id' =>2,
            'VeranstaltungsID' => 1,
            'name' => 'Dominik1810',
            'antwort' => 1,
        ]);
        DB::table('teilnahme')->insert([
            'id' =>3,
            'VeranstaltungsID' => 1,
            'name' => 'Sedrik17',
            'antwort' => 0,
        ]);
        DB::table('polls')->insert([
            'pollid' =>1,
            'Titel' => 'Wo wollt ihr hin?',
            'User' => 'M.Giretti',
            'VerID' => 1,
        ]);
        DB::table('comments')->insert([
            'Commentid' =>1,
            'Veranstaltungsid' => 1,
            'Username' => 'Dominik1810',
            'Comment' => 'kann leider nicht kommen ',
            'created_at' =>'2018'.'07'.'01',
        ]);
        DB::table('comments')->insert([
        'Commentid' =>3,
        'Veranstaltungsid' => 1,
        'Username' => 'Sedrik17',
        'Comment' => 'ich bin dabei!',
        'created_at' =>'2018'.'07'.'03',
    ]);
        DB::table('comments')->insert([
            'Commentid' =>2,
            'Veranstaltungsid' => 1,
            'Username' => 'M.Giretti',
            'Comment' => 'Schade!',
            'created_at' =>'2018'.'07'.'02',
        ]);
        DB::table('options')->insert([
        'optionid' =>1,
        'option' => 1,
        'VerID' => 1,
        'Name' => 'Freibad',
    ]);
        DB::table('options')->insert([
            'optionid' =>2,
            'option' => 2,
            'VerID' => 1,
            'Name' => 'Berrys',
        ]);
        DB::table('options')->insert([
            'optionid' =>3,
            'option' => 3,
            'VerID' => 1,
            'Name' => 'Kino',
        ]);
        DB::table('options')->insert([
            'optionid' =>4,
            'option' => 4,
            'VerID' => 1,
            'Name' => 'Pizza essen',
        ]);
        DB::table('like')->insert([
            'LikeID' =>1,
            'VeranstaltungID' => 1,
            'optionID' => 4,
            'Username' => 'M.Giretti',
        ]);
        DB::table('like')->insert([
            'LikeID' =>2,
            'VeranstaltungID' => 1,
            'optionID' => 4,
            'Username' => 'Sedrik17',
        ]);


        //  DB::insert("INSERT INTO users VALUES(1,2, 'Dominik Burkert', 'dominik.al.burkert@gmail.com',bcrypt('secret'),NOW(),NOW())");




        DB::table('veranstaltungen')->insert([
            'id' =>2,
            'Name' => 'Meisterfeier',
            'Ort' => 'Spaichingen',
            'Genre' => 'Party',
            'Veranstalter' => 'Sedrik17',
            'Datum' => '2018'.'07'.'10',
        ]);

        DB::table('teilnahme')->insert([
            'id' =>4,
            'VeranstaltungsID' => 2,
            'name' => 'Sedrik17',
            'antwort' => 0,
        ]);
        DB::table('teilnahme')->insert([
            'id' =>5,
            'VeranstaltungsID' => 2,
            'name' => 'Dominik1810',
            'antwort' => 0,
        ]);
        DB::table('teilnahme')->insert([
            'id' =>6,
            'VeranstaltungsID' => 2,
            'name' => 'M.Giretti',
            'antwort' => 0,
        ]);
        DB::table('polls')->insert([
            'pollid' =>2,
            'Titel' => 'Welches Fleisch wollt ihr?',
            'User' => 'Sedrik17',
            'VerID' => 2,
        ]);
        DB::table('comments')->insert([
            'Commentid' =>5,
            'Veranstaltungsid' => 2,
            'Username' => 'Dominik1810',
            'Comment' => 'gibts auch was anderes als Pute oder Schwein?',
            'created_at' =>'2018'.'07'.'02',
        ]);
        DB::table('comments')->insert([
            'Commentid' =>6,
            'Veranstaltungsid' => 2,
            'Username' => 'Sedrik17',
            'Comment' => 'ne gibts nicht.Wenn du was anderes willst, musst es dir selbst mitbringen.',
            'created_at' =>'2018'.'07'.'03',
        ]);
        DB::table('comments')->insert([
            'Commentid' =>7,
            'Veranstaltungsid' => 2,
            'Username' => 'Dominik1810',
            'Comment' => 'ok. Dann nehm ich noch Hähnchen mit!',
            'created_at' =>'2018'.'07'.'05',
        ]);
        DB::table('options')->insert([
            'optionid' =>5,
            'option' => 1,
            'VerID' => 2,
            'Name' => 'Pute',
        ]);
        DB::table('options')->insert([
            'optionid' =>6,
            'option' => 2,
            'VerID' => 2,
            'Name' => 'Schwein',
        ]);

        DB::table('like')->insert([
            'LikeID' =>3,
            'VeranstaltungID' => 2,
            'optionID' => 1,
            'Username' => 'Sedrik17',
        ]);
        DB::table('like')->insert([
            'LikeID' =>4,
            'VeranstaltungID' => 2,
            'optionID' => 1,
            'Username' => 'Dominik1810',
        ]);
        DB::table('like')->insert([
            'LikeID' =>5,
            'VeranstaltungID' => 2,
            'optionID' => 2,
            'Username' => 'M.Giretti',
        ]);






        DB::table('veranstaltungen')->insert([
            'id' =>3,
            'Name' => 'ALDA Prüfung',
            'Ort' => 'Konstanz',
            'Genre' => 'Sonstige',
            'Veranstalter' => 'M.Giretti',
            'Datum' => '2018'.'07'.'04',
        ]);










    }
}
