<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-dark mt-3']) }}>
    {{ $slot }}
</button>
