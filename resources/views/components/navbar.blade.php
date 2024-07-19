<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <nav class="py-9 shadow-md h-screen">
        <div class="flex flex-col gap-y-5">
            <div class="items-center flex flex-col gap-y-2 p-2">
                <img src="{{ asset('images/Graph.png') }}" alt="">
                <p class="text-[10px]">Dashboard</p>
            </div>
            <div class="items-center flex flex-col gap-y-2 p-2">
                <img src="{{ asset('images/Person.png') }}" alt="">
                <p class="text-[10px]">Data Manage</p>
            </div>
            <div class="items-center flex flex-col gap-y-2 p-4 bg-accent">
                <img src="{{ asset('images/Document.png') }}" alt="">
                <p class="text-[10px]">BuPot</p>
            </div>
            <div class="items-center flex flex-col gap-y-2 p-2">
                <img src="{{ asset('images/Horn.png') }}" alt="">
                <p class="text-[10px]">Announcement</p>
            </div>
            <div class="items-center flex flex-col gap-y-2 p-2">
                <img src="{{ asset('images/Time Circle.png') }}" alt="">
                <p class="text-[10px]">Log Activity</p>
            </div>
        </div>
    </nav>
</body>
</html>
