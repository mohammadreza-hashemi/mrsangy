@extends('admin/sections/master')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary"  style="background-image:linear-gradient(to right,#3b403a, #659428)">
                  <h4 class="card-title">صفحه افزدن مقاله</h4>
                </div><br><br>
      


                <div class="card-body">
                <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('admin.sections.error')

                        <div class="row">
                         
                          <div class="col-md-5">
                            <div class="form-group">
                              <label class="bmd-label-floating">عنوان مقاله <i style="color:red">*</i></i></label>
                            <input type="text" class="form-control" name="title" value="{{old('title')}}">
                            </div>
                          </div>
                          <div class="col-md-7">
                            <div class="form-group">
                              <label class="bmd-label-floating"></label>
                            <input type="text" class="form-control" placeholder="ادرسی  که مایلید در url برای این پست نمایش شود" name="slug" value="{{old('slug')}}">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="bmd-label-floating"></label>
                            <input type="text" class="form-control" name="tags" placeholder="تگ ها" name="tags" value="{{old('tags')}}">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <select id="lang" name="lang" class="form-control">
                                          <option class="hidden"  selected disabled>زبان مورد نظرا وار د کنید </option>
                                      <option value="fa" >فارسی </option>
                                      <option value="en" >انگلیسی </option>
                                  </select>
                                      </div>
                                  </div>
                              </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="bmd-label-floating"></label>
                            <input type="text" class="form-control" name="description" placeholder="توضیحات کوتاه" name="description" value="{{old('description')}}">
                            </div>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <div class="form-group">
                                <label class="bmd-label-floating"></label>
                              <textarea class="form-control" rows="5" name="body" placeholder=' متن کلی مقاله را در این قسمت بنویسید' name='body' value="{{old('body')}}"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                        <input type="file" name="images" hidden id="images">
                        <a  style="display:block;height:30px;margin-bottom:15px;  background-image: linear-gradient(to right, #153504 , #68e46c);text-align:center;border-radius:5px;" id="image">انتخاب عکس برای این مقاله </a>
                        <button type="submit" class="btn btn-primary pull-right" style="background-image:linear-gradient(to right,#3b403a, #659428)">افزودن </button>
                        <div class="clearfix"></div>
                      </form>
                    </div>

                </div>
              </div>
            </div>
            
          </div>
        </div>
    

@endsection
       