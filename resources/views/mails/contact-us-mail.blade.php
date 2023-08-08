<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <section class="max-w-2xl px-6 py-8 mx-auto bg-white dark:bg-gray-900">
        <main class="mt-8">
            <h2 class="text-gray-700 dark:text-gray-200">{{ $email }}</h2>
            <h3 class="text-gray-700 dark:text-gray-200">{{ $phone }}</h3>

            <p class="mt-2 leading-loose text-gray-600 dark:text-gray-300">
                {{ $message }}
            </p>

            <p class="mt-8 text-gray-600 dark:text-gray-300">
                Thanks, <br>
                {{ $name }}
            </p>
        </main>
    </section>
</body>

</html>
