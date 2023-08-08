<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <section class="max-w-2xl px-6 py-8 mx-auto bg-white text-center">
        <main class="mt-8">
            <h2 class="text-gray-700">{{ $email }}</h2>
            <span class="text-gray-700">{{ $phone }}</span>

            <p class="mt-2 leading-loose text-gray-600">
                {{ $userMessage }}
            </p>

            <p class="mt-8 text-gray-600">
                Thanks, <br>
                {{ $name }}
            </p>
        </main>
    </section>
</body>

</html>
