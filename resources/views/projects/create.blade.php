<x-app-layout>
    <x-slot name="title">
    إنشاء مشروع جديد
    </x-slot>

<div class="justify-center text-right my-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <h1 class="text-white text-center pb-5 font-bold my-5">
            مشروع جديد
        </h1>

        <form action="/projects" method="POST" dir="rtl">
        @csrf
        <div class="mb-6">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">عنوان المشروع</label>
        <input type="title" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
    </div>
  <div>      
<label for="descripton" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">وصف المشروع</label>
<textarea id="descripton" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
</div>

<div class="my-6">
    <x-primary-button class="ml-3"> حفظ </x-primary-button>

    <a href="/projects" class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">
    إالغاء</a>
</div>

        </form>


    </div>


</div>






</x-app-layout>