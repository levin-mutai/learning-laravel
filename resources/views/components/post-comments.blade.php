@props(["comment"])
<x-panel class="bg-gray-100">
    <article class="flex bg-gray-100 space-x-4">
        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/100?u={{$comment->user_id}}" alt="" width="60" height="60" class="rounded-xl">
        </div>
        <div>
            <header class="mb-4">
                <h3 class="font-bold">
                    {{$comment->author->name}}
                </h3>
                <p class="text-xs">
                    <time>{{$comment->created_at->diffForHumans()}}</time>
                </p>
                <p>
                    {{$comment->body}}
                </p>
            </header>
        </div>
    </article>
</x-panel>
