<?php
// Headers de segurança básicos
header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Content-Security-Policy: default-src 'self' https: data:");

$brand = [
    'name' => 'MeuEstagiário',
    'primary' => '#ca1778',
    'cta' => 'Começar agora',
    'whatsapp' => '5581936181079', // troque
    'email' => 'contato@meuestagiario.online', // troque
];

$reviews = [
    [
        'name' => 'Luana C.',
        'initials' => 'RC',
        'date' => '01/10/2025',
        'title' => 'Os dados que ele traz são incríveis',
        'text' => 'Simples, visual e direto ao ponto.',
        'img' => './assets/img/luana.webp', // troque
    ],
    [
        'name' => 'Beatriz S.',
        'initials' => 'BS',
        'date' => '15/10/2025',
        'title' => 'Mudou minha rotina!',
        'text' => 'Passei a registrar tudo e finalmente consigo enxergar meus gastos.',
        'img' => './assets/img/beatriz.webp',
    ],
    [
        'name' => 'Leonardo C.',
        'initials' => 'LC',
        'date' => '01/11/2025',
        'title' => 'Muito prático',
        'text' => 'Me lembra de tudo e organiza sem eu precisar abrir mil apps.',
        'img' => './assets/img/leonardo.webp',
    ],
];

$faqs = [
    ['q' => 'Como funciona o MeuEstagiário?', 'a' => 'Você envia mensagens (texto ou áudio) e o assistente organiza gastos, receitas e compromissos automaticamente.'],
    ['q' => 'Meus dados estão seguros?', 'a' => 'Aplicamos boas práticas de segurança, controle de acesso e criptografia em trânsito. Você mantém controle das suas informações.'],
    ['q' => 'Preciso entender de finanças?', 'a' => 'Não. Ele foi feito para qualquer pessoa: você fala do seu jeito e ele organiza.'],
    ['q' => 'Dá pra cadastrar contas recorrentes?', 'a' => 'Sim. Ex.: “todo dia 5 pagar academia R$ 79”.'],
];

require __DIR__ . '/../app/layout/head.php';
require __DIR__ . '/../app/layout/header.php';
?>

<main class="lp">

    <!-- HERO -->
    <section class="hero hero-centered">

        <div class="container hero-center-wrap">

            <p class="hero-eyebrow">
                Você ainda tá tentando lembrar tudo de cabeça ou não sabe pra onde está indo seu dinheiro?
            </p>

            <h1 class="hero-title">
                <span class="line1">Tenha um estagiário pessoal</span>
                <span class="line2">trabalhando 24 horas por dia pra&nbsp;você</span>
            </h1>

            <div class="hero-benefits">

                <div class="benefit">
                    <div class="benefit-icon blue">🔒</div>
                    <strong>Criptografia de ponta a ponta</strong>
                    <span>Seus dados sempre protegidos</span>
                </div>

                <div class="benefit">
                    <div class="benefit-icon pink">🧠</div>
                    <strong>99,9% de precisão</strong>
                    <span>IA que entende português</span>
                </div>

                <div class="benefit">
                    <div class="benefit-icon blue">💬</div>
                    <strong>Crie e edite transações</strong>
                    <span>Direto pelo WhatsApp</span>
                </div>

            </div>

            <a href="#planos" class="btn hero-cta btn-first">
                Quero ter um estagiário →
            </a>

            <div class="hero-mockups">
                <div class="phone-frame" id="image1">
                    <img src="./assets/img/conversa.webp">
                </div>
                <div class="phone-frame">
                    <video autoplay muted loop playsinline>
                        <source src="./assets/video/videodash.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="phone-frame" id="image2">
                    <img src="./assets/img/imagedash.PNG">
                </div>
            </div>

        </div>

    </section>

    <section class="hero-copy">
        <div class="container hero-copy-grid">

            <div class="hero-copy-left">
                <h2 class="hero-copy-title">
                    Sua vida organizada.
                    <span class="highlight-scribble">
                        Sem esforço.
                        <svg viewBox="0 0 800 300" preserveAspectRatio="none">
                            <path d="M40,150 
               C60,40 740,40 760,150
               C740,260 60,260 40,150Z" />
                        </svg>
                    </span>
                </h2>
            </div>

            <div class="hero-copy-right">
                <p>
                    Já se perdeu no meio de tarefas e despesas?<br>
                    Esqueceu compromissos ou levou um susto com a fatura do cartão?
                </p>
                <p>
                    O <strong>MeuEstagiário</strong> resolve isso: organização financeira e gestão de compromissos,
                    tudo de forma simples e direta pelo WhatsApp.
                </p>
            </div>

        </div>
    </section>

    <section class="section image-with-text feature-fin" id="financeiro">
        <div class="container image-with-text__grid">

            <!-- COLUNA TEXTO -->
            <div class="image-with-text__item grow shrink-0 align-self-center">
                <div class="rich-text lg:text-left text-left relative z-1">

                    <h2 class="heading leading-none title-md">
                        <em is="highlighted-text"
                            class="highlighted-text inline-block not-italic relative"
                            data-style="scribble">
                            FINANCEIRO
                            <svg class="icon icon-squiggle-underline" viewBox="-347 -30.1947 694 96.19" stroke="currentColor" fill="none" role="presentation" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-width="20" pathLength="1"
                                    d="M-335,54 C-335,54 -171,-58 -194,-3 C-217,52 -224.1199951171875,73.552001953125 -127,11 C-68,-27 -137,50 -33,42 C31.43899917602539,37.042999267578125 147.14700317382812,-29.308000564575195 335,2" />
                            </svg>
                        </em>
                    </h2>

                    <div class="rte body subtext-md leading-normal">
                        <p>
                            <strong>MeuEstagiário</strong> controla suas finanças direto no WhatsApp.
                            Envie mensagens como <em>"gastei 50 no mercado"</em> ou <em>"recebi 2 mil de salário"</em>,
                            e ele registra e categoriza automaticamente.<br>
                            Você recebe lembretes, gráficos e relatórios inteligentes para acompanhar cada gasto e receita sem complicação.
                        </p>
                        <p><br><em><strong>Fácil, prático e 100% no WhatsApp — para você ter o controle do seu dinheiro na palma da mão.</strong></em></p>
                    </div>

                    <a class="button button--primary button--md icon-with-text" href="#planos" id="btnContratarAgora">
                        <span class="btn-fill" data-fill></span>
                        <span class="btn-text">
                            CONTRATAR AGORA
                            <svg class="icon icon-arrow-right icon-sm transform" viewBox="0 0 21 20" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10H18M18 10L12.1667 4.16675M18 10L12.1667 15.8334"></path>
                            </svg>
                        </span>
                    </a>

                </div>
            </div>

            <!-- COLUNA VÍDEO -->
            <div class="image-with-text__item grow shrink-0">
                <div class="feature-media-wrap clean-video">
                    <video class="feature-media" autoplay muted playsinline loop>
                        <source src="./assets/video/videofinanceiro.mp4" type="video/mp4">
                    </video>

                    <button class="feature-media-mute" type="button" aria-label="Ativar/desativar som">
                        <span class="off">🔇</span>
                        <span class="on">🔊</span>
                    </button>
                </div>
            </div>

        </div>
    </section>

    <section class="section image-with-text feature-apt" id="compromissos">
        <div class="container image-with-text__grid feature-apt-grid">

            <!-- VÍDEO (ESQUERDA) -->
            <div class="image-with-text__item grow shrink-0 feature-apt-media">
                <div class="feature-media-wrap clean-video">
                    <video class="feature-media" autoplay muted playsinline loop>
                        <source src="./assets/video/videocompromisso.mp4" type="video/mp4">
                    </video>

                    <button class="feature-media-mute" type="button" aria-label="Ativar/desativar som">
                        <span class="off">🔇</span>
                        <span class="on">🔊</span>
                    </button>
                </div>
            </div>

            <!-- TEXTO (DIREITA) -->
            <div class="image-with-text__item grow shrink-0 align-self-center feature-apt-text">
                <div class="rich-text lg:text-left text-left relative z-1">

                    <h2 class="heading leading-none title-md">
                        <em is="highlighted-text"
                            class="highlighted-text inline-block not-italic relative"
                            data-style="scribble">
                            COMPROMISSOS
                            <svg class="icon icon-squiggle-underline" viewBox="-347 -30.1947 694 96.19" stroke="currentColor" fill="none" role="presentation" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-width="20" pathLength="1"
                                    d="M-335,54 C-335,54 -171,-58 -194,-3 C-217,52 -224.1199951171875,73.552001953125 -127,11 C-68,-27 -137,50 -33,42 C31.43899917602539,37.042999267578125 147.14700317382812,-29.308000564575195 335,2" />
                            </svg>
                        </em>
                    </h2>

                    <div class="rte body subtext-md leading-normal">
                        <p>
                            <strong>Meu Estagiário Compromissos</strong> organiza sua agenda direto no WhatsApp.
                            Envie mensagens como <em>"reunião amanhã às 14h"</em> ou <em>"consulta dia 20"</em>,
                            e ele registra, categoriza e agenda automaticamente.
                        </p>
                        <p>
                            Você recebe lembretes, resumos diários e relatórios claros para manter sua rotina sob controle.
                        </p>
                        <p><br><em><strong>Simples, rápido e sempre à mão — para você nunca mais perder um compromisso.</strong></em></p>
                    </div>

                    <a class="button button--primary button--md icon-with-text" href="#planos">
                        <span class="btn-fill" data-fill></span>
                        <span class="btn-text">
                            CONTRATAR AGORA
                            <svg class="icon icon-arrow-right icon-sm transform" viewBox="0 0 21 20" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10H18M18 10L12.1667 4.16675M18 10L12.1667 15.8334"></path>
                            </svg>
                        </span>
                    </a>

                </div>
            </div>

        </div>
    </section>

    <section class="section wa-register" id="registre">
        <div class="container wa-register-grid">

            <div class="wa-register-left">
                <h2 class="wa-register-title">
                    Registre tudo no<br>
                    Whatsapp
                </h2>

                <p class="wa-register-sub">
                    Envie uma mensagem e seu estagiário lança tudo automaticamente.
                </p>

                <ul class="wa-register-list">
                    <li>Texto ou áudio, o que quiser</li>
                    <li>Categorização inteligente</li>
                    <li>Rápido, prático e sem complicação</li>
                </ul>
            </div>

            <div class="wa-register-right">
                <div class="wa-video-wrap">
                    <!-- DESKTOP -->
                    <video class="wa-register-video wa-video-desktop" autoplay muted playsinline loop>
                        <source src="./assets/video/videozap.mp4" type="video/mp4">
                    </video>

                    <!-- MOBILE -->
                    <video class="wa-register-video wa-video-mobile" autoplay muted playsinline loop>
                        <source src="./assets/video/videoregistromobile.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>
    </section>

    <section class="section pro-panel" id="painel">
        <div class="container pro-panel-grid">

            <div class="pro-panel-left">
                <div class="pro-panel-video-wrap">

                    <!-- DESKTOP -->
                    <video class="pro-panel-video pro-video-desktop" autoplay muted playsinline loop>
                        <source src="./assets/video/dashdesktop.mp4" type="video/mp4">
                    </video>

                    <!-- MOBILE -->
                    <video class="pro-panel-video pro-video-mobile" autoplay muted playsinline loop>
                        <source src="./assets/video/dashpagina.mp4" type="video/mp4">
                    </video>

                </div>
            </div>

            <div class="pro-panel-right">
                <h2 class="pro-panel-title">Painel Profissional</h2>

                <p class="pro-panel-sub">
                    Sem perder tempo com cadastros — seu estagiário faz tudo por você no WhatsApp.
                </p>

                <ul class="pro-panel-list">
                    <li>Gráficos de fluxo de caixa</li>
                    <li>Organização automática</li>
                    <li>Prático e acessível</li>
                </ul>
            </div>

        </div>
    </section>

    <section class="section categories-sec" id="categorias">
        <div class="container categories-grid">

            <!-- TEXTO (ESQUERDA) -->
            <div class="categories-left">
                <h2 class="categories-title">Categorias personalizadas</h2>

                <p class="categories-sub">
                    Use as que já vêm prontas ou crie quantas quiser.
                </p>

                <ul class="categories-list">
                    <li>Categorias ilimitadas</li>
                    <li>Categorização automática</li>
                    <li>Relatórios por categoria no WhatsApp</li>
                </ul>
            </div>

            <!-- VÍDEO (DIREITA) -->
            <div class="categories-right">
                <div class="categories-video-wrap">

                    <!-- DESKTOP -->
                    <video class="categories-video cat-video-desktop" autoplay muted playsinline loop>
                        <source src="./assets/video/categoriadesktop.mp4" type="video/mp4">
                    </video>

                    <!-- MOBILE -->
                    <video class="categories-video cat-video-mobile" autoplay muted playsinline loop>
                        <source src="./assets/video/dashcategorias.mp4" type="video/mp4">
                    </video>

                </div>
            </div>

        </div>
    </section>

    <section class="section reminders-sec" id="lembretes">
        <div class="container reminders-grid">

            <!-- VÍDEO (ESQUERDA) -->
            <div class="reminders-left">
                <div class="reminders-video-wrap">

                    <!-- DESKTOP -->
                    <video class="reminders-video rem-video-desktop" autoplay muted playsinline loop>
                        <source src="./assets/video/lembretedesktop.mp4" type="video/mp4">
                    </video>

                    <!-- MOBILE -->
                    <video class="reminders-video rem-video-mobile" autoplay muted playsinline loop>
                        <source src="./assets/video/lembretemobile.mp4" type="video/mp4">
                    </video>

                </div>
            </div>

            <!-- TEXTO (DIREITA) -->
            <div class="reminders-right">
                <h2 class="reminders-title">Lembretes via whatsapp</h2>

                <p class="reminders-sub">
                    Seu estagiário te lembra dos compromissos e contas — todo dia de manhã e 30 minutos antes de cada evento.
                </p>

                <ul class="reminders-list">
                    <li>Lembretes ilimitados</li>
                    <li>Compromissos e afazeres</li>
                    <li>Contas a pagar e a receber</li>
                </ul>
            </div>

        </div>
    </section>

    <section class="section gcal-sec" id="google-agenda">
        <div class="container gcal-inner">

            <div class="gcal-icons">
                <img src="./assets/img/googlecalendar.png" alt="Google Agenda" class="gcal-icon-combo">
            </div>

            <!-- Título -->
            <h2 class="gcal-title">
                Integração com <span>Google Agenda</span>
            </h2>

            <!-- Texto -->
            <p class="gcal-desc">
                Agora você pode integrar seus compromissos automaticamente com o <strong>Google Agenda</strong>.
                O MeuEstagiário será sincronizado em tempo real com sua agenda pessoal ou profissional.
            </p>

            <!-- Benefícios -->
            <div class="rte body subtext-sm leading-normal gcal-benefits">

                <p>
                    <em is="highlighted-text" class="highlighted-text inline-block not-italic relative" data-style="scribble">
                        Sincronização automática dos compromissos
                        <svg class="icon icon-squiggle-underline-2" viewBox="-320 -70.8161 640.4 59.82" stroke="currentColor" fill="none" role="presentation" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-width="5" pathLength="1"
                                d="M-300,-56 C-50,-72 298,-65 300,-59 C332,-53 -239,-36 -255,-27 C-271,-18 -88,-24 91,-20" />
                        </svg>
                    </em>
                </p>

                <p>
                    <em is="highlighted-text" class="highlighted-text inline-block not-italic relative" data-style="scribble">
                        Receba lembretes automáticos no WhatsApp
                        <svg class="icon icon-squiggle-underline-2" viewBox="-320 -70.8161 640.4 59.82" stroke="currentColor" fill="none" role="presentation" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-width="5" pathLength="1"
                                d="M-300,-56 C-50,-72 298,-65 300,-59 C332,-53 -239,-36 -255,-27 C-271,-18 -88,-24 91,-20" />
                        </svg>
                    </em>
                </p>

                <p>
                    <em is="highlighted-text" class="highlighted-text inline-block not-italic relative" data-style="scribble">
                        Organização e produtividade no seu dia a dia
                        <svg class="icon icon-squiggle-underline-2" viewBox="-320 -70.8161 640.4 59.82" stroke="currentColor" fill="none" role="presentation" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-width="5" pathLength="1"
                                d="M-300,-56 C-50,-72 298,-65 300,-59 C332,-53 -239,-36 -255,-27 C-271,-18 -88,-24 91,-20" />
                        </svg>
                    </em>
                </p>

            </div>

            <!-- CTA -->
            <a href="#planos" class="button button--primary button--md icon-with-text gcal-cta">
                <span class="btn-text">
                    QUERO UTILIZAR
                    <svg class="icon icon-arrow-right icon-sm transform" viewBox="0 0 21 20" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 10H18M18 10L12.1667 4.16675M18 10L12.1667 15.8334"></path>
                    </svg>
                </span>
            </a>

        </div>
    </section>

    <!-- REVIEWS -->
    <section class="section" id="avaliacoes">
        <div class="container">
            <h2 class="title">Clientes que <span class="accent">organizaram a vida com o Estagiário</span></h2>
            <p class="subtitle">Depoimentos reais de quem colocou a rotina no piloto automático.</p>

            <div class="carousel" data-carousel>
                <div class="carousel-viewport" data-viewport>
                    <div class="carousel-track" data-track>
                        <?php foreach ($reviews as $r): ?>
                            <article class="review-card">
                                <img class="review-img" src="<?= htmlspecialchars($r['img']) ?>" alt="<?= htmlspecialchars($r['name']) ?>" loading="lazy">
                                <div class="review-body">
                                    <h3 class="review-title"><?= htmlspecialchars($r['title']) ?></h3>
                                    <div class="stars" aria-label="5 estrelas">★★★★★</div>
                                    <p class="review-text">“<?= htmlspecialchars($r['text']) ?>”</p>
                                    <span class="badge">✅ Cliente verificado</span>
                                    <div class="review-footer">
                                        <div class="avatar"><?= htmlspecialchars($r['initials']) ?></div>
                                        <div class="who">
                                            <strong><?= htmlspecialchars($r['name']) ?></strong>
                                            <span><?= htmlspecialchars($r['date']) ?></span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="carousel-nav">
                    <button class="circle-btn" type="button" data-prev aria-label="Anterior">←</button>
                    <button class="circle-btn" type="button" data-next aria-label="Próximo">→</button>
                </div>
            </div>
        </div>
    </section>

    <!-- NUMBERS -->
    <section class="section soft">
        <div class="container">
            <h2 class="title">Números que Comprovam</h2>
            <p class="subtitle">Resultados baseados no uso real da plataforma.</p>

            <div class="grid cards-4">
                <div class="stat-card">
                    <div class="kicker">Processamento em segundos</div>
                    <div class="label">REGISTROS PROCESSADOS</div>
                    <div class="number">+150.2K</div>
                    <div class="desc">Transações categorizadas automaticamente</div>
                </div>

                <div class="stat-card">
                    <div class="kicker">Crescendo a cada dia</div>
                    <div class="label">VALOR ORGANIZADO</div>
                    <div class="number">+163.7M</div>
                    <div class="desc">Em histórico financeiro estruturado</div>
                </div>

                <div class="stat-card">
                    <div class="kicker">Lembretes ilimitados</div>
                    <div class="label">COMPROMISSOS CRIADOS</div>
                    <div class="number">+87.3K</div>
                    <div class="desc">Eventos e tarefas lembrados</div>
                </div>

                <div class="stat-card">
                    <div class="kicker">IA aplicada ao seu dia</div>
                    <div class="label">ACERTO DE CATEGORIA</div>
                    <div class="number">99%+</div>
                    <div class="desc">Melhora com seu uso e preferências</div>
                </div>
            </div>

            <p class="fineprint"><strong>92%</strong> dos usuários avaliaram como “excelente” nos últimos 60 dias.</p>
        </div>
    </section>

    <!-- PLANS -->
    <section class="section" id="planos">
        <div class="container">
            <h2 class="title">Conheça nossos planos</h2>
            <p class="subtitle">Organização financeira e pessoal direto no WhatsApp, 24h por dia.</p>

            <div class="plan-wrap">
                <div class="plan-card">
                    <div class="plan-badge">🚀 Organize-se agora</div>

                    <div class="price-row">
                        <span class="cur">R$</span>
                        <span class="main">29,90</span>
                        <span class="suf">/mês</span>
                    </div>

                    <p class="muted"> Ou 12x de R$ 19,90 • Cancele quando quiser</p>

                    <hr class="sep">

                    <ul class="benefits">
                        <li>Registro de gastos e receitas</li>
                        <li>Compromissos, tarefas e lembretes</li>
                        <li>Transações recorrentes</li>
                        <li>Relatórios e painel</li>
                        <li>Categorias ilimitadas</li>
                        <li>Pergunte qualquer resumo (“quanto gastei?”)</li>
                    </ul>

                    <a class="btn btn-cta" href="https://pay.kirvano.com/f807f6a1-aa95-4348-bbac-fffe947a6f94">Garanta Já</a>
                    <div class="fine muted">Preço promocional por tempo limitado.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section soft" id="faq">
        <div class="container">
            <h2 class="title">Perguntas frequentes</h2>
            <div class="faq">
                <?php foreach ($faqs as $i => $f): ?>
                    <details class="faq-item" <?= $i === 0 ? 'open' : '' ?>>
                        <summary><?= htmlspecialchars($f['q']) ?></summary>
                        <div class="faq-body"><?= htmlspecialchars($f['a']) ?></div>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- WHATSAPP -->
    <section class="section soft" id="contato">
        <div class="container wa container-wa">
            <h3>Fale com nossa equipe</h3>
            <p class="subtitle">Tire dúvidas e receba atendimento rápido no WhatsApp.</p>

            <a class="btn btn-wa" target="_blank"
                href="https://wa.me/<?= htmlspecialchars($brand['whatsapp']) ?>?text=Olá!%20Quero%20conhecer%20o%20<?= urlencode($brand['name']) ?>.">
                Conversar no WhatsApp
            </a>

            <p class="muted">Ou envie e-mail: <a href="mailto:<?= htmlspecialchars($brand['email']) ?>"><?= htmlspecialchars($brand['email']) ?></a></p>
        </div>
    </section>

</main>

<?php require __DIR__ . '/../app/layout/footer.php'; ?>