<x-main>
        {{-- https://laravel-livewire.com/docs/2.x/file-uploads --}}
        <div class="mt-5 container-md shadow p-5 ">
          <h1>Modifica la Task</h1>
          <livewire:task-edit-form  :task="$task"/> {{-- prametro che deve passare --}}
        </div>
</x-main>