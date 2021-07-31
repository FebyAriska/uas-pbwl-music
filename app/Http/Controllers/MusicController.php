<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MusicModel;

class MusicController extends Controller
{
    public function __construct()
    {
        $this->MusicModel = new MusicModel();
    }
    public function index()
    {
        $data = [
            'artis' => $this->MusicModel->dataArtis(),
            'album' => $this->MusicModel->dataAlbum(),
            'track' => $this->MusicModel->dataTrack(),
            'played' => $this->MusicModel->dataPlayed()
        ];
        return view('v_music', $data);
    }
}
