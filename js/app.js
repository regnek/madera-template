// minimizing nav on scroll
window.addEventListener('scroll', () => {
  const scrollDistance = window.scrollY,
        nav = document.querySelector('.navigation');

  scrollDistance > 10 ? nav.classList.add('scrolled') : nav.classList.remove('scrolled');
});


document.querySelector('.menu-trigger').addEventListener('click', () => {
  const nav = document.querySelector('.navigation'),
        menu = document.querySelector('.menu');
  if ( nav.classList.contains('active') && menu.classList.contains('active') ) {
    nav.classList.remove('active');
    menu.classList.remove('active');
  } else {
    nav.classList.add('active');
    menu.classList.add('active');
  }
});

// parallax elements
if ( (window.innerWidth > 992) ) {
  window.addEventListener('scroll', () => {
      const scrollTop = (document.scrollingElement || document.documentElement).scrollTop || window.scrollY,
            scrollDown = document.querySelector('.scroll-down') || null;
      document.querySelectorAll('.parallax').forEach(function(el) {
        if (el.offsetParent !== null) el.style.transform = 'translateY(' + ( (scrollTop - el.offsetParent.offsetTop) * -.125) + 'px)';
      });
      if (scrollDown) scrollDown.style.opacity = 100 / (scrollTop - document.querySelector('.scroll-down').offsetParent.offsetTop) - 0.1;
  });
}
  
if (document.querySelector('.homepage-slider')) {
  document.querySelector('.homepage-slider').slider({
    dots: true,
    arrows: false,
    timer: 6000,
    fade: true
  });
}












// MODIFIER
if (document.querySelector('.modifier')) {
  const modifier = document.querySelector('.modifier'),
  submit = modifier.querySelector('button'),
  body = document.querySelector('body');

  document.querySelector('.logo').addEventListener('click', e => {
    if (!document.body.classList.contains('internal')) e.preventDefault();
    modifier.classList.contains('open') ? modifier.classList.remove('open') : modifier.classList.add('open');
  });

  modifier.querySelectorAll('.palette').forEach(palette => {
  palette.addEventListener('click', () => {
  modifier.querySelectorAll('.palette').forEach(p => {
    p.classList.remove('selected');
  });
  palette.classList.add('selected');
  });
  });

  submit.addEventListener('click', () => {
  let bodyClasses = [],
    carousel = {
      dots: true,
      arrows: false,
      timer: 6000,
      fade: true
    };
  modifier.classList.remove('open');

  // palette
  modifier.querySelectorAll('.palette').forEach(palette => {
  if (palette.classList.contains('selected')) {
    bodyClasses.push(palette.getAttribute('data-palette'));
  }
  });

  // font
  modifier.querySelectorAll('.font-radio').forEach(radio => {
  if (radio.checked) bodyClasses.push(radio.value);
  });

  // CAROUSEL
  // fade
  modifier.querySelectorAll('.slider-type').forEach(radio => {
  if (radio.checked) {
    radio.value == 'false' ? document.querySelector('.homepage-slider').classList.remove('fade') : document.querySelector('.homepage-slider').classList.add('fade');
    carousel.fade = JSON.parse(radio.value);
  }
  });
  // arrows
  modifier.querySelectorAll('.slider-arrows').forEach(radio => {
  if (radio.checked) {
    radio.value == 'false' ? document.querySelector('.homepage-slider').classList.remove('arrows') : document.querySelector('.homepage-slider').classList.add('arrows');
    carousel.arrows = JSON.parse(radio.value);
  }
  });
  // dots
  modifier.querySelectorAll('.slider-dots').forEach(radio => {
  if (radio.checked) {
    carousel.dots = JSON.parse(radio.value);
  }
  });
  // content
  modifier.querySelectorAll('.slider-content').forEach(radio => {
  if (radio.checked) {
    carousel.content = radio.value;
  }
  });
  // timer
  modifier.querySelectorAll('.slider-timer').forEach(radio => {
  if (radio.checked) {
    if (radio.value == 'false') {
      carousel.timer = false;
    } else if (modifier.querySelector('.slider-timer-amount').value != '') {
      carousel.timer = modifier.querySelector('.slider-timer-amount').value * 1000;
    } else {
      carousel.timer = 6000;
    }
  }
  });

  //images 
  modifier.querySelectorAll('.image-radio').forEach(radio => {
  if (radio.checked) {
    if (radio.value == 'no-img') {
      bodyClasses.push(radio.value);
    }
  }
  });

  // fancy text
  document.querySelector('.fancy-type .first-word').innerHTML = modifier.querySelector('.first-word').value != '' ? modifier.querySelector('.first-word').value : 'Elegance';
  document.querySelector('.fancy-type .second-word').innerHTML = modifier.querySelector('.second-word').value != '' ? modifier.querySelector('.second-word').value : 'Style';


  body.classList = '';
  bodyClasses.forEach(c => {
  body.classList.add(c);
  });

  let hps = document.querySelector('.homepage-slider').cloneNode(true),
    container = document.querySelector('.slider-container');
  container.removeChild(document.querySelector('.homepage-slider'));
  container.appendChild(hps);
  hps.slider(carousel);
  });
}