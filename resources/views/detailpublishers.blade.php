@include('header')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg">
        <div class="card">
  <div class="card-body bg bg-secondary text-light">
   <h2>{{$pub->name}} <br> Address: {{$pub->address}} <br> Phone: {{$pub->phone}} <br> Email: {{$pub->email}}</h2>
  </div>
</div>
        </div>
        <div class="row mb-5">
        @foreach($books as $b)
            <div class="col-lg-3">
            
            <div class="card" style="width: 18rem; height:40rem">
  <img src="../storage/image/{{$b->image}}" class="card-img-top" height="350px" width="250px">
  <div class="card-body">
    <h5 class="card-title">{{ $b->title }}</h5>
    <p class="card-text">by: <br>{{$b->author}}</p>
    <a href="/detail/{{$b->id}}" class="btn btn-primary">Detail</a>
  </div>
 
</div>
            </div>
           
            @endforeach 
           
        </div>
        
    </div>

</div>

@include('footer')