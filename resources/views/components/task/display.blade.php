@props(['id', 'task', 'completed'])

<div class="flex items-center h-10">
    <div class="ml-1 mr-2">
        {{ $id }}
    </div>       
    <div class="flex justify-between items-center w-full ml-4 ">
        @if ($completed)
            <span class="line-through">{{ $task }}</span>
        @else
            <span>{{ $task }}</span>
            <div>
                <x-task.form-action method="PATCH" id="{{ $id }}" display="&#10003;" colour='green' action=" {{$id }}/update" />
                <x-task.form-action method="DELETE" id="{{ $id }}" display="X" colour='red' action="{{ $id }}" />
            </div>
        @endif
    </div>
</div>
<hr class="mx-5">