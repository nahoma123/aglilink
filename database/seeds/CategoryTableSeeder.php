<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::disableQueryLog();
     if(($handle = fopen("public/data/Agriculture.csv", "r")) !== FALSE){
        while (($data = fgetcsv($handle,0,",")) !== FALSE){
            $num= count($data);
                $cat=new Category();
                $cat->maincategory="Agriculture" ;
                                $cat->subcategory=$data[0];
                $cat->companyname=$data[1];
                $cat->phone=$data[2];
                $cat->mobile1=$data[3];
                if(isset($data[4])){
                    $cat->location=$data[4];
                }if(isset ($data[5])){
                    $cat->email = $data[5];
                }if(isset ($data[6])){
                    $cat->website=$data[6];
                }if(isset ($data[7])){
                    $cat->fax1=$data[7];
                }if(isset ($data[8])){
                    $cat->p_o_box=$data[8];
                }if(isset ($data[9])){
                    $cat->picture=$data[9];
                }
                $cat->save();
        }
    }

    if(($handle = fopen("public/data/Manufacture.csv", "r")) !== FALSE){
        while (($data = fgetcsv($handle,0,",")) !== FALSE){
            $num= count($data);
                $cat=new Category();
                $cat->maincategory="Manufacture";
                $cat->subcategory=$data[0];
                $cat->companyname=$data[1];
                $cat->phone=$data[2];
                $cat->mobile1=$data[3];
                if(isset($data[4])){
                    $cat->location=$data[4];
                }if(isset ($data[5])){
                    $cat->email = $data[5];
                }if(isset ($data[6])){
                    $cat->website=$data[6];
                }if(isset ($data[7])){
                    $cat->fax1=$data[7];
                }if(isset ($data[8])){
                    $cat->p_o_box=$data[8];
                }if(isset ($data[9])){
                    $cat->picture=$data[9];
                }
                $cat->save();
        }
    }
    
        if(($handle = fopen("public/data/Import export.csv", "r")) !== FALSE){
        while (($data = fgetcsv($handle,0,",")) !== FALSE){
            $num= count($data);
                $cat=new Category();
                $cat->maincategory="Import and Export" ;
                                $cat->subcategory=$data[0];
                $cat->companyname=$data[1];
                $cat->phone=$data[2];
                $cat->mobile1=$data[3];
                if(isset($data[4])){
                    $cat->location=$data[4];
                }if(isset ($data[5])){
                    $cat->email = $data[5];
                }if(isset ($data[6])){
                    $cat->website=$data[6];
                }if(isset ($data[7])){
                    $cat->fax1=$data[7];
                }if(isset ($data[8])){
                    $cat->p_o_box=$data[8];
                }if(isset ($data[9])){
                    $cat->picture=$data[9];
                }
                $cat->save();
        }
    }
            
            if(($handle = fopen("public/data/Industry.csv", "r")) !== FALSE){
        while (($data = fgetcsv($handle,0,",")) !== FALSE){
            $num= count($data);
                $cat=new Category();
                $cat->maincategory="Industry" ;
                $cat->subcategory=$data[0];
                $cat->companyname=$data[1];
                $cat->phone=$data[2];
                $cat->mobile1=$data[3];
                if(isset($data[4])){
                    $cat->location=$data[4];
                }if(isset ($data[5])){
                    $cat->email = $data[5];
                }if(isset ($data[6])){
                    $cat->website=$data[6];
                }if(isset ($data[7])){
                    $cat->fax1=$data[7];
                }if(isset ($data[8])){
                    $cat->p_o_box=$data[8];
                }if(isset ($data[9])){
                    $cat->picture=$data[9];
                }
                $cat->save();
        }
    }
    $p_01= new App\Popular_Category();
    $p_01->maincategory="Agriculture";
    $p_01->subcategory="Agro Industry";
    $p_01->picture="/img/popular/1.jpg";
    $p_01->save();
    
    $p_01= new App\Popular_Category();
    $p_01->maincategory="Agriculture";
    $p_01->subcategory="Coffee";
    $p_01->picture="/img/popular/2.jpg";
    $p_01->save();
    
    $p_01= new App\Popular_Category();
    $p_01->maincategory="Agriculture";
    $p_01->subcategory="FERTILIZER";
    $p_01->picture="/img/popular/3.jpg";
    $p_01->save();
    
    $p_01= new App\Popular_Category();
    $p_01->maincategory="Agriculture";
    $p_01->subcategory="AGRICULTURE";
    $p_01->picture="/img/popular/4.jpg";
    $p_01->save();
    
    $p_01= new App\Popular_Category();
    $p_01->maincategory="Agriculture";
    $p_01->subcategory="COTTON";
    $p_01->picture="/img/popular/5.jpg";
    $p_01->save();
    
    $p_01= new App\Popular_Category();
    $p_01->maincategory="Manufacture";
    $p_01->subcategory="TEXTILE";
    $p_01->picture="/img/popular/6.jpg";
    $p_01->save();
    
    $p_01= new App\Popular_Category();
    $p_01->maincategory="import and export";
    $p_01->subcategory="import and export";
    $p_01->picture="/img/popular/7.jpg";
    $p_01->save();
    
    $p_01= new App\Popular_Category();
    $p_01->maincategory="import and export";
    $p_01->subcategory="import";
    $p_01->picture="/img/popular/8.png";
    $p_01->save();
    
    $p_01= new App\Popular_Category();
    $p_01->maincategory="import and export";
    $p_01->subcategory="export";
    $p_01->picture="/img/popular/9.png";
    $p_01->save();    

    
    }
}