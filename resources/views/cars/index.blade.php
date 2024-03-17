<x-layout.main title="Cars catalog" h1="All cars">
   <a href="{{ route('cars.create') }}">Create Car</a>
   <hr>
   <div class="row">
   @foreach($cars as $car)
      <div class="card" style="width: 18rem; margin:20px;">
         <img src="https://im.kommersant.ru/Issues.photo/RADIO/2020/09/14/KMO_147478_04061_1_t218_122655.jpg" class="card-img-top" alt="...">
         <div class="card-body">
            <h5 class="card-title">{{ $car->brand }} : {{ $car->model }}</h5>
            <p class="card-text">{{ $car->description }}</p>
            <a href="{{ route('cars.show', ['car' => $car->id]) }}" class="btn btn-primary">Show car</a>
            <a href="{{ route('cars.edit', ['car' => $car->id]) }}" class="btn btn-primary">Edit car</a>
         </div>
      </div>
   @endforeach
   </div>
</x-layout.main>





