<x-app-layout>
    <x-slot name="header">
        | {{ __('Projects') }}
    </x-slot>

    <div class="py-12">
        <div class="flex flex-wrap text-xl bg-gray-100 rounded-lg">
            @foreach ($projects as $project)
                <a href="{{route('project.show', $project->id)}}"><button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded h-[200px] w-[200px] m-5">
                    {{$project->name}}
                </button></a>
            @endforeach
        </div>
    </div>

</x-app-layout>
