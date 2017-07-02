<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
class pagesController extends Controller{
public function getabout(){
	$owner ='sushant rahtore';
return view('pages.about')->with("name",$owner);
}



public function getWelcome(){
	
return view('pages.welcomee');
}
}
?>

