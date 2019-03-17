<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="home.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
  <body background="homePage.jpg">
    <div class="topnav">
      <a class="active" href="#home">Home</a>
      <a href="interest.html">Interest</a>
      <a href="profile.html">profile</a>
      <a href="#internship">internship</a>
      <a href="#about">About</a>
      <div class="search-container">
        <form action="/action_page.php">
          <input type="text" placeholder="Search.." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
    <div class="container">
      
      
        <div class="form-group">
          <label for="comment"></label>
          <textarea class="form-control" rows="5" id="comment" name="text" placeholder="what's on your mind..."></textarea>
        </div>
        <button  class="btn btn-primary" onclick="showCard()">Submit</button>
    
      <br><br><br>
      <div>
          <div id="posts" class="">
    
            </div>
      </div>
      
    </div>

    <script src="home.js"></script>
  </body>
</html>
