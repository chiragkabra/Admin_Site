@extends('Admin.master')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

        <div class="row">
            <div class="col">
        <h4 class="card-title">Update Permission</h4>
            </div>
            {{-- <a href="{{route('staff.create')}}"> --}}
        {{-- <input type="submit" class="btn btn-primary mr-2 float-right" value="view detail" name="view_detail"> --}}
            </a>
        </div>


        <form class="forms-sample" method="post" action="{{route('permission.update',$per->id)}}" enctype="multipart/form-data">
            @csrf
            {{method_field('patch')}}
          {{-- <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control @error('name')
            @enderror" id="exampleInputName1" placeholder="Name" name="name" >
            <br>
            @error('name')
            <div style="color:red;">{{ $message }}</div>
            @enderror
          </div> --}}

            <h3>{{$per->role->name}}</h3>
            {{-- <select class="form-control" name="role_id">
                <option>select Role</option>
                @foreach(App\Models\Role::all() as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select> --}}
          <div class="form-group">
              <table class="table table-striped">
                <thead>
                    <tr>
                      <th>
                       Permission
                      </th>
                      <th>
                        Can-Add
                      </th>
                     <th>
                        Can-Edit
                     </th>
                     <th>
                        Can-Delete
                     </th>
                     <th>
                        Can-List
                     </th>
                     <th>
                        Can-View
                     </th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                      <td>City</td>
                      <td><input type="checkbox" name="name[city][can-add]" @if(isset($per['name']['city']['can-add'])) checked @endif value="1"></td>
                      <td><input type="checkbox" name="name[city][can-edit]"   @if(isset($per['name']['city']['can-edit'])) checked @endif value="1"></td>
                      <td><input type="checkbox" name="name[city][can-delete]"   @if(isset($per['name']['city']['can-delete'])) checked @endif value="1"></td>
                      <td><input type="checkbox" name="name[city][can-list]"   @if(isset($per['name']['city']['can-list'])) checked @endif value="1"></td>
                      <td><input type="checkbox" name="name[city][can-view]"  @if(isset($per['name']['city']['can-view'])) checked @endif value="1"></td>
                      </tr>
                      <tr>
                      <td>State</td>
                      <td><input type="checkbox" name="name[state][can-add]" @if(isset($per['name']['state']['can-add'])) checked @endif  value="1"></td>
                      <td><input type="checkbox" name="name[state][can-edit]"  @if(isset($per['name']['state']['can-edit'])) checked @endif value="1"></td>
                      <td><input type="checkbox" name="name[state][can-delete]" @if(isset($per['name']['state']['can-delete'])) checked @endif  value="1"></td>
                      <td><input type="checkbox" name="name[state][can-list]"  @if(isset($per['name']['state']['can-list'])) checked @endif value="1"></td>
                      <td><input type="checkbox" name="name[state][can-view]"  @if(isset($per['name']['state']['can-view'])) checked @endif value="1"></td>
                      </tr>
                  </tbody>
              </table>
          </div>

          <input type="submit" class="btn btn-primary mr-2" name="update" value="update">
          <a href="{{route('permission.index')}}" class="float-right">Back</a>

        </form>
      </div>
    </div>
  </div>

@endsection
