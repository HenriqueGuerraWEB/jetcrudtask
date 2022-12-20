<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nova Task') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-4 py-4">
                    <x-jet-validation-errors class="mb-4" />
 
                    <form method="POST" action="{{ route('tasks.store') }}">
                        @csrf
 
                        <div>
                            <x-jet-label for="nome" value="{{ __('Nome') }}" />
                            <x-jet-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus autocomplete="nome" />
                        </div>
                        <div>
                            <x-jet-label for="descricao" value="{{ __('Descrição') }}" />
                            <textarea id="descricao" class="block mt-1 w-full" type="text" name="descricao" :value="old('descricao')" required autofocus autocomplete="descricao" /></textarea>
                        </div>      
                        <div>
                            <x-jet-label for="imagem" value="{{ __('Imagem') }}" />
                            <x-jet-input id="imagem" class="block mt-1 w-full" type="text" name="imagem" :value="old('imagem')" required autofocus autocomplete="imagem" />
                        </div>                                          
                        <div>
                            <x-jet-label for="status_id" value="{{ __('ID Status') }}" />
                            <x-jet-input id="status_id" class="block mt-1 w-full" type="text" name="status_id" :value="old('status_id')" required autofocus autocomplete="status_id" />
                        </div>
                        <div class="flex mt-4">
                            <x-jet-button>
                                {{ __('Save Task') }}
                            </x-jet-button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>