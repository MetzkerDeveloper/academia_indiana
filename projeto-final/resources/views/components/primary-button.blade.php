<button {{ $attributes->merge(['type' => 'submit', 'class' => 'mt-4 bg-slate-500 hover:bg-slate-400 rounded-full p-2 w-24 w-full']) }}>
    {{ $slot }}
</button>
