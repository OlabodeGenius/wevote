<?php

use Illuminate\Database\Seeder;

class seed_parties extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parties = array(
            array('id' => '1','photo' => 'apc.jpg','name' => 'APC','created_at' => '2018-06-30 13:12:15','updated_at' => '2018-06-30 13:12:15'),
            array('id' => '2','photo' => 'pdp.jpg','name' => 'PDP','created_at' => '2018-06-30 13:12:15','updated_at' => '2018-06-30 13:12:15'),
            array('id' => '3','photo' => 'aa.jpg','name' => 'AA','created_at' => '2018-06-30 13:12:15','updated_at' => '2018-06-30 13:12:15'),
            array('id' => '4','photo' => 'accord.jpg','name' => 'ACCORD','created_at' => '2018-06-30 13:12:15','updated_at' => '2018-06-30 13:12:15'),
            array('id' => '5','photo' => 'acd.jpg','name' => 'ACD','created_at' => '2018-06-30 13:12:15','updated_at' => '2018-06-30 13:12:15'),
            array('id' => '6','photo' => 'acpn.jpg','name' => 'ACPN','created_at' => '2018-06-30 13:12:15','updated_at' => '2018-06-30 13:12:15'),
            array('id' => '7','photo' => 'ad.jpg','name' => 'AD','created_at' => '2018-06-30 13:12:15','updated_at' => '2018-06-30 13:12:15'),
            array('id' => '8','photo' => 'adc.jpg','name' => 'ADC','created_at' => '2018-06-30 13:12:15','updated_at' => '2018-06-30 13:12:15'),
            array('id' => '9','photo' => 'adp.jpg','name' => 'ADP','created_at' => '2018-06-30 13:12:15','updated_at' => '2018-06-30 13:12:15'),
            array('id' => '10','photo' => 'apa.jpg','name' => 'APA','created_at' => '2018-06-30 13:12:15','updated_at' => '2018-06-30 13:12:15'),
            array('id' => '11','photo' => 'apga.jpg','name' => 'APGA','created_at' => '2018-06-30 13:12:15','updated_at' => '2018-06-30 13:12:15'),
            array('id' => '12','photo' => 'dpc.jpg','name' => 'DPC','created_at' => '2018-06-30 13:12:15','updated_at' => '2018-06-30 13:12:15'),
            array('id' => '13','photo' => 'fdp.jpg','name' => 'FDP','created_at' => '2018-06-30 13:12:15','updated_at' => '2018-06-30 13:12:15'),
            array('id' => '14','photo' => 'kowa.jpg','name' => 'KOWA','created_at' => '2018-06-30 13:12:15','updated_at' => '2018-06-30 13:12:15'),
            array('id' => '15','photo' => 'lp.jpg','name' => 'LP','created_at' => '2018-06-30 13:12:15','updated_at' => '2018-06-30 13:12:15'),
            array('id' => '16','photo' => 'mppp.jpg','name' => 'MPPP','created_at' => '2018-06-30 13:12:15','updated_at' => '2018-06-30 13:12:15'),
            array('id' => '17','photo' => 'nnpp.jpg','name' => 'NNPP','created_at' => '2018-06-30 13:12:15','updated_at' => '2018-06-30 13:12:15'),
            array('id' => '18','photo' => 'ppp.jpg','name' => 'PPP','created_at' => '2018-06-30 13:12:15','updated_at' => '2018-06-30 13:12:15'),
            array('id' => '19','photo' => 'sdp.jpg','name' => 'SDP','created_at' => '2018-06-30 13:12:15','updated_at' => '2018-06-30 13:12:15'),
            array('id' => '20','photo' => 'ydp.jpg','name' => 'YDP','created_at' => '2018-06-30 13:12:15','updated_at' => '2018-06-30 13:12:15'),

          
        );

        $insert = DB::table('parties')->insert($parties);
    }
}
