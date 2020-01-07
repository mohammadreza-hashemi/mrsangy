@extends('admin/sections/master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary" style="background: linear-gradient(60deg, #000000, #909090);">
              <h4 class="card-title " style="text-align:center;font-size:25px;    background: linear-gradient(60deg, #000000, #909090);">سطوح دسترسی <p style="background-color: linear-gradient(to right, #000000, #909090);">Authorization</p></h4>
            <a class="btn btn-info" style="float:left ;background: linear-gradient(60deg, #000000, #909090);" href="{{route('acls.create')}}">ایجاد دسترسی جدید</a>
            <a class="btn btn-success" style="float:left;background: linear-gradient(to left, #000000, #909090);" href="{{route('articles.create')}}">ایجاد  مقام </a>
            <a class="btn btn-info" style="float:left ;background: linear-gradient(60deg, #000000, #909090);" href="{{url('syncpermission')}}">نقش  دادن هوشمند</a>

        </div>

        <div class="row">
            <div class="col-md-12">
                    <div class="card card-plain">
                 
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead class="">
                              <th>
                                شماره
                              </th>
                              <th>
                                نام کاربر
                              </th>
                              <th>
                                ایمیل کاربر
                              </th>
                              <th>
                                وظیفه
                              </th>
                              <th>
                                تنظیمات 
                              </th>
                            </thead>
                            <tbody>
                              
                              @php
                              $num=1;    
                              @endphp
                                    @foreach($roles as $role)
                                    
                                        @foreach ($role->users as $user)
                                        <tr>
                                            <td>{{$num}}</td>

                                            <td>{{$user->name}}</td>

                                            <td>{{$user->email}}</td>

                                            <td>{{$role->name}}</td>

                                            <td>
                                                <form action="{{ route('sync.destroy',[$user->id]) }}" method="post">
                                                        {{ method_field('delete') }}
                                                        {{ csrf_field() }}
                                                        <div class="btn-group btn-group-sm">
                                                                <a href="{{route('sync.edit',[$user->id])}}"  class="btn btn-info">ویرایش</a>
                                                                    <button type="submit" class="btn btn-danger">حذف</button>
                                                                </div>
                                                </form>
                                            </td>
                                        </tr>
                                        @php
                                        $num++;    
                                        @endphp    
                                        @endforeach
                                    @endforeach
                             
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div style="text-align:center;justify-content: center;margin-right:450px;">
                        {{-- {!! $users->render() !!} --}}
                  </div>

    </div>
       
             

          </div>
        </div>
        
      </div>
    </div>
  </div>
@endsection
       
      
      