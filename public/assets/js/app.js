(function () {
  'use strict';

  // Carousel (reviews)
  document.querySelectorAll('[data-carousel]').forEach((root) => {
    const track = root.querySelector('[data-track]');
    const viewport = root.querySelector('[data-viewport]');
    const prev = root.querySelector('[data-prev]');
    const next = root.querySelector('[data-next]');
    if (!track || !viewport || !prev || !next) return;

    let index = 0;

    function cardSize() {
      const card = track.querySelector('.review-card');
      if (!card) return { w: 320, gap: 20 };
      const styles = window.getComputedStyle(track);
      const gap = parseInt(styles.columnGap || styles.gap || '20', 10) || 20;
      return { w: card.getBoundingClientRect().width, gap };
    }

    function visibleCount() {
      const { w, gap } = cardSize();
      const vw = viewport.getBoundingClientRect().width;
      return Math.max(1, Math.floor(vw / (w + gap)));
    }

    function maxIndex() {
      const total = track.querySelectorAll('.review-card').length;
      return Math.max(0, total - visibleCount());
    }

    function update() {
      const { w, gap } = cardSize();
      const offset = index * (w + gap);
      track.style.transform = `translateX(-${offset}px)`;
    }

    function nextMove() {
      const max = maxIndex();
      index = index >= max ? 0 : index + 1;
      update();
    }

    function prevMove() {
      const max = maxIndex();
      index = index <= 0 ? max : index - 1;
      update();
    }

    next.addEventListener('click', nextMove);
    prev.addEventListener('click', prevMove);

    let t;
    window.addEventListener('resize', () => {
      clearTimeout(t);
      t = setTimeout(() => {
        index = 0;
        update();
      }, 200);
    });

    update();
  });
})();

(function () {
  const phrases = [
    "Chega de descontrole",
    "Assessoria 24h no meu bolso",
    "Seu financeiro no WhatsApp"
  ];

  let current = 0;
  let isAnimating = false;
  let timer = null;

  const prevBtn = document.getElementById("prevPhrase");
  const nextBtn = document.getElementById("nextPhrase");

  const a = document.getElementById("phraseA");
  const b = document.getElementById("phraseB");

  if (!a || !b) return;

  // garante estado inicial
  a.textContent = phrases[current];
  a.classList.add("is-active");
  b.classList.add("is-below");

  function resetAuto() {
    clearInterval(timer);
    timer = setInterval(() => go(1), 8000);
  }

  function go(dir) {
    if (isAnimating) return;
    isAnimating = true;

    const nextIndex = (current + dir + phrases.length) % phrases.length;

    // quem está ativo agora e quem será o próximo
    const active = a.classList.contains("is-active") ? a : b;
    const incoming = active === a ? b : a;

    // prepara incoming sempre “abaixo” (para subir rápido)
    incoming.textContent = phrases[nextIndex];

    incoming.classList.remove("anim-in", "anim-out");
    active.classList.remove("anim-in", "anim-out");

    incoming.classList.remove("is-active");
    incoming.classList.add("is-below"); // abaixo do slot

    // força reflow para garantir que a posição abaixo “pegou”
    incoming.getBoundingClientRect();

    // 1) ativa a queda do atual
    active.classList.add("anim-out");

    // 2) depois de um pequeno delay, faz a próxima subir mais rápida
    // (isso dá o efeito “cai primeiro, entra depois”)
    setTimeout(() => {
      incoming.classList.remove("is-below");
      incoming.classList.add("anim-in");
    }, 140);

    // 3) finaliza: troca quem é ativo e limpa classes
    // tempo total = 650ms (out). Vamos finalizar um pouco depois.
    setTimeout(() => {
      active.classList.remove("is-active", "anim-out");
      active.classList.add("is-below"); // manda o antigo pra baixo e invisível

      incoming.classList.add("is-active");
      incoming.classList.remove("anim-in");

      current = nextIndex;
      isAnimating = false;
    }, 720);
  }

  nextBtn?.addEventListener("click", () => {
    go(1);
    resetAuto();
  });

  prevBtn?.addEventListener("click", () => {
    go(-1);
    resetAuto();
  });

  resetAuto();
})();

(function(){
  const wrap = document.querySelector('.feature-media-wrap');
  const v = wrap?.querySelector('video');
  const btn = wrap?.querySelector('.feature-media-mute');
  if(!v || !btn) return;

  function sync(){ btn.classList.toggle('is-unmuted', !v.muted); }

  btn.addEventListener('click', () => {
    v.muted = !v.muted;
    v.play().catch(()=>{});
    sync();
  });

  sync();
})();

(function(){
  document.querySelectorAll('.feature-media-wrap').forEach((wrap) => {
    const v = wrap.querySelector('video');
    const btn = wrap.querySelector('.feature-media-mute');
    if(!v || !btn) return;

    function sync(){ btn.classList.toggle('is-unmuted', !v.muted); }

    btn.addEventListener('click', () => {
      v.muted = !v.muted;
      v.play().catch(()=>{});
      sync();
    });

    sync();
  });
})();

(function () {
  const el = document.querySelector('.gcal-benefits');
  if (!el) return;

  let done = false;

  const io = new IntersectionObserver((entries) => {
    const entry = entries[0];
    if (!entry.isIntersecting || done) return;

    done = true;
    el.classList.add('is-scribbling');
    io.disconnect();
  }, { threshold: 0.4 });

  io.observe(el);
})();

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    const targetId = this.getAttribute('href');
    const target = document.querySelector(targetId);

    if (!target) return;

    e.preventDefault();

    const yOffset = -80; // ajuste se tiver header fixo
    const y = target.getBoundingClientRect().top + window.pageYOffset + yOffset;

    window.scrollTo({
      top: y,
      behavior: 'smooth'
    });
  });
});