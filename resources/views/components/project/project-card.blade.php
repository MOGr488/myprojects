@props([
  'type'=> 1
])


<x-project.project-status :stat="$project->status" />

    <h5 class="mb-2 mt-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
        {{ $project->title }}
    </h5>


    @switch($type)
        @case(1)
            <p class="font-normal my-2 text-gray-700 dark:text-gray-400">
            {{ Str::limit($project->description, 60) }}  
            </p>
            @break
        @case(2)
        <p class="font-normal my-2 text-gray-700 dark:text-gray-400">
          {{ $project->description }}  
        </p>
            @break
            
    @endswitch
    
    
    <x-project.project-card-bottom :project="$project" />

