<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/css/welcome.css">
    <title>AdFlux</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="/images/logo-no-bg.png" alt="">
        </div>
        <div class="header-text">
            <ul>
                <li><a href="#">Informações</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Adquira</a></li>
                <li><a href="#">Quem somos</a></li>
            </ul>
        </div>
        <div class="dashboard">
            <div class="register">
                <a href="#">INSCREVA-SE</a>
            </div>
            <div class="login">
                <a href="{{ route('login') }}">Login</a>
            </div>
        </div>
    </header>
    <button id="backToTopButton" onclick="scrollToTop()">Voltar ao Topo</button>
    <main>
        <section class="main-section">
            <div class="bg-main"></div>
            <div class="main-info">
                <h1>A Ferramenta Inteligente Que Aumenta os Seus Resultados com Anúncios</h1>
                <p>Conheça agora o AdFlux, uma ferramenta desenvolvida com inteligência artificial para gestão de anúncios de Facebook e Instagram ADS, que pode aumentar suas vendas em até 527% de forma automatizada.</p>
                <div class="cta-button">
                    <button>Teste <span style="font-weight: 700;">agora,</span> nossa I.A</button>
                </div>
            </div>    
        </section>

        

        </section>

        <section class="third-section">
            <div class="sec-title">
                <h2>Mas, afinal...</h2>
                <h1>O que é a AdFlux?</h1>
                <p>Assista o <span style="font-weight: 700;">vídeo abaixo</span> para entender um pouco melhor como funciona esta <span style="font-weight: 700;">incrível ferramenta que irá multiplicar</span> as suas vendas através dos seus anúncios.</p>
            </div>

            <div class="vid-iframe">
                <iframe width="1000" height="500" src="https://www.youtube.com/embed/L9X5AJsXxN8" title="Maratona de E-Commerce - Apresentação da Plataforma" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>

            <div class="cta-button">
                <button>Vamos <span style="font-weight: 700;">em Frente,</span> Eu Quero <span style="font-weight: 700;">Começar agora</span></button>
            </div>

        </section>


        <section class="forthe-section">
            <div class="bg-forthe"></div>
            <div class="sec-title" style="width: 60%;">
                <h2>A grande chance de ter o seu negócio crescendo de forma</h2>
                <h1>Otimizada, Estruturada e Inteligente</h1>
                <p>Você não terá apenas uma simples plataforma de gerenciamento, mas sim uma plataforma que fará uma <span style="font-weight: 700;"> análise automática e constante</span> para que suas campanhas fiquem cada vez <span style="font-weight: 700;">mais otimizadas, baratas e os seus resultados numa constante crescente.</span></p>
            </div>

            <div class="info-boxes">
                <div class="info-box">
                    <img src="/images/IMG_PLAT.png" alt="">
                    <div class="box-content">
                        <i class="fa-solid fa-table"></i>
                        <h1>Análise de Contas de Anúncios</h1>
                        <p>Tenha uma análise detalhada dos principais pontos de melhorias em suas campanhas e em seu negócio on-line com 1 click.</p>
                    </div>
                </div>    

                <div class="info-box">
                    <img src="/images/IMG_PLAT.png" alt="">
                    <div class="box-content">
                        <i class="fa-solid fa-filter-circle-dollar"></i>
                        <h1>Análise de Funil de Vendas de Campanhas</h1>
                        <p>Saiba exatamente quais os pontos que exigem atenção no funil de vendas do seu site e em suas campanhas.</p>
                    </div>
                </div>    

                <div class="info-box">
                    <img src="/images/IMG_PLAT.png" alt="">
                    <div class="box-content">
                        <i class="fa-solid fa-users-gear"></i>
                        <h1>Painel Unificado de Contas de Anúncios e Resultados</h1>
                        <p>Tenha uma visão completa de suas contas de anúncios e suas metas. Organize suas tarefas e centralize suas anotações.</p>
                    </div>
                </div>    

                <div class="info-box">
                    <img src="/images/IMG_PLAT.png" alt="">
                    <div class="box-content">
                        <i class="fa-solid fa-user-secret"></i>
                        <h1>Pesquisa de Interesses Ocultos</h1>
                        <p>Vá além que a concorrência e explore públicos vencedores.</p>
                    </div>
                </div>    
            </div>
            <div class="cta-button">
                <button>QUERO <span style="font-weight: 700;">EVOLUIR</span> COM A <span style="font-weight: 700;">AdFlux</span></button>
            </div>
        </section>

        <div class="arrow">
            <img src="/images/seta-baixo-azul.png" alt="">
        </div>


        <section class="fivee-section">
            <div class="fivee-sec-content">
                <img src="/images/fb-img.png" alt="">
                <div class="info-content">
                    <h1>Autorizado Oficialmente Pelo Facebook ADS</h1>
                    <p>Pode ficar tranquilo, você não receberá nenhum tipo de bloqueio, perda de conta ou restrição por usar nossa plataforma. Temos todos os contratos assinados oficialmente com o Facebook para prover os melhores resultados para você, sem nenhum risco!</p>
                    <div class="cta-button" style="margin-top: 25px;">
                        <button><span style="font-weight: 700;">Ver planos disponíveis</span></button>
                    </div>
                </div>
            </div>
        </section>


        <section class="sixty-section">
            <div class="bg-overlay"></div>
            <div class="bg-sixty"></div>

            <div class="sixty-content">
                <div class="headline">
                    <h1>Análise em Apenas 1 Clique!</h1>
                    <p>Esse é um fluxo básico de inicialização dentro da plataforma e acompanhamento com nosso especialista dos resultados.</p>
                </div>

                <div class="double-box">
                    <div class="sixty-box">
                        <div class="pfp">
                            <i class="fa-solid fa-fire"></i>
                        </div>
                        <h1>1. Cadastre sua Conta de Anúncios</h1>
                        <p>É muito fácil fazer a linkagem de sua conta de anúncios com a AdFlux. Você pode realizar isso em apenas alguns minutos.</p>
                    </div>
                    <div class="sixty-box">
                        <div class="pfp">
                            <i class="fa-solid fa-toggle-on"></i>
                        </div>
                        <h1>2. Análise em 1 Clique</h1>
                        <p>Não é necessário mais perder várias horas analisando suas métricas. Com apenas 1 clique, nossa inteligência artificial fará tudo por você!</p>
                    </div>
                </div>

                <div class="sixty-list">
                    <h2>Algumas das análises feitas pela plataforma:</h2>
                    <ul>
                        <li><i aria-hidden="true" class="fas fa-check"></i><span>Funil de Vendas</span></li>
                        <li><i aria-hidden="true" class="fas fa-check"></i><span>Custo por visualização de página (CPS)</span></li>
                        <li><i aria-hidden="true" class="fas fa-check"></i><span>Ticket médio</span></li>
                        <li><i aria-hidden="true" class="fas fa-check"></i><span>Taxa de conversão</span></li>
                        <li><i aria-hidden="true" class="fas fa-check"></i><span>Tipos de campanhas</span></li>
                        <li><i aria-hidden="true" class="fas fa-check"></i><span>Formato de anúncios</span></li>
                        <li><i aria-hidden="true" class="fas fa-check"></i><span>Frequência de Exibição de anúncios</span></li>
                        <li><i aria-hidden="true" class="fas fa-check"></i><span>CPM Ideal</span></li>
                    </ul>
                </div>
            </div>


            <div class="sixty-flex-box">
                <img src="/images/prints-novo-1024x963.png" alt="">
                <div class="box-content-sixty">
                    <h1>Tudo o que você precisa está aqui!</h1>
                    <p>Na AdFlux você vai poder gerenciar todas as suas contas de anúncios em um só lugar e com apenas 1 clique fará uma análise completa, desde o seu funil de vendas até a qualidade de cada anúncio. Indicaremos mudanças de público, você poderá verificar formatos de anúncios que mais trouxeram resultados e muito mais...</p>
                    <div class="cta-button" style="margin-top: 25px;">
                        <button>Quero a <span style="font-weight: 700;">AdFlux</span> no Meu Negócio</button>
                    </div>
                </div>
            </div>

        </section>


        <div class="arrow" style="margin-top: 425px;">
            <img src="/images/seta-baixo-azul.png" alt="">
        </div>


        <section class="seventy-section">
            <div class="bg-overlay"></div>

            <div class="seventy-content">
                <div class="sec-title" style="width: 100%;">
                    <h2 style="font-size: 20px;">Quando os resultados acontecem, eles</h2>
                    <h1 style="font-size: 70px;">Aparecem!</h1>
                    <p>Veja os vídeos abaixo e confira alguns dos resultados obtidos com a ADSROCK.</p>
                </div>

                <div class="iframes-carrossel">
                    <iframe width="540" height="304" src="https://www.youtube.com/embed/ia4qkuODZf4" title="Resultados utilizando a ADSROCK para criar suas campanhas no ramo de Cosméticos" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <iframe width="540" height="304" src="https://www.youtube.com/embed/_qVSNtVyfF0" title="Resultados da ADSROCK para e-commerces de utensílios domésticos" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <iframe width="540" height="304" src="https://www.youtube.com/embed/IVRWQRC1oko" title="Resultados de clientes do ramo de Calçados utilizando a ADSROCK" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <iframe width="540" height="304" src="https://www.youtube.com/embed/dLs4LRA9w9k" title="Facebook e Instagram ADS utilizando com a ADSROCK seus resultados serão cada vez melhores." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="cta-button" style="margin-top: 25px;">
                    <button><span style="font-weight: 700;">Eu também Quero</span> Resultados Assim</button>
                </div> 
            </div>

            <div class="arrow" style="margin-top: 105px;">
                <img src="/images/seta-baixo-azul.png" alt="">
            </div>
    

            <div class="seventy-content-two">
                <div class="sec-title" style="width: 100%;">
                    <h2 style="font-size: 20px;">O que nossos clientes dizem</h2>
                    <h1 style="font-size: 50px;">Sobre Nós?</h1>


                    <div class="iframes-carrossel-two">
                        <iframe class="item-grande" width="725" height="408" src="https://www.youtube.com/embed/bxqJUTFAGfI" title="Quem usa confia! Olha o que o Ricardo da Pressão Rural fala sobre a ADSROCK" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <iframe class="item-menor-1" width="353" height="198" src="https://www.youtube.com/embed/BK-zPt_I3fA" title="Depoimento de quem usa ADSROCK e está crescendo todo dia, fazendo seus clientes venderem mais sempre" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <iframe class="item-menor-2" width="353" height="198" src="https://www.youtube.com/embed/wcLpdyUNjGE" title="Móveis Antigus é ADSROCK" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>

                    <div class="cta-button" style="margin-top: 25px;">
                        <button><span style="font-weight: 700;">Eu também Quero</span> Resultados Assim</button>
                    </div> 
                </div>
            </div>
        </section>

        <section class="plans">
            <div class="sec-title" style="width: 100%;">
                <h2 style="font-size: 20px; line-height: 1;">Vamos lá,</h2>
                <h1 style="font-size: 70px; line-height: 1;">Escolha o Seu Plano</h1>
                <p>Estes são os planos atualmente disponíveis na ADSROCK em parceria com a Loja Integrada. Caso queira um plano com um tempo de vigência mais curto, consulte-nos</p>
            </div>


            <div class="plans-box">
                <div class="plans-card">
                    <h1>Starter</h1>
                    <h2>R$ 79,90</h2>
                    <div class="plans-desc">
                        <ul>
                            <li><i class="fa-solid fa-circle-check"></i><span>Cadastre 12 contas de anúncios</span></li>
                            <li><i class="fa-solid fa-circle-check"></i><span>Análise de Contas de Anúncios (Campanhas, Conjuntos de Anúncios e Anúncios)</span></li>
                            <li><i class="fa-solid fa-circle-check"></i><span>Análise de Funil de Vendas de Campanhas</span></li>
                            <li><i class="fa-solid fa-circle-check"></i><span>Painel unificado de contas de anúncios e resultados</span></li>
                            <li><i class="fa-solid fa-circle-check"></i><span>Cadastre 12 contas de anúncios</span></li>
                            <li><i class="fa-solid fa-circle-check"></i><span>Cadastre 12 contas de anúncios</span></li>
                        </ul>
                    </div>
                    <a href="#">ASSINAR AGORA</a>
                </div>


                <div class="plans-card">
                    <h1>Advanced</h1>
                    <h2>R$ 149,90</h2>
                    <div class="plans-desc">
                        <ul>
                            <li><i class="fa-solid fa-circle-check"></i><span>Cadastre 12 contas de anúncios</span></li>
                            <li><i class="fa-solid fa-circle-check"></i><span>Análise de Contas de Anúncios (Campanhas, Conjuntos de Anúncios e Anúncios)</span></li>
                            <li><i class="fa-solid fa-circle-check"></i><span>Análise de Funil de Vendas de Campanhas</span></li>
                            <li><i class="fa-solid fa-circle-check"></i><span>Painel unificado de contas de anúncios e resultados</span></li>
                            <li><i class="fa-solid fa-circle-check"></i><span>Cadastre 12 contas de anúncios</span></li>
                            <li><i class="fa-solid fa-circle-check"></i><span>Cadastre 12 contas de anúncios</span></li>
                        </ul>
                    </div>
                    <a href="#">ASSINAR AGORA</a>
                </div>    

            </div>
        </section>


        <section class="faq">
            <div class="bg-overlay"></div>
            <div class="sec-title" style="width: 100%; margin-top: 105px">
                <h2 style="font-size: 20px; line-height: 1;">FAQ</h2>
                <h1 style="font-size: 70px; line-height: 1;">Perguntas Frequentes</h1>
                <p>Clique sobre a pergunta para visualizar a resposta.</p>
            </div>

            <div class="faq-questions">
                <div class="question">
                    <div class="title">
                        <i class="fa-solid fa-plus"></i>
                        <h1>1 - O que é a ADSROCK?</h1>
                    </div>
                    <div class="desc">
                        <p>A ADSROCK é uma plataforma parceira do gestor de tráfego, que atua analisando sua conta de anúncio e apresentando possível melhorias a serem realizadas para conquistar cada vez mais resultados. Além disso temos um painel de contas onde você conseguirá visualizar em tempo real os resultados de todas as contas e também colocar anotações de reuniões realizadas com seus clientes para futuras consultas.</p>
                    </div>
                </div>

                <div class="question">
                    <div class="title">
                        <i class="fa-solid fa-plus"></i>
                        <h1>2 - A ADSROCK é só para e-commerces?</h1>
                    </div>
                    <div class="desc">
                        <p>Não. Para utilizar a ADSROCK você obrigatoriamente tem que ter um site e nele instalado o Pixel do Facebook, mas não necessariamente tem que ser um e-commerce. Na plataforma atualmente é possível definir um tipo de funil de vendas, sendo ele de E-commerces, Produtos Digitais e Captação de Leads.</p>
                    </div>
                </div>

                <div class="question">
                    <div class="title">
                        <i class="fa-solid fa-plus"></i>
                        <h1>3 - Quais Análises são realizadas pela ADSROCK?</h1>
                    </div>
                    <div class="desc">
                        <p>Atualmente temos as seguintes análises:

                            Funil de Vendas
                            Qualidade dos Anúncios
                            Frequência dos Anúncios
                            Formato de anúncios
                            Lentidão para carregar página de Destino
                            Qualidade do público
                            Ticket Médio (Para E-commerces)
                            Custo por Aquisição
                            Tipos de Públicos Utilizados
                            Valor de Investimento</p>
                    </div>
                </div>

                <div class="question">
                    <div class="title">
                        <i class="fa-solid fa-plus"></i>
                        <h1>4 - Quais as funcionalidades existentes dentro da ADSROCK:</h1>
                    </div>
                    <div class="desc">
                        <p>Atualmente temos as seguintes funcionalidades, porém estas podem sofrer alterações devido a melhoria contínua da plataforma:

                            – Análise de Contas de Anúncios (Campanhas, Conjuntos de Anúncios e Anúncios)
                            – Análise de Funil de Vendas de Campanhas
                            – Painel unificado de contas de anúncios e resultados
                            – Gerenciamento de equipes
                            – Pesquisa de Interesses Ocultos
                            – Criação e Manutenção de Campanhas
                            – Criação e Manutenção de Personas
                            – Relatórios de resultados</p>
                    </div>
                </div>

                <div class="question">
                    <div class="title">
                        <i class="fa-solid fa-plus"></i>
                        <h1>5 - Eu consigo criar minhas campanhas dentro da ADSROCK?</h1>
                    </div>
                    <div class="desc">
                        <p>Sim, dentro da plataforma tem um módulo de Criação de Personas e também de criação de Campanhas. Nosso módulo de criação de campanhas tende a facilitar a criação e a gestão de campanhas.</p>
                    </div>
                </div>
            </div>
        </section>


    <footer>
        <div class="bg-overlay"></div>
        <img src="/images/no-bg-logo-name-white.png" alt="">


        <div class="footer-content">
            <div class="line-content">
                <i class="fa-solid fa-location-dot"></i>
                <p>R. Maj. Mendonça, 1659 - Vila Santo Antonio, Franca - SP, 14401-161</p>
            </div>
            <div class="line-content">
                <i class="fa-solid fa-phone"></i>
                <a>(+55) 16 99319-3333</a>
            </div>
            <div class="line-content">
                <i class="fa-solid fa-envelope"></i>
                <p>contato@adsrock.com.br</p>
            </div>
            <div class="line-content">
                <i class="fa-solid fa-earth-americas"></i>
                <a>www.adflux.com.br</a>
            </div>
        </div>

        <div class="sub-footer">
            <p>Todos os direitos reservados.</p>
        </div>

    </footer>



    </main>

    <script>


function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'  // Ativa a rolagem suave
    });
}

     window.addEventListener('scroll', function() {
    var header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY > 0);
});

document.querySelectorAll('.faq-questions .question .title').forEach(item => {
    item.addEventListener('click', () => {
        // Fecha todas as outras descrições e muda os ícones para '+'
        document.querySelectorAll('.faq-questions .question .desc').forEach(desc => {
            if (desc !== item.nextElementSibling) {
                desc.classList.remove('active');
                desc.style.maxHeight = null;
                desc.previousElementSibling.querySelector('i').classList.remove('fa-minus');
                desc.previousElementSibling.querySelector('i').classList.add('fa-plus');
                desc.previousElementSibling.classList.remove('active'); // Remove a classe 'active' dos outros títulos
            }
        });

        // Seleciona a descrição e o ícone correspondentes
        const desc = item.nextElementSibling;
        const icon = item.querySelector('i');

        // Alterna as classes 'active'
        item.classList.toggle('active');
        desc.classList.toggle('active');
        icon.classList.toggle('fa-plus');
        icon.classList.toggle('fa-minus');

        // Ajusta o maxHeight para transição suave
        if (desc.classList.contains('active')) {
            desc.style.maxHeight = desc.scrollHeight + "px";
        } else {
            desc.style.maxHeight = null;
        }
    });
});



    </script>

</body>
</html>