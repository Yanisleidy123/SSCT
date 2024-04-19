@extends('layouts._includes.admin.app')
@section('conteudo')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
              Atualizar Títulos
            </h2>

            <form action="{{route('admin.titulos.update',['id'=>$titulos->id])}}" method="POST"
                class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                @csrf
                @method('PUT')
                <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Nome de Titular</span>
                       <select name="taxista_id"

                       class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                     @foreach ($taxistas as $taxista)
                    
                        <option value="{{$taxista->id}}" >{{$taxista->nome}}</option>
                        @endforeach
                    </select>
                       </label>
                       <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Matricúla</span>
                       <select name="livrete_id"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                        @foreach ($livretes as $livrete)
                    
                        <option value="{{$livrete->id}}">{{ $livrete->matricula1}}</option>
                        @endforeach
                    </select>
                       </label>
            
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Data de Emissão</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        type="date" value="{{$titulos->dataemissao}}"
                    name="dataemissao" />
                </label>
                
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Número de Título</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        type="text" value="{{$titulos->ndetitulo}}"
                    name="ndetitulo" />
                </label>  



                <div class="flex mt-6 text-sm">
                    <div>
                        <button
                            class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            Atualizar
                        </button>
                    </div>
                </div>
            </form>



        </div>
    </main>
@endsection
