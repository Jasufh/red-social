<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'rounded-md bg-gradient-to-r from-cyan-500 to-blue-500 w-full py-2 text-white hover:from-red-500 hover:to-blue-500']) }}>
    
    {{ $slot }}
    
</button>
