@extends('master')

@section('content')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Brand</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
   
    @foreach($brands as $brand)
    <tr>
      <th scope="row">{{$brand->id}}</th>
      <td>{{$brand->description}}</td>
      <td>
        <a href="{{route('brands.edit', ['brand' => $brand->id])}}">
          <i class="bi bi-pencil-square"></i>
        </a>

        <a href="#">
          <i class="bi bi-trash-fill"></i>
        </a>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>

@endsection