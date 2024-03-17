<x-layout.main title="Edit car #{{ $car->id }}">

  <x-form method="put" action="{{ route('cars.update', ['car' => $car->id]) }}">
    @bind($car)
    <div class="mb-3">
      <x-form-input name="brand" label="Бренд авто"/>
    </div>
    <div class="mb-3">
      <x-form-input name="model" label="Модель авто"/>
    </div>
    <div class="mb-3">
      <x-form-textarea name="description" label="Описание авто"/>
    </div>
    <div class="mb-3">
      <x-form-select name="transmissions" label="Коробка передач" :options="$transmissions" placeholder="не выбрано"/>
    </div>
    @endbind
    <div class="mb-3">
      <button class="btn btn-success">Save Car</button>
    </div>
  </x-form>

  <x-form method="post" action="{{ route('cars.destroy', ['car' => $car->id]) }}">
  @method('DELETE')
    <div class="mb-3">
        <button class="btn btn-danger">Delete car</button>
    </div>
  </x-form>
</x-layout.main>