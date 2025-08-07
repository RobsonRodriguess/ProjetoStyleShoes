<x-app-layout>
    <div class="container py-4">
        <h2 class="text-2xl font-bold mb-4">Editar Tênis</h2>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-2 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-100 text-red-800 p-2 mb-4 rounded">
                <ul>
                    @foreach($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('tenis.update', $tenis->id) }}" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block font-semibold">Nome:</label>
                <input type="text" name="nome" value="{{ old('nome', $tenis->nome) }}" class="w-full border rounded px-3 py-2" required>
            </div>

            <div>
                <label class="block font-semibold">Preço:</label>
                <input type="number" step="0.01" name="preco" value="{{ old('preco', $tenis->preco) }}" class="w-full border rounded px-3 py-2" required>
            </div>

            <div>
                <label class="block font-semibold">Categoria:</label>
                <input type="text" name="categoria" value="{{ old('categoria', $tenis->categoria) }}" class="w-full border rounded px-3 py-2" required>
            </div>

            <div>
                <label class="block font-semibold">Imagem atual:</label><br>
                <img src="{{ asset('storage/' . $tenis->imagem) }}" alt="Imagem atual" class="w-32 mb-2">
            </div>

            <div>
                <label class="block font-semibold">Nova imagem (opcional):</label>
                <input type="file" name="imagem" class="block w-full">
            </div>

            <div>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded">
                    Atualizar
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
