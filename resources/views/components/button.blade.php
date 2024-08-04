<button {{ $attributes->merge(['style' => 'border:1px solid green;']) }}>
    {{ $slot }}
</button>