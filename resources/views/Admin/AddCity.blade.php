@extends('Admin.master')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

        <div class="row">
            <div class="col">
        <h4 class="card-title">Add City</h4>
            </div>
            {{-- <a href="{{route('staff.create')}}"> --}}
        {{-- <input type="submit" class="btn btn-primary mr-2 float-right" value="view detail" name="view_detail"> --}}
            </a>
        </div>


        <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control @error('name')
            @enderror" id="exampleInputName1" placeholder="Name" name="name" >
            <br>
            @error('name')
            <div style="color:red;">{{ $message }}</div>
            @enderror
          </div>

          <input type="submit" class="btn btn-primary mr-2" name="submit" value="submit">

        </form>
      </div>
    </div>
  </div>

@endsection
