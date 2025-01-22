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
                :headers="[__('ФИО'), __('Уровень знаний'),  __('Предмет'), __('Уроков в неделю'), __('Длительность урока'), __('Номер телефона'),  __('Аренда инструмента')]"
                :items="$students"
                :routes="['update' => 'students.edit', 'delete' => 'students.destroy']"
                :fields="['credentials', 'stud_length', 'lesson', 'lessons_in_week', 'lesson_length', 'phone_number', 'instrument_rent']">
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
