<?php

namespace Database\Seeders;

use App\Models\Minimarket;
use Illuminate\Database\Seeder;

class MinimarketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mrkt1 = new Minimarket();
        $mrkt1->kode_produksi = "1234567890";
        $mrkt1->nama_barang = "indomie";
        $mrkt1->save();

        $mrkt2 = new Minimarket();
        $mrkt2->kode_produksi = "2134567890";
        $mrkt2->nama_barang = "Gulaku";
        $mrkt2->save();
    }
}
