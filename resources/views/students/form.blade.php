<div class="col2 mb-10">
    {{ html()->label(__('ФИО'), 'credentials')->class('block text-gray-500') }}
{{ html()->input('text', 'credentials')->class('shadow-sm block mb-3 required: w-1/2') }}
<x-task-input-error :messages="$errors->get('credentials')" class="mt-2"/>

{{ html()->label(__('ФИО Родителя'), 'parent_credentials')->class('block text-gray-500') }}
{{ html()->input('text', 'parent_credentials')->class('shadow-sm block mb-3 required: w-1/2') }}
<x-task-input-error :messages="$errors->get('parent_credentials')" class="mt-2"/>

{{ html()->label(__('Возраст'), 'age')->class('block text-gray-500') }}
{{ html()->input('text', 'age')->class('shadow-sm block mb-3 required: w-1/2') }}
<x-task-input-error :messages="$errors->get('age')" class="mt-2"/>

{{ html()->label(__('Дата рождения'), 'date_of_birth')->class('block text-gray-500') }}
{{ html()->input('date', 'date_of_birth')->class('shadow-sm block mb-3 required: w-1/2') }}

{{ html()->label(__('Номер телефона'), 'phone_number')->class('block text-gray-500') }}
{{ html()->input('text', 'phone_number')->class('shadow-sm block mb-3 required: w-1/2') }}
<x-task-input-error :messages="$errors->get('phone_number')" class="mt-2"/>

{{ html()->label(__('Номер телефона родителя'), 'parent_phone_number')->class('block text-gray-500') }}
{{ html()->input('text', 'parent_phone_number')->class('shadow-sm block mb-3 required: w-1/2') }}
<x-task-input-error :messages="$errors->get('parent_phone_number')" class="mt-2"/>

{{ html()->label(__('Смена в школе'), 'school_time')->class('block text-gray-500') }}
{{ html()->select('school_time', ['Первая' => 'Первая', 'Вторая' => 'Вторая'])->class('shadow-sm block mb-3 required: w-1/2') }}
<x-task-input-error :messages="$errors->get('school_time')" class="mt-2"/>

{{ html()->label(__('Начальный уровень'), 'stud_length')->class('block text-gray-500') }}
{{ html()->select('stud_length', ['С нуля' => 'С нуля', 'Начальный' => 'Начальный', '1 год' => '1 год', '2 года' => '2 года',
                                    'Более 2х лет' => 'Более 2х лет', 'Законченная Муз.Школа' => 'Законченная Муз.Школа', 'Абитуриент' => 'Абитуриент'])->class('shadow-sm block mb-3 required: w-1/2') }}
<x-task-input-error :messages="$errors->get('stud_length')" class="mt-2"/>

{{ html()->label(__('Уроков в неделю'), 'lessons_in_week')->class('block text-gray-500') }}
{{ html()->select('lessons_in_week', ['1' => 1, '2' => 2, '3' => 3])->class('shadow-sm block mb-3 required: w-1/2') }}
<x-task-input-error :messages="$errors->get('lessons_in_week')" class="mt-2"/>

{{ html()->label(__('Длительность урока'), 'lesson_length')->class('block text-gray-500') }}
{{ html()->select('lesson_length', ['40' => 40, '60' => 60, '90' => 90])->class('shadow-sm block mb-3 required: w-1/2') }}
<x-task-input-error :messages="$errors->get('lesson_length')" class="mt-2"/>

{{ html()->label(__('Предмет'), 'lesson')->class('block text-gray-500') }}
{{ html()->select('lesson', ['Скрипка' => 'Скрипка', 'Сольфеджио' => 'Сольфеджио', 'Гармония' => 'Гармония'])->class('shadow-sm block mb-3 required: w-1/2') }}
<x-task-input-error :messages="$errors->get('lesson')" class="mt-2"/>

{{ html()->label(__('Аренда инструмента'), 'instrument_rent')->class('block text-gray-500') }}
{{ html()->select('instrument_rent', ['Выбор', 'Инструмента'])->class('shadow-sm block mb-3 required: w-1/2') }}
<x-task-input-error :messages="$errors->get('instrument_rent')" class="mt-2"/>

{{ html()->label(__('Комментарий'), 'comment')->class('block text-gray-500') }}
{{ html()->textarea('comment')->class('shadow-sm block mb-3 required: w-1/2') }}
</div>
{{-- {{ html()->label(__('Описание'), 'description')->class('block text-gray-700 mb-3') }}
{{ html()->textarea('description')->class('  shadow-sm block mb-3 required: w-1/2 h-32')  }}

{{ html()->label(__('Статус'), 'status_id')->class('block text-gray-700 mb-3') }}
{{ html()->select('status_id', ['0' => ''] + $taskStatuses->pluck('name', 'id')->toArray())
    ->class(' shadow-sm block mb-3 required: w-1/2') }}
<x-task-input-error :messages="$errors->get('status_id')" class="mt-2"/>

{{ html()->label(__('Исполнитель'), 'executor')->class('block text-gray-700 mb-3') }}
{{ html()->select('assigned_to_id', ['' => ''] + $users->pluck('name', 'id')->toArray())
    ->class(' shadow-sm block mb-3 required: w-1/2') }}

<div class="w-1/2 flex flex-col">
    <div class="flex justify-between items-center mb-3">
        {{ html()->label(__('Метки'), 'points')->class('block text-gray-700') }}
        <button class="plus-button" id="labelCreateButton">✚</button>
    </div>
</div>
{{ html()->select('labels', $labels->pluck('name', 'id')->toArray())->multiple()
    ->class('shadow-sm block mb-3 required: w-1/2 h-40') }} --}}