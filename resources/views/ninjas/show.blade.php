<x-layout>
    <h2>Ninja id - {{ $ninja->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill level:</strong>{{ $ninja->skill }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $ninja->bio }}</p>
    </div>

    <div class="border-2 border-dashed bg-white px-4 my-4 rounded">
        <h3>Dojo Information</h3>
        <p><strong>Dojo name:</strong> {{ $ninja->dojo->name }}</p>
        <p><strong>Location:</strong> {{ $ninja->dojo->location }}</p>
        <p><strong>About the Dojo:</strong></p>
        <p>{{ $ninja->dojo->description }}</p>
    </div>

    <form action="{{ route('ninjas.destroy', $ninja->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit"
            class="ml-auto inline-flex items-center justify-center rounded-lg bg-black/20 px-4 py-2 text-sm font-semibold transition hover:bg-red-500 hover:text-white cursor-pointer focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Delete
            Ninja</button>
    </form>
</x-layout>