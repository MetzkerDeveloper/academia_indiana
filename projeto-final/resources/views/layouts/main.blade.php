<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Indiana</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>

<body class="body font-sans">
    <div class="w-full">
        <div class="header w-full fixed flex items-center z-50 ">
            <div
                class="header flex items-center w-full h-14 hover:scale-y-110 hover:h-16 transition-ease-in-out duration-500">
                <div class="w-4/12 sm:w-2/12 h-full flex items-center justify-center pl-2 ">
                    <a href="{{ url('/') }}">
                        <img class="w-32" src="/storage/img/logo_nova.png" alt="Logo">
                    </a>
                </div>
                <div class="w-full sm:w-2/12 flex items-center justify-center pl-2 ">
                    @yield('search')
                </div>
                @auth
                    <div class="w-7/12 h-full flex items-center justify-end me-4 ">
                        <a href="{{ url('addGame') }}" class="link">Cadastrar
                            Jogo</a>
                        <a href="{{ url('profileGames') }}" class="link">Meus
                            Jogos</a>
                        <a href="{{ url('profile') }}" class="link ">Perfil</a>
                        <a href="{{ route('logout') }}" class="link ">Sair</a>
                    </div>
                @endauth
                @guest
                    <div class="w-10/12 h-full flex items-center justify-end me-4">
                        <a href="{{ url('login') }}" class="link">Log
                            in</a>
                        <a href="{{ url('register') }}" class="link">Cadastrar</a>
                    </div>
                @endguest
            </div>
        </div>
        <main class="h-full">
            @yield('content')
        </main>
    </div>
    <div class="absolute">
        <div class="fixed bottom-0 w-full">
            <footer class="footer flex content-end sm:flex-row py-2">
                <div class="w-full sm:w-3/12 flex flex-col items-center border-r border-slate-700">
                    <span class="text-xs font-bold text-white">Nossas Redes</span>
                    <div class="flex mt-2 sm:mt-4 space-x-1.5 sm:space-x-4">
                        <a href="https://www.instagram.com/wm_magalhaes/" target="_blank"><img
                                class="w-8 h-8 hover:scale-125 hover:cursor-pointer transition-all duration-500"
                                src="/storage/img/instagram.png" alt="Instagram"></a>
                        <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"><img
                                class="w-8 h-8 hover:scale-125 hover:cursor-pointer transition-all duration-500"
                                src="/storage/img/facebook.png" alt="Facebook"></a>
                        <a href="https://www.youtube.com/channel/UCk566-F4NdZcGkrlTdGDgew" target="_blank"
                            rel="noopener noreferrer"><img
                                class="w-8 h-8 hover:scale-125 hover:cursor-pointer transition-all duration-500"
                                src="/storage/img/youtube.png" alt="Youtube"></a>
                        <a href="https://www.linkedin.com/in/waleriano-magalh%C3%A3es-84b39219b/" target="_blank"
                            rel="noopener noreferrer"><img
                                class="w-8 h-8 hover:scale-125 hover:cursor-pointer transition-all duration-500"
                                src="/storage/img/linkedin (1).png" alt="Linkedin"></a>
                        <a href="https://github.com/MetzkerDeveloper" target="_blank" rel="noopener noreferrer"><img
                                class=" w-8 h-8 bg-white rounded-full border-transparent hover:scale-125 hover:cursor-pointer transition-all duration-500"
                                src="/storage/img/github.png" alt="Github"></a>
                    </div>
                </div>
                <div class="w-full sm:w-3/12 flex justify-center border-r border-slate-700">
                    <span class="text-xs font-bold text-white">Sobre Nós</span>
                </div>
                <div class="w-full sm:w-3/12 flex justify-center border-r border-slate-700">
                    <span class="text-xs font-bold text-white">Inf. Legais</span>
                </div>
                <div class="w-full sm:w-3/12 flex justify-center">
                    <span class="text-xs font-bold text-white">Criadores</span>
                </div>
            </footer>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    
    <script>
        @if (session('success'))
            var textMessage = "{{ session('success') }}";
            var colorStyle = { color: "#000", background: "linear-gradient(to right, #00ff00, #1BF51B )"};
        @elseif (session('edit'))
            var textMessage = "{{ session('edit') }}";
            var  colorStyle = { color: "#000", background: "linear-gradient(to right, #ffff00, #F8F81D )"};
        @elseif (session('delete'))
            var textMessage = "{{ session('delete') }}";
            var  colorStyle =  { color: "#fff", background: "linear-gradient(to right, #ff0000, #F61D1D )"};
        @endif

        Toastify({ text: textMessage , duration: 3000,close:true,
                gravity: "top",position: "right", style: colorStyle ,
            }).showToast();
    </script>

</body>

</html>