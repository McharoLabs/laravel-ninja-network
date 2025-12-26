<x-layout>
    <h2 class="font-bold text-2xl pb-6">Currently Available Ninjas</h2>

    <ul class="space-y-4 mb-4">
        @foreach ($ninjas as $ninja)
            <li>
                <x-card href="{{ route('ninjas.show', $ninja->id) }}" :highlight="$ninja->skill > 70">
                    <div>
                        <h3 class="text-lg font-semibold">
                            {{ $ninja->name }}
                        </h3>

                        <p>{{ $ninja->dojo->name }}</p>
                    </div>
                </x-card>
            </li>
        @endforeach
    </ul>

    {{ $ninjas->links() }}
</x-layout>