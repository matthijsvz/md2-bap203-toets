<?php

namespace App\Http\Controllers;
use App\Link;
use Illuminate\Http\Request;


class LinksController extends Controller
{
    //Get Links
    function index() {
        $links = Link::all();
        return view('laravelLinks', ['links' => $links]);
    }

    //Laat de link form zien
    function showLinksForm(){
        return view('linkToevoegen');
    }

    //Verwerk het link form
    function handleLinksForm(Request $request){

        $validatedData = $request->validate(
            [
               'title' => 'required|min:8',
               'description' => 'required',
               'url' => 'required|url'
            ]
        );

        $link = new Link();
        $link->fill([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'url' => $validatedData['url']
        ]);
        $link->save();
  
        return redirect()->route('linkConfirmation')->with('formData', $validatedData);
    }
}
