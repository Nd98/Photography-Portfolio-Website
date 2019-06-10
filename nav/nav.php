<nav class="navbar fixed-top navbar-expand-lg">
  <a class="navbar-brand" href="#">
    <img src="../data/logo.png" width="100" height="30" alt="">
  </a>
  <button id="nav-tog" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i id="tog-icon" class="fas fa-angle-double-down"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto mr-1">
      <li class="nav-item active">
        <a class="nav-link" href="../home/index.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#">
         Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Candid Photography</a>
          <a class="dropdown-item" href="#">Traditional Photography</a>
          <a class="dropdown-item" href="#">Pre-wedding Shoots</a>
          <a class="dropdown-item" href="#">Cinematography</a>
          <a class="dropdown-item" href="#">Photobooth</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../portfolio/index.php">Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../about/index.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../contact/index.php">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
<script>
  $("#nav-tog").click(function(){
      var c = $(".navbar").css("background-color");
      if(c == "rgba(0, 0, 0, 0)"){
        $(".navbar").css("background-color","black");
        $("#tog-icon").addClass("fa-times");
      }
      else{
        $(".navbar").css("background-color","transparent");
        $("#tog-icon").removeClass("fa-times"); 
      }
  });
</script>