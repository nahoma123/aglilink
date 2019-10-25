<!DOCTYPE html>
<html lang="en">
    <head>
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/bootstrap.css"/>	
        <link rel="stylesheet" href="/css/ethio_main.css"/>	
        <style type="text/css">
          .btn:focus, .btn:active, button:focus, button:active {
  outline: none !important;
  box-shadow: none !important;
}

#image-gallery .modal-footer{
  display: block;
}

.thumb{
  margin-top: 15px;
  margin-bottom: 15px;
}
        </style>

        <script type="text/javascript" src="/js/ethio/jquery1.11.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script src="{{asset('/js/angular.min.js')}}"></script>
        <!--	<link rel="stylesheet" href="css/bootstrap4.css"/>-->
        <title>
            Gallery
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

<div class="container">
  <div class="row" style="margin-top: 50px;height: 500px;">
            <div align="center">
            <button class="btn btn-default filter-button" data-filter="Popular">All</button>
            <button class="btn btn-default filter-button" data-filter="Agriculture" ng-click="more('Agriculture',pag)">Agriculture</button>
            <button class="btn btn-default filter-button" data-filter="Manufacture" ng-click="more('Manufacture',pman)">Manufacture</button>
            <button class="btn btn-default filter-button" data-filter="import_export" ng-click="more('import_export',pex)">Import and Export</button>
            <button class="btn btn-default filter-button" data-filter="Industry" ng-click="more('Industry',pin)">Industry</button>
        </div>
        <br/>
        @foreach( $platinum as $p)
                <div class="col-lg-3 col-md-4 col-xs-6 thumb filter Popular" >
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="{{$p->picture}}"
                   ng-click="changeImage({{$p->picture}})"
                   data-target="#image-gallery">
                    <img style="height: 200px;" class="img-thumbnail"
                         src="{{$p->picture}}"
                         alt="{{$p->companyname}}"
                         >
                </a>
            </div>
            @endforeach
    <div class="row">
            <div class="col-lg-3 col-md-4 col-xs-6 thumb" ng-repeat="x in moreitems">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="@{{x.picture}}"
                   ng-click="changeImage(x.picture)"
                   data-target="#image-gallery">
                    <img style="height: 200px;" class="img-thumbnail"
                         src="@{{x.picture}}"
                         alt="@{{x.companyname}}"
                         >
                </a>
            </div>
        </div>
        <div ng-click="more('import_export',pex)" class="row filter import_export pull-right btn btn-success btn-xs" style="margin: 20px;" ng-show="activated"><a style="color:white;margin: 20px;" ng-click="more('import_export',pex)">Show more <i class="glyphicon glyphicon-arrow-down"></i> </a></div>
            <div ng-click="more('Agriculture',pag)" class="row filter Agriculture pull-right btn btn-success btn-xs" style="margin: 20px;" ng-show="activated"><a style="color:white;margin: 20px;" >Show more <i class="glyphicon glyphicon-arrow-down"></i></a></div>
            <div ng-click="more('Manufacture',pman)" class="row filter Manufacture pull-right btn btn-success btn-xs" style="margin: 20px;" ng-show="activated"><a style="color:white;margin: 20px;" >Show more <i class="glyphicon glyphicon-arrow-down"></i></a></div>
            <div ng-click="more('Industry',pin)" class="row filter Industry pull-right btn btn-success btn-xs" style="margin: 20px;" ng-show="activated"><a style="color:white;margin: 20px;" >Show more <i class="glyphicon glyphicon-arrow-down"></i></a></div>


        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <img id="image-gallery-image" class="img-responsive col-md-12" src="@{{imagefordata}}" style="max-height: 600px;">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
  </div>
</div>
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
          let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });

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
                $scope.imagefordata="/img/popular/1.jpg";
                $scope.changeImage= function(img){
                  $scope.imagefordata=img;
                  console.log(img);
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
