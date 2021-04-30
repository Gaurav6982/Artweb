
<style type="text/css">
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}






.search-form {
  width: 80%;
  margin: 0 auto;
  margin-top: 1rem;
}

.search-form input {
  height: 100%;
  background: transparent;
  border: 0;
  display: block;
  width: 100%;
  padding: 1rem;
  height: 100%;
  font-size: 1rem;
}

.search-form select {
  background: transparent;
  border: 0;
  padding: 1rem;
  height: 100%;
  font-size: 1rem;
}



.search-form button {
  height: 100%;
  width: 100%;
  font-size: 1rem;
}

.search-form button svg {
  width: 24px;
  height: 24px;
}






.card-margin {
    margin-bottom: 1.875rem;
}

@media (min-width: 992px){
.col-lg-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
}
}

.card-margin {
    margin-bottom: 1.875rem;
}
.card {
    border: 0;
    box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    -webkit-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    -moz-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    -ms-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 1px solid #e6e4e9;
    border-radius: 8px;
}







.no-gutters { 
  
  overflow:hidden;
}





@media screen and (max-width: 400px) {
   #one { 
    float: none;
    margin-right:0;
    width:auto;
    border:0;
    border-bottom:2px solid #000;    
  }
}



</style>
<header id="header" class="main-header header-sticky header-sticky-smart header-style-01 header-float text-uppercase">
    <div class="header-wrapper sticky-area" style="background-color:#ffe58d;
background-image: linear-gradient(315deg, #ffe58d 60%,#ff9999 75%);">
        <div class="container container-1720">
            <nav class="navbar navbar-expand-xl" style="
    height: 72px;">
                <div class="header-mobile d-flex d-xl-none flex-fill justify-content-between align-items-center">
                    <div class="navbar-toggler toggle-icon" data-toggle="collapse" data-target="#navbar-main-menu">
                        <span></span>
                    </div>
                       <a class="mobile-button-search" href="#search-popup" data-gtf-mfp="true" data-mfp-options='{"type":"inline","mainClass":"mfp-move-from-top mfp-align-top search-popup-bg","closeOnBgClick":false,"showCloseBtn":false}'><i class="far fa-search"></i></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-main-menu" style="height:72px;">
                    <a class="navbar-brand d-none d-xl-block mr-auto" href="{{route('home')}}">
                        <img style="width:100px;height:70px" src="{{asset('images/logo.png')}}" alt="TheDir">
                    </a>

                    @php
                        $allCategory=\App\Models\SubCategoryForAdmin::with(['parent_category'])->get();

                        $allCategory=$allCategory->groupBy('parent_category.name')->toArray();
                        $allCity=\App\Models\HighlightedCitiesForAdmin::all();

                    @endphp

                    <ul class="navbar-nav">
                        <li class="nav-item">
                             <a class="nav-link" href="http://dtechblradmin.xyz/artweb/public/">Home<span class="caret"></span></a>
                         
                         </li>
                         <!--
                            <a class="nav-link" href="#">Products & Services<span class="caret"><i class="fas fa-angle-down"></i></span></a>
                            <ul class="sub-menu x-animated x-fadeInUp">

                                @foreach($allCategory as $c=>$sc)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">{{$c}}<span class="caret"><i class="fas fa-angle-down"></i></span></a>
                                        <ul class="sub-menu x-animated x-fadeInUp">
                                           @foreach($sc as $osc)
                                            <li class="nav-item"><a class="nav-link" href="blog-listing-grid.html">
                                                {{$osc['name']}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>

                                @endforeach

                            </ul>-->
                        </li>

                      <!--  <li class="nav-item">
                            <a class="nav-link" href="{{route('aboutusForFrontEnd')}}">City</a>
                        </li>--><li class="nav-item">
                            <a class="nav-link" href="{{route('artist_detailsForFrontEnd')}}">ARTIST</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contactusForFrontEnd')}}">Teachers</a>
                        </li>
                       <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Services <span class="caret"><i class="fas fa-angle-down"></i></span></a>
                            <ul class="sub-menu x-animated x-fadeInUp">
                             
                                  <!--  <li class="nav-item">
                                                               <li class="nav-item">
                            <a class="nav-link" href="#">Register <span class="caret"><i class="fas fa-angle-down"></i></span></a>
                           
                        </li>
                       

                                    </li>-->
                              
                            <!--     <li class="nav-item">
                                                                <li class="nav-item">
                            <a class="nav-link" href="#">International <span class="caret"><i class="fas fa-angle-down"></i></span></a>
                            <ul class="sub-menu x-animated x-fadeInUp">
                             
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Dance</a>

                                    </li>
                              
                                
                              
                              

                            </ul>
                        </li>
                       

                                    </li>
                              
                              

                            </ul>-->
                        </li>
                  <!--     <li class="nav-item">
                            <a class="nav-link" href="{{route('aboutusForFrontEnd')}}">Photo</a>
                        </li><li class="nav-item">
                            <a class="nav-link" href="{{route('contactusForFrontEnd')}}">Video</a></a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('aboutusForFrontEnd')}}">Group Perforamnce</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('aboutusForFrontEnd')}}">Institution</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('aboutusForFrontEnd')}}">Event/Support</a>
                        </li>
                    </ul>
                    <div class="header-customize justify-content-end align-items-center d-none d-xl-flex">



                        <div class="header-customize-item" v-cloak :class="{'hide-custom':!sessionStarted}">

                            <a v-cloak v-on:click="openLoginModel" v-if="!userLoggedIn " href="#login-popup" class="link" data-gtf-mfp="true" data-mfp-options='{"type":"inline"}' >
                                <svg class="icon icon-user-circle-o">
                                    <use xlink:href="#icon-user-circle-o"></use>
                                </svg>
                                Log in</a>
                            <a v-cloak v-if="userLoggedIn " href="#login-popup" class="link" data-gtf-mfp="true" data-mfp-options='{"type":"inline"}'>
                                <svg class="icon icon-user-circle-o">
                                    <use xlink:href="#icon-user-circle-o"></use>
                                </svg>
                               My Profile</a>
                        </div>

                        <div class="header-customize-item flash animated infinite" v-cloak :class="{'hide-custom':sessionStarted}">

                            <span> <small class="text-muted">Fetching User info</small> <i class="fas fa-circle-notch fa-spin "></i></span>
                        </div>

                        <!--@if((auth()->check() && (!auth()->user()->roles->contains(USER_ROLE) && auth()->user()->roles->contains(VENDOR_ROLE))) || !auth()->check() )
                        <div class="header-customize-item button">
                            <a href="{{route('add_list')}}" class="btn btn-primary btn-icon-right">Add
                                Listing
                                <i class="far fa-angle-right"></i></a>
                        </div>
                        @endif-->
                    </div>
                </div>
                
                
                
                
            </nav>
            
        </div>
        
    </div>
    <div style="margin-left:-100px" data-animate="fadeInDown">
<div class="row">
  <div class="column" style="margin-left: 150px; height:54px; width:32%;padding-top:6px;" >
     <div class="col-lg-12 card-margin">
        <div class="card search-form" style="width:467px">
            <div class="card-body p-0" style="width: 452px;">
                <form id="search-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="row no-gutters">
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Location</option>
                                        <option>London</option>
                                        <option>Boston</option>
                                        <option>Mumbai</option>
                                        <option>New York</option>
                                        <option>Toronto</option>
                                        <option>Paris</option>
                                    </select>
                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-12 p-0">
                                    <input type="text" placeholder="Search..." class="form-control" id="search" name="search">
                                </div>
                                <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                                    <button type="submit" class="btn btn-base">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
  <div class="column" style="width:800px;padding-right:0px;height:54px;" >
     <div  style="width:100%; ">
                                     <nav class="navbar navbar-expand-xl" style="margin-left:0px; padding-top:0px; height:54px;">
                

                    
                    @php
                        $allCategory=\App\Models\SubCategoryForAdmin::with(['parent_category'])->get();

                        $allCategory=$allCategory->groupBy('parent_category.name')->toArray();
                        $allCity=\App\Models\HighlightedCitiesForAdmin::all();

                    @endphp
                                     <ul class="navbar-nav" style="padding-left:80px;">
                        <!--<li class="nav-item">
                            <a class="nav-link" href="http://dtechblradmin.xyz/artweb/public/">Home<span class="caret"></span></a>-->
                            <!--<ul class="sub-menu x-animated x-fadeInUp">

                                @foreach($allCategory as $c=>$sc)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">{{$c}}<span class="caret"><i class="fas fa-angle-down"></i></span></a>
                                        <ul class="sub-menu x-animated x-fadeInUp">
                                           @foreach($sc as $osc)
                                            <li class="nav-item"><a class="nav-link" href="blog-listing-grid.html">
                                                {{$osc['name']}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>

                                @endforeach

                            </ul>-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('aboutusForFrontEnd')}}">Art</a>
                        </li>
<li class="nav-item">
                            <a class="nav-link" href="{{route('aboutusForFrontEnd')}}">About us</a>
                        </li><li class="nav-item">
                            <a class="nav-link" href="{{route('contactusForFrontEnd')}}">Upcoming events</a>
                        </li>
                        
                        <!--<li class="nav-item">
                            <a class="nav-link" href="{{route('contactusForFrontEnd')}}">Achievement Highlight</a>
                        </li>-->
                       
                     <!--   <li class="nav-item">
                            <a class="nav-link" href="#">Services <span class="caret"><i class="fas fa-angle-down"></i></span></a>
                            <ul class="sub-menu x-animated x-fadeInUp">
                             
                                  <!--  <li class="nav-item">
                                                               <li class="nav-item">
                            <a class="nav-link" href="#">Register <span class="caret"><i class="fas fa-angle-down"></i></span></a>
                           
                        </li>
                       

                                    </li>-->
                              
                      <!--           <li class="nav-item">
                                                                <li class="nav-item">
                            <a class="nav-link" href="#">International <span class="caret"><i class="fas fa-angle-down"></i></span></a>
                            <ul class="sub-menu x-animated x-fadeInUp">
                             
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Dance</a>

                                    </li>
                              
                                
                              
                              

                            </ul>
                        </li>
                       

                                    </li>
                              
                              

                            </ul>
                        </li>-->
                       <li class="nav-item">
                            <a class="nav-link" href="{{route('aboutusForFrontEnd')}}">Gallery</a>
                        </li><li class="nav-item">
                            <a class="nav-link" href="{{route('contactusForFrontEnd')}}">Videos</a></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contactusForFrontEnd')}}">Contact Us</a></a>
                        </li>
                    </ul>
                   <!-- <div class="header-customize justify-content-end align-items-center d-none d-xl-flex">
                        <div class="header-customize-item button-search">
                            <a class="mobile-button-search" href="#search-popup" data-gtf-mfp="true" data-mfp-options='{"type":"inline","mainClass":"mfp-move-from-top mfp-align-top search-popup-bg","closeOnBgClick":false,"showCloseBtn":false}'><i class="far fa-search"></i></a>
                        </div>-->
                   <!--     <div class="header-customize-item" v-cloak :class="{'':!sessionStarted}">
                            <a v-cloak v-if="!userLoggedIn"  href="#login-popup" ref="loginBtn" class="link" data-gtf-mfp="true" data-mfp-options='{"type":"inline"}'>
                                <svg class="icon icon-user-circle-o">
                                    <use xlink:href="#icon-user-circle-o"></use>
                                </svg>
                                Log in</a>

                            <a v-cloak v-if="userLoggedIn"  href="#login-popup" class="link" data-gtf-mfp="true" data-mfp-options='{"type":"inline"}'>
                                <svg class="icon icon-user-circle-o">
                                    <use xlink:href="#icon-user-circle-o"></use>
                                </svg>
                                My Profile</a>



                        </div>
-->

                     <!--   <div class="header-customize-item flash animated infinite" v-cloak :class="{'hide-custom':sessionStarted}">

                            <span> <small class="text-muted">Fetching User info</small> <i class="fas fa-circle-notch fa-spin "></i></span>
                        </div>
                        @if((auth()->check() && (!auth()->user()->roles->contains(2) && auth()->user()->roles->contains(4))) || !auth()->check() )
                       <!-- <div class="header-customize-item">
                            @if(request()->route()->getName()!="add_list")
                            <a href="{{route('add_list')}}" class="btn btn-primary btn-icon-right" >Add
                                Listing <i class="far fa-angle-right"></i></a>
                            @endif
                        </div>
                        @endif-->
                    
                </div>
  </div>
</div>

      </div>      
</header>

