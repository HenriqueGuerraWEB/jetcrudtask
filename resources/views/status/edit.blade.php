<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Satatus') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-4 py-4">
                    <x-jet-validation-errors class="mb-4" />
 
                    <form method="POST" action="{{ route('status.update', $status) }}">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-jet-label for="nome" value="{{ __('Nome') }}" />
                            <x-jet-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="$status->nome" required autofocus autocomplete="nome" />
                        </div>


                        <div class="flex mt-4">
                            <x-jet-button>
                                {{ __('Save Status') }}
                            </x-jet-button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>