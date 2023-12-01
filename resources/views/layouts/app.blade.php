<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/css/dashboard/loader.css">    

         <!-- Scripts -->
         @vite(['resources/css/app.css', 'resources/js/app.js'])
        
         <!-- Styles -->
         @livewireStyles

        @if(Route::currentRouteName() == 'dashboard')
            <link rel="stylesheet" href="/css/dashboard/header.css">
            <link rel="stylesheet" href="/css/dashboard/welcome.css">
            @elseif(request()->routeIs('facebook.welcome'))
            <link rel="stylesheet" href="/css/dashboard/facebook/welcome.css">
        @endif
        @if(request()->routeIs('facebook.*'))
            <link rel="stylesheet" href="/css/dashboard/facebook/header.css">
            <link rel="stylesheet" href="/css/dashboard/facebook/sidebar.css">
        @endif    
    </head>
    <body class="font-sans antialiased">
        <div class="loader-container">
            <div class="loader">
                <div class="box box0">
                  <div></div>
                </div>
                <div class="box box1">
                  <div></div>
                </div>
                <div class="box box2">
                  <div></div>
                </div>
                <div class="box box3">
                  <div></div>
                </div>
                <div class="box box4">
                  <div></div>
                </div>
                <div class="box box5">
                  <div></div>
                </div>
                <div class="box box6">
                  <div></div>
                </div>
                <div class="box box7">
                  <div></div>
                </div>
                <div class="ground">
                  <div></div>
                </div>
              </div>
        </div>
        <div>

            @if(Route::currentRouteName() == 'dashboard')
            <header>
                <div class="logo">
                    <img src="/images/logo-no-bg.png" alt="" id="logoDropdownToggle">
                    <div id="logoDropdownMenu" class="dropdown-content">
                        <a href="/minha-conta">Conta</a>
                        <a href="/configuracoes">Configurações</a>
                        <a style="color: rgb(255, 122, 122)" href="/logout">Sair</a>
                    </div>
                </div>
            </header>
            @elseif(route('facebook.welcome'))
            @livewire('navigation-menu')
            @livewire('sidebar-menu')
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
            showLoader();
        });

        window.addEventListener('load', function() {
            hideLoader();
        });

        function showLoader() {
            document.querySelector('.loader-container').style.display = 'flex';
            window.loadTime = Date.now();
        }

        function hideLoader() {
            let timeElapsed = Date.now() - window.loadTime;
            let delay = Math.max(3500 - timeElapsed, 0);

            setTimeout(() => {
                document.querySelector('.loader-container').style.display = 'none';
            }, delay);
        }
            

            document.getElementById('logoDropdownToggle').addEventListener('click', function() {
            var dropdown = document.getElementById('logoDropdownMenu');
            if (dropdown.style.display === "block") {
                dropdown.style.display = "none";
            } else {
                dropdown.style.display = "block";
            }
        });

        window.onclick = function(event) {
            if (!event.target.matches('#logoDropdownToggle')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.style.display === "block") {
                        openDropdown.style.display = "none";
                    }
                }
            }
        };
        </script>

@stack('modals')

@livewireScripts

    </body>
</html>
