<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,600"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    </head>

    <body>
        <div
            class="flex container justify-center p-4 mx-auto content-center h-screen"
        >
            <div class="flex content-center align-center flex-wrap">
                <div class="mt-4 md:mt-0 md:ml-6">
                    <div
                        class="uppercase tracking-wide text-sm text-indigo-600 font-bold"
                    >
                        {{ $platform }}
                    </div>
                    <a
                        href="#"
                        class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline"
                    >
                        {{ $version }}
                    </a>
                    <p class="mt-2 text-gray-600">
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Eius consequatur natus dicta ipsa eos amet quam
                        quis tempora sint odio. In minima veritatis magnam iusto
                        iure facere totam repudiandae. Dolor?
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
