@extends('layouts._includes.admin.app')
@section('conteudo')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
              Tabela dos Taxistas
            </h2>

            <form action="{{route('admin.taxistas.update',['id'=>$taxistas->id])}}" method="POST"
                class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                @csrf
                @method('PUT')
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Nome</span>
                    <input
                    type="text" value="{{$taxistas->nome}}"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Digita o nome " name="nome" />
                </label>
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Número de B.I</span>
                    <input
                    type="text" value="{{$taxistas->ndebi}}"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="" name="ndebi" />
                </label>
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Gênero</span>
                    <select name="genero" id="" value="{{$taxistas->genero}}"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                        <option value="">Selecciona...</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>

                    </select>

                </label>
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Data de Nascimento</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        type="date" value="{{$taxistas->data}}"
                         name="data" />
                </label>

                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Número de Telefone</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        type="number" value="{{$taxistas->numerotelefone}}"
                    name="numerotelefone" />
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
