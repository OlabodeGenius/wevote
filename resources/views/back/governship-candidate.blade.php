@extends('layouts.admin.master')

@section('content')
<div class="mt-5">@include('partials.message')</div>
<div class="card">
<table class="table table-hover">
  <thead>
    <tr>
     
      <th scope="col">Name</th>
      <th scope="col">Party</th>
      <th scope="col">photo</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($governors as $governor)
    <tr>
     
      <td>{{$governor->name}}</td>
      <td>{{$governor->party}}</td>
      <td><img src="{{$governor->photo}}" class="rounded-circle" width="35" height="35"></td>
      <td>
                    <a href="#">
                            <i class="fa fa-edit blue"></i>
                    </a>
                        /
                        <a href="#" >
                            <i class="fa fa-trash red"></i>
                        </a>
                    </td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>
@endsection