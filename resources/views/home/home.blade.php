@extends('layouts.index')
@section('megamenu')
<div class="container">
    <img class="pull-left" height="70px" width="70px" src="{{asset('/img/AGRI LINK -01.png')}}" />
</div>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-agri-primary">
        <div class="container row">
            <div class="collapse navbar-collapse col-md-8" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-link ">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" >
                            Import and Export
                        </a>
                    </li>
                    @foreach($cats as $cat)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{$cat}}
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">          
                            <div class="row">
                                <?php $count = 0 ?>
                                @foreach($allcat as $c)
                                @if($c->maincategory == $cat)

                                @if($count %4==0)
                                <div class="col-md-3">
                                    <ul class="nav flex-column">
                                        @endif
                                        <li class="nav-item">

                                            <a class="nav-link" href="#" ng-click='getContacts("{{$c - > maincategory}}","{{$c - > subcategory}}")'>{{$c - > subcategory}}<?php $count++ ?></a>
                                        </li>


                                        @if($count %4==0)
                                    </ul>
                                </div>
                                @endif

                                @endif
                                @endforeach

                                <!-- /.col-md-4  -->
                            </div>
                            <!--  /.container  -->
                        </div>
                    </li>
                    @endforeach
                </ul>

            </div>

            <div class="col-xs-4 ">

                <div class="input-group">
                    <div class="input-group-btn search-panel" >
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span id="search_concept">Agriculture</span> 
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="Agriculture">Agriculture</a></li>
                            <li><a href="Import and Export">Import and Export</a></li>
                            <li><a href="Industry">Industry</a></li>
                            <li><a href="Manufacturing">Manufacturing </a></li>
                            <li class="divider"></li>
                            <li><a href="All">Any</a></li>
                        </ul>
                    </div>
                    <input type="hidden" name="search_param" id="search_param" ng-model="categorya" />
                    <input type="text" class="form-control" name="x" placeholder="Search term..." ng-model="query"/>
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" ng-click="search(categorya, query)"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
            </div>
        </div>
    </nav>
</div>
@endsection

@section('content')
<div class="container" >
    <hr/>
    <h4 style="font-weight: bold;">@{{category}}</h4>
    <div class="row mt centered">

        <div class="col-md-6" ng-repeat="x in contacts">
            <ul class="list-group">
                <li  class="list-group-item contact_heading">
                    <div class="col-md-12"><h4 class="pull-left">@{{ x.companyname}}</h4></div>
                </li>
                <li class="list-group-item contact_full">
                    <div class="col-md-6"><p class="pull-left">@{{x.email}}</p></div>
                    <div class="col-md-6"><p class="pull-left">@{{x.location}}</p></div>
                    <div class="col-md-6"><p class="pull-left">@{{x.mobile1}}</p></div>
                    <div class="col-md-6"><p class="pull-left">@{{x.mobile2}}</p></div>
                    <div class="col-md-6"><p class="pull-left">@{{x.phone}}</p></div>
                    <div class="col-md-6"><p class="pull-left">@{{x.phone1}}</p></div>
                    <div class="col-md-6"><p class="pull-left">@{{x.fax1}}</p></div>
                    <div class="col-md-6"><p class="pull-left">@{{x.fax2}}</p></div>
                    <div class="col-md-12"><p class="centered"><a href="http://@{{x.website}}">@{{x.website}}</a></p></div>
                </li>
            </ul>
        </div>
    </div><!-- /row -->
</div><!-- /container -->   

<script>
    $(document).ready(function (e) {
        $('.search-panel .dropdown-menu').find('a').click(function (e) {
            e.preventDefault();
            var param = $(this).attr("href").replace("#", "");
            var concept = $(this).text();
            $('.search-panel span#search_concept').text(concept);
            $('.input-group #search_param').val(param);
//                $('#searchvalue').val(param);
        });
    });
    function contactscontroller($scope, $http) {
        $scope.getContacts = function (category, subcategory) {
            $scope.category = category;
            var site = "http://localhost:8000";
            var page = "/getcontacts/";
            $http.get(site + page + category + "/" + subcategory)
                    .success(function (response) {
                        $scope.contacts = response;
                    });
        }
        $scope.printme = function () {
            $scope.atta = "mememememememe2";
        }

        $scope.search = function (category, searchinput) {
            category = document.getElementById('search_param').value;

            if (category == null || category == "") {
                category = "Agriculture";
            }
            var site = "http://localhost:8000";
            var page = "/search/";
            $http.get(site + page + category + "/" + searchinput)
                    .success(function (response) {
                        $scope.contacts = response;
                    });
            $scope.category = "Search result for\" " + searchinput + "\" in " + category + " category. ";
        }
    }

</script>
@endsection