<div>
    <h1>Show Tweets</h1>
    
    <p>{{$content}}</p>

    <form method="posts"  wire:submit.prevent="create">
        <input type="text" name="content" id="message" wire:model="content">
        @error('content'){{$message}}@enderror
        <button type="submit">Criar novo tweet</button>
    </form>

    <hr>

    @foreach ($tweets as $tweet )
        {{$tweet->user->name}} - {{$tweet->content}} <br>
        @if ($tweet->likes->count())
            <a href="#" wire:click.prevent="unlike({{$Tweet->id}})">Descurtir</a>
        @else
        <a href="#" wire:click.prevent="like({{$Tweet->id}})">Curtir</a>
        @endif
    @endforeach

    <div>
        {{$tweets->links()}}
    </div>
</div>

