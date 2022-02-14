@extends('items.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color:black";>Add New Item</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('items.create') }}"> Create New Item</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
  
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th>Categorie</th>
            <th>Status</th>
            <th>Final Weight</th>
            <th>Quantity</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->detail }}</td>
            <td>{{ $item->gender }}</td>
            <td>{{ $item->status }}</td>
            <td>{{ $item->finalw }}</td>
            <td>{{ $item->quantity }}</td>
            <td>
                <form action="{{ route('items.destroy',$item->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('items.show',$item->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('items.edit',$item->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $items->links() !!}
      
@endsection