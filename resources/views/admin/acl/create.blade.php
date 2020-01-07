@extends('admin/sections/master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary" style="background: linear-gradient(60deg, #c76d6d, #71aabf);">
              <h4 class="card-title " style="text-align:center;font-size:25px;    background: linear-gradient(60deg, #c76d6d, #71aabf);">Create Permission</h4>
              <a class="btn btn-info" style="float:left" href="{{route('acls.index')}}">لیست مقام ها </a>
            <a class="btn btn-success" style="float:left;" href="{{route('articles.create')}}">ایجاد  مقام </a>
            </div>

            <form class="form-horizontal" action="{{ route('acls.store') }}" method="post" >
                {{ csrf_field() }}
                @include ('admin.sections.error')
                <br><br>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="name" id="name" placeholder="عنوان را وارد کنید" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea rows="4" class="form-control" name="label" id="label" placeholder="توضیحات را وارد کنید" value="{{ old('label') }}"></textarea>
                    </div>
                </div>
    
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-success">Create Permission</button>
                    </div>
                </div>
            </form>
    
             

          </div>
        </div>
        
      </div>
    </div>
  </div>
@endsection
       
      
      