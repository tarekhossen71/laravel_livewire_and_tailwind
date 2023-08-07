<div>
    <h1 class="text-3xl">Comment</h1>
    <form class="my-2 flex" wire:submit.prevent='addComment'>
        <input type="text" class="w-full shadow rounded border p-2 mr-2 my-2" placeholder="What's on your mind." wire:model.lazy="newComment">
        <div class="py-2">
            <button type="submit" class="p-2 bg-blue-500 hover:bg-blue-600 w-20 rounded shadow text-white">Add</button>
        </div>
    </form>
    @foreach ($comments as $comment)
        <div class="rounded border shadow p-3 my-2">
        <div class="flex justify-between items-center my-2">
            <div class="flex">
                <p class="text-lg font-bold">{{ $comment['creator'] }}</p>
                <p class="mx-2 py-1 text-xs font-semibold text-gray-500">{{ $comment['created_at'] }}</p>
            </div>
            <i class="fa-solid fa-circle-xmark text-red-500 hover:text-red-600 cursor-pointer"></i>
        </div>
        <p class="text-gray-800">{{ $comment['body'] }}</p>
    </div>
    @endforeach
    
</div>
