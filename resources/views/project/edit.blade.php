<x-app-layout>
    <x-slot name="header">
        | {{ __('Projects') }}
    </x-slot>

    <div class="py-12">
        
    <h1 class="text-4xl font-extrabold dark:text-white">{{$project->name}}<small class="ms-2 font-semibold text-gray-500 dark:text-gray-400">Edit</small></h1>

        <form class="w-full mt-5 p-3" action="{{route('project.update', $project->id)}}" method="POST">
            @csrf
            @method('PUT')

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

            <div class="md:flex md:items-center mb-6">
              <div class="w-[100px]">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="name">
                  Name
                </label>
              </div>
              <div class="w-full">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="name" name="name" type="text" value="{{old('name', $project->name)}}">
              </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="w-[100px]">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="description">
                  Description
                </label>
              </div>
              <div class="w-full">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="description" name="description"  type="text" value="{{old('description', $project->description)}}">
              </div>
            </div>
            
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{route('project.index')}}">Cancel</a>
                <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">Save</button>
            </div>

          </form>

    </div>
</x-app-layout>
