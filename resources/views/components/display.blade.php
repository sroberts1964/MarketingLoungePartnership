@props(['id', 'task'])

<div class="flex items-center h-10">
    <div class="ml-1 mr-2">
        {{ $id }}
    </div>       
    <div class="flex justify-between items-center w-full ml-4 ">
            {{ $task }}
        <div>
            <button type="submit" class="bg-green-500 text-white size-7">&#10003;</button>
            <button class="bg-red-500 text-white size-7 rounded-x ml-2">X</button>
        </div>
    </div>
</div>
<hr class="mx-5">