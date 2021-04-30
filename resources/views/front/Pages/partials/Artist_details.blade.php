


<style type="text/css">
























  .loader-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: white;
  z-index: 998;
}
.loader-overlay .preloader-wrapper {
  position: fixed;
  top: 50%;
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



</style>



<body>

















<!-- MAIN (Center website) -->
<section id="section-01" class="">
  
  
    <div class="home-main-intro-container">
        
        <div class="container">
<div class="main">
<br>
<br>
<br>
<br>
<hr style="margin-top:20px;">

<h1 style="color:#708090">Artists</h1>
<hr>




    
 <div class="row" >   
   <div class="column"style="width:250px; height:450px; border:1px solid 	#D3D3D3;border-radius:10px;" >
    <div Style="padding:20px 20px 10px 20px;"><h4 style="color:#708090">Filter</h4></div>
  <div class="filter" style="padding:10px 20px 20px 20px;">
    <h5 >Filter by Category</h5>
    
    <div class="models" Style="padding-left:10px;">
      <div class="checkbox">
        <label><input type="checkbox" rel="dance" onchange="change();"/>&nbsp;&nbsp;dance</label>
      </div>
      <div class="checkbox">
        <label><input type="checkbox" rel="magic" onchange="change();"/>&nbsp;&nbsp;magic</label>
      </div>
      <div class="checkbox">
        <label><input type="checkbox" rel="music" onchange="change();"/>&nbsp;&nbsp;music</label>
      </div>
    </div>
    
  </div>


</div>

<div class="column" style="width:950px;" >

<div class="row"  
    style="margin-left: 100px;margin-right: 80px; text-align:center;">
  <div class="column result"   >
    <div class="dance">
      <img style="border-radius:50%; width:230px; padding:50px;" src="images/about.jpg" alt="Mountains" >
      <h4 style="color:#708090">ramesh</h4>
      <p>dancer</p>
    </div>
  </div>
  <div class="column result"  >
    <div class="music">
      <img style="border-radius:50%; width:230px;padding:50px;" src="images/about.jpg" alt="Mountains" >
      <h4 style="color:#708090">rshivam</h4>
      <p >music</p>
    </div>
  </div><div class="column result"  >
    <div class="dance">
      <img style="border-radius:50%; width:230px;padding:50px;" src="images/about.jpg" alt="Mountains" >
      <h4 style="color:#708090">aman</h4>
      <p>dancer</p>
    </div>
  </div><div class="column result"  >
    <div class="magic">
      <img style="border-radius:50%; width:230px;padding:50px;" src="images/about.jpg" alt="Mountains" >
      <h4 style="color:#708090">simmba</h4>
      <p>magic</p>
    </div>
  </div><div class="column result" >
    <div class="magic">
      <img style="border-radius:50%; width:230px;padding:50px;" src="images/about.jpg" alt="Mountains" >
      <h4 style="color:#708090">vijay</h4>
      <p>magic</p>
    </div>
  </div><div class="column result" >
    <div class="dance">
      <img style="border-radius:50%; width:230px;padding:50px;" src="images/about.jpg" alt="Mountains" >
      <h4 style="color:#708090">abc</h4>
      <p>dancer</p>
    </div>
  </div><div class="column result" >
    <div class="music">
      <img style="border-radius:50%; width:230px;padding:50px;" src="images/about.jpg" alt="Mountains" >
      <h4 style="color:#708090">mandy</h4>
      <p>music</p>
    </div>
  </div><div class="column result" >
    <div class="dance">
      <img style="border-radius:50%; width:230px;padding:50px;" src="images/about.jpg" alt="Mountains" >
      <h4 style="color:#708090">nancy</h4>
      <p>dancer</p>
    </div>
  </div><div class="column result" >
    <div class="dance">
      <img style="border-radius:50%; width:230px;padding:50px;" src="images/about.jpg" alt="Mountains" >
      <h4 style="color:#708090">rj</h4>
      <p>dancer</p>
    </div>
  </div><div class="column result" >
    <div class="music">
      <img style="border-radius:50%; width:230px;padding:50px;" src="images/about.jpg" alt="Mountains" >
      <h4 style="color:#708090">anjali</h4>
      <p>music</p>
    </div>
  </div>
  
</div>


</div>


</div>





<!--<div class="row"  style="text-align: center;">-->
  
   <!-- <div class="content" >-->
 <!-- <div class="result">
    <div class="dance">
      <img style="border-radius:50%" src="images/0077-Jain-Studio-230219.JPG" alt="Mountains" >
      <h4>ramesh</h4>
      <p>dancer</p>
    </div>
    <div class="dance">
      <img style="border-radius:50%" src="images/0077-Jain-Studio-230219.JPG" alt="Mountains" >
      <h4>sanjeet</h4>
      <p>dancer</p>
    </div><div class="dance">
      <img style="border-radius:50%" src="images/0077-Jain-Studio-230219.JPG" alt="Mountains" >
      <h4>aman</h4>
      <p>dancer</p>
    </div><div class="dance">
      <img style="border-radius:50%" src="images/0077-Jain-Studio-230219.JPG" alt="Mountains" >
      <h4>rohit</h4>
      <p>dancer</p>
    </div>
    <div class="music">
      <img style="border-radius:50%" src="images/0077-Jain-Studio-230219.JPG" alt="Mountains" >
      <h4>ajay</h4>
      <p>musician</p>
    </div>
    <div class="music">
      <img style="border-radius:50%" src="images/0077-Jain-Studio-230219.JPG" alt="Mountains" >
      <h4>rahul</h4>
      <p>musician</p>
    </div>
    <div class="magic">
      <img style="border-radius:50%" src="images/0077-Jain-Studio-230219.JPG" alt="Mountains" >
      <h4>ram</h4>
      <p>magician</p>
    </div>
  <!--</div>-->
 <!-- </div>
  </div>
 -->
 </div>
 </div>
 </div>
 </section>
</body>



<script>
 function change() {
  var modelCbs = document.querySelectorAll(".models input[type='checkbox']");
  var processorCbs = document.querySelectorAll(".processors input[type='checkbox']");
  var filters = {
    models: getClassOfCheckedCheckboxes(modelCbs),
    processors: getClassOfCheckedCheckboxes(processorCbs)
  };

  filterResults(filters);
}

function getClassOfCheckedCheckboxes(checkboxes) {
  var classes = [];

  if (checkboxes && checkboxes.length > 0) {
    for (var i = 0; i < checkboxes.length; i++) {
      var cb = checkboxes[i];

      if (cb.checked) {
        classes.push(cb.getAttribute("rel"));
      }
    }
  }

  return classes;
}

function filterResults(filters) {
  var rElems = document.querySelectorAll(".result div");
  var hiddenElems = [];

  if (!rElems || rElems.length <= 0) {
    return;
  }

  for (var i = 0; i < rElems.length; i++) {
    var el = rElems[i];

    if (filters.models.length > 0) {
      var isHidden = true;

      for (var j = 0; j < filters.models.length; j++) {
        var filter = filters.models[j];

        if (el.classList.contains(filter)) {
          isHidden = false;
          break;
        }
      }

      if (isHidden) {
        hiddenElems.push(el);
      }
    }

    if (filters.processors.length > 0) {
      var isHidden = true;

      for (var j = 0; j < filters.processors.length; j++) {
        var filter = filters.processors[j];

        if (el.classList.contains(filter)) {
          isHidden = false;
          break;
        }
      }

      if (isHidden) {
        hiddenElems.push(el);
      }
    }
  }

  for (var i = 0; i < rElems.length; i++) {
    rElems[i].style.display = "block";
  }

  if (hiddenElems.length <= 0) {
    return;
  }

  for (var i = 0; i < hiddenElems.length; i++) {
    hiddenElems[i].style.display = "none";
  }
}




</script>



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

