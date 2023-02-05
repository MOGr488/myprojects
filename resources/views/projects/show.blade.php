<x-app-layout>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100 " dir="rtl">
              <div class="flex items-center justify-between">
              <h2 class="font-bold text-3xl ">المشاريع | {{ $project->title }}</h2>
            
              <a href="/projects/{{ $project->id }}/edit" class="inline-flex order-1 rounded-md border border-transparent bg-red-800 px-4 py-2 text-xl font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-red-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 active:bg-gray-900 dark:bg-green-400 dark:text-white-800 dark:hover:bg-white dark:focus:bg-white dark:focus:ring-offset-gray-800 dark:active:bg-gray-300 dark:hover:text-blue-400 ">تعديل المشروع</a>
              </div>

              <div class="grid grid-cols-2 gap-2 container mx-auto my-10 ">
                <div class="bg-cyan-800	  rounded  h-64 w-80 mt-10 hover:shadow-2xl p-5 text-center mx-auto">
                  @switch($project->status)
                  @case(1)
                  <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400">ملغي</span>
          
                      @break
                  @case(2)
                  <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">مكتمل</span>
                      
                      @break
                  @default
                  <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-purple-400 border border-purple-400"> قيد التنفيذ</span>
          
              @endswitch

              
    <h5 class="mb-2 mt-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
      {{ $project->title }}
  </h5>

  <p class="font-normal text-white dark:text-white-400">
    {{ Str::limit($project->description, 150) }} 
  </p>

  <div class="flex items-center justify-between mt-10">
    <div class="flex items-center justify-start">
    <svg fill="none" class="h-6 ml-1" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
</svg>
    <p>{{ $project->created_at->diffForHumans() }}</p>
  </div>
    <div class="flex items-center ">
      <svg fill="none" class="h-6 ml-2" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
</svg>
      <h4>8</h4>
    </div>

    <div>
      <svg fill="none" class="h-6 ml-2 text-red-600" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
<path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
</svg>
    </div>

  </div>



                </div>
                <div class="bg-white rounded  h-64 w-80 mt-10 hover:shadow-2xl p-5 text-center mx-auto">
                    



                </div>
                <div class="bg-white rounded  h-64 w-80 mt-10 hover:shadow-2xl p-5 text-center mx-auto">
                    



                </div>

              </div>
            </div>
          </div>
        </div>
    </div>



</x-app-layout>