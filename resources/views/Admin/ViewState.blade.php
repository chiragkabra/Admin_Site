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
                </div>
                <br>
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    @if(Session::has('delete'))
                    <div class="alert alert-danger">
                        {{Session::get('delete')}}
                    </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>
                               ID
                              </th>
                              <th>
                                Name
                              </th>
                             <th>
                                 Actions
                             </th>
                            </tr>
                          </thead>

                          @foreach ($state as $state )
                          <tbody>
                            <tr>
                              <td>
                                {{$state->id}}
                              </td>
                              <td>
                               {{$state->state_name}}
                              </td>
                                <td>
                                    <a href="{{route('state.edit',$state->id)}}">
                                    <input type="submit" class="btn btn-primary" value="edit"  name="Edit">
                                    </a>
                                    <input type="submit" class="btn btn-danger" value="Delete"  name="Delete" data-toggle="modal" data-target="#exampleModal" data-id='{{$state->id}}'>

                                    <!-- Modal -->
                                    <form method="post" action="{{route('state.destroy',$state->id)}}">
                                        @csrf
                                        {{method_field('delete')}}
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                    <h4>Are you sure u want to delete the entry</h4>
                                                        <h4>with name:{{$state->state_name}}</h4>
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Delete It! </button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </form>

                                </td>
                            </tr>
                          </tbody>

                          @endforeach

                        </table>
                      </div>

      </div>
    </div>
  </div>
@endsection

