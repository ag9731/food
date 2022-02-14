<!DOCTYPE html>
<html>
<style>
        ul.no-bullets {
 
 list-style-type: none;
 margin: 30;
 margin-left: -20px;
 padding-top: 0.6000px;
 
}
.vl {
  border-left: 3px solid grey;
  height: 850px;
  margin-left: -25px;
  margin-top:-576px;
}
.topright {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
}
.down { 
  position:fixed;
padding-top:5px;
padding-bottom:30px; 
Bottom: 900px; 
Top:185px;
margin-left:-20px;

} 
.dropdown-toggle::after {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: .3em;
    vertical-align: middle;
    content: "";
    border-top: .3em solid;
    border-right: .3em solid transparent;
    border-left: .3em solid transparent;
    float: right;
    margin-top: 8px;
}

</style>
<head>
    <title>Add new food</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <h1 class="text-white" style="font-size:25px;margin-right: 100px;">Food App</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="d-flex">
        <input class="form-control me-2" style="width: 1000px;background-color:rgba(0, 0, 0, -800);border-color:black;"
         type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary" type="submit" style="border-color:black;color:white;">Sign Out</button>
      </form>
</div>
</nav>
<ul class="no-bullets">
  <lh style="opacity: 0.85;">FOOD</lh><br><br>
  <li><a class="text-dark" href="#">Add New Food</li></a><br>
  <li><a class="text-dark" href="#">List of all Foods</li></a><br>
</ul>
<ul class="no-bullets">
  <lh style="opacity: 0.85;">ITEMS</lh><br><br>
  <li><a class="text-dark" href="{{ route('items.create') }}">Add New Item</li></a><br>
  <li><a class="text-dark" href="#">List of all Items</li></a><br>
</ul>
<div class="container" style="margin-left: 250px;margin-top: -310px;">
    @yield('content')
</div>
   <div class="vl"></div>
</body>
</html>