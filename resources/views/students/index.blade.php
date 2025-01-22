@extends('layouts.app')
@section('content')
    <div class="grid col-span-full">
        <x-h1 class="text-white">{{ __('Ученики') }}</x-h1>

        <div class="w-full flex justify-between">
            {{-- @auth --}}
                <div class="flex">
                    <x-primary-a-button :route="route('students.create')" :method="'GET'">
                        {{__('Создать ученика')}}
                    </x-primary-a-button>
                </div>
            {{-- @endauth --}}
        </div>

        {{-- @auth --}}
            <x-table.table class="text-gray-500"
                :headers="[__('ФИО'), __('Номер телефона'), __('Начальный уровень'), __('Предмет'), __('Аренда инструмента')]"
                :items="$students"
                :routes="['update'=> 'students.edit', 'delete' => 'students.destroy']"
                :fields="['credentials', 'phone_number', 'stud_length', 'lesson', 'instrument_rent']">
            </x-table.table>
        {{-- @endauth --}}
        {{-- @guest --}}
            {{-- <x-table.table class="text-gray-500"
                :headers="['ID', __('Статус'), __('Имя'), __('Автор'), __('Исполнитель'),__('Дата создания')]"
                :items="$tasks"
                :fields="['id', 'status_name', 'name', 'author_name', 'executor_name', 'created_at']">
            </x-table.table> --}}
        {{-- @endguest --}}
        {{-- <div class="mt-10">
            {{ $tasks->links() }}
        </div> --}}
    </div>
@endsection
