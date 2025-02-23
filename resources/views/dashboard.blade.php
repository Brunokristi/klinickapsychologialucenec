<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Services') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <tbody>
                    <a href="{{ route('outgoings.show')}}">Pridať neprítomnosť -></a>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table border="1">
                    <thead>
                    </thead>
                    <tbody>
                    <a href="{{ route('service.create') }}">Create service -></a>
                    <br>
                    <br>
                        @foreach($services as $service)
                            <tr>  
                                <td> 
                                    {{ $service["id"] }}
                                    <a href="{{ route('service.edit', ['id' => $service['id']]) }}">{{ $service['name'] }} -></a>
                                    <hr>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
