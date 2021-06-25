
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         Tasks
        </h2>
    </x-slot>

    <div>
        <div class="py-12">
            <form wire:submit.prevent="save">
                <div class="max-w-xs mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl ">
                    </div>
                    <label for="task" class="text-gray-500">Inserir Tarefa</label>
                    <input type="text" name="task" wire:model="name" class="w-full form-input ">
                    @error('name')
                        <p class="text-red-500 text-sm font-bold py-2">{{ $message }}</p>
                    @enderror
                    <button wire:click="save" class="bg-indigo-500 text-white  p-3 my-2 w-full" >Add</button>
                </div>
            </form>
            <div class="max-w-xs mx-auto sm:px-6 lg:px-8 ">
                @foreach ($this->tasks as $task)
                    <div class="mt-1 py-2 px-4 flex items-center justify-between bg-white drop-shadow-xl hover:scale-95">{{ $task->name }}
                    <button wire:click="remove( {{ $task->id }})" class="text-xs text-red-500">Remover</button>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
