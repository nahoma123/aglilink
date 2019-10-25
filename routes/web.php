<?php

use App\Category;
use App\Popular_Category;
use maatwebsite\Excel\Concerns\FromCollection;
/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/ethio',function(){
    return view('ethiopia.en-US');
});
Route::get('/gallery/picture',function(){
        $platinum[0] = DB::table('categories')->where('picture','<>',"")->where('companyname','HARVEST GENERAL TRADING')->first();
    $platinum[1] = DB::table('categories')->where('picture','<>',"")->where('companyname','Agro Vet private limited')->first();
$platinum[2] = DB::table('categories')->where('picture','<>',"")->where('companyname','Moredo Coffee plc')->first();
$platinum[3] = DB::table('categories')->where('picture','<>',"")->where('companyname','Kayo plc.')->first();
$platinum[4] = DB::table('categories')->where('picture','<>',"")->where('companyname','gujicoffee plc')->first();
$platinum[5] = DB::table('categories')->where('picture','<>',"")->where('companyname','alemu nega export')->first();


 return view('home/gallery-pic')->with('platinum',$platinum);
});
Route::get('/contactus',function(){
return view('home/contact-us');
});
Route::get('/who-we-are',function(){
return view('home/who-we-are');
});
Route::get('/gallery/video',function(){

});
Route::get('/home',function(){
    $platinum[0] = DB::table('categories')->where('picture','<>',"")->where('companyname','HARVEST GENERAL TRADING')->first();
    $platinum[1] = DB::table('categories')->where('picture','<>',"")->where('companyname','Agro Vet private limited')->first();
$platinum[2] = DB::table('categories')->where('picture','<>',"")->where('companyname','Moredo Coffee plc')->first();
$platinum[3] = DB::table('categories')->where('picture','<>',"")->where('companyname','Kayo plc.')->first();
$platinum[4] = DB::table('categories')->where('picture','<>',"")->where('companyname','gujicoffee plc')->first();
$platinum[5] = DB::table('categories')->where('picture','<>',"")->where('companyname','alemu nega export')->first();


//    return $platinum;
    
    $cats = array( "Agriculture", "Industry", "Manufacturing");
    $agri = Category::where("maincategory", "Agriculture")->get();
    $manu = Category::where("maincategory", "")->get();
    $importexport = Category::where("maincategory", "Agriculture")->get();
    $industry = Category::where("maincategory", "Agriculture")->get();
    $all= Category::select('maincategory','subcategory')->groupBy('maincategory','subcategory')->get();
    $p =  App\Popular_Category::all();
    return view('home/index')->with("cats", $cats)->with('agri',$agri)->with("manu",$manu)->with("impo",$importexport)->with("indu",$industry)->with("allcat",$all)->with("pops",$p)->with('platinum',$platinum);
});
Route::get("/showmore/{category}/{num}",function($category,$num){
        if($category == "import_export"){
            $category = "Import and Export";
        }

        $platinumex = DB::table('categories')->where('picture','<>',"")->WhereNotNull('picture')->where('maincategory',$category)->take($num*3)->get();
        return $platinumex;
});
Route::get('home/contact/{category}',function($category){
    if($category=="importexport"){
        $subcategory= Category::select('maincategory','subcategory')->groupBy('maincategory','subcategory')->where('maincategory',"import and export")->get();
    }else{
        $subcategory= Category::select('maincategory','subcategory')->groupBy('maincategory','subcategory')->where('maincategory',$category)->get();
    }
    
    return view('home/contact')->with('cate',$category)->with('subcategory',$subcategory)->with('subcat',null)->with('term',null);
});

Route::get('home/contact/{category}/{subcat}',function($category,$subcat){
    if($category=="importexport"){
        $subcategory= Category::select('maincategory','subcategory')->groupBy('maincategory','subcategory')->where('maincategory',"import and export")->get();
    }else{
        $subcategory= Category::select('maincategory','subcategory')->groupBy('maincategory','subcategory')->where('maincategory',$category)->get();
    }
    
    return view('home/contact')->with('cate',$category)->with('subcat',$subcat)->with('subcategory',$subcategory)->with('term',null);
});

Route::get('home/contact/search/{category}/{term}',function($category,$term){
 
    if($category=="importexport"){
        $subcategory= Category::select('maincategory','subcategory')->groupBy('maincategory','subcategory')->where('maincategory',"import and export")->get();
    }else{
        $subcategory= Category::select('maincategory','subcategory')->groupBy('maincategory','subcategory')->where('maincategory',$category)->get();
    }
    
    return view('home/contact')->with('cate',$category)->with('term',$term)->with('subcategory',$subcategory)->with('subcat',null);
});

Route::get('/get/{category}',  function($category){
        if($category =="importexport"){
        $category = "Import and Export";
    }
    $contacts = Category::where('maincategory',$category)->get();
    return $contacts;
} );


//Route::get('/', function() {
////
////     
////    $c=new Category();
////    $c->maincategory= "Agriculture";
////    $c->subcategory="Agro Industry";
////    $c->companyname="Esubalew";
////    $c->save();
//    $cats = array( "Agriculture", "Industry", "Manufacturing");
//    $agri = Category::where("maincategory", "Agriculture")->get();
//    $manu = Category::where("maincategory", "")->get();
//    $importexport = Category::where("maincategory", "Agriculture")->get();
//    $industry = Category::where("maincategory", "Agriculture")->get();
//    $all= Category::select('maincategory','subcategory')->groupBy('maincategory','subcategory')->get();
////    return $all;
////    $all = DB::table("categories")->select("id","subcategory","maincategory")->groupBy("id",'subcategory',"maincategory")->get(); /*todo : make it distinct and make it select only the main and subcat and leave the rest*/
//
////    $cats= Category::all();
//    return view('home/home')->with("cats", $cats)->with('agri',$agri)->with("manu",$manu)->with("impo",$importexport)->with("indu",$industry)->with("allcat",$all);
//});
Route::get('/getcontacts/{category}/{subcategory}',function(string $category,string $subcategory){
    if($subcategory == "all"){
        $contacts= Category::where('maincategory',$category)->get();
    }else{
        $contacts= Category::where(['maincategory'=>$category,'subcategory'=>$subcategory])->get();

    }
    return $contacts;
});

Route::get('/search/{category}/{searchinput}',function($category,$searchinput){
    if($category == "All"){
            $searchresult = Category::Where('companyname','LIKE','%'.$searchinput.'%')->get();
    }else{
            $searchresult = Category::where('maincategory',$category)->Where('companyname','LIKE','%'.$searchinput.'%')->get();
    }
    return $searchresult;
});
