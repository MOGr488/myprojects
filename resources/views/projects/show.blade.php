<x-app-layout>
  <x-slot name="title">
    استعراض المشروع
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100 " dir="rtl">
              <div class="flex items-center justify-between">
              <h2 class="font-bold text-3xl ">المشاريع | {{ $project->title }}</h2>
            
              <a href="/projects/{{ $project->id }}/edit" class="inline-flex order-1 rounded-md border border-transparent bg-red-800 px-4 py-2 text-xl font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-red-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 active:bg-gray-900 dark:bg-green-400 dark:text-white-800 dark:hover:bg-white dark:focus:bg-white dark:focus:ring-offset-gray-800 dark:active:bg-gray-300 dark:hover:text-blue-400 ">تعديل المشروع</a>
              </div>

              <div class="mt-5 grid gap-2 lg:grid-cols-2">
                <div>
                  <div class="h-auto w-full bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mb-4 p-7">
                   
                    <x-project.project-card :project="$project" 
                    type="2"  /> 

                  

                  </div>
                  <div class="w-full bg-blue-500 p-4">
                    <form action="/projects/{{ $project->id }}" method="POST">
                      @csrf
                      @method("PATCH")
                    <label for="status" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">أختر حالة المشروع</label>
                    <select id="status" name="status" onchange="this.form.submit()" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                      <option value="0" {{ ($project->status == 0) ? 'selected' : '' }}>قيد الأنجاز</option>
                      <option value="1" {{ ($project->status == 1) ? 'selected' : '' }}>مكتمل</option>
                      <option value="2" {{ ($project->status == 2) ? 'selected' : '' }}>ملغي</option>
                    </select>
                  </form>
                  </div>
                </div>
                <div>
                  <div class="h-full w-full bg-green-600">
                      
                    @foreach ($project->tasks as $task)
                        
                   
                    <div class="mb-4 mt-1 flex items-center justify-end rounded-2xl bg-indigo-500 p-2 shadow-lg">
                      <form action="/projects/{{ $project->id }}/tasks/{{ $task->id }}" method="POST">
                        @csrf 
                        @method("PATCH")
                      <label for="default-checkbox" class="ml-2 text-lg font-medium text-gray-900 dark:text-gray-300 {{ $task->done ? 'line-through' : '' }}">{{ $task->body }}</label>
                      <input id="default-checkbox" onchange="this.form.submit()"  name="done" type="checkbox" {{ $task->done ? 'checked' : '' }}  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600" />
      </form>
                  <form action="/projects/{{ $task->project_id }}/tasks/{{ $task->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                      <button type="submit" class="mr-2 inline-flex items-center rounded-lg border-blue-700 p-2.5 text-center text-sm font-medium text-blue-700 hover:text-white focus:outline-none focus:ring-4 focus:ring-red-300 dark:border-red-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-red-800">
                        <svg fill="none" class="ml-2 h-6 w-6 text-red-600" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                        </svg>
                        <span class="sr-only">Task card</span>
                      </button></form>
                    </div>

                    @endforeach

                      

                     <form action="/projects/{{ $project->id }}/tasks" method="POST">
                    @csrf
                    <div class="mb-4 mt-1 flex items-center rounded-2xl bg-indigo-500 p-2 shadow-lg">
                      <input type="text" id="default-input" name="body" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="اكتب ما تشاء..." />
                      <button type="submit" class="rounded-lg bg-blue-700 px-4 py-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mr-2">إضافة</button>
                    </div>
</form>

                  

                   
                    </div>
                  </div>
                </div>
              </div>

              
            </div>
          </div>
        </div>
    </div>



</x-app-layout>