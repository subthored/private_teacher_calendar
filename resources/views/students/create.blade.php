@extends('layouts.app')

@section('content')
    <x-h1 class="text-white">{{ __('Создание ученика') }}</x-h1>
    {{ html()->modelForm($student, 'POST', route('students.store', $student))->id('studentForm')->open() }}
    @include('students.form')
    {{ html()->submit( __('Создать'))->class('btn-primary') }}
    {{ html()->closeModelForm() }}
@endsection