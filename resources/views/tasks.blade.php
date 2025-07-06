<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MLP To-Do</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
    <body class="bg-gray-100 w-full h-screen">
        <div class="w-2/3 mx-auto p-4">
            <div class=" mb-4 p-4 justify-center">
                <img src="./assets/logo.png" alt="MLP Logo">
            </div>
            <div class="flex">
                <div>
                    <div>
                        <input type="text" name="task" placeholder="Next Task..." class="border p-2 rounded">
                    </div>
                    <div class="mt-4 w-100">
                        <button type="submit" class="bg-blue-500 text-white p-2 rounded-xl w-full">Add</button>
                    </div>
                </div>
                <div class="ml-4 w-2/3 bg-white">
                    <div class="flex items-center border-1 h-10 border-gray-200">
                        <div class="ml-1 mr-2">
                            # 
                        </div>
                        <div class="ml-4">
                            Task                
                        </div>
                    </div>
                    <div class="flex items-center h-10 ">
                        <div class="ml-1 mr-2">
                            1
                        </div>
                        <div class="ml-4 justify-between items-center w-full flex">
                            The 1st Task
                            <div>
                                <button type="submit" class="bg-green-500 text-white size-7 rounded-sm">&#10003;</button>
                                <button class="bg-red-500 text-white size-7 rounded-sm ml-2">X</button>
                            </div>                
                        </div>
                    </div>
                    {{-- <hr class="m-5"> --}}
                </div>
            </div>
        </div>
    </div>  
    <footer class="text-center sticky top-[100vh]">
        <p class="text-gray-500">Copyright © 2020 All Rights Reserved</p>
    </footer>  
    </body>
</html>