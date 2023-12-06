@extends('layouts.main')

@section('title', 'Eventos')

@section('content')  

<div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full max-w-full overflow-x-auto overflow-y-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Cliente</th>
                    <th class="px-4 py-3">CPF</th>
                    <th class="px-4 py-3">Telefone</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Ações</th>
                    <th class="px-4 py-3">
                        <button class="flex items-center justify-center w-full px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            <a href="{{ url('clientes/create') }}">
                                Cadastrar Cliente
                                <span class="ml-2" aria-hidden="true">+</span>
                            </a>
                        </button>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                {{-- Iterar sobre eventos --}}
                {{-- @foreach ($eventos as $evento) --}}
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3"></td>
                        <td class="px-4 py-3"></td>
                        <td class="px-4 py-3"></td>
                        <td class="px-4 py-3"></td>
                        <td class="px-4 py-3">
                            <div class="flex items-center space-x-4 text-sm">
                                <button class="flex items-center justify-center px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="View">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </button>

                                <button class="flex items-center justify-center px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Edit">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <td></td> <!-- Ajuste layout -->
                    </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
    {{-- {{ $eventos->links('components.pagination') }} --}}
</div>

@endsection
