@include('layouts.navigation')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gerenciar Tênis') }}
        </h2>
    </x-slot>

    <div class="py-8 max-w-7xl mx-auto sm:px-6 lg:px-8">

        <!-- Formulário de Cadastro de Tênis -->
        <div class="bg-white p-6 rounded shadow mb-6">
            <h3 class="text-lg font-semibold mb-4">Cadastrar Novo Tênis</h3>
            <form action="{{ route('tenis.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nome</label>
                        <input type="text" name="nome" class="mt-1 block w-full rounded border-gray-300 shadow-sm" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Preço</label>
                        <input type="number" name="preco" step="0.01" class="mt-1 block w-full rounded border-gray-300 shadow-sm" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Categoria</label>
                        <select name="categoria" class="mt-1 block w-full rounded border-gray-300 shadow-sm" required>
                            <option value="">Selecione</option>
                            <option value="casual">Casual</option>
                            <option value="streetweare">Streetwear</option>
                            <option value="feminino">Feminino</option>
                            <option value="chuteiras">Chuteiras</option>
                            <option value="esportivo">Esportivo</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Imagem</label>
                        <input type="file" name="imagem" class="mt-1 block w-full rounded border-gray-300 shadow-sm" required>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        Cadastrar Tênis
                    </button>
                </div>
            </form>
        </div>

        <!-- Lista de Tênis -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($tenis as $item)
                <div class="card bg-white shadow rounded p-4">
                    <img src="{{ asset('storage/' . $item->imagem) }}" class="w-full h-48 object-cover mb-4" alt="{{ $item->nome }}">
                    <h4 class="text-lg font-semibold">{{ $item->nome }}</h4>
                    <p class="text-gray-600">R$ {{ number_format($item->preco, 2, ',', '.') }}</p>
                    <p class="text-sm text-gray-400 mt-1">Categoria: {{ ucfirst($item->categoria) }}</p>

                    <div class="mt-4 flex gap-2">
                        <a href="{{ route('tenis.edit', $item->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">Editar</a>

                        <form action="{{ route('tenis.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este tênis?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">Excluir</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>




