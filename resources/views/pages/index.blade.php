@extends('layouts.app')

@section('content')
  <h1><center>{{$title ?? ''}} </center> </h1>
  
   
<!-- pager and pagination code -->



<ul class="pager">
  <li><a href="/index">&larr; Previous</a> </li>
  <li><a href="/index">Next &rarr;</a> </li>

</ul>

<!-- IMAGES GAILERY CODE-->

<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2><b>Bootstrap Image Gallery</b></h2>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 img-thumbnail img-responsive">
                <a href="/img1">
                    <p>Image One</p>
                    <img src="img/pick1.jpeg" class="img-thumbnail  img-responsive" style="height: 250px; width: 300px;" />
                </a>
                
            </div >

           <div class="col-lg-3 col-md-4 col-sm-6 img-thumbnail img-responsive">
                <a href="/img2">
                    <p>Image two</p>
                    <img src="img/pick2.jpeg" class="img-thumbnail  img-responsive"  style="height: 250px; width: 300px;"/>
                </a>
                
            </div >
            
            <div class="col-lg-3 col-md-4 col-sm-6 img-thumbnail img-responsive">
                <a href="/img3">
                    <p>Image three</p>
                    <img src="img/pick3.jpeg" class="img-thumbnail  img-responsive"  style="height: 250px; width: 300px;" />
                </a>
                
            </div >
            
            <div class="col-lg-3 col-md-4 col-sm-6 img-thumbnail img-responsive">
                <a href="/img4">
                    <p>Image four</p>
                    <img src="img/pick4.jpeg" class="img-thumbnail  img-responsive" style="height: 250px; width: 300px;"/>
                </a>
                
            </div ><br>
            
            <div class="col-lg-3 col-md-4 col-sm-6 img-thumbnail img-responsive">
                <a href="img/pick5.jpeg">
                    <p>Image five</p>
                    <img src="img/pick5.jpeg" class="img-thumbnail  img-responsive" style="height: 250px; width: 300px;"/>
                </a>
                
            </div >
            <div class="col-lg-3 col-md-4 col-sm-6 img-thumbnail img-responsive">
                <a href="img/pick6.jpeg">
                    <p>Image six</p>
                    <img src="img/pick6.jpeg" class="img-thumbnail  img-responsive"  style="height: 250px; width: 300px;"/>
                </a>
                
            </div >
            <div class="col-lg-3 col-md-4 col-sm-6 img-thumbnail img-responsive">
                <a href="img/bg3.jpeg">
                    <p>Image seven</p>
                    <img src="img/bg3.jpeg" class="img-thumbnail  img-responsive" style="height: 250px; width: 300px;"/>
                </a>
                
            </div >
            <div class="col-lg-3 col-md-4 col-sm-6 img-thumbnail img-responsive">
                <a href="img/bg1.jpeg">
                    <p>Image eight</p>
                    <img src="img/bg1.jpeg" class="img-thumbnail  img-responsive" style="height: 250px; width: 300px;"/>
                </a>
                
            </div >

            


        </div>
    

        <br><br>






<!-- main content image gailery -->
     <div class="container">
        <div class="row">
           <div class="col-md-2 " >
              <div class="customDiv">Left Content </div>
           </div>
           <div class="col-md-8">
              <div class="customDiv">Main Content</div>
           </div>
           <div class="col-md-2">
              <div class="customDiv">Right Content</div>
           </div>
           
          
        </div>



    </div>
    <br>


<!-- Footer -->

<footer class="bg-light text-center text-lg-start">
  
  <div class="container p-4">
    
    <div class="row">
      
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Contact us</h5>

        <p>
                                              
          molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
          voluptatem veniam, est atque cumque eum delectus sint!
        </p>
      </div>
    

      
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
           <h5 class="text-uppercase">Click Here</h5>

              <ul class="list-unstyled mb-0 ">
                  <li>
                     <a href="https://www.youtube.com/watch?v=lAh2uPzoGyg&list=PL6n9fhu94yhXd4xnk-j5FGhHjUv1LsF0V&index=4" class="text-dark"><img src="img/You_Tube.png"height="50px" width="50px"></a>
                   </li>
                   <li>
                       <a href="#!" class="text-dark"><img src="img/facebook.png" height="50px" width="50px"></a>
                   </li>
                    <li>
                        <a href="#!" class="text-dark"><img src="img/twiter.png" height="50px" width="50px"></a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark"><img src="img/instagram.png" height="50px" width="50px"></a>
                    </li>
               </ul>
       </div>
      

    
       <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
               <h5 class="text-uppercase mb-0">check here </h5>
     
                   <ul class="list-unstyled">
                       <li>
                           <a href="#!" class="text-dark">Instagram</a>
                       </li>
                       <li>
                           <a href="#!" class="text-dark">Facebook</a>
                       </li>
                       <li>
                           <a href="#!" class="text-dark">Twiter</a>
                       </li>
         
                   </ul>
        </div>
      
    </div>
    
  </div>
  

  
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    
    <a class="text-dark" href="index.html">Thank You for visiting </a>
  </div>
  
</footer>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
    
  
@endsection
