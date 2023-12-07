@extends ('layouts.main')

@section('title', 'Instrumentos')

@section('content')

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full max-w-full overflow-x-auto overflow-y-auto">
        <br>
        <table class="w-full mx-auto border border-collapse border-gray-300 rounded-md">
            <thead>
                <tr class="text-sm font-semibold tracking-wide text-left text-white uppercase bg-red-500 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-3 py-2">Nome</th>
                    <th class="px-3 py-2">Marca</th>
                    <th class="px-3 py-2">Modelo</th>
                    <th class="px-3 py-2">Condição</th>
                    <th class="px-3 py-2">Ações</th>
                    <th class="px-3 py-2">
                        <button class="flex items-center justify-center w-full px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            <a href="{{ url('instrumentos/create') }}">
                                Cadastrar Instrumentos
                                <span class="ml-2" aria-hidden="true">+</span>
                            </a>
                        </button>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                {{-- Iterar sobre eventos --}}
                 @foreach ($instrumentos as $instrumento) 
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-3 py-2">{{ $instrumento->nome }}</td>
                    <td class="px-3 py-2">{{ $instrumento->marca }}</td>
                    <td class="px-3 py-2">{{ $instrumento->modelo }}</td>
                    <td class="px-3 py-2">{{ $instrumento->condicao }}</td>
                    <td class="px-3 py-2">
                        <div class="flex items-center space-x-2 text-sm">
                        <a href="{{ url('instrumentos/' . $instrumento->id) }}">
                            <button class="flex items-center justify-center px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="View">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </button>
                        </a>
                        <a href="{{ url('instrumentos/' . $instrumento->id . '/edit') }}">
                            <button class="flex items-center justify-center px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                </svg>
                            </button>
                        </a>
                        </div>
                    </td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
    </div>
    {{-- {{ $eventos->links('components.pagination') }} --}}
</div>
@endsection
