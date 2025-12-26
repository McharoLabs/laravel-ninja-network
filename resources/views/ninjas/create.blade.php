<x-layout>
    <form action="{{ route('ninjas.store') }}" method="POST" class="flex flex-col space-y-4">
        @csrf

        <h2 class="font-bold text-2xl mb-4">Create a New Ninja</h2>

        {{-- Ninja Name --}}
        <div class="flex flex-col space-y-1">
            <label for="name" class="text-sm font-medium text-gray-700">Ninja Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required class="bg-white py-2 px-3 rounded border border-gray-300
                       focus:outline-none focus:ring-2 focus:ring-black focus:border-black transition" />
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Ninja Skill --}}
        <div class="flex flex-col space-y-1">
            <label for="skill" class="text-sm font-medium text-gray-700">Ninja Skill (0-100):</label>
            <input type="number" id="skill" name="skill" value="{{ old('skill') }}" required min="0" max="100" step="1"
                class="bg-white py-2 px-3 rounded border border-gray-300
                       focus:outline-none focus:ring-2 focus:ring-black focus:border-black transition" />
            @error('skill')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Biography --}}
        <div class="flex flex-col space-y-1">
            <label for="bio" class="text-sm font-medium text-gray-700">Biography:</label>
            <textarea id="bio" name="bio" rows="5" required
                class="bg-white py-2 px-3 rounded border border-gray-300
                       focus:outline-none focus:ring-2 focus:ring-black focus:border-black transition">{{ old('bio') }}</textarea>
            @error('bio')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Dojo Selection --}}
        <div class="flex flex-col space-y-1">
            <label for="dojo_id" class="text-sm font-medium text-gray-700">Dojo:</label>
            <select id="dojo_id" name="dojo_id" required class="bg-white py-2 px-3 rounded border border-gray-300
                       focus:outline-none focus:ring-2 focus:ring-black focus:border-black transition">
                <option value="" disabled selected>Select a dojo</option>
                @foreach ($dojos as $dojo)
                    <option value="{{ $dojo->id }}" {{ $dojo->id == old('dojo_id') ? 'selected' : '' }}>
                        {{ $dojo->name }}
                    </option>
                @endforeach
            </select>
            @error('dojo_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Submit Button --}}
        <div class="mt-4">
            <button type="submit"
                class="ml-auto inline-flex items-center justify-center rounded-lg bg-black/20 px-4 py-2 text-sm font-semibold transition hover:bg-red-500 hover:text-white cursor-pointer focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                Create Ninja
            </button>
        </div>
    </form>
</x-layout>