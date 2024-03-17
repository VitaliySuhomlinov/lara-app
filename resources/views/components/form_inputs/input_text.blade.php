@props([
    'label',
    'name',
    'defaultValue' => ''
])

<div>
    {{ $label }}<br>
    <input name="{{ $name }}" value="{{ old( $name ) ? old( $name ) : $defaultValue }}">
    @error($name)
        <div style="color:red">{{ $message }}</div>
    @enderror
</div>