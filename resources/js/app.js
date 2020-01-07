
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



// alert('1');
Echo.channel('articles')
    .listen('MyEvent' , function (e) {
       alert('done');
    });


//private bashe ehraz hoviat mikonad
//  Echo.private('articles.admin')
//     .listen('MyEvent' , function (e) {
//        alert('done');
//     });