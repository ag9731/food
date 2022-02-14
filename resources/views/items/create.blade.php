@extends('items.layout')
  
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Item</h2>
        </div>
        <div class="pull-right">
            
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   <br>
<form action="{{ route('items.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        
            
            <div class="form-group">
    <label for="categorie"><strong>Select Categorie</strong></label>
    <select id="page" name="gender" class="form-control dropdown-toggle" style="width:500px">
   
    <option value="choose" >Select Anyone...</option>
        <option value="vegetables">Vegetables</option>
        <option value="fruits">Fruits</option>

    </select>
</div>






                <strong>Name</strong>
                <br>
                <input type="text" name="name" class="form-control" placeholder="Name" style="width:500px">
            </div>
        </div>
        <br>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            
        <div class="form-group">
                <strong>Description</strong>
                <br>
                <input type="text" name="detail" class="form-controll" placeholder="Description" style="width:500px">
            </div>
        </div>

        <div class="form-group">
    <label for="status"><strong>Status</strong></label>
    <select id="page" name="status" class="form-control dropdown-toggle" style="width:500px">
   
    <option value="vehicle" >Choose...</option>
        <option value="yes">yes</option>
        <option value="no">no</option>

    </select>
</div>

<div class="form-group">
                <strong>Final Weight</strong>
                <br>
                <input type="text" name="finalw" class="form-controll" placeholder="Final Weight" style="width:500px">
            </div>
<br>
<br>
<br>
            <div class="form-group">
                <strong>Quantity</strong>
                <br>
                <input type="text" name="quantity" class="form-controll" placeholder="Quantity" 
                style="width:500px">
            </div>
      

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    
   
</form>
@endsection