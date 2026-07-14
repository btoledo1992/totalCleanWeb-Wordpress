document.addEventListener('DOMContentLoaded', function () {

  // ===== Menú hamburguesa (mobile) =====
  const hamburgerBtn = document.getElementById('hamburgerBtn');
  const navCollapse = document.getElementById('navCollapse');
  if (hamburgerBtn && navCollapse) {
    hamburgerBtn.addEventListener('click', function () {
      const isOpen = navCollapse.classList.toggle('open');
      hamburgerBtn.classList.toggle('active', isOpen);
      hamburgerBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
    // Cierra el menú al tocar un link (mejor experiencia en mobile)
    navCollapse.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', function () {
        navCollapse.classList.remove('open');
        hamburgerBtn.classList.remove('active');
        hamburgerBtn.setAttribute('aria-expanded', 'false');
      });
    });
    // Cierra el menú si se agranda la ventana (ej. rotar el celular a horizontal en tablet)
    window.addEventListener('resize', function () {
      if (window.innerWidth > 860) {
        navCollapse.classList.remove('open');
        hamburgerBtn.classList.remove('active');
        hamburgerBtn.setAttribute('aria-expanded', 'false');
      }
    });
  }

  // ===== Carrusel =====
  const carousels = {};

  function initCarousel(id, count) {
    const root = document.getElementById(id);
    if (!root) return; // esta página no tiene este carrusel
    carousels[id] = { index: 0, count: count };
    const dotsWrap = document.getElementById('dots-' + id);
    if (dotsWrap) {
      for (let i = 0; i < count; i++) {
        const d = document.createElement('span');
        if (i === 0) d.classList.add('active');
        d.onclick = () => goToSlide(id, i);
        dotsWrap.appendChild(d);
      }
    }
    setInterval(() => moveSlide(id, 1), 5000);
  }

  function updateCarousel(id) {
    const track = document.querySelector('#' + id + ' .carousel-track');
    const c = carousels[id];
    if (!track || !c) return;
    track.style.transform = 'translateX(-' + (c.index * 100) + '%)';
    document.querySelectorAll('#dots-' + id + ' span').forEach((d, i) => d.classList.toggle('active', i === c.index));
  }

  window.moveSlide = function (id, dir) {
    const c = carousels[id];
    if (!c) return;
    c.index = (c.index + dir + c.count) % c.count;
    updateCarousel(id);
  };

  window.goToSlide = function (id, i) {
    if (!carousels[id]) return;
    carousels[id].index = i;
    updateCarousel(id);
  };

  // Detecta automáticamente cualquier carrusel presente en la página
  document.querySelectorAll('.carousel').forEach(function (el) {
    const count = el.querySelectorAll('.carousel-slide').length;
    if (el.id && count > 0) initCarousel(el.id, count);
  });

  // ===== Antes / Después =====
  const baSlider = document.getElementById('baSlider');
  if (baSlider) {
    const baAfter = document.getElementById('baAfterImg');
    const baHandle = document.getElementById('baHandle');
    let dragging = false;

    function setPos(clientX) {
      const rect = baSlider.getBoundingClientRect();
      let pct = ((clientX - rect.left) / rect.width) * 100;
      pct = Math.max(0, Math.min(100, pct));
      if (baAfter) baAfter.style.clipPath = 'inset(0 0 0 ' + pct + '%)';
      if (baHandle) baHandle.style.left = pct + '%';
    }

    baSlider.addEventListener('mousedown', e => { dragging = true; setPos(e.clientX); });
    window.addEventListener('mouseup', () => dragging = false);
    window.addEventListener('mousemove', e => { if (dragging) setPos(e.clientX); });
    baSlider.addEventListener('touchstart', e => setPos(e.touches[0].clientX));
    baSlider.addEventListener('touchmove', e => setPos(e.touches[0].clientX));
  }

  // ===== FAQ =====
  window.toggleFaq = function (el) {
    const item = el.parentElement;
    const answer = item.querySelector('.faq-a');
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i => {
      i.classList.remove('open');
      const a = i.querySelector('.faq-a');
      if (a) a.style.maxHeight = null;
    });
    if (!isOpen && answer) {
      item.classList.add('open');
      answer.style.maxHeight = answer.scrollHeight + 'px';
    }
  };

  // ===== Galería de trabajos (scroll horizontal) =====
  window.scrollGallery = function (dir) {
    const gallery = document.getElementById('workGallery');
    if (!gallery) return;
    gallery.scrollBy({ left: dir * gallery.clientWidth, behavior: 'smooth' });
  };

});
