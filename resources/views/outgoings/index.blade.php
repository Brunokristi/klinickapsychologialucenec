<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Outgoings') }}
        </h2>
    </x-slot>
<br>
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-bold mb-4">Add a new date</h2>

        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{route('outgoings.create')}}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block font-semibold">Date:</label>
                <input type="date" name="date" class="w-full p-2 border rounded" required>
                @error('date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block font-semibold">Text:</label>
                <input type="text" name="text" class="w-full p-2 border rounded" maxlength="100" required>
                @error('text') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                Add
            </button>
        </form>
    </div>

    <div class="max-w-2xl mx-auto mt-6 bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-bold mb-4">List of dates</h2>
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-2">ID</th>
                    <th class="border p-2">Date</th>
                    <th class="border p-2">Text</th>
                    <th class="border p-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($outgoings as $outgoing)
                    <tr>
                        <td class="border p-2">{{ $outgoing->id }}</td>
                        <td class="border p-2">{{ $outgoing->date }}</td>
                        <td class="border p-2">{{ $outgoing->text }}</td>
                        <td class="border p-2">
                        <form action="{{ route('outgoings.delete', ['id' => $outgoing->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this outgoing?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete outgoing</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
