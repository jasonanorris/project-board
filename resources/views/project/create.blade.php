<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h3 class="font-semibold pb-5">Add a new Project</h3>

                    <form action="{{route('project.store')}}" method="POST">
                        @csrf

                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                        
                        <div class="grid grid-cols-1 sm:grid-cols-6 gap-x-6 gap-y-6">
                            <span class="sm:col-span-3">
                                <label class="block" for="name">Name</label>
                                <input class="block w-full" type="text" name="name" id="name" value="{{old('name')}}" />
                            </span>

                            <span class="sm:col-span-3">
                                <label class="block" for="description">Description</label>
                                <input class="block w-full" type="text" name="description" id="description" value="{{old('description')}}" />
                            </span>
                            
                        </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <a href="{{route('project.index')}}">Cancel</a>
                            <button class="bg-blue-600 text-white py-2 px-3 rounded-full" type="submit">Save</button>
                        </div>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
