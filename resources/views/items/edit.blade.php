@extends('items.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Item</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('items.index') }}"> Back</a>
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
  
    <form action="{{ route('items.update',$item->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">

                <div class="form-group">

                <label for="categorie"><strong>Select Categorie</strong></label>
    <select id="page" name="gender" class="form-control dropdown-toggle" value="{{$item->gender}} style="width:500px">
   
    <option value="choose" >Choose...</option>
        <option value="vegetables">Vegetables</option>
        <option value="fruits">Fruits</option>

    </select>
</div>
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $item->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <input type="text" name="detail" value="{{ $item->detail }}" class="form-control" placeholder="Description">
                </div>
            </div>

            <div class="form-group">
    <label for="status"><strong>Status</strong></label>
    <select id="page" name="status" class="form-control dropdown-toggle" value="{{$item->status}} style="width:500px">
   
    <option value="vehicle" >Choose...</option>
        <option value="yes">yes</option>
        <option value="no">no</option>

    </select>
</div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Final Weight:</strong>
                    <input type="text" name="finalw" value="{{ $item->finalw }}" class="form-control" placeholder="Final Weight">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection