@extends('Admin.master')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          <div class="row">
              <div class="col">
        <h4 class="card-title">View State Details</h4>
              </div>
              <a href="{{route('state.create')}}">
                <input type="submit" class="btn btn-primary mr-2 float-right" value="Add" name="Add">
                    </a>
        <p class="card-description">
           <code>

           </code>
        </p>
    </div>

      </div>
    </div>
  </div>
@endsection

