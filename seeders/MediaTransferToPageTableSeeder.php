<?php

namespace Modules\Mediapress\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Mediapress\Entities\Media;

class MediaTransferToPageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $page = \Page::find(23);

        foreach ($page->children()->get() as $child)
        {
            $media = new Media();
            $media->media_type = 'news';
            $media->media_desc = '';
            $media->title = $child->title;
            $media->slug  = $child->slug;
            $media->description = $child->body;
            $media->release_at = \Carbon\Carbon::now();
            preg_match('#\((.*?)\)#', $media->title, $match);
            $media->brand      = isset($match[1]) ? $match[1] : 'Gazete';
            $media->status     = 1;
            $media->save();
            $media->files()->attach($child->files()->first());
        }

    }
}
