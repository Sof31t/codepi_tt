<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('accueil');
    }

    public function getVille()
    {
        return DB::table('concerts')->select('ville')->distinct()->get();
    }

    public function getTags()
    {
        return DB::table('artistes')->select('tags')->distinct()->get();
    }

    public function getPrix()
    {
        return DB::table('concerts')->select('prix')->distinct()->get();
    }

    public function getFrom()
    {
        return DB::table('concerts')->select('date')->distinct()->get();
    }

    public function getTo()
    {
        return DB::table('concerts')->select('date')->distinct()->get();
    }

    
}
