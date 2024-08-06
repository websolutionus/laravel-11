@props(['value'])

<label {{ $attributes->merge(['class' => 'mt-2']) }}>
    {{ $value ?? $slot }}
</label>
