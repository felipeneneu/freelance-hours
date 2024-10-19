
<div class="flex flex-col gap-4 md:grid md:grid-cols-2">
   @foreach ($this->projects as $project)
   
       <a href="{{ route('projects.show', $project) }}">
           <x-projects.simple-card :$project />
       </a>
      
   @endforeach
</div>

