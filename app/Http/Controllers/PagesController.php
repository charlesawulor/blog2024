<?php
namespace App\Http\Controllers;

class PagesController extends Controller {

    Public function getIndex() {
        return view ('welcome');

    }
public function getAbout(){
    return view ('about');

}

public function getContact(){
  return view ('contact');
    
}




}