<x-app-layout>
    <x-slot name="title">
    تعديل المشروع
    </x-slot>

<div class="justify-center text-right my-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <h1 class="text-white text-center pb-5 font-bold my-5">
            تعديل المشروع
        </h1>

        <form action="/projects/{{ $project->id }}" method="POST" dir="rtl">
        @csrf
        @method("PATCH")
        <x-project.form 
        :value=" $project->title "
        description="{{ $project->description }}"
        />
        
<div class="my-6">
    <x-primary-button class="ml-3"> تعديل </x-primary-button>

    <a href="/projects" class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">
    إالغاء</a>
</div>

        </form>


    </div>


</div>






</x-app-layout>