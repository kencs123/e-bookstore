@include('header')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg">
        <div class="card">
  <div class="card-body bg bg-secondary text-light">
   <h2>{{$a->name}} books</h2>
  </div>
</div>
        </div>
        <div class="row mb-5">
        @foreach($b as $books)
            <div class="col-lg-3">
            
            <div class="card" style="width: 18rem; height:40rem">
  <img src="../storage/image/{{ $books->image }}" class="card-img-top" height="350px" width="250px">
  <div class="card-body">
    <h5 class="card-title">{{ $books->title }}</h5>
    <p class="card-text">by: <br>{{$books->author}}</p>
    <a href="/detail/{{$books->id}}" class="btn btn-primary">Detail</a>
  </div>
</div>
            </div>
            @endforeach 
        </div>
    </div>
</div>

@include('footer')