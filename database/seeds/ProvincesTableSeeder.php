<?php

use App\Province;
use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $provinceList = config('province');

        foreach($provinceList as $province) {
            $newProvince = new Province();
            $newProvince->code = $province['code'];
            $newProvince->name = $province['name'];
            $newProvince->save();
        }

    }
}
