<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico" />
    <title>@yield('title', 'TaskMaster')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1349ec",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101522",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
    @yield('styles')
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display antialiased">
    <div class="flex min-h-screen">

        {{-- Sidebar --}}
        @include('content.layouts.menu_left')

        {{-- Main Content Area --}}
        <div class="flex-1 flex flex-col ml-64 min-w-0">

            {{-- Top Header --}}
            @include('content.layouts.header')

            {{-- Page Content --}}
            <main class="flex-1 overflow-y-auto p-8 bg-background-light dark:bg-background-dark">
                @yield('content')
            </main>

        </div>
    </div>
    @yield('scripts')
</body>

</html>
