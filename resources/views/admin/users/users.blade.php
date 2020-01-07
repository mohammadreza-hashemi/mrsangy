@extends('admin/sections/master')
@section('content')
  <div class="content">
    <div class="container-fluid">
        <div class="row">
                <div class="col-md-12">
                        <div class="card card-plain">
                          <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0"  style="text-align:center">لیست کاربران سایت</h4>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-hover">
                                <thead class="">
                                  <th>
                                    شماره
                                  </th>
                                  <th>
                                    نام
                                  </th>
                                  <th>
                                    ایمیل
                                  </th>
                                  <th>
                                    تایید ایمیل
                                  </th>
                                  <th>
                                    وظیفه
                                  </th>
                                </thead>
                                <tbody>
                                  
                                  @php
                                  $num=1;    
                                  @endphp
                                  @foreach ($users as $user)
                                <tr>
                                        <td>
                                          {{$num}}
                                        </td>
                                        <td>
                                          {{$user->name}}
                                        </td>
                                        <td>
                                          {{$user->email}}
                                        </td>
                                        <td>
                                          {!!$user->active == '0' ? '<img src="assets\img\fail.png" style="height:20px;width:20px">' : '<img src="assets\img\success.png" style="height:20px;width:20px">'!!}
                                        </td>
                                        <td>
                                          {{$user->level}}
                                        </td> 
                                      </tr>
                                      @php
                                      $num++;    
                                      @endphp
                                  @endforeach
                                 
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div style="text-align:center;justify-content: center;margin-right:450px;">
                            {!! $users->render() !!}
                      </div>

        </div>
    </div>

</div>  
@endsection