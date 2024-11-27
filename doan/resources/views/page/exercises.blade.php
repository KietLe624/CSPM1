@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="FE/css/ex.css">
<div class="toppic"><p>All topics</p></div>
    <div class="flex-row1">
        <div class="row1">
            <div class="card">
                <img src="asset/anh1.jpg" alt="Short Stories" class="card-img">
                <div class="card-content">
                    <a href="/short_story" class="card-title">Short Stories</a>
                    <p class="card-level">Level: <span class="level">Medium</span></p>
                    <p class="card-lessons">289 lessons</p>
                    <span class="card-more">•••</span>
                </div>
            </div>
        </div>
    </div>
    <div class="flex-row2">
        <div class="row1">
            <div class="card">
                <img src="asset/anh4.jpg" alt="Short Stories" class="card-img">
                <div class="card-content">
                    <a href="ielts_listening.html" class="card-title">IELTS Listening</a>
                    <p class="card-level">Level: <span class="level">Medium</span></p>
                    <p class="card-lessons">289 lessons</p>
                    <span class="card-more">•••</span>
                </div>
            </div>
        </div>
    </div>
    <div class="flex-row2">
        <div class="row1">
            <div class="card">
                <img src="asset/anh7.jpg" alt="Short Stories" class="card-img">
                <div class="card-content">
                    <a href="#" class="card-title">TOEFL Listening</a>
                    <p class="card-level">Level: <span class="level">Medium</span></p>
                    <p class="card-lessons">289 lessons</p>
                    <span class="card-more">•••</span>
                </div>
            </div>
        </div>
    </div>

@endsection