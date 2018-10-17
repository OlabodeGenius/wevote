@extends('layouts.admin.master')

@section('content')
<div class="mt-5"></div>
<div class="card">
<table class="table table-hover">
  <thead>
    <tr>
     
      <th scope="col">Party</th>
      <th scope="col">photo</th>
    </tr>
  </thead>
  <tbody>
  @foreach($parties as $party)
    <tr>
     
      <td>{{$party->name}}</td>
      <td><img src="/img/party/{{$party->photo}}" class="rounded-circle" width="35" height="35"></td>
    
    </tr>
    @endforeach

  </tbody>
</table>
</div>
@endsection