
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>

<style type="text/css">

.rating-loading {
    width: 25px;
    height: 25px;
    font-size: 0px;
    color: #fff;
    background: transparent url('../img/loading.gif') top left no-repeat;
    border: none;
}
/*
 * Stars
 */
.rating-gly {
    font-family: 'Glyphicons Halflings';
}
.rating-gly-star {
    font-family: 'Glyphicons Halflings';
    padding-left: 2px;
}

.rating-gly-star .rating-stars:before {
    padding-left: 2px;
}

.rating-lg .rating-gly-star, .rating-lg .rating-gly-star .rating-stars:before {
    padding-left: 4px;
}

.rating-xl .rating-gly-star, .rating-xl .rating-gly-star .rating-stars:before {
    padding-left: 2px;
}

.rating-active {
    cursor: default;
}

.rating-disabled {
    cursor: not-allowed;
}

.rating-uni {
    font-size: 1.2em;
    margin-top: -5px;
}

.rating-container {
    position: relative;
    vertical-align: middle;
    display: inline-block;
    color: #e3e3e3;
    overflow: hidden;
}

.rating-container:before {
    content: attr(data-content);
}

.rating-container .rating-stars {
    position: absolute;
    left: 0;
    top: 0;
    white-space: nowrap;
    overflow: hidden;
    color: #fde16d;
    transition: all 0.25s ease-out;
    -o-transition: all 0.25s ease-out;
    -moz-transition: all 0.25s ease-out;
    -webkit-transition: all 0.25s ease-out;
}

.rating-container .rating-stars:before {
    content: attr(data-content);
    text-shadow: 0 0 1px rgba(0, 0, 0, 0.7);
}

.rating-container-rtl {
    position: relative;
    vertical-align: middle;
    display: inline-block;
    overflow: hidden;
    color: #fde16d;
}

.rating-container-rtl:before {
    content: attr(data-content);
    text-shadow: 0 0 1px rgba(0, 0, 0, 0.7);
}

.rating-container-rtl .rating-stars {
    position: absolute;
    left: 0;
    top: 0;
    white-space: nowrap;
    overflow: hidden;
    color: #e3e3e3;
    transition: all 0.25s ease-out;
    -o-transition: all 0.25s ease-out;
    -moz-transition: all 0.25s ease-out;
    -webkit-transition: all 0.25s ease-out;
}

.rating-container-rtl .rating-stars:before {
    content: attr(data-content);
}

/**
 * Rating sizes
 */
.rating-xl {
    font-size: 4.89em;
}

.rating-lg {
    font-size: 3.91em;
}

.rating-md {
    font-size: 3.13em;
}

.rating-sm {
    font-size: 2.5em;
}

.rating-xs {
    font-size: 2em;
}

/**
 * Clear rating button
 */
.star-rating .clear-rating, .star-rating-rtl .clear-rating {
    color: #aaa;
    cursor: not-allowed;
    display: inline-block;
    vertical-align: middle;
    font-size: 60%;
}































body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 20px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
 
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}




* {
  box-sizing: border-box;
}



/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


</style>



<body>















<br>
<br>
<br>
<br>




<hr style="
    margin-top: 18px;
">


<!-- MAIN (Center website) -->
<section id="section-01" class="">
  
  
    <div class="home-main-intro-container">
        
        <div class="container">
<div class="main">



    
 <div class="row" >   
   <div  class="column" id="sticky"style="
  width:250px; height:500px; border:1px solid;border-color: coral;  #D3D3D3;border-radius:10px; text-align:center;" >
    
 
  <div class="filter" style="padding:60px 20px 20px 20px;">
      <img style="width:100px;border-radius:50%;" src="images/about.jpg" alt="Mountains" >
      <div style="padding-top:30px;"><h4>rshivam</h4>
      <p>music</p>
      </div>
  </div>
  <div style="padding-top:20px;padding-bottom:20px;">
      <a href="#" class="button" style="
  background-color: #4CAF50;
  border: none;
  border-radius:30px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;"
>Request a quote</a><br>
      <a href="#" class="button" style="background-color: #4CAF50;
  border: none;
   border-radius:30px;
  color: white;
  padding: 15px 61px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;"> message</a>
  </div>
  <div style="height: 148px;">
                   <a href="https://www.linkedin.com/in/" > <span style= "padding-left:10px;padding-right:10px" ><svg    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg></span></a>
<a href="https://www.facebook.com/" ><span style= "padding-left:10px;padding-right:10px" ><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></span></a>
<a href="https://twitter.com/"> <span style= "padding-left:10px;padding-right:10px" >
<svg   xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg></span></a>

                    </div>


</div>


<div class="column" style="width:950px;" >
    <div>
        <img style="  padding-left:20px;" src="images/UKR_0122.JPG" alt="Mountains" >
    </div>
    <div style="padding:20px;">
      <h3>  About Sanjeet Singh</h3>
      <p>I am a software engg by education and profession but I left my job for the passion of singing. I am an artist too by profession. I have completed my senior diploma in vocal classical from Allahabad board. My first Bengali album released from raga music in 2011. I have worked in background score in Marathi, Hindi and Bhojpuri movies. Also sang in Guinness world record of composer Virag Madhumalati for relay singing of a Marathi song from the movie "Angaar the power within". My plan right now is to playback as a solo vocalist and work as a voice over artist. </p>
    </div>
    <div style="padding:20px;">
        <h3> interested in</h3>
         <div class="row"  
    style="margin-left: 80px; ">
  <div class="column result" style="padding:20px;"  >
    
      <img style=" width:100px; " src="images/UKR_0122.JPG" alt="Mountains" >
      <h4>ramesh</h4>
      <p>dancer</p>
    
  </div>
  <div class="column result" style="padding:20px;"  >
    
      <img style=" width:100px; " src="images/UKR_0122.JPG" alt="Mountains" >
      <h4>ramesh</h4>
      <p>dancer</p>
    
  </div>
  <div class="column result" style="padding:20px;" >
   
      <img style="width:100px;" src="images/UKR_0122.JPG" alt="Mountains" >
      <h4>rshivam</h4>
      <p>music</p>
    
  </div>
 
  </div>
    </div>
    
    <div style="padding:20px;">
        <h3> Sanjeet singh's work</h3>
        <div class="dance">
      <img style="width:290px;padding:30px;" src="images/UKR_0122.JPG" alt="Mountains" >
      <h4>aman</h4>
      <p>dancer</p>
    </div>
    </div>

<div style="padding:20px;">
    <h3> other artist in music</h3>
</div>
<div> <h3> reviews</h3>
   <tr>
    <div>
     <form class="form-horizontal" action="send.php" method="post">
          <fieldset><td width="77%">
            
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Full Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your feedback here..." rows="5"></textarea>
              </div>
            </div>


            <!-- Rating -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your rating</label>
              <div class="col-md-9">
                <input id="input-21e" value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
              </div>
            </div>
    </td>
    <td align="center" valign="top" width="23%">
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-center">
                
                <button type="submit" class="btn btn-primary btn-md">Submit</button>
                <button type="reset" class="btn btn-default btn-md">Clear</button>
              </div>
            </div>
    </td>       
          </fieldset>
          </form>
        </div>
       </tr>           
         </div>
</div>





</div>


 
  


</div>
</div>
 </div>
</section>
</body>







<!-- END MAIN -->























<!--<div id="wrapper-content" class="wrapper-content pt-0 pb-0">
    <div class="banner">
        <div class="container">
            <div class="banner-content text-center">
                <div class="heading" data-animate="fadeInDown">
                    <h1 class="mb-0 text-white">
                       Sanjeet  </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="about-intro text-center pt-12 pb-11">
        <div class="container">
            <div class="jumbotron mb-9 bg-transparent p-0 text-dark">
                <h3 class="mb-7">
                    Solving One Big Problem
                </h3>
                <p class="lead mb-0 font-size-lg font-weight-normal lh-18">
                This website will be an exclusive connecting platform for all forms of Dance Artists, Instrumental Artists, Vocal Artists, Make Up Artists, Creative Designers, Choreographers, Magicians, Anchors, Visual Art Performers, Fine Art Artists, Mimicry Artists, Mime Artist, etc.    This organisation connects the vendors namely sound and light, stage productions, set designers, flower decorators, costume suppliers, accessory suppliers, photographers, videographers, caterers, venue and others.   
                The website will register the artists, organisations, vendors, etc, on an annual renewal basis and help themselves and prospective clients from across the globe to reach the members on our platform for their events.  This site will be ONE STOP ART SITE FOR ALL THE ART AND ART RELATED EVENTS.  
                This website will promote the artists, organisations for the events conducted by them from time to time, be it local or international.
                </p>
            </div>
            <div class="row counters justify-content-center">
                <div class="col-md-6 col-lg-4 mb-8">
                    <div class="counter">
                        <div>
                            <span class="counterup text-primary font-size-h1 lh-12" data-start="0" data-end="20" data-decimals="0" data-duration="0" data-separator=",">20</span>
                            <span class="text-primary font-size-h1 lh-12">+</span>
                        </div>
                        <span class="text-uppercase text-dark font-weight-semibold">cities</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-8">
                    <div class="counter">
                        <div>
                            <span class="counterup text-primary font-size-h1 lh-12" data-start="0" data-end="10000" data-decimals="0" data-duration="0" data-separator=",">10000</span>
                            <span class="text-primary font-size-h1 lh-12">+</span>
                        </div>
                        <span class="text-uppercase text-dark font-weight-semibold">Vendors</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
                    <div class="counter">
                        <div>
                        <span class="counterup text-primary font-size-h1 lh-12" data-start="0" data-end="50000" data-decimals="0" data-duration="0" data-separator=",">50000</span>
                        <span class="text-primary font-size-h1 lh-12">+</span>
                        </div>
                        <span class="text-uppercase text-dark font-weight-semibold">Register Users</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
                    <div class="counter">
                        <div>
                            <span class="counterup text-primary font-size-h1 lh-12" data-start="0" data-end="200000" data-decimals="0" data-duration="0" data-separator=",">200000</span>
                            <span class="text-primary font-size-h1 lh-12">+</span>
                        </div>
                        <span class="text-uppercase text-dark font-weight-semibold">visitors daily</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="counter">
                        <div><span class="counterup text-primary font-size-h1 lh-12" data-start="0" data-end="50000" data-decimals="0" data-duration="0" data-separator=",">50000</span>
                        <span class="text-primary font-size-h1 lh-12">+</span>
                        </div>
                        <span class="text-uppercase text-dark font-weight-semibold">REviews</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

-->





















































<!--<div id="wrapper-content" class="wrapper-content pt-0 pb-0">
    <div class="banner">
        <div class="container">
            <div class="banner-content text-center">
                <div class="heading" data-animate="fadeInDown">
                    <h1 class="mb-0 text-white">
                        We’re Building The Destination For Getting Things Done
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="about-intro text-center pt-12 pb-11">
        <div class="container">
            <div class="jumbotron mb-9 bg-transparent p-0 text-dark">
                <h3 class="mb-7">
                    Solving One Big Problem
                </h3>
                <p class="lead mb-0 font-size-lg font-weight-normal lh-18">
                This website will be an exclusive connecting platform for all forms of Dance Artists, Instrumental Artists, Vocal Artists, Make Up Artists, Creative Designers, Choreographers, Magicians, Anchors, Visual Art Performers, Fine Art Artists, Mimicry Artists, Mime Artist, etc.    This organisation connects the vendors namely sound and light, stage productions, set designers, flower decorators, costume suppliers, accessory suppliers, photographers, videographers, caterers, venue and others.   
                The website will register the artists, organisations, vendors, etc, on an annual renewal basis and help themselves and prospective clients from across the globe to reach the members on our platform for their events.  This site will be ONE STOP ART SITE FOR ALL THE ART AND ART RELATED EVENTS.  
                This website will promote the artists, organisations for the events conducted by them from time to time, be it local or international.
                </p>
            </div>
            <div class="row counters justify-content-center">
                <div class="col-md-6 col-lg-4 mb-8">
                    <div class="counter">
                        <div>
                            <span class="counterup text-primary font-size-h1 lh-12" data-start="0" data-end="20" data-decimals="0" data-duration="0" data-separator=",">20</span>
                            <span class="text-primary font-size-h1 lh-12">+</span>
                        </div>
                        <span class="text-uppercase text-dark font-weight-semibold">cities</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-8">
                    <div class="counter">
                        <div>
                            <span class="counterup text-primary font-size-h1 lh-12" data-start="0" data-end="10000" data-decimals="0" data-duration="0" data-separator=",">10000</span>
                            <span class="text-primary font-size-h1 lh-12">+</span>
                        </div>
                        <span class="text-uppercase text-dark font-weight-semibold">Vendors</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
                    <div class="counter">
                        <div>
                        <span class="counterup text-primary font-size-h1 lh-12" data-start="0" data-end="50000" data-decimals="0" data-duration="0" data-separator=",">50000</span>
                        <span class="text-primary font-size-h1 lh-12">+</span>
                        </div>
                        <span class="text-uppercase text-dark font-weight-semibold">Register Users</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
                    <div class="counter">
                        <div>
                            <span class="counterup text-primary font-size-h1 lh-12" data-start="0" data-end="200000" data-decimals="0" data-duration="0" data-separator=",">200000</span>
                            <span class="text-primary font-size-h1 lh-12">+</span>
                        </div>
                        <span class="text-uppercase text-dark font-weight-semibold">visitors daily</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="counter">
                        <div><span class="counterup text-primary font-size-h1 lh-12" data-start="0" data-end="50000" data-decimals="0" data-duration="0" data-separator=",">50000</span>
                        <span class="text-primary font-size-h1 lh-12">+</span>
                        </div>
                        <span class="text-uppercase text-dark font-weight-semibold">REviews</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->
