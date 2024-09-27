@include('header')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg">
        <div class="card">
  <div class="card-body bg bg-secondary text-light">
   <h2>Publishers</h2>
  </div>
</div>
        </div>
        <div class="row mb-5">
        @foreach($publishers as $p)
            <div class="col-lg-3">
            <div class="card" style="width: 18rem; height:40rem">
  <img src="storage/image/{{$p->image}}" class="card-img-top" height="350px" width="250px">
  <div class="card-body">
    <h5 class="card-title">{{ $p->name }}</h5>
    <p class="card-text">Address: <br>{{$p ->address}}</p>
    <a href="/detailpublishers/{{$p->id}}" class="btn btn-primary">Detail</a>
  </div>
  
</div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@include('footer')