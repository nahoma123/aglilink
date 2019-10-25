<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/bootstrap.css"/>	
        <link rel="stylesheet" href="/css/ethio_main.css"/>	
        <script type="text/javascript" src="/js/ethio/jquery1.11.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script src="{{asset('/js/angular.min.js')}}"></script>
        <!--	<link rel="stylesheet" href="css/bootstrap4.css"/>-->
        <title>
            Agri Link
        </title>
        <link href="/css/simple-sidebar.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/category_style.css"/>
    </head>

    <body ng-app="" ng-controller="mycontroller">
                  <section id="menuopener" style="top:0px;" class="">
            <span style="font-size: 30px;margin-top: 20px;margin-left: 6px;" class="glyphicon glyphicon-list" id="menu-toggle"></span>
            <img class="center" src="/img/AGRI%20LINK%20-01.png" height="60px" style="margin-right: 10px;margin-top: -20px;" />
          </section> 
        <section id="body_container" class="container-fluid"  style="position: static;">
         
          
           <div id="wrapper" >

        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="    background-color: rgba(100,100,100);">
            <ul class="sidebar-nav container-fluid">
                <!-- <li class="navlist sidebar-brand" style="height: 100px;">
                  <img src="/img/AGRI LINK -01.png" height="100px">
                    
                </li>
                <li> -->
                
                  </li>
                <li style="margin-top: 40px;">
                    <div class="row">
                      <div class="col-xs-2"> 
                        <!-- <span style="font-size: 17px;    margin-top: 9px;" class="glyphicon glyphicon-home"></span> -->
                      </div>
                    <div class="col-xs-10 "><p><a class="navlist"href="/home">Home </span></a></p></div>
                  </div>
                </li>
                <li>
                   <div class="row">
                      <div class="col-xs-2"></div>
                      <div class="col-xs-10 "><p><a class="navlist" href="/who-we-are">Who we are</a></p></div>
                    </div>
                </li>
                <li>
                  <div class="row">
                  <div class="col-xs-2">
                  </div>
                  <div class="col-xs-10">
    <a class="navlist" >Government Office</a>
  </div>
  </div>
  </li>
                <li style="margin-left: 30px;">
                  <div class="row">
                      <div class="col-xs-2"></div>
                      <div class="col-xs-10 ">                   <a  class="navlist"  href="http://www.moin.gov.et">M. Industry</a>
</div>
                    </div>
                </li>
                <li style="margin-left: 30px;">
                  <div class="row">
                      <div class="col-xs-2"></div>
                      <div class="col-xs-10 "><a  class="navlist" href="http://www.moin.gov.et">M. Industry</a>
</div>
                    </div>
                </li>
                <li>
                  <div class="row navlist">
                      <div class="col-xs-2"></div>
                      <div class="col-xs-10 "><a class="navlist"  href="/gallery/picture">Gallery</a></div>
                    </div>
                   
                </li>
                
                <li>
                   <div class="row">
                      <div class="col-xs-2"></div>
                      <div class="col-xs-10 "><a class="navlist" href="/contactus">Contact us</a></div>
                    </div>
                    
                </li>
                <li id="cancelbut">
 <div class="row">
                      <div class="col-xs-2"><span class=" glyphicon glyphicon-remove-circle" style="display: inline;margin-top:5px;font-size: 20px;"></span></div>
                      <div class="col-xs-10 "><a class="navlist" > Cancel  </a></div>
                    </div>
                    
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->


        <!-- /#page-content-wrapper -->
</div>
             <section id="menudesktop_top" style="margin: 0px;" class=" row Hero-top menutodisappear">
                       
                        <ul id="menu_item" class="list-group list-inline container">
                            <div class="row">
                                
                                <div id="ethio_logo" class="item_list col-md-3 col-xs-3" style="padding-top: 0px;">
                                    
                                    <img src="/img/AGRI%20LINK%20-01.png" height="70px" class="pull-left" style="margin-left: 20px;"/>
                                    <img id="ethio_image" class="CountrySwitch-current-img" style="margin-top: 10px;" src="data:image/png;base64,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" alt="">
                                </div>
                                <div class="item_list col-md-1 col-xs-1">
                                    <p><a href="/home">Home</a></p>
                                </div>
                                
                                <div class="item_list col-md-2 col-xs-2">
                                    <p><a href="/who-we-are">Who we are</a></p>
                                </div>
                                
                                <div class="item_list col-md-2 col-xs-2"><li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Government Office
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
            <li><a href="http://www.moa.gov.et">M. Agriculture</a></li>
      <li><a href="http://www.moin.gov.et">M. Industry</a></li>
    </ul>
  </li>
                                </div>
                                <div class="item_list col-md-1 col-xs-1">
                                    <p><a href="/gallery/picture">Gallery</a></p>
                                </div>
                                
                                <div id="importexport" class="item_list col-md-2 col-xs-2">

                                    <p ><a href="/contactus">Contact us</a></p>
                                </div>
                            </div>
                                
                        </ul>
                    </section>

    </div>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators" >
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
      <li data-target="#myCarousel" data-slide-to="8"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div id="wrapper_slide" class="carousel-inner" role="listbox" >

      <div class="item active">
          <img src='/img/resized website/4.jpg' alt="Chania" width="100%"    />
      </div>

      <div class="item">
        <img src="/img/resized website/7d (2).jpg" alt="Chania" width="100%"    />
      </div>
    
      <div class="item">
          <img src="/img/resized website/5.jpg" alt="Flower" width="100%"    />
      </div>
        
        <div class="item">
          <img src="/img/resized website/4d.jpg" alt="Flower" width="100%"    />
      </div>
      <div class="item">
          <img src="/img/resized website/7d.jpg" alt="Flower" width="100%"    />
      </div>
      <div class="item">
          <img src="/img/resized website/18.jpg" alt="Flower" width="100%"    />
      </div>
      <div class="item">
          <img src="/img/resized website/20d.jpg" alt="Flower" width="100%"    />
      </div>
      <div class="item">
          <img src="/img/resized website/21d.jpg" alt="Flower" width="100%"    />
      </div>
      <div class="item">
          <img src="/img/resized website/22d.jpg" alt="Flower" width="100%"        />
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>  

                                <section id="menudesktop_bottom" class=" row Hero-bottom">
                        <ul id="menu_item" class="list-group list-inline container ">
                            <div class="row" style="margin-left: 0px;">
                                <div id="ethio_logo" class="item_list col-md-3 col-xs-3" style="padding-top: 0px;">
                                    <p style="font-size:25px;margin-top: 15px;">Business Directory</p>
                                </div>
                                <div class="item_list col-md-2 col-xs-3" >
                                    <p><a href="/home/contact/agriculture">Agriculture</a></p>
                                </div>
                                <div class="item_list col-md-2 col-xs-3">

                                    <p><a href="/home/contact/manufacture">Manufacturing</a></p>
                                </div>
                                
                                <div class="item_list col-md-2 col-xs-3">
                                    <p><a href="/home/contact/industry">Industry</a></p>
                                </div>
                                
                                <div id="importexport" class="item_list col-md-2 col-xs-3">

                                    <p ><a href="/home/contact/importexport">Import and Export</a></p>
                                </div>
                                
                            </div>
                        </ul>
                    </section>
  <div id="search_box_2" class="container-fluid" style="background-color: rgba(0,0,0,.7);">
                <div class="container" >
                    <form class=" SearchForm CouponsSearchForm row"  method="get">
                        <div class="SearchForm-queryControls">
                            <div  class="row" style="font-size: 20px;">
                                <div class="col-md-6 col-xs-6" style="padding-right: 12px;">
                                    <input ng-model="searchterm" class="pull-left" type="search" name="category" placeholder="What do you need ..." style="width: 100%;border-bottom-left-radius: 5px;border-top-left-radius: 5px;border-style: ridge;padding-left: 10px;
                                           border: 1px solid transparent;
                                           border-top-left-radius: 8px;
                                           border-bottom-left-radius: 8px;    font-size: 34px;    padding: 10px 15px;    text-rendering: auto;
                                           color: initial;
                                           letter-spacing: normal;
                                           word-spacing: normal;
                                           text-transform: none;
                                           height: 34.59px;
                                           text-indent: 0px;
                                           text-shadow: none;
                                           display: inline-block;
                                           text-align: start;
                                           font: 400 13.3333px Arial;
                                           white-space: nowrap;
                                           font-size: 18px;
                                           padding-bottom:0px;
                                           padding-top:0px;
                                           "/>
                                </div>	
                                <div class="col-md-4 col-xs-4" style="padding-left: 0px;padding-right: 0px;">
                                 <select style="width: 100%;                                        border: 1px solid transparent;
                                           border-top-left-radius: 0px;
                                           border-bottom-left-radius: 0px;        padding: 10px 15px;    text-rendering: auto;
                                           color: initial;
                                           letter-spacing: normal;
                                           word-spacing: normal;
                                           text-transform: none;
                                           height: 34.59px;
                                           text-indent: 0px;

                                           padding-bottom:0px;
                                           padding-top:0px;
                                           text-shadow: none;
                                           display: inline-block;
                                           text-align: start;
                                           font: 400 13.3333px Arial;
                                           white-space: nowrap;
                                           font-size: 18px;" ng-model="category">
                                <option value="All">Any Category</option>
                                <option value="Agriculture"  >Agriculture</option>
                                <option value="Manufacturing" >Manufacturing</option>
                                <option value="Industry">Industry</option>
                                <option value="Import and Export" >Import and Export</option>
                                </select>   
                                </div>
                                <div class="col-md-2 col-xs-2" style="padding-left: 0px;padding-right: 0px;">
                                    <span class="input-group-btn" id="search_button" style="width: 100%;height:100%;margin-left: 5px;margin-top: -2px;">
                                        <a href="/home/contact/search/@{{category}}/@{{searchterm}}" class="btn btn-default " type="button" ng-click="" style="
                                                width: 100%;border-bottom-right-radius: 5px;border-top-right-radius: 5px;height: 34.49px;"><span style="margin-left: 5px;" class="glyphicon glyphicon-search"></span> <span id="search_todis">Search</span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
 

<div class="row mob_main_cat">
    <a href="/home/contact/agriculture">

  <div class="col-xs-3 agri_mob">
    <img class="cat_icon center-block " src="/img/agriculture.png" >
  </div>
</a>
<a href="/home/contact/manufacture">

  <div class="col-xs-3 manu_mob">
     <img class="cat_icon center-block" src="/img/manufacturing.png" >
  </div>
</a>
<a href="/home/contact/industry">

  <div class="col-xs-3 indu_mob">
     <img class="cat_icon center-block" src="/img/industry.png" >
  </div>
</a>
<a href="/home/contact/importexport">

    <div class="col-xs-3 impo_mob">
     <img class="cat_icon center-block" src="/img/importexport.png" >
  </div>
</a>
    </div>

<div class="row mob_main_cat">
  <a href="/home/contact/agriculture">
  <div class="col-xs-3 center-block  agri_mob">
    <p>
    Agriculture
  </p>
  </div>
</a>
<a href="/home/contact/manufacture">
  <div class="col-xs-3 manu_mob">
    <p>Manufacturing</p>
  </div>
</a>
<a href="/home/contact/industry">
  <div class="col-xs-3 indu_mob">
    <p >Industry</p>
  </div>
</a>
<a href="/home/contact/importexport">
  <div class="col-xs-3 impo_mob">
    <p>Import Export</p>
  </div>
</a>
</div>








          
                <div class="row search_box container-fluid" style="background: #eee !important;">
                                    <section id="team" class="pb-5">
    <div class="container-fluid">
        <h5 id="members_header" class="section-title h1 font-header" >OUR Platinum Members </h5> 
        <div class="container-fluid">
        <div id="plat_members" class="row">
        <div class="col-md-9 col-sm-12" id="resizeplatinum">

        <div align="center">
            <button class="btn btn-default filter-button" data-filter="Popular">All</button>
            <button class="btn btn-default filter-button" data-filter="Agriculture" ng-click="more('Agriculture',pag)">Agriculture</button>
            <button class="btn btn-default filter-button" data-filter="Manufacture" ng-click="more('Manufacture',pman)">Manufacture</button>
            <button class="btn btn-default filter-button" data-filter="import_export" ng-click="more('import_export',pex)">Import and Export</button>
            <button class="btn btn-default filter-button" data-filter="Industry" ng-click="more('Industry',pin)">Industry</button>
        </div>
        <br/>



<!--            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <div class="col-md-12">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="row" style="margin: 0px;">
                                        <div id="imagemember1" class="col-md-12 col-sm-12 col-xs-12">
                                            
                                        </div>
                                        <h4 class="card-title font-header" style="bottom:0px;margin-top: 2px;">Helina Food</h4>

                                    </div>
                                    <h4 class="card-title">Merid Fikadu</h4>
                                    <p class="card-text">Merid is the co-founder and manager of agrilink.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Helina Food</h4>
                                    <p style="font-size: 20px;" class="">Tel: +251-111-6-679041</p>
                                    <p style="font-size: 20px;"  class="">Fax: +251-111-6-679019</p>
                                    <p style="font-size: 20px;"  class="">P.O.BOX: 1648code1110</p>
                                    <p style="font-size: 20px;"  class="">Legetafo,Legedadi, Oromia, Ethiopia</p>
                                    <p style="font-size: 20px;"  class="">info@hilinafoodseth.com</p>
                                    <p style="font-size: 20px;"  class="">www.hilinafoodseth.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>-->
            
            @foreach($platinum as $p)
                <div class="gallery_product col-lg-4 col-md-4 col-xs-6 col-sm-4  filter Popular" style="padding: 0px;">
                <div class="row" style="margin:0px;padding: 0px;">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="row" style="margin: 0px;">
                                        <div id="" class="col-md-12 col-sm-12 col-xs-12 imagemember1" style="background: rgb(37,16,13) url('{{$p->picture}}');

    /* Set a specific height */
    width:100%;
    ">
                                            
                                        </div>
                                        <h4 class="card-title font-header" style="bottom:0px;margin-top: 2px;">{{$p->companyname}}</h4>

                                    </div>
                                    <!--<h4 class="card-title">Merid Fikadu</h4>-->
                                    <!--<p class="card-text">Merid is the co-founder and manager of agrilink.</p>-->
                                    <!--<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>-->
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">{{$p->companyname}}</h4>
                                    <p style=" " class="infodet">Tel: {{$p->phone}}, {{$p->mobile2}}, {{$p->mobile1}}, {{$p->phone1}}</p>
                                    <p class="infodet">Fax: {{$p->fax1}}, {{$p->fax2}}</p>
                                    <p class="infodet">P.O.BOX: {{$p->p_o_box}}</p>
                                    <p class="infodet">{{$p->location}}, Ethiopia</p>
                                    <p class="infodet">{{$p->email}}</p>
                                    <p class="infodet">{{$p->website}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            @endforeach
         
            

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter {{$p->maincategory}}" ng-repeat="x in moreitems">
                <div class="row" style="margin:0px;padding: 0px;">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="row" style="margin: 0px;">
                                        <div id="imagemember1" class="col-md-12 col-sm-12 col-xs-12 imagemember1" style="background: rgb(37,16,13) url('@{{x.picture}}');

    /* Set a specific height */
    width:100%;
    ">
                                            
                                        </div>
                                        <div class="textforh4" style="bottom:0px;margin-top: 2px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><h4 class="card-title font-header" >@{{x.companyname}}</h4></div>

                                    </div>
                                    <!--<h4 class="card-title">Merid Fikadu</h4>-->
                                    <!--<p class="card-text">Merid is the co-founder and manager of agrilink.</p>-->
                                    <!--<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>-->
                                </div>
                            </div>
                        </div>

                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">@{{x.companyname}}</h4>
                                    <p class="infodet">Tel: @{{x.phone}}, @{{x.mobile2}}, @{{x.mobile1}}, @{{x.phone1}}</p>
                                    <p class="infodet">Fax: @{{x.fax1}}, @{{x.fax2}}</p>
                                    <p class="infodet">P.O.BOX: @{{x.p_o_box}}</p>
                                    <p class="infodet">@{{x.location}}, Ethiopia</p>
                                    <p class="infodet">@{{x.email}}</p>
                                    <p class="infodet">@{{x.website}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
</div>
        <div ng-click="more('import_export',pex)" class="row filter import_export pull-right btn btn-success btn-xs" style="margin: 20px;" ng-show="activated"><a style="color:white;margin: 20px;" ng-click="more('import_export',pex)">Show more <i class="glyphicon glyphicon-arrow-down"></i> </a></div>
            <div ng-click="more('Agriculture',pag)" class="row filter Agriculture pull-right btn btn-success btn-xs" style="margin: 20px;" ng-show="activated"><a style="color:white;margin: 20px;" >Show more <i class="glyphicon glyphicon-arrow-down"></i></a></div>
            <div ng-click="more('Manufacture',pman)" class="row filter Manufacture pull-right btn btn-success btn-xs" style="margin: 20px;" ng-show="activated"><a style="color:white;margin: 20px;" >Show more <i class="glyphicon glyphicon-arrow-down"></i></a></div>
            <div ng-click="more('Industry',pin)" class="row filter Industry pull-right btn btn-success btn-xs" style="margin: 20px;" ng-show="activated"><a style="color:white;margin: 20px;" >Show more <i class="glyphicon glyphicon-arrow-down"></i></a></div>
    </div>
    </div>
</section>
                </div>
            <section id="content_section" class="container" style="">


                

                <div class="row">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 style="font-weight: 300;
                                display: inline-block;
                                font-size: 35px;
                                margin-left: 14px;">
                                Popular Categories
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row" id="popular_cats" style="margin-bottom:45px;">                               
                            @foreach($pops as $pop)
                            <div class="col-md-3 col-xs-6 col-sm-4 category_click" style="padding-top:0px !important;"><a href="/home/contact/{{$pop->maincategory}}/{{$pop->subcategory}}" style="" ><div  class="div_bx" style="padding-top:123px;word-wrap: break-word;height: 100%;width: 100%;margin: 2px;background-color:#00aeef;background-image:url('{{$pop->picture}}')">
                                <div class="div_cat_text" style="background-color: #00aeef;margin-bottom: 0px;height: 60px;padding-top: 10px;"><p class="text-center" style="line-height: 20px;">{{$pop->subcategory}}</p></div>
                            </div>
                                </a>
                            </div>
                            @endforeach
                    </div>
                    <br/>
                    </div>
                    <div class="col-md-2 col-xs-0"></div>
                </div>
                
            </section>
            <footer class="container-fluid " style="height: 100px;margin-bottom:0px;padding-top: 20px;"> 
                <div class="container" >
          <div style="text-align:center;" >
                    <ul class="social-network social-circle center-block" >
                      <li class="pull-left"></li>
                        <li><a href="#" class="icoRss icon_blur" title="Rss"><i class="fa fa-rss "></i></a></li>
                        <li><a href="https://www.facebook.com/agrilinket/?ref=br_rs" class="icoFacebook icon_blur" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter icon_blur" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle icon_blur" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin icon_blur" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>       
        </div>
                    
                    </div>
            </footer>
            <footer class="container-fluid" style="margin:0px !important;height:100px;background: #333;color: #fff;">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3" style="padding-top:50px;bottom:0px;">
                        <p class="text-center"> Copy Right 2018 <i class="glyphicon glyphicon-copyright-mark"></i></p>
                    </div>
                </div>
            </footer>
        </section>

        <script type="text/javascript">
            // var images= ["/img/website/DEJEN.jpg","/img/website/GTAHUN.jpg","/img/website/AD-AGRIVET.jpg"]
            // var imagehead = document.getElementById('imagehead');
            // var i = 0;
            // setInterval(function(){
            //    imagehead.style.backgroundImage="url("+images[i] + ")";
            //    i=i+1;
            //    if(i==images.length){
            //        i=0;
            //    }
            // },3500);
            $(document).ready(function () {
                var $div_bx_width = $(".div_bx").width();
                $(".category_click").height($div_bx_width*0.667);
                
                var $imagemember1_width=$(".imagemember1").width();
                $(".imagemember1").height($imagemember1_width*0.7495649846);
                
                $(".agri_mob").hover(function(){
                    $(".mob_main_cat div").css("background-color", "white" );
                    $(".agri_mob").css("background-color", "#eee" );
                });
                $(".indu_mob").hover(function(){
                    $(".mob_main_cat div").css("background-color", "white" );
                    $(".indu_mob").css("background-color", "#eee" );
                });
                $(".manu_mob").hover(function(){
                    $(".mob_main_cat div").css("background-color", "white" );
                    $(".manu_mob").css("background-color", "#eee" );
                });
                $(".impo_mob").hover(function(){
                    $(".mob_main_cat div").css("background-color", "white" );
                    $(".impo_mob").css("background-color", "#eee" );
                });
                $(".gallery_product").height($imagemember1_width*0.7495649846+23);
                $(".card,.backside,.card-body").width($imagemember1_width);
                $(".card,.backside,.card-body").height($imagemember1_width*0.7495649846+23);
                var $wrapper_slide = $("#myCarousel").width();
                $("#wrapper_slide, #wrapper_slide .item,#wrapper_slide img").height(0.3203125*$wrapper_slide);
                
                $(".div_bx"). css("padding-top",$(".category_click").height()-$(".div_cat_text").height());
//                console.log($imagemember1_width*0.7495649846-$(".div_cat_text").height());
                $("#cancelbut").click(function(){
                    $("#wrapper").removeClass("toggled");
                });
                
                $("#sidebar-wrapper").click(function(){
                    $("#wrapper").removeClass("toggled");
                });
                $('.category_click').hover(function () {
                    $(this).find('.div_cat_text').fadeIn();
                }, function () {
                    $('.div_cat_text').fadeOut();
                });
                    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");

    });
                
    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");

}
$(this).addClass("active");

            });
            
            function mycontroller($scope, $http) {
              $scope.activated=false;

                $scope.pin =1;
                $scope.pman =1;
                $scope.pag=1;
                $scope.pex=1;
                $scope.check= function(){
                  console.log("LOG");
                }
                $scope.more = function(category,num){
                  $scope.activated=true;

                  console.log($scope.pex);
                        if(category ==  "Agriculture"){
                            $scope.pag++;
                            $scope.pin =1;
                $scope.pman =1;
                $scope.pex=1;
                        }else if(category ==  "Manufacture"){
                          $scope.pman ++;
                            $scope.pin =1;
                $scope.pag=1;
                $scope.pex=1;
                        }else if(category ==  "Industry"){
                $scope.pman =1;
                $scope.pin++;
                $scope.pag=1;
                $scope.pex=1;
                        }else if(category ==  "import_export"){
                            $scope.pin =1;
                $scope.pman =1;
                $scope.pag=1;
                $scope.pex++;
                        }
                        
                        var page = "/showmore/";
                        $scope.hiddenx = true;
                        $http.get(page + category + "/" + num)
                                .success(function (response) {
                                    $scope.moreitems= response;
                                });

                                console.log($scope.moreitems);
                    }
                }            
        </script>
    </body>
</html>
