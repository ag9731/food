<!DOCTYPE html>
<html>
<head>
<style>
.vl {
  border-left: 3px solid grey;
  height: 850px;
  margin-left: 254px;
  margin-top:-380px;
}

ul.no-bullets {
 
  list-style-type: none;
  margin: 30;
  margin-left: -20px;
  padding-top: 0.6000px;
  
}
.center_div{  
  margin-left: 280px;
  margin-top: -45px;
    width: 650px; 
    font-size:26px;
    padding-top:1px;
}
</style>

    <title>Food-app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <h1 class="text-white" style="font-size:25px;margin-right: 130px;">Food App</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="d-flex">
        <input class="form-control me-2" style="width: 1310px;background-color:rgba(0, 0, 0, -800);border-color:black;"
         type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary" type="submit" style="border-color:black;color:white;">Sign Out</button>
      </form>
</div>
</nav><br><br>

<div class="center_div">
  CLICK ON THE ADD NEW ITEM TO CREATE A NEW ITEM
  
</div>


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
<div class="vl"></div>
</body>
</html>