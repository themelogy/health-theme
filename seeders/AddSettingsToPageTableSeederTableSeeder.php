<?php

namespace Modules\Mediapress\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AddSettingsToPageTableSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $pages = \Page::all();

        foreach ($pages as $page) {
            $page->update([
                'settings->show_image'     => 1,
                'settings->image_mode'     => 'resize',
                'settings->image_position' => 'left'
            ]);
        }
    }
}
