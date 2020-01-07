@extends('admin/sections/master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary" style="background: linear-gradient(60deg, #c76d6d, #71aabf);">
              <h4 class="card-title " style="text-align:center;font-size:25px;    background: linear-gradient(60deg, #c76d6d, #71aabf);">دسترسی هوشمند </h4>
              <a class="btn btn-info" style="float:left" href="{{route('acls.index')}}">لیست مقام ها </a>
            <a class="btn btn-success" style="float:left;" href="{{route('articles.create')}}">ایجاد  مقام </a>
            </div>


            <form class="form-horizontal" action="{{ route('sync.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include ('admin.sections.error')
    
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for=""class="control-label">کاربر</label>
                    <select class="form-control" name="user_id">
                      @foreach(\App\User::whereLevel('admin')->get() as $user)
                        <option value="{{$user->id}}">{{$user->email}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for=""class="control-label">مقام ها </label>
                    <select class="form-control" name="role_id[]" multiple style="height:auto;">
                      @foreach(\App\Role::get() as $role)
                        <option value="{{$role->id}}">{{$role->name}}-{{$role->label}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-danger">ارسال</button>
                    </div>
                </div>
            </form>

             

          </div>
        </div>
        
      </div>
    </div>
  </div>
@endsection
       
      
      