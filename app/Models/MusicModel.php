<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MusicModel extends Model
{
    public function dataArtis()
    {
        return DB::table('artist')->get();
    }

    public function dataAlbum()
    {
        return DB::table('album')->get();
    }

    public function dataTrack()
    {
        return DB::table('track')->get();
    }

    public function dataPlayed()
    {
        return DB::table('played')->get();
    }
}
