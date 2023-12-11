<x-app-layout>
      <div class="welcome-class">
          <h1>Seja Bem Vindo, <span>{{ Auth::user()->name }}</span></h1>
          <span>Você está na área de gestão do Meta Ads, veja abaixo algumas das diversas funcionalidades</span>
      </div>



        <div class="content-area">
            <div class="content-boxes">
                <box>
                    <box-title>
                        <h1>Análise de campanhas</h1>
                        <span>Faça uma análise detalhada de suas campanhas.</span>
                    </box-title>
                </box>
            </div>
        </div>



</x-app-layout>