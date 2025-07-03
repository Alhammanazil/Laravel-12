<x-layout :title="'Home'">
    <main>
        <!-- Your content -->
        <p>Welcome to my homepage</p>

        {{-- For --}}
        <div class="flex mt-3 items-center">
            @for ($index = 1; $index <= 20; $index++)
                @if ($index % 2 !== 0)
                    <div class="w-8 h-8 bg-teal-500 text-white p-0 me-1 text-xs grid place-items-center">
                        {{ $index }}</div>
                @endif
            @endfor
        </div>
    </main>
</x-layout>
