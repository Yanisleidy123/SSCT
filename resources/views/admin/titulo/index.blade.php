@extends('layouts._includes.admin.app')
@section('conteudo')
 <main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
       <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Tabelas dos Títulos
        </h2>
        <!-- CTA -->      
         </div>   
    <div class="col-sm-3">
    <a href="{{route('admin.titulos.create')}}" class="btn btn-success">Novo Registro</a>  
    </div>
  
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">ID</th>
                            <th class="px-4 py-3">Nome de Titular</th>
                            <th class="px-4 py-3">Matricúla</th>
                            <th class="px-4 py-3">Número de Quadros</th>
                            <th class="px-4 py-3">Número de Bilhete</th>
                            <th class="px-4 py-3">Modelo da Viatura</th>
                            <th class="px-4 py-3">Número de Motor</th>
                            <th class="px-4 py-3">Data de Emissão</th>
                            <th class="px-4 py-3">Cor da Viatura</th>
                            <th class="px-4 py-3">Marca da Viatura</th> 
                             <th class="px-4 py-3">Número de Título</th>
                            <th class="px-4 py-3">Ações</th>
                           
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                      @foreach ($titulos as $titulo)
                          
                 
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                {{$titulo->id}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                               {{$titulo->nome}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$titulo->matricula1}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$titulo->ndequadro1}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$titulo->ndebi}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$titulo->modelo1}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$titulo->ndemotor1}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$titulo->dataemissao}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$titulo->cor1}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$titulo->marca1}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$titulo->ndetitulo}}
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center space-x-4 text-sm">
                                    <a href="{{route('admin.titulos.edit',['id'=>$titulo->id])}}"
                                    class="btn btn-primary me-2"
                                        aria-label="Edit">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                            </path>
                                        </svg>
                                    </a>
                                   
                                    <a href="{{route('admin.titulos.destroy',['id'=>$titulo->id])}}"
                                    class="btn btn-danger"
                                        aria-label="Delete">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex items-center col-span-3">
                    Showing 21-30 of 100
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                        <ul class="inline-flex items-center">
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Previous">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    1
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    2
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    3
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    4
                                </button>
                            </li>
                            <li>
                                <span class="px-3 py-1">...</span>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    8
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    9
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Next">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </span>
            </div>
        </div>
    </div>
</main>
@endsection
