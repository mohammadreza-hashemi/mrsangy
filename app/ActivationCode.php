<?php

namespace App;
use App\User;
use Str;

use Illuminate\Database\Eloquent\Model;

class ActivationCode extends Model
{
    protected $guarded =[];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeCreateCode($query,$user)
    {
      $code =$this->code();
    return $query->create([
      'user_id'=>$user->id,
      'code'=>$code,
      'expire'=>\Carbon\Carbon::now()->addminutes(15),
      ]);
    }
    protected function code(){
      do{
        $code=Str::random(20);
        $check_code_indatabase=static::whereCode($code)->get();
      }while( ! $check_code_indatabase->isEmpty());
      return $code;
    }






}
