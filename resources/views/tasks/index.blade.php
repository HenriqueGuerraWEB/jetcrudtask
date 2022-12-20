<x-app-layout>
    <x-slot name="header">
        <h2 class="inline-block font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks list') }}
        </h2>
        <a class="float-right inline-block text-center items-center px-4 py-2 bg-orange-500 border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:text-white-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition
                    " href="{{ route('status.index') }}" class="m-4">Satatus</a>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div style="padding:15px 15px 25px">
                        <a class="block text-center items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition
                    " href="{{ route('tasks.create') }}" class="m-4">Nova Task</a>
                    </div>
                    
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Task name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Descricao
                            </th>       
                            <th scope="col" class="px-6 py-3">
                                ID Status
                            </th>                                                 
                            <th scope="col" class="px-6 py-3">
                                Ação
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($tasks as $task)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    {{ $task->nome }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    {{ $task->descricao }}
                                </td>          
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    {{ $task->status_id }}
                                </td>                                                         
                                <td class="px-6 py-4">
                                    <a class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition" href="{{ route('tasks.edit', $task) }}">Edit</a>
                                    <form method="POST" action="{{ route('tasks.destroy', $task) }}" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <x-jet-danger-button
                                            type="submit"
                                            onclick="return confirm('Quer realmente excluir?')">Excluir</x-jet-danger-button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td colspan="2"
                                    class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    {{ __('No tasks found') }}
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>