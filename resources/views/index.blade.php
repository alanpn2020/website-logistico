<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Infinity</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/OpenSans_Condensed-Light.ttf') }}">


</head>

<body>
    <header>

        <div class="logo">
            <img src="{{ asset('image/infinity-logo.png') }}">
        </div>

        <nav>
            <ul class="menu">
                <li class="menu-item">
                    <a href="#">HOME</a>
                </li>
                <li class="menu-item">
                    <a href="#">A EMPRESA</a>
                </li>
                <li class="menu-item">
                    <a href="#">SOLUÇÕES<i class="fa-solid fa-arrow-down"></i></a>
                    <ul class="submenu">
                        <li class="submenu-item"><a href="#">Subitem 3.1</a></li>
                        <li class="submenu-item"><a href="#">Subitem 3.2</a></li>
                        <li class="submenu-item"><a href="#">Subitem 3.3</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="#">UTILITÁRIOS</a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <p><a href="#">Container Marítimos</a>
                        </li>
                        <li class="submenu-item"><a href="#">Container Aéreos</a></li>
                        <li class="submenu-item"><a href="#">Aeoronaves Veículos</a></li>
                        <li class="submenu-item"><a href="#">Incoterms (2020)</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="#">COTAÇÃO</a>
                </li>
                <li class="menu-item">
                    <a href="#">CONTATO</a>
                </li>
                <li class="menu-item">
                    <a href="#">BLOG</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="banner" style="background-image: url('{{ asset('image/banner-navio.png') }}');">

            <div class="banner-network">
                <div class="barra"><img src="{{ asset('image/row-banner.png') }}"></div>
                <div class="icon-facebook"><img src="{{ asset('image/icon-face.png') }}"></div>
                <div class="icon-instagram"><img src="{{ asset('image/icon-instagram.png') }}"></div>
                <div class="icon-email"><img src="{{ asset('image/icon-email.png') }}"></div>
            </div>
            <div class="banner-descr">
                <p class="title-banner">Sua logística internacional
                    gerenciada com segurança
                    e excelência.
                </p>
                <p class="banner-text">Com a Infinity sua carga estará sempre no destino certo através
                    de um transporte internacional bem gerenciado.</p>

                <div class="dots">
                    <div class="dot active" onclick="changeImage('{{ asset('image/banner-navio.png') }}')">
                    </div>
                    <div class="dot" onclick="changeImage('{{ asset('image/navio.png') }}')">
                    </div>
                    <div class="dot" onclick="changeImage('{{ asset('image/banner-container.png') }}')">
                    </div>
                </div>
            </div>

        </div>
        <div class="company">
            <div class="cp-descr">
                <div class="company-text-big">A Empresa</div>
                <div class="company-small">A Empresa</div>
                <div>O Inicio de uma boa parceria começa na experiência.</div>
                <div>Em sua trajetória a Infinity consolidou-se atuando no gerenciamento logístico do transporte
                    internacional, com uma rede de agentes oferecendo um serviço global
                    e adequando as necessidades dos clientes no acompanhamento das cargas.</div>
                <div>Existem dois fatores que constituem o sucesso no cenário de logística:
                    flexibilidade e segurança. </div>
                <div>São eles que definem a qualidade em cada etapa da operação.</div>
                <div>Para assegurar esta qualidade a Infinity investe em profissionais capacitados e promove o
                    desenvolvimento de sua equipe, a fim de ampliar e transformar numa seleção de profissionais
                    apto a administrar cada etapa do processo de maneira assertiva.</div>
                <div>A Infinity conta com escritórios próprios em São Paulo, Santos, Rio Grande do Sul
                    (Uruguaiana e São
                    Borja), Santa Catarina (Itajaí e São Francisco do Sul), Paraná e parceiros pelo Brasil,
                    proporcionando agilidade nos principais pontos logísticos nacionais e internacionais.</div>
            </div>

            <div class="img-descr">
                <img src="{{ asset('image/202305161607.jpg') }}">
            </div>


            <div class="mission">
                <div class="mission-img">
                    <img src="{{ asset('image/missao.png') }}">
                </div>
                <div class="mission-descr">
                    <p class="m-title">Missão</p>
                    <p class="m-descr">Agregar valor aos negócios de nossos clientes através
                        de um atendimento eficiente, inovador e otimizado.</p>
                </div>
                <div class="mission-img">
                    <img src="{{ asset('image/visao.png') }}">
                </div>
                <div class="mission-descr">
                    <p class="m-title">Visão</p>
                    <p class="m-descr">Agregar valor aos negócios de nossos clientes através
                        de um atendimento eficiente, inovador e otimizado.</p>
                </div>
                <div class="mission-img">
                    <img src="{{ asset('image/valores.png') }}">
                </div>
                <div class="mission-descr">
                    <p class="m-title">Valores</p>
                    <p class="m-descr">
                    <div class="m-descr-list">
                        <ul style="list-style-image: {{ asset('image/valores.png') }}">
                            <li>Ética</li>
                            <li>Respeito as pessoas</li>
                            <li>Inovação</li>
                        </ul>
                        <ul>
                            <li>Transparência</li>
                            <li>Responsabilidade</li>
                            <li>Trabalho em Equipe</li>
                        </ul>
                    </div>
                    </p>
                </div>


            </div>
            <div class="img-mission"><img src="{{ asset('image/transportation.jpg') }}"></div>
        </div>
        <div class="solutions">
            <div class="sol-descr">
                <p class="solutions-text-big">Agenciamento</p>
                <p class="company-small">Agenciamento e Logística Internacional</p>
                <hr>
                <p>A eficiência logística global começa com um transporte internacional
                    bem gerenciado. A Infinity cuida de todos os
                    aspectos logísticos do transporte de suas mercadorias,
                    garantindo eficiência, flexibilidade e segurança em todas as etapas.
                    Nós podemos ajudar você a alcançar seus objetivos
                    comerciais e conquistar novos mercados em todo o mundo.</p>

            </div>
            <div class="sol-type">
                <div class="type-1 company-small" class="">Soluções</div>
                <div class="type"><img src="{{ asset('image/1.png') }}"></div>
                <div class="type"><img src="{{ asset('image/2.png') }}"></div>
                <div class="type"><img src="{{ asset('image/3.png') }}"></div>
                <div class="type"><img src="{{ asset('image/4.png') }}"></div>
                <div class="type"><img src="{{ asset('image/5.png') }}"></div>
                <div class="type"><img src="{{ asset('image/6.png') }}"></div>
                <div class="type"><img src="{{ asset('image/7.png') }}"></div>
                <div class="type"><img src="{{ asset('image/8.png') }}"></div>
            </div>
        </div>
        <div class="quotation" style="background-image: url('{{ asset('image/banner.png') }}')">

            <div class="descr-quotation">
                <p class="company-small">Faça uma cotação</p>
                <p class="quotation-text">Faça a logistica de alta perfomace, gestão de grande eficiência.
                    Faça uma cotação sem compromisso para o envio da sua carga até o destino final e viva uma
                    nova
                    experiência em logítica
                </p>
                <button>FAZER COTAÇÃO</button>
            </div>
        </div>
        <div class="blog">
            <div class="descr-blog">
                <div class="company-small">Acesse o nosso Blog e fique por dentro
                    das principais informações do mercado</div>
                <hr>
                Descubra as últimas tendências e novidades no mercado de agenciamento e<br>
                logística de cargas em nosso blog, e fique à frente da concorrência.
            </div>
            <div class="img-blog">
                <img src="{{ asset('image/Foc51uUXwAMQTpC.jpg') }}">
            </div>
            <div class="blog-descr-img">
                <div class="title-blog"> 10/04/2023</div>
                <div class="title-blog">Lorem ipsum dolor sit amet, consecte
                    tur adipiscing elit, sed do eiusmod</div>
                <div>Lorem ipsum dolor sit amet, consecte
                    tur adipiscing elit, sed do eiusmod</div>
                <button>LEIA MAIS</button>
            </div>
            <div class="img-blog">
                <img src="{{ asset('image/aviao.png') }}">
            </div>
            <div class="blog-descr-img">
                <div class="title-blog"> 10/04/2023</div>
                <div class="title-blog">Lorem ipsum dolor sit amet, consecte
                 tur adipiscing elit, sed do eiusmod</div>
                 <div >Lorem ipsum dolor sit amet, consecte
                     tur adipiscing elit, sed do eiusmod</div>
                     <button>LEIA MAIS</button>
            </div>
            <div class="img-blog">
                <img src="{{ asset('image/container.png') }}">
            </div>
            <div class="blog-descr-img">
                <div class="title-blog"> 10/04/2023</div>
                <div class="title-blog">Lorem ipsum dolor sit amet, consecte
                    tur adipiscing elit, sed do eiusmod</div>
                <div>Lorem ipsum dolor sit amet, consecte
                    tur adipiscing elit, sed do eiusmod</div>
                <button>LEIA MAIS</button>
            </div>
        </div>
    </main>
    <footer>
        <div class="contact" style="background-image: url('{{ asset('image/background-contato.png') }}')">
            <div class="contact-info">
                <div class="contact-logo"><img src="{{ asset('image/infinity.png') }}" >
                    <p>Confiabilidade e eficiência além da fronteira</p>
                </div>
                <div class="phone">
                    <p><b>CONTATO</b></p>
                    <p><img class="" src="{{ asset('image/phone.png') }}"> +55 11 3019-0800</p>
                    <p><img class="" src="{{ asset('image/icon-email.png') }}"> contato@infinitycargo.com.br</p>
                </div>
                <div class="address">
                    <p><b>ENDEREÇO</b></p>
                    <p>Rua Canuto Saraiva, 575</p>
                    <p>Mooca - SP - CEP: 03113-010</p>
                </div>
                <div class="map">
                    <p><b>MAPA DO SITE</b></p>
                    <ul>
                        <li>HOME</li>
                        <li>EMPRESA</li>
                        <li>SOLUÇÕES</li>
                    </ul>
                    <ul>
                        <li>UTILITÁRIO</li>
                        <li>COTAÇÃO</li>
                        <li>CONTATO</li>
                    </ul>
                </div>
                <div class="wca"><img src="{{ asset('image/wca-world.png') }}" height="50">
                    <img src="{{ asset('image/wca-global.png') }}"  height="50">
                </div>
                <div class="network">
                    siga-nos - <img src="{{ asset('image/icon-face.png') }}" >
                    <img src="{{ asset('image/icon-instagram.png') }}"  height="50">
                </div>
            </div>
            <div class="email">
                <p><b>FALE CONOSCO</b></p>
                <p>Saiba mais sobre os nossos serviços e como podemos ajudar a sua empresa a crescer globalmente.</p>
                <form>
                    <input type="nome" placeholder="Nome Completo">
                    <input type="mail" placeholder="E-mail">
                    <input type="fone" placeholder="Telefone">
                    <textarea rows="6" cols="50" placeholder="Mensagem"></textarea>
                    <button>ENVIAR</button>
                </form>
            </div>
        </div>
        <div class="developer">
            Desenvolvido por Affinity
        </div>
    </footer>
    <script src="{{ asset('javascript/script.js') }}"></script>

    <script  src="{{ asset('image/infinity-logo.png') }}">

    </script>
</body>

</html>
