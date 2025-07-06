<div>
    <form method="POST" action="/tasks">
        @csrf
        <div>
            <input type="text" name="task" placeholder="Next Task..." class="border p-2 rounded">
        </div>
        <div class="mt-4 w-100">
            <button type="submit" class="bg-blue-500 text-white p-2 rounded-xl w-full">Add</button>
        </div>
    </form>
</div>