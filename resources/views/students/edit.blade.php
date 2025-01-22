@extends('layouts.app')

@section('content')
    <x-h1 class="text-white">{{ __('Изменение студента') }}</x-h1>

    {{ html()->modelForm($student, 'PATCH', route('students.update', $student))->open() }}
    @include('students.form')
    {{ html()->submit( __('Обновить') )->class('bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded') }}
    {{ html()->closeModelForm() }}

@endsection
