<?php

namespace App\Http\Controllers;
use App\Models\Vocabulary;
use Illuminate\Http\Request;

class VocabularyController extends Controller
{
    public function index()
    {
        $vocabularies = Vocabulary::all();
        return view('layout.vocabulary', compact('vocabularies'));
    }
}