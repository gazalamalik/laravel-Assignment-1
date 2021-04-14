
@extends('layouts.app')

@section('content')
<div class="container">

	<!-- blockquotes -->
      <div class="row">
		<div class="float-left">
			<img src="img/pick3.jpeg" class="center-block"> 
          
              <blockquote>
                   <p>this is the example of blockquotes </p>
                   <p> is the example of blockquotes </p>
                   <p> the example of blockquotes </p>
                   <p> is the example of blockquotes </p>
                   <p>this is the example of blockquotes </p>
                   <p>this is the example of blockquotes </p>
                   <p>this is the example of blockquotes </p>

                    
                    <footer>Full name <cite title="website">website</cite></footer>
			   </blockquote>
		</div>
      </div>

<!-- list code -->
      <div class="row">
      	<ul class="list-unstyled">
      		<li>Int</li>
      		<li>short</li>
      		<li>Integer</li>
      		<li>double</li>
      		<li>float</li>
      	</ul>

      	<div class="row">
      	<ol class="list-inline">
      		<li>Int</li>
      		<li>short</li>
      		<li>Integer</li>
      		<li>double</li>
      		<li>float</li>



      	</ol>

      	<dl class="dl-horizontal">
      		<dt>java</dt>
      		<dd>java is an object orianted programming language .</dd>
      		<dt>bootstrap</dt>
      		<dd>Bootstrap is a framework use for making atractive websites for front end purpose</dd>

      		<dt>c lang</dt>
      		<dd>c is also a programing language </dd>
      		


      	</dl>

      	<!--Table code  -->

        <div class="table-responsive">
      	    <table class="table table-striped table-bordered table-hover table-condensed">
      	    	<thead>
      	    		<tr>
      	    			<th>ID</th>
      	    			<th>Name</th>
      	    			<th>Gender</th>
      	    			<th>Email</th>

      	    		</tr>
      	    		
      	    	</thead>
      	    	<tbody>
      	    		<tr class="active">
      	    			<td>1</td>
      	    			<td>Gazala</td>
      	    			<td>Female</td>
      	    			<td>gazala@gmail.com</td>      	    				
      	    		</tr>
      	    		<tr class="danger">
      	    			<td>2</td>
      	    			<td>malik</td>
      	    			<td>Female</td>
      	    			<td>malik@gmail.com</td>      	    				
      	    		</tr>
      	    		<tr class="info">
      	    			<td>3</td>
      	    			<td>mahi</td>
      	    			<td>Female</td>
      	    			<td>mahi@gmail.com</td>      	    				
      	    		</tr>
      	    		<tr class="success">
      	    			<td>4</td>
      	    			<td>aman</td>
      	    			<td>male</td>
      	    			<td>aman@gmail.com</td>      	    				
      	    		</tr>
      	    		<tr class="warning">
      	    			<td>4</td>
      	    			<td>aman</td>
      	    			<td>male</td>
      	    			<td>aman@gmail.com</td>      	    				
      	    		</tr>
      	    		
      	    	</tbody>
      		
         	</table>
        </div>


      	

      </div>
  </div>
</div>
   
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
@endsection
