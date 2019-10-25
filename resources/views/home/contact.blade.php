<!DOCTYPE html>
<!--

-->
<html lang="en">
    <head>
        <link rel="stylesheet" href="/css/bootstrap.css"/>
        <link rel="stylesheet" href="/css/contact.css"/>
        <title>Agri Link </title>
        <script src="/js/ethio/jquery1.11.js"></script>
        <script src="{{asset('/js/angular.min.js')}}"></script>
        <script src="/js/bootstrap-min2.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body ng-app="" ng-controller="contactscontroller">
        
        <div class="container-fluid topsection">
            <div class="container" >
                <div class="row">
                    <form>
                        <div class="col-md-2 col-xs-3" style="padding-top: 15px;">
                            <img src="/img/AGRI LINK -01.png" width="80px" style=""/>
                        </div>
                        <div class="col-md-3 col-xs-3 col-md-offset-1" style="padding-top: 30px;padding-right: 0px;">
                            <input   type="text" class="" style="height: 50px;width: 100%;border: 1px solid transparent;
                                     border-top-left-radius: 8px;
                                     border-bottom-left-radius: 8px;    font-size: 18px !important;    padding: 0px 15px;    text-rendering: auto;
                                     color: initial;
                                     letter-spacing: normal;
                                     word-spacing: normal;
                                     text-transform: none;
                                     text-indent: 0px;
                                     text-shadow: none;
                                     display: inline-block;
                                     text-align: start;
                                     font: 400 13.3333px Arial;
                                     white-space: nowrap;

                                     " ng-model="searchInput" placeholder="@{{placeholder}}"/>
                        </div>
                        <!--                        <div class="col-md-2 col-xs-2" style="padding-top: 30px;padding-left: 5px;padding-right: 0px;">
                                                    <input type="text" class="" style="height: 50px;width: 100%;padding: 10px 15px;font-size: 20px;font: 400 20px Arial;" placeholder="area (any)..."/>
                                                </div>-->
                        <div class="col-md-2 col-xs-2" style="padding-top: 30px;padding-left: 5px;padding-right: 0px;">
                            <select style="height: 50px;width: 100%;padding: 10px 15px;font-size: 20px;font: 400 20px Arial;" ng-model="category">
                                <option value="All">Any Category</option>
                                <option value="Agriculture">Agriculture</option>
                                <option value="Manufacturing">Manufacturing</option>
                                <option value="Industry">Industry</option>
                                <option value="Import and Export">Import and Export</option>
                            </select>
                        </div>
                        <div class="col-md-1 col-xs-1" style="padding-top: 30px;padding-left: 0px;padding-right: 0px;">
                            <button class="btn btn-warning" style="width:  100%;border-bottom-left-radius: 0px;border-top-left-radius: 0px;height: 50px;" ng-click="search(category, searchInput)">
                                <span class="glyphicon glyphicon-search"></span>
                                <span id="search_tag" style="font-size: 18px;">Search</span>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        
        <div class="" style="">
            <div class="container">

                <div class="row" style="clear: both;margin-top: 20px;">
                    <div class="col-md-3">
                        <ul class="list-group list-inline">
                            <li class="list-group-item" style="padding: 0px;border: none;    line-height: 1.5;
                                font-family: sans-serif;
                                font-size: 18px;
                                left: 0;">
                                <div style="width: 100%">
                                    <a class="center" style="color: #333 !important"href="/home">Home
                                    </a>
                                </div>
                            </li>
                            
                            <li class="list-group-item" style="padding: 0px;border: none;;">/</li>
                            <li class="list-group-item" style="padding: 0px;border: none;    line-height: 1.5;
                                color: #333;
                                font-family: sans-serif;
                                font-size: 18px;
                                color: #999;
                                left: 0;">
                                {{$cate=="importexport" ? "Import and Export" : $cate }}
                            </li>
                        </ul>
                    </div>
                </div>
                <div  class="row" style="margin-left:-2px;">
                    <div class="input-block">
                        <select class="form-control">
                            <option ng-click="getContacts('{{$cate}}', 'all')">All</option>>       
                        @foreach( $subcategory as $subx)
                        <option  ng-click="getContacts('{{$subx->maincategory}}','{{$subx->subcategory}}')">{{$subx->subcategory}}</option>       
                        @endforeach    
                        </select>

                    </div>
                </div>
                <div class="row" style="height:30px;">
                    <div class="col-md-8" style="margin-bottom: 0px;">
                        <p style="font-size: 1.5em;margin-top: 8px;    color: #f56a00!important;">{{$cate=="importexport" ? "Import and Export" : $cate }} - (@{{subcat}})</p>
                        <p class="pull-right" style="display: inline-block;width: 30%;line-height: 24px;color: #999;font-size: 12px;text-align: right;">Showing <span style="font-style: oblique;">@{{(index == 0) ? (1) : (index * 10) + 1}}-@{{(index + 1) * 10 + 1}}</span> of <span style="font-style: oblique;">@{{resposeAll.length}}</span> results</p>
                    </div>
                </div>

                <div class="row" style="clear: both;border: none;">
                    <div class="col-md-1" >
                        <!--<button class="btn btn-sm">Change</button>-->
                    </div>
                </div>
                <div class="row" style="clear: both;">
                    <ul class="nav nav-tabs">
                        <li class="nav_menu_c active"><a href="" ng-click="sort(resposeAll, 'az')">List from A-Z</a></li>
                        <li class="nav_menu_c"><a href="#" ng-click="sort(resposeAll, 'za')">List from Z-A</a></li>
                    </ul>
                </div>
                <header class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                    </div>
                </header>
                

                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-8">
                            <div class="loader" ng-show="hiddenx"></div>
                        </div>
                        <div class="col-md-8 col-xs-12" ng-repeat="x in contacts[index]">
                            <div class="col-md-2 col-xs-4" style="height: 100%;">
                                <img src="@{{x.picture ? x.picture : '/img/AGRI LINK -01.png'}}" height="120px" width="120px" style="margin-top: 12px;" class="pull-right"/>
                            </div>
                            <div class="col-md-10 col-xs-8" >
                                <header>
                                    <a class="search_result_title" data-toggle="modal" data-target="#@{{x.phone.split(' ').join('').split('+').join('').split('/').join('').split(',').join('')}}@{{x.phone1.split(' ').join('').split('+').join('').split('/').join('').split(',').join('')}}@{{x.mobile.split(' ').join('').split('+').join('').split('/').join('').split(',').join('')}}@{{x.mobile1.split(' ').join('').split('+').join('').split('/').join('').split(',').join('')}}">
                                        <h3 style="font-size: 1.3em;" class="heading_company" >@{{ x.companyname}}</h3>
                                    </a>
                                    <small class="SearchResult-location ">
                                        <a href="../../addis-home-depot-plc.html" class="SearchResult-mapLink Link-brandAlter" property="address">
                                            <i class="fa fa-map-marker"></i>
                                            <p>@{{x.location}}</p>
                                        </a>
                                    </small>
                                    <div class="row " style="color: #f56a00!important;">
                                        <div class="col-md-12 col-xs-12">
                                            <p style="margin-bottom: 0px;">@{{x.phone}} @{{x.phone1}}</p>
                                        </div>
                                    </div>
                                    <div class="row " style="color: #f56a00!important;">
                                        <div class="col-md-12 col-xs-12">
                                            <p style="margin-bottom: 0px;">@{{x.mobile}} @{{x.mobile1}}</p>
                                        </div>
                                    </div>
                                    <div class="row " style="color: #f56a00!important;">
                                        <div class="col-md-12 col-xs-12">
                                            <p>@{{x.email}}</p>
                                        </div>
                                    </div>
                                    <div class="row " style="color: #00AEEF !important;">
                                        <div class="col-md-12 col-xs-12">
                                            <p><a href="@{{'http://' + x.website}}">@{{x.website}}</a></p>
                                            <p></p>
                                        </div>
                                    </div>
                                </header>
                            </div>
                  
<div class="modal fade product_view" id="@{{x.phone.split(' ').join('').split('+').join('').split('/').join('').split(',').join('')}}@{{x.phone1.split(' ').join('').split('+').join('').split('/').join('').split(',').join('')}}@{{x.mobile.split(' ').join('').split('+').join('').split('/').join('').split(',').join('')}}@{{x.mobile1.split(' ').join('').split('+').join('').split('/').join('').split(',').join('')}}">
    <div class="modal-dialog" id="popmodal">
        <div class="modal-content" >
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title" style="text-align: center;">@{{x.companyname}}</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-9 product_img" style="background: rgba(0,0,0,0);" >
                        <img style="float: right;max-height:500px;" src="@{{x.picture ? x.picture : '/img/AGRI LINK -01.png'}}" class="img-responsive"/>
                    </div>
                    <div class="col-md-3 product_content">
                        <h4>@{{ x.subcategory}}</h4>
                        <header>
                                    <a class="search_result_title" data-toggle="modal" data-target="#@{{x.phone}}@{{x.phone1}}@{{x.mobile}}@{{x.mobile1}}">
                                       
                                    </a>
                                    <small class="SearchResult-location ">
                                        <a href="../../addis-home-depot-plc.html" class="SearchResult-mapLink Link-brandAlter" property="address">
                                            <i class="fa fa-map-marker"></i>
                                            <p>@{{x.location}}</p>
                                        </a>
                                    </small>
                                    <div class="row" style="color: #f56a00!important;">
                                        <div class="col-md-12 col-xs-12">
                                            <p style="margin-bottom: 0px;">@{{x.phone}} @{{x.phone1}}</p>
                                        </div>
                                    </div>
                                    <div class="row " style="color: #f56a00!important;">
                                        <div class="col-md-12 col-xs-12">
                                            <p style="margin-bottom: 0px;">@{{x.mobile}} @{{x.mobile1}}</p>
                                        </div>
                                    </div>
                                    <div class="row " style="color: #f56a00!important;">
                                        <div class="col-md-12 col-xs-12">
                                            <p>@{{x.email}}</p>
                                        </div>
                                    </div>
                                    <div class="row " style="color: #00AEEF !important;">
                                        <div class="col-md-12 col-xs-12">
                                            <p><a href="@{{'http://' + x.website}}">@{{x.website}}</a></p>
                                            <p></p>
                                        </div>
                                    </div>
                                </header>
                </div>
            </div>
        </div>
    </div>
</div>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" text-center center">
                        <ul class="pagination " style="clear:both;">
                            <li><a ng-click='nextIndex()' >Prev</a></li>

                            <li ng-repeat="x in numberofPages" ng-click="changepage(x)" class="@{{x[1]}}"  > 
                                 
                                 <a class="clickcheck xxxa "  style="display: @{{Math.floor(index/10)*10<=x[0] && x[0]<=((Math.floor(index/10)*10)+10) ? 'block' : 'none'}};" >
                                    @{{x[0]}}
                                </a>
                          </li>
                            <li><a ng-click='prevIndex()'>Next</a></li>
                            <li>
                                <div class="form-group" style="display: inline-block;">
                             <select id="sel1"  class="dropdown-menu-right form-control form-group-sm"  style="display: inline-block;width:70px;position: relative;
float: left;
padding: 6px 12px;
margin-left: -1px;
line-height: 1.428571429;
text-decoration: none;
background-color: #ffffff;
border: 1px solid #dddddd;">
                                 <option ng-repeat="x in numberofPages" ng-click="changepage(x)" >@{{x[0]}}</option>
  </select>
                            </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <footer class="container-fluid" style="margin:0px !important;height:100px;background: #333;color: #fff;clear: both;">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3" style="padding-top:50px;bottom:0px;">
                    <p class="text-center"> Copy Right 2018 <i class="glyphicon glyphicon-copyright-mark"></i></p>
                </div>
            </div>
        </footer>

        <script type="text/javascript">

                $(document).ready(function () {
                    $(".nav_menu_c a").click(function () {
                        $(".nav_menu_c").removeClass("active");
                        $(this).parent().addClass("active");

                    });
                }
                );
        
                function contactscontroller($scope, $http) {
                    $scope.Math = window.Math;
                    $scope.hiddenx = true;
                    $scope.placeholder = "Organization name";
                    $scope.subcat = "{{$subcat}}";
                    $scope.term = "{{$term}}";
                    console.log($scope.subcat);
                    $scope.removeSpace = function(itemstring){
                        return itemstring.replace(/[\s]/g,'');
                    }
                    $scope.onLoad = function () {
                        if ($scope.subcat) {
                            $scope.getContacts('{{$cate}}', '{{$subcat}}');
                        }else if($scope.term){
                            $scope.search('{{$cate}}',$scope.term);
                            $scope.subcat =$scope.term;
                        }else {
                            $scope.hiddenx = true;
                            $http.get("/get/{{$cate}}")
                                    .success(function (response) {
                                        $scope.resposeAll = response;
                                        $scope.sort($scope.resposeAll, 'az');
                                        $scope.contacts = $scope.listToMatrix($scope.resposeAll, 10);
                                        $scope.hiddenx = false;
                                        if($scope.resposeAll==null){
                                            console.log("empty");
                                        }
                                    });
                        }
                    }
                    $scope.getContacts = function (category, subcategory) {
                        $scope.category = category;
                        $scope.hiddenx = true;
                        var page = "/getcontacts/";
                        $http.get(page + category + "/" + subcategory)
                                .success(function (response) {
                                    $scope.resposeAll = response;
                                    $scope.sort($scope.resposeAll, 'az');
                                    $scope.contacts = $scope.listToMatrix($scope.resposeAll, 10);
                                    $scope.hiddenx = false;
                                    $scope.subcat= subcategory;
                                    if($scope.resposeAll.length===0){
                                            console.log("empty");
                                        }
                            });
                    }
                    
                    $scope.index = 0;

                    $scope.nextIndex = function () {
                        if ($scope.index == 0) {
                            $scope.index = 0;
                        } else {
                            $scope.index--;
                        }
                        for (i = 0; i < $scope.numberofPages.length; i++) {
                            $scope.numberofPages[i][1] = "tbs";
//                                $scope.numberofPages[lindex[0]][1]="active";
                        }
                        $scope.numberofPages[$scope.index][1] = "active";
                        
                    }
                    $scope.prevIndex = function () {
                        if ($scope.index == $scope.pages - 1) {

                        } else {
                            $scope.index++;
                        }
                        for (i = 0; i < $scope.numberofPages.length; i++) {
                            $scope.numberofPages[i][1] = "tbs";
//                                $scope.numberofPages[lindex[0]][1]="active";
                        }
                        $scope.numberofPages[$scope.index][1] = "active";
                    }
                    $scope.listToMatrix = function (list, elementsPerSubArray) {
                        var matrix = [], i, k;
                        for (i = 0, k = -1; i < list.length; i++) {
                            if (i % elementsPerSubArray == 0) {
                                k++;
                                matrix[k] = [];
                            }
                            matrix[k].push(list[i]);
                            $scope.pages = k + 1;
                        }
                        $scope.numberofPages = [];
                        for (i = 1; i <= $scope.pages; i++) {
                            var num = [];
                            num.push(i);
                            num.push("tbs");
                            $scope.numberofPages.push(num);
                        }
                        $scope.numberofPages[$scope.index][1] = "active";
                        return matrix;
                    }

                    $scope.sort = function (arr, direction) {
                        $scope.hiddenx = true;
                        var len = arr.length;

                        for (var i = len - 1; i >= 0; i--) {
                            for (var j = 1; j <= i; j++) {
                                if (direction == "az") {
                                    if (arr[j - 1].companyname.toUpperCase() > arr[j].companyname.toUpperCase()) {
                                        var temp = arr[j - 1];
                                        arr[j - 1] = arr[j];
                                        arr[j] = temp;
                                    }
                                } else {
                                    if (arr[j - 1].companyname.toUpperCase() < arr[j].companyname.toUpperCase()) {
                                        var temp = arr[j - 1];
                                        arr[j - 1] = arr[j];
                                        arr[j] = temp;
                                    }
                                }
                            }
                        }
                        
                        $scope.contacts = $scope.listToMatrix(arr, 10);
                        $scope.hiddenx = false;
                        return arr;
                    }

                    $scope.changepage = function (lindex) {
                        if(lindex!==undefined){
                            for (i = 0; i < $scope.numberofPages.length; i++) {
                            $scope.numberofPages[i][1] = "tbs";
//                                $scope.numberofPages[lindex[0]][1]="active";
                        }
                        $scope.numberofPages[lindex[0] - 1][1] = "active";
//                            $scope.numberofPages[index-1].push("active");
                        $scope.index = lindex[0] - 1;
                        }
                        
                    }
                    $scope.search = function (category, searchinput) {
                        var site = "http://localhost:8000";
                        var page = "/search/";
                        $scope.hiddenx = true;
                        $http.get(page + category + "/" + searchinput)
                                .success(function (response) {
                                    $scope.resposeAll = response;
                                    $scope.sort($scope.resposeAll, 'az');
                                    $scope.contacts = $scope.listToMatrix(response, 10);
                                    $scope.hiddenx = false;
                                    if($scope.resposeAll==null){
                                            console.log("empty");
                                        }
                                });
                        $scope.category = "Search result for\" " + searchinput + "\" in " + category + " category. ";
                    }
                    $scope.onLoad();
//        console.log($scope.listToMatrix([1,2,3,4,5,6,7,8,9,],3));
                }
        </script>

    </body>
</html>