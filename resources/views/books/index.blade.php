@extends("layouts.main")

@section('content')

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center mt-5">
                    <a href="{{route('books.create')}}">
                        <button class="btn btn-warning p-3 m-0 fs-4">Aggiugni un nuovo fumetto</button>
                    </a>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center p-2">
                @foreach ($books as $book)
                    <div class="col-5 d-flex justify-content-center align-items-center m-0">
                        <a href="{{route('books.show', $book->id)}}" class="text-decoration-none text-black">
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
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection