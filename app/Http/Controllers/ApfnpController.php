<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class ApfnpController extends Controller
{
    public function index()
    {
        //
    }

    public function quiSommesNous()
    {
        return view('pages.qui_sommes_nous');
    }

    public function partenaire()
    {
        return view('pages.partenaire');
    }

    public function activite()
    {
       return view('pages.activite');
    }

    public function projetEnCours()
    {
        return view('pages.projet_en_cours');
    }

    public function projetExecute()
    {
        return view('pages.projet_execute');
    }

    public function ressourceGalerie()
    {
        return view('pages.galerie');
    }

    public function ressourceVideo()
    {
        return view('pages.video');
    }

    public function ressourceTexteDeLoi()
    {
        return view('pages.texte_de_loi');
    }

    public function accordsInternationauxRatifies()
    {
        return view('pages.accords-internationaux-ratifies');
    }

    public function lois()
    {
        return view('pages.lois');
    }

    public function decrets()
    {
        return view('pages.decrets');
    }

    public function arretes()
    {
        return view('pages.arretes');
    }

    public function decisions()
    {
        return view('pages.decisions');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
