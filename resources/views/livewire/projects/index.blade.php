{{-- <div>
   @foreach ($this->projects as $project)
      
   <li>
    <a href="{{ route('projects.show', $project) }}">
    {{ $project->id}}. {{ $project->title }}
</a>
   </li>
   @endforeach
</div> --}}
<div class="grid grid-cols-2 gap-4">
   @foreach ($this->projects as $project)
       <a href="{{ route('projects.show', $project) }}">
           {{-- <x-projects.simple-card :$project /> --}}
       </a>
   @endforeach
</div>
{{-- <x-layouts.app>
   <livewire:projects.index />
</x-layouts.app> --}}
