@extends('layouts.master')

@section('content')

<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Duration</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($adverts as $advert)
        <tr>      
            <th scope="row">1</th>
            <td>{{ $advert->title }}</td>
            <td>{{ $advert->description }}</td>
            <td>{{ $advert->image }}</td>
            <td>{{ $advert->duration }}</td>
            <td>Edit, View, Delete</td>  
      </tr>
      @endforeach
    </tbody>
  </table>

@stop



