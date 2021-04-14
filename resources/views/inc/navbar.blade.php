 <!-- NAVIGATION CODE-->
 
  <nav class="navbar navbar-expand-lg navbar-light bg-light  navbar-fixed-top">
  <a class="navbar-brand" href="https://getbootstrap.com/"><img  src="img/bootstrap.png" height="50px" width="50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <a class="navbar-brand" href="/">{{config('app.name','Bootstrap_Assignment')}}</a>
    <ul class="navbar-nav">
        
      <li class="nav-item active"><a  href="/" class="nav-link active">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="/">Img_Gailery</a>
      </li>
      <li class="nav-item"><a class="nav-link" href="/Grid">Grid_Content</a>
      </li>
      <li class="nav-item active"><a class="nav-link active" href="/signup">signup</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="/drop" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown list
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/">HOME</a>
          <a class="dropdown-item" href="/">IMAGE_GAL</a>
          <a class="dropdown-item" href="/">BELOW_CONTENT</a>
        </div>


      </li>
    </ul>
  </div>
</nav>



