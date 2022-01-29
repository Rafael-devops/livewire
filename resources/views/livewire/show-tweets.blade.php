<div>
    <h1>Show Tweets</h1>
    
    <p>{{$message}}</p>

    <form method="posts"  wire:submit.prevent="create">
        <input type="text" name="message" id="message" wire:model="message">
        <button type="submit">Criar novo tweet</button>
    </form>

    @foreach ($tweets as $tweet )
        {{$tweet->user->name}} - {{$tweets->content}} <br>
    @endforeach
</div>
