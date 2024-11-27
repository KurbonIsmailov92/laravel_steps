<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Post;

Route::get('/', function () {
    return view('home');
});

//create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

//index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')
        ->latest()
        ->simplePaginate(3);
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

//store
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
});


//find
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

//edit
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    return view('jobs.edit', ['job' => $job]);
});

//update
Route::patch('/jobs/{id}', function ($id) {
    //valid
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);
    //auth (on hold)

    //update
    $job = Job::findOrFail($id);

    //persist
    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);
    //redirect job page
    return redirect('/jobs/'. $job->id);
});

//destroy
Route::delete('/jobs/{id}', function ($id) {
    //auth (on hold)
    Job::findOrFail($id)->delete();
    return redirect('/jobs');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/posts', function () {
    $posts = Post::with('user')->simplePaginate(5);
    return view('posts', [
        'posts' => $posts
    ]);
});

Route::get('/posts/{id}', function ($id) {
    $post = Post::find($id);
    return view('post', ['post' => $post]);
});
