<x-app-layout>
    <x-slot name="title">
      المشاريع
    </x-slot>



    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100 " dir="rtl">
              <div class="flex items-center justify-between">
              <h2 class="font-bold text-3xl ">المشاريع</h2>
            
              <a href="/projects/create" class="inline-flex order-1 rounded-md border border-transparent bg-red-800 px-4 py-2 text-xl font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-red-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 active:bg-gray-900 dark:bg-green-400 dark:text-white-800 dark:hover:bg-white dark:focus:bg-white dark:focus:ring-offset-gray-800 dark:active:bg-gray-300 dark:hover:text-blue-400 ">إضافة مشروع</a>
              </div>
              
              <ul class="my-6 flex items-center justify-between flex-wrap">

                @unless (count($projects) == 0)
                
                    @foreach ($projects as $project)
                    <li class="my-2">
                      <a href="/projects/{{ $project->id }}" class="block w-96 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 ">

                      <x-project.project-card 
                      :project="$project"
                      
                       /> 
                      </a>
                      </li>
                    @endforeach

                
                    @else
                    <h3 class="font-bold ">لا يوجد مشاريع</h3> 
                    @endunless
    
      
              </ul>
      
      
          </div>
         
      
          </div>
        </div>
      </div>
      


</x-app-layout>