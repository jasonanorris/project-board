<x-app-layout>
    <x-slot name="header">
        | {{ __('Projects') }}
    </x-slot>

    <div class="py-12">
        
        <div class="flex flex-col text-xl bg-gray-100 rounded-lg p-2">

            <div class="flex flex-row w-5/6">
                <div class=""><h2 class="text-4xl font-extrabold dark:text-white pl-2">{{$project->name}}</h2></div>
                
                <a href="{{route('project.edit', $project->id)}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                 </a>

              </div>

            @foreach ($project->tasks as $task)
                <a href="#"><button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-l-4 border-blue-700 hover:border-blue-500 rounded w-5/6 m-2 text-left">
                    <p>{{$task->title}}</p>
                    <p class="text-lg text-gray-300 font-light pl-2">{{$task->description}}</p>
                </button></a>
            @endforeach

            <div class="bg-white hover:bg-blue-200 text-slate font-bold py-2 px-4 border-2 border-l-4 border-blue-700 hover:border-blue-500 rounded w-5/6 m-2 text-left" x-data="{ open: false }">
                <div class="flex flow-root">
                    <div class="float-left"><p>Test Group</p></div>

                    <div class="float-right hover:opacity-25" @click="open = !open" x-show="!open"><a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 4.5h14.25M3 9h9.75M3 13.5h9.75m4.5-4.5v12m0 0l-3.75-3.75M17.25 21L21 17.25" />
                        </svg></a>
                    </div>

                    <div x-cloak class="float-right hover:opacity-25" @click="open = !open" x-show="open"><a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 4.5h14.25M3 9h9.75M3 13.5h5.25m5.25-.75L17.25 9m0 0L21 12.75M17.25 9v12" />
                        </svg>
                    </div>

                </div>
                <p class="text-lg text-slate-800 font-light pl-2">Group description here.</p>

                <div class="flex flex-col text-xl bg-gray-100 rounded-lg p-2">
                    @foreach ($project->tasks as $task)
                        <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-l-4 border-blue-700 hover:border-blue-500 rounded w-full text-left mb-4">
                            <p>{{$task->title}}</p>
                            <p class="text-lg text-gray-300 font-light pl-2">{{$task->description}}</p>
                        </button>
                    @endforeach
                    @foreach ($project->tasks as $task)
                        <button x-cloak class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-l-4 border-blue-700 hover:border-blue-500 rounded w-full mb-4 text-left" x-show="open" x-transition>
                            <p>{{$task->title}}</p>
                            <p class="text-lg text-gray-300 font-light pl-2">{{$task->description}}</p>
                        </button>
                    @endforeach
                    <div class="flex justify-center" x-show="!open">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                        </svg>
                    </div>
                      
                </div>
            </div>

        </div>

    </div>

</x-app-layout>