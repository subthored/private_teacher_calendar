@extends('layouts.app')
@section('content')
    <body>
        <div class="mr-auto place-self-center lg:col-span-7">
            {{-- <x-h1 class="font-extrabold text-white xl:text-6xl">Менеджер учеников</x-h1> --}}
            <p class="max-w-2xl mb-6 font-extrabold text-gray-400 text-xl mt-4">
                Система контроля учеников, расписания и муз. инструментов для частного репетитора.</p>
            <div class="space-y-4">
                <a href="/"
                   class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                   target="_blank">
                    Демо страница </a>
            </div>
        </div>
    </body>
@endsection
