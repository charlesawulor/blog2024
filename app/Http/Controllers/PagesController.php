<?php
namespace App\Http\Controllers;

class PagesController extends Controller {

    Public function getIndex() {
        $first = 'Charles';
        $last = 'Awulor';
        $full = $first . "" . $last;
    
        return view ('pages.welcome')->with("fullname", $full);

    }
public function getAbout(){
    $first = 'Charles';
    $last = 'Awulor';
    $full = $first . "" . $last;

    return view ('pages.about')->with("fullname", $full);

}

public function getContact(){
  return view ('pages.contact');
    
}



}