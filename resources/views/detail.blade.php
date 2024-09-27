@include('header')
<div class="container">
<div class="row justify-content-center">
    <div class="col-lg">
    <div class="card">
<div class="card-body bg bg-secondary text-light">
<h1>Book Detail</h1>
</div>
</div>
    </div>
    <div class="row mb-5  d-flex justify-content-center" >
        <div class="col-lg-3" >
           
        <div class="card pt-5 " style="width: 15rem; height:45rem"  >
        <img src="../storage/image/{{$book->image}}" class="card-img-top" height="350px" width="250px"  >
<div class="card-body">
</div> 
<h5 class="card-title">{{ $book->title }}</h5>
<h5 class="card-title">{{ $book->author }}</h5>
<h5 class="card-title">Publisher:{{$book->publisher->name}}</h5>
<h5 class="card-title">Year: {{$book->year}}</h5>
<p class="card-text"> {{ $book->synopsis }}</p>
</div>
</div>
        </div>
    </div>
</div>
</div>
@include('footer')