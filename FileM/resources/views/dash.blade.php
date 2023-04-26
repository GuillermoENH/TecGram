<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if (session('info'))
    <p class="border border-t-0 border-green-400 rounded-b bg-green-100 px-2 py-1 text-green-700">{{session('info')}}</p>
    @endif

    @if (session('infoe'))
    <p class="border border-t-0 border-blue-400 rounded-b bg-blue-100 px-2 py-1 text-blue-700">{{session('infoe')}}</p>
    @endif

    @if (session('infod'))
    <p class="border border-t-0 border-red-400 rounded-b bg-red-100 px-2 py-1 text-red-700">{{session('infod')}}</p>
    @endif
    <section>
        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nombre</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Status</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Fecha</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                    </tr>
                </thead>
                @foreach ($proyectos as $p)
                    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                        <tr class="hover:bg-gray-50">
                            <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                                <div class="relative h-10 w-10">
                                   @if ($p->Status==='Finalizado')
                                   <img class="h-full object-cover object-center"
                                   src ={{ URL('/Img/Verde.png') }}
                                   alt="" />

                                   @elseif ($p->Status==='Activo')
                                   <img class="h-full object-cover object-center"
                                   src ={{ URL('/Img/Azul.png') }}
                                   alt="" />

                                   @elseif ($p->Status==='Cancelado')
                                   <img class="h-full object-cover object-center"
                                   src ={{ URL('/Img/Roja.png') }}
                                   alt="" />
                                   @endif
                                </div>
                                <div class="text-sm">
                                    <div class="text-xl text-gray-700">{{ $p->Nombre }}</div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                @if ($p->Status === 'Activo')
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600">
                                    <span class="h-1.5 w-1.5 rounded-full bg-blue-500"></span>
                                    {{ $p->Status }}
                                </span>

                                @elseif ($p->Status === 'Finalizado')
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600 ">
                                    <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span>
                                    {{ $p->Status }}
                                </span>

                                @elseif ($p->Status === 'Cancelado')
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-red-50 px-2 py-1 text-xs font-semibold text-red-600">
                                    <span class="h-1.5 w-1.5 rounded-full bg-red-500"></span>
                                    {{ $p->Status }}
                                </span>
                                @endif
                            </td>
                            <td class="px-6 py-4">{{ $p->Fecha }}</td>
                            <td class="px-6 py-4">
                                <div class="flex justify-end gap-4">
                                    <form action="{{ route('CRUD.destroy', $p->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6"
                                                x-tooltip="tooltip">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </form>

                                    <a x-data="{ tooltip: 'Edite' }" href="{{ route('CRUD.edit', $p->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6"
                                            x-tooltip="tooltip">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </section>

</x-app-layout>