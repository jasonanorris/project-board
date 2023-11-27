<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }} | {{$project->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h3 class="font-semibold pb-5">Edit a Project: {{$project->name}}</h3>

                    <form action="{{route('project.update', $project->id)}}" method="POST">
                        @csrf
                        @method('PUT')

                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                        
                        <div class="grid grid-cols-1 sm:grid-cols-6 gap-x-6 gap-y-6">
                            <span class="sm:col-span-3">
                                <label class="block" for="name">name</label>
                                <input class="block w-full" type="text" name="name" id="name" value="{{old('name', $project->name)}}" />
                            </span>

                            <span class="sm:col-span-3">
                                <label class="block" for="description">description</label>
                                <input class="block w-full" type="text" name="description" id="description" value="{{old('description', $project->description)}}" />
                            </span>
                        </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <a href="{{route('project.index')}}">Cancel</a>
                            <button class="bg-blue-600 text-white py-2 px-3 rounded-full" type="submit">Save</button>
                        </div>

                    </form>

                    <form action="{{route('project.destroy', $project->id)}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <div class="border text-white bg-red-400 mt-6 p-6">
                            <h3 class="font-semibold">Danger zone</h3>
                            <p>You can delete this project here</p>
                            <button class="bg-purple-600" type="submit">Delete</button>
                        </div>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
