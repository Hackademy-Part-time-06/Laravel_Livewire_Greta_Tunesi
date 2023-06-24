<div>
    <form class="container" wire:submit.prevent="update">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" wire:model="title">
            @error('title') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" wire:model.lazy="description">
            @error('description') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
        <button wire:click="destroy({{$task}})" class="btn btn-danger">Elimina</button>
    </form>
</div>

