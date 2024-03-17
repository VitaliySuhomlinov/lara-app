<x-layout.main title="{{ $car->brand }}" h1="{{ $car->brand }} : {{ $car->model }}">
<p>Описание: {{ $car->description }}</p>
<p>Коробка: {{ $transmissions[$car->transmissions] }}</p>
<hr>
<a href="{{ route('cars.index') }}">All Cars</a>
<hr>
</x-layout.main>