<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-danger mt-3']) }}>
    {{ $slot }}
</button>
