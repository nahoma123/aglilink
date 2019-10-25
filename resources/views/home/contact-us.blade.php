<!DOCTYPE html>
<html lang="en">
    <head>
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/bootstrap.css"/>	
        <link rel="stylesheet" href="/css/ethio_main.css"/>	
        <script type="text/javascript" src="/js/ethio/jquery1.11.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script src="{{asset('/js/angular.min.js')}}"></script>
        <!--	<link rel="stylesheet" href="css/bootstrap4.css"/>-->
        <title>
            Contact us
        </title>
        <link rel="stylesheet" href="/css/category_style.css"/>
    </head>

    <body ng-app="" ng-controller="mycontroller">
                   
        <section id="body_container" class="container-fluid" >
             <section style="margin: 0px;" class=" row Hero-top">
                        <ul id="menu_item" class="list-group list-inline container ">
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
                                    <p><a href="/home/contact/industry">Gallery</a></p>
                                </div>
                                
                                <div id="importexport" class="item_list col-md-2 col-xs-2">

                                    <p ><a href="/contactus">Contact us</a></p>
                                </div>



                            </div>
                                
                        </ul>
                    </section>
<section class="container" style="height: 480px;">
    <p style="font-size: 20px;margin-top: 50px;">
Our Phone directory Book & CD-ROM will be distributed through different country’s embassies & council offices, governmental & non-governmental institutions, different public service centers allover  Ethiopia and also through different Ethiopian embassies worldwide. This makes our service most accessible, efficient and preferable. 
In Addition, we also facilitate several market Links &cooperation at different International Business symposiums, bathars and commercial events.To promote the awareness of our service, Agrilink has distributed the CD-ROM in all parts of Addis Ababa and other regional towns. We are receiving encouraging testimonials responses. Additionally, our phone Directory plays its own significant role in Agriculture lead Industrialization policy of the country.
We kindly request you to welcome our Sales Consultant in his/her profession to explain our creative, integrated and reliable Advertisement packages of this edition. Our effort is to ensure that we will satisfy your company by providing the highest standard of quality and result oriented advertising serviceefficiently</p>
</section>

            <footer class="container-fluid" style="height: 100px;margin-bottom:0px;padding-top: 20px;"> 
                <div class="container" >
          <div class="col-md-offset-4 col-md-6" >
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
                $('.category_click').hover(function () {
                    $(this).find('.div_cat_text').fadeIn();
                }, function () {
                    $('.div_cat_text').fadeOut();
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
