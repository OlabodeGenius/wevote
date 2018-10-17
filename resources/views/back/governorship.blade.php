@extends('layouts.admin.master')

@section('content')

<div class="mt-5">
@include('partials.message')
<div class="row">
@foreach($governors as $governor)
<div class="col-md-4">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{$governor->photo}}" height="150" width="150" alt="Card image cap">
  <div class="card-body">
    <center><h5 class="card-title">{{$governor->name}}</h5><center>
    <center> <img class="card-img-top" src="/img/party/{{$governor->party_logo}}" height="75" width="80px" alt="Card image cap">
</center>
<br><br>
<form action="{{ route('vote') }}" method="post">
                            @csrf
                                <input type="hidden" readonly value="{{ $governor->id }}" name="candidate" />
                                <input type="hidden" readonly value="{{ $governor->state_id }}" name="state" />
								<div class="form-group text-center">
									<button type="submit" class="btn btn-primary btn-lg"> Vote for {{$governor->name}}</button>
								</div>
								
							</form>
  </div>
</div>
</div>
@endforeach
</div>
</div>

@endsection