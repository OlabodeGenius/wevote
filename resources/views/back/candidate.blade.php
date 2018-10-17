@extends('layouts.admin.master')

@section('content')
<div class="container-fluid">
    <div class="row mt-5">
    
        <div class="col-md-8">
        @include('partials.message')
        <div class="card card-primary ">
          <div class="card-header">
            <h3 class="card-title">Add Candidate</h3>
          </div>
          <!-- /.card-header -->
          <form action="{{ url('/candidate') }}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Select party</label>
                  <select class="form-control" class="form-control"  name="party">`
                    <option>Select Party</option>
                      @foreach($parties as $party)
                        <option value="{{ $party->id}}"> {{ $party->name}} </option>
                      @endforeach  
                  </select>
                </div>
                </div>
                <!-- /.form-group -->
                <div class="col-md-6">
                <div class="form-group">
                <label>Select candidate type</label>
                  <select class="form-control" class="form-control"  name="candidate_type">
                    <option>Select candidate type</option>
                    <option value="Presential Candidate">Presidential Candidate</option>
                  <option value="Governorship Candidate">Governorship Candidate</option>
                  </select>         
                </div>
                </div>
                <!-- /.form-group -->

                   <div class="col-md-6">
                <div class="form-group">
                  <label>Select state</label>
                  <select type="text" name="state" id="state" class="form-control">
                        <option value="">Select State</option>
                  </select>
                </div>
                </div>
                <!-- /.form-group -->
                <div class="col-md-6">
                <div class="form-group">
                <label>Select lga</label>
                <select type="text" id="lga" name="lga" class="form-control">
                  <option value="">Select LGA</option>
                  </select>
                </div>
                </div>
                <!-- /.form-group -->

              <!-- /.col -->
              <div class="col-md-12">
                <div class="form-group">
            
                <label>Full Name</label>
                  <input  name="name" class="form-control" placeholder="Enter Full Name"/>
                </div>
              </div> 
              <!-- /.col -->

               <!-- /.col -->
               <div class="col-md-12">
                <div class="form-group">
            
                <label>Candidate Biography</label>
                  <textarea  name="bio" class="form-control" cols="30"></textarea>
                </div>
              </div> 
              <!-- /.col -->

               <!-- /.col -->
               <div class="col-md-12">
                <div class="form-group">
            
                <label>Candidate Photo</label>
                  <input class="form-control" name="photo" type="file"/>
                </div>
              </div> 
              <!-- /.col -->

              <div class="col-md-12">
              <div class="form-group">
              <button type="submit" class="btn btn-md btn-primary">Add candidate</button>
    
            </form>
          </div>
          <!-- /.card-body -->
        </div>

     </div>

  @endsection
