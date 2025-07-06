@props(['method', 'id', 'action', 'colour', 'display'])

<form method="POST" action="/tasks/{{ $action }}" class="inline">
    @csrf
    @method($method)
    <button type="submit" class="bg-{{ $colour }}-500 text-white size-7">{{ html_entity_decode($display) }}</button>
</form>