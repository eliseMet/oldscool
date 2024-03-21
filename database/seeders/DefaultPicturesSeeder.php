<?php

namespace Database\Seeders;

use App\Models\DefaultProfileImage;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class DefaultPicturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $directory = storage_path('app/defaultProfilePictures');

        if (File::isDirectory($directory)) {

            $files = File::files($directory);

            foreach ($files as $file) {

                $filename = pathinfo($file, PATHINFO_FILENAME);
                $basename = pathinfo($file, PATHINFO_BASENAME);

                $randomfilename = Str::random(20);
                $extension = pathinfo($file, PATHINFO_EXTENSION);

                $destination = storage_path('app/uploads/' . $randomfilename . "." . $extension);
                File::copy($file, $destination);

                $image = Image::create([
                    'url' => $randomfilename . "." . $extension,
                    'name' => $randomfilename,
                    'alt' => "photo de profil",
                ]);

                $defaultProfilePicture = DefaultProfileImage::create([
                    'image_id' => $image->id,
                ]);

                $this->command->info("image $filename $image->id created");
            }
        }
    }
}
