@props(['value'])

<label {{ $attributes->merge(['class' => 'mt-3']) }}>
    {{ $value ?? $slot }}
</label>
