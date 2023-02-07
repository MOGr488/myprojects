
@switch($stat)
@case(2)
<span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400">ملغي</span>

    @break
@case(1)
<span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">مكتمل</span>
    
    @break
@default
<span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-purple-400 border border-purple-400"> قيد التنفيذ</span>

@endswitch
