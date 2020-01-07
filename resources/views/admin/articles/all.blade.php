@extends('admin/sections/master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">مدیریت مقالات</h4>
              <p class="card-category">در این صفحه مقالات خود را مدیریت کنید</p>
            <a class="btn btn-success" style="float:left" href="{{route('articles.create')}}">ایجاد مقاله جدید</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      number
                    </th>
                    <th>
                      title
                    </th>
                    <th>
                      body
                    </th>
                    <th>
                      viewCount
                    </th>
                    <th>
                      commentCount
                    </th>
                    <th>
                        manage
                      </th>
                  </thead>
                  <tbody>
                    
                      <?php $num=1; ?>
                      @foreach($article as $article)
                      <tr>
                      <td>{{$num}}</td>
                          <td><a href="{{ $article->path() }}">{{ $article->title }}</a></td>
                          <td>{{$article->slug}}</td>
                          <td>{{ $article->commentCount }}</td>
                          <td>{{ $article->viewCount }}</td>
                          <td>
                          <form action="{{route('articles.destroy',[$article->id])}}" method="post">
                                  {{ method_field('delete') }}
                                  {{ csrf_field() }}
                                  <div class="btn-group btn-group-sm">
                                  <a href="{{route('articles.edit',[$article->id])}}"  class="btn btn-info">ویرایش</a>
                                      <button type="submit" class="btn btn-danger">حذف</button>
                                  </div>
                              </form>
                          </td>
                      </tr>
                      <?php $num++?>
                  @endforeach
                  </tbody>
                </table>
                
                <div style="text-align:center">
                      {{-- {!! $article->render() !!} --}}
                    </div>
                   
              </div>
            </div>

             

          </div>
        </div>
        
      </div>
    </div>
  </div>
@endsection
       
      
      