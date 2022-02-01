<div>
    <h1>Atualizar foto</h1>
    <form action="#" method="post" wire:submit.prevent="storagePhoto">
        <input type="file" name="photo" id="photo" wire:model="photo">
        @error('photo')
        {{$message}}
        @enderror
        <br>
        <button type="submit"></button>
    </form>
</div>
