<div>

    <table class="table border mt-2">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
               {{-- <th scope="row">{{$task->id}}</th> --}}
                <td>{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td>
                    <a href="{{Route('tasks.edit', $task)}}" class="btn btn-warning">Modifica</a>
                    <a wire:click="destroy({{$task}})" class="btn btn-danger">Elimina</a>
               </td>

            </tr>
            @endforeach

        </tbody>
    </table>

</div>
