<x-app-layout>
    <div class="welcome-class">
        <h1>Seja Bem Vindo, <span>{{ Auth::user()->name }}</span></h1>
        <span>Essas são as funcionalidades do seu plano <p>Plano</p> :</span>
    </div>



    <div class="modules-area">
        <h1>Criador de anuncios:</h1>
        <span>Crie anuncios eficientes e em grande escala com a inteligencia E-AD500:</span>
        <div class="content-module">
            <a href="#">
                <img src="/images/google-ads-1.jpg" alt="">
                <h1>Google Ads</h1>
                <span>Transforme o desempenho de suas campanhas no Google Ads.</span>
                <button>Entrar em I.A Google Ads</button>
            </a>

            <a href="{{ route('facebook.welcome') }}">
                <img src="/images/facebook-ads.png" alt="">
                <h1>Meta Ads</h1>
                <span>Transforme o desempenho de suas campanhas no Meta Ads.</span>
                <button>Entrar em I.A Meta Ads</button>
            </a>

            <a href="#">
                <img src="/images/tiktok-ads.png" alt="">
                <h1>Tiktok Ads</h1>
                <span>Transforme o desempenho de suas campanhas no Tiktok Ads.</span>
                <button>Entrar em I.A Tiktok Ads</button>
            </a>
        </div>
    </div>


</x-app-layout>