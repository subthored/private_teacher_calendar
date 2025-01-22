@extends('layouts.app')

@section('content')
    <h1 class="my-8 text-5xl font-bold text-white">{{__('Просмотр студента')}}: {{ $student->credentials }}
        {{-- @auth --}}
            <a href="{{ route('students.edit', $student->id) }}">⚙</a>
        {{-- @endauth --}}
    </h1>
    <p class="text-white"><span class="font-bold">{{__('ФИО')}}: </span>{{ $student->credentials }}</p>
    <p class="text-white"><span class="font-bold">{{__('ФИО Родителя')}}: </span>{{ $student->parent_credentials }}</p>
    <p class="text-white"><span class="font-bold">{{__('Возраст')}}: </span>{{ $student->age }}</p>
    <p class="text-white"><span class="font-bold">{{__('Дата рождения')}}: </span>{{ $student->date_of_birth }}</p>
    <p class="text-white"><span class="font-bold">{{__('Номер телефона')}}: </span>{{ $student->phone_number }}</p>
    <p class="text-white"><span class="font-bold">{{__('Номер телефона родителя')}}: </span>{{ $student->parent_phone_number }}</p>
    <p class="text-white"><span class="font-bold">{{__('Смена в школе')}}: </span>{{ $student->school_time }}</p>
    <p class="text-white"><span class="font-bold">{{__('Уровень')}}: </span>{{ $student->stud_length }}</p>
    <p class="text-white"><span class="font-bold">{{__('Уроков в неделю')}}: </span>{{ $student->lessons_in_week }}</p>
    <p class="text-white"><span class="font-bold">{{__('Длительность урока')}}: </span>{{ $student->lesson_length }}</p>
    <p class="text-white"><span class="font-bold">{{__('Предмет')}}: </span>{{ $student->lesson }}</p>
    <p class="text-white"><span class="font-bold">{{__('Аренда инструмента')}}: </span>{{ $student->instrument_rent }}</p>
    <p class="text-white"><span class="font-bold">{{__('Комментарий')}}: </span>{{ $student->comment }}</p>
@endsection
