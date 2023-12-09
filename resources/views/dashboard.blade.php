<x-app-layout>
    <x-slot name="header">
        | {{ __('Dashboard') }}
    </x-slot>

    <div class="py-12">
        <div class="flex-col text-xl bg-gray-100 pt-1 rounded-lg mt-1">
            <?php
                $users = ['Bob Johnson', 'Rock Steady', 'Hank Hill', 'Bob Belcher', 'Bilge Stinkwater', 'Artee Deco', 'Homer Simpson', 'Bender Bending Rodriugez'];
                $colors = ['#DB2777', '#9333EA', '#EAB308', '#22C55E', '#DB2777', '#9333EA', '#EAB308', '#22C55E', '#DB2777', '#9333EA', '#EAB308', '#22C55E', '#DB2777', '#9333EA', '#EAB308', '#22C55E', '#DB2777', '#9333EA', '#EAB308', '#22C55E', ]
            ?>
            @foreach ($users as $user)
                <div class="flex space-x-0 rounded-lg h-24 m-4 outline outline-offset-0 outline-1 outline-gray-300">
                    <div class="rounded-l-lg h-full w-24 flex items-center" style="background-color:{{$colors[$loop->iteration]}}">
                        <p class="w-full text-center text-white">{{$loop->iteration}}</p>
                    </div>
                    <div class="rounded-r-lg w-full p-2 bg-white">
                        <p>{{$user}}</p>
                        <p class="text-gray-500">User Title</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
