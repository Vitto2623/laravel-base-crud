@extends('layouts.main')

@section('title', ' - Book detail')

@section('content')
    <main style="height: 1500px;">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center p-5">
                    <div class="col-12 d-flex justify-content-center align-items-center m-0">
                        <div class="card m-5 p-2 my-card" style="width: 18rem;">
                            <img src="{{$book->thumb}}" class="card-img-top" alt="image-book">
                            <div class="card-body my-body">
                                <h5 class="card-title">{{$book->title}}</h5>
                                <p class="card-text">{{$book->description}}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Price: {{$book->price}}$</li>
                                <li class="list-group-item"> Title: {{$book->series}}</li>
                                <li class="list-group-item">Date: {{$book->sale_date}}</li>
                                <li class="list-group-item"> Type: {{$book->type}}</li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </main>
@endsection