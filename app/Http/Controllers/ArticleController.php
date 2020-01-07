<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\ArticleRequest;
class ArticleController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::orderBy('id','ASC')->paginate(15);
        return view('admin.articles.all',['article'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        if($request->isMethod('post')&& $request->hasFile('images')){
            $file=$request->file('images');
            $imageurl=$this->uploadImage($file);
            auth()->user()->article()->create(array_merge($request->all(),['images'=>$imageurl]));
            alert()->success('مقالتو ثبت کردم ','STORED')->autoclose(2000)->persistent('باشه دمت گرم');
            return redirect('articles');

        }else{
            return 'fail';
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        alert()->warning('مراقب باشید چیزی را اشتباه اپدیت نکنید!', 'هشدار')->persistent('باشه')->autoclose(3000);
        return view('admin.articles.update',['article'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request,Article $article)
    {
        $file=$request->file('images');
        $inputs=$request->all();
        if($file)
            {
                $inputs['images'] = $this->uploadImages($file);

            }else{
                $inputs['images'] =$article->images;
            }

            $inputs['images']['thumb']=$inputs['imagesThumb'];
            unset($inputs['imagesThumb']);
            $article->update($inputs);
            alert()->success('مقاله شما اپدیت شد!','UPDATED')->autoClose(2000);
            return redirect(route('articles.index'));
          

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        alert()->persistent("ok")->warning("مقاله شمابا موفقیت حذف شد","Deleted")->autoclose(2000);
        return redirect('articles');
    }
}
