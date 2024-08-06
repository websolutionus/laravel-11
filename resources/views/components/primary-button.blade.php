<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary mt-2']) }}>
    {{ $slot }}
</button>
