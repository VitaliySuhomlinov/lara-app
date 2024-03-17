<x-layout.main title="Create car">

  <x-form method="post" action="{{ route('cars.store') }}">
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
    <div class="mb-3">
      <button class="btn btn-success">Create Car</button>
    </div>
  </x-form>

</x-layout.main>


