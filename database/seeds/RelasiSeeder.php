<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Hobi;
use App\Mahasiswa;
use App\Wali;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

        // membuat data dosen
        $dosen = Dosen::create(array(
        	'nipd' =>'1234567890',
        	'nama' =>'Abdul Musthafa'
        ));
        $this->command->info('Data Dosen Telah Di Isi');

        // Membuat Data Mahasiswa
        $irsyal = Mahasiswa::create(array(
        	'nama' => 'Syahrul',
        	'nim' => '101010',
        	'id_dosen' => $dosen->id

        ));

        $Ntut = Mahasiswa::create(array(
        	'nama' => 'Entut Marsinah',
        	'nim' => '1010102',
        	'id_dosen' => $dosen->id
        ));

        $Tcih = Mahasiswa::create(array(
        	'nama' => 'Icih Bersin',
        	'nim' => '10101103',
        	'id_dosen' => $dosen->id
        ));

        $this->command->info('Data Mahasiswa Berhasil Di Isi');

        // Membuat data wali
        $dadang = Wali::create(array(
        	'nama' => 'Dadang Peloy',
        	'id_mahasiswa' =>$irsyal->id
        ));
         $ucup = Wali::create(array(
        	'nama' => 'Ucup Mambo',
        	'id_mahasiswa' =>$Ntut->id
        ));
          $agus = Wali::create(array(
        	'nama' => 'Agus Pepsoden',
        	'id_mahasiswa' =>$Tcih->id
        ));
          $this->command->info('Data Wali Berhasil Di Isi');

         // membuat data hobi
          $melukis_langit = Hobi::create(array('hobi' => 'Melukis Langit'));
          $mandi_hujan = Hobi::create(array('hobi' => 'Mandi Hujan'));
          $ambyar = Hobi::create(array('hobi' => 'Stalking Mantan'));

          $irsyal->hobi()->attach($melukis_langit->id);
          $irsyal->hobi()->attach($ambyar->id);
          $Ntut->hobi()->attach($mandi_hujan->id);
          $Tcih->hobi()->attach($ambyar->id);
          //attach ->untuk melampirkan data baru ke table pivot(bantuan)

          $this->command->info('Mahasiswa Beserta Hobi Telah Di Isi');


    }
}
