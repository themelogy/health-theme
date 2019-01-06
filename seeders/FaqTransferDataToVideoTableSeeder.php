<?php

namespace Modules\Faq\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Faq\Entities\Faq;
use Modules\Video\Entities\Media;
use Modules\Video\Repositories\MediaRepository;

class FaqTransferDataToVideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $faqs = app(Faq::class)->get();
        $i = 0;
        $media = app(MediaRepository::class);
        foreach ($faqs as $faq) {
            try {
                $media->create([
                    'title' => $faq->title,
                    'slug'  => $faq->slug,
                    'description' => $faq->description,
                    'category_id' => 1,
                    'url' => $faq->media,
                    'status' => $faq->status,
                    'sorting' => $i++,
                ]);
                echo $faq->title . ' created '.PHP_EOL;
            }
            catch (\Exception $exception)
            {
                continue;
            }
        }
    }
}
