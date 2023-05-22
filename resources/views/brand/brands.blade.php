@extends('master')

@section('content')

<a href="{{route('brands.create')}}"><button class="btn btn-primary">Create</button></a>

<table class="table table-striped mt-5">
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

        <a href="{{route('brands.show', ['brand' => $brand->id])}}">
          <i class="bi bi-eye-fill"></i>
        </a>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>

@endsection