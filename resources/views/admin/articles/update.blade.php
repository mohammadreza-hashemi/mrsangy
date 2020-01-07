@extends('admin/sections/master')

@section('content')
    
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary"  style="background-image:linear-gradient(to right,#03466b, #437cc3)">
                  <h4 class="card-title">صفحه ویرایش مقاله</h4>
                </div><br><br>
                <div class="card-body">
                <form action="{{ route('articles.update',[$article->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    @include('admin/sections/error')
                        <div class="row">
                         
                          <div class="col-md-5">
                            <div class="form-group">
                              <label class="bmd-label-floating">عنوان مقاله <i style="color:red">*</i></i></label>
                            <input type="text" class="form-control" name="title" value="{{$article->title}}">
                            </div>
                          </div>
                          <div class="col-md-7">
                            <div class="form-group">
                              <label class="bmd-label-floating">sluggable مقاله</label>
                            <input type="text" class="form-control" placeholder="ادرسی  که مایلید در url برای این پست نمایش شود" name="slug" value="{{$article->slug}}">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="bmd-label-floating">تگ  مقاله </label>
                            <input type="text" class="form-control" name="tags" placeholder="تگ ها" name="tags" value="{{$article->tags}}">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <select id="lang" name="lang" class="form-control">
                                          <option class="hidden"  selected disabled>زبان مورد نظرا وار د کنید </option>
                                      <option value="fa" {{$article->lang == 'fa' ? 'selected' : ''}} >فارسی </option>
                                      <option value="en" {{$article->lang == 'en' ? 'selected' : '' }} >انگلیسی </option>
                                  </select>
                                      </div>
                                  </div>
                              </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="bmd-label-floating">توضیحات کوتاه </label>
                            <input type="text" class="form-control" name="description" placeholder="توضیحات کوتاه" name="description" value="{{$article->description}}">
                            </div>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <div class="form-group">
                                <label class="bmd-label-floating">متن کلی</label>
                              <textarea class="form-control" rows="5" name="body" placeholder=' متن کلی مقاله را در این قسمت بنویسید' name='body'>{{$article->body}}</textarea>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="images" class="control-label">تصویر مقاله</label>
                                    <input type="file" class="form-control" name="images" id="images" placeholder="تصویر مقاله را وارد کنید">
                                </div>
                                <div class="col-sm-12">
                                    <div class="row">
                                        @foreach( $article->images['images'] as $key => $image)
                                            <div class="col-sm-2">
                                                <label class="control-label">
                                                    {{ $key }}
                                                    <input type="radio" name="imagesThumb" value="{{ $image }}" {{ $article->images['thumb'] == $image ? 'checked' : '' }} >
                                                    <a href="{{ $image }}" target="blank"><img src="{{ $image }}" width="100%"></a>
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        <button type="submit" class="btn btn-primary pull-right" style="background-image:linear-gradient(to right,#03466b, #437cc3)">ویرایش اطلاعات </button>
                        <div class="clearfix"></div>
                      </form>
                    </div>

                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
@endsection