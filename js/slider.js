Element.prototype.slider = function(data) {
  var data = data || {dots: true, arrows: false, content: true, fade: false};
  let slider = this,
      slides = [],
      timer;
  slider.querySelectorAll('.slide').forEach(slide => {
    let slideNumber = slide.getAttribute('data-slide'),
        slideContent;
    slider.querySelectorAll('.slider-content').forEach(content => {
      if (content.getAttribute('data-slide') == slideNumber) slideContent = content;
    });
    if (data.fade) {
    } else {
      slide.style.left = `${(slideNumber - 1) * 100}vw`;
    }
    slides.push({
      number: slideNumber,
      content: slideContent,
      el: slide,
      next: slide.nextElementSibling,
      prev: slide.previousElementSibling,
      active: slide.classList.contains('active-slide')
    });
  });

  // create timer
  if (data.timer && data.timer != 0) {
    timer = setInterval(() => {
      let activeSlide = slider.querySelector('.active-slide'),
          activeSlideNum = parseInt(activeSlide.getAttribute('data-slide'));
      if (!activeSlide.nextElementSibling) {
        activeSlideNum = parseInt(slider.querySelector('.slides').children[0].getAttribute('data-slide')) - 1;
      }
      moveSlider(activeSlideNum + 1);
    }, data.timer);
  }

  function moveSlider(num) {
    if (!data.fade) {
      slider.querySelector('.slides').style.transform = `translateX(-${(num - 1) * 100}vw)`;
      if (data.content != 'static') slider.querySelector('.content-container').style.transform = `translateX(-${(num - 1) * 100}vw)`;
    } else {
      if (data.content != 'static') {
        slider.querySelectorAll('.slider-content').forEach(content => {
          content.style.left = 0;
          if (content.getAttribute('data-slide') == num) {
            content.classList.add('active-content');
            content.style.zIndex = 1;
          } else {
            content.classList.remove('active-content');
            setTimeout(() => {
              content.style.zIndex = 0;
            }, 500);
          }
        });
      }
    }

    slider.querySelectorAll('.slide').forEach(slide => {
      slide.getAttribute('data-slide') == num ? slide.classList.add('active-slide') : slide.classList.remove('active-slide');
      if (data.fade) {
        if (slide.classList.contains('active-slide')) {
          slide.style.zIndex = 0;
        } else {
            setTimeout(() => {
              slide.style.zIndex = -1;
            }, 500);
        }
      }

      // loop through array of slide objects we created
      slides.forEach(s => {
        s.number == num ? s.active = true : s.active = false;
      });
    });

    slider.querySelectorAll('.nav-dot').forEach(dot => {
      dot.getAttribute('data-slide') == num ? dot.classList.add('active') : dot.classList.remove('active');
    });
  }

  // if slider fades
  if (data.fade) {
    slider.classList.add('fade');
    slider.querySelectorAll('.slide').forEach(slide => {
      slide.style.left = 0;
      if (!slide.classList.contains('active-slide')) {
        slide.style.zIndex = slide.getAttribute('data-slide') * -1;
      }
    });
    slider.querySelector('.content-container').style.transform = `translateX(0)`;
    slider.querySelector('.slides').style.transform = `translateX(0)`;
  }

  // add dots
  if (data.dots) {
    slider.querySelector('.slider-navigation').innerHTML = '';
    slides.forEach(slide => {
      const dot = document.createElement('div');
      dot.setAttribute('data-slide', slide.number);
      dot.classList.add('nav-dot');
      if (slide.active) {
        dot.classList.add('active');
      }
      dot.addEventListener('click', e => {
        if (timer) {
          clearInterval(timer);
          timer = setInterval(() => {
            let activeSlide = slider.querySelector('.active-slide'),
                activeSlideNum = parseInt(activeSlide.getAttribute('data-slide'));
            if (!activeSlide.nextElementSibling) {
              activeSlideNum = parseInt(slider.querySelector('.slides').children[0].getAttribute('data-slide')) - 1;
            }
            moveSlider(activeSlideNum + 1);
          }, data.timer);
        }
        moveSlider(e.target.getAttribute('data-slide'));
      });
      slider.querySelector('.slider-navigation').appendChild(dot);
    });
  } else {
    slider.querySelector('.slider-navigation').innerHTML = '';
  }

  // add arrows
  if (data.arrows) {
    slider.parentElement.querySelectorAll('.arrow').forEach(arrow => {
      arrow.addEventListener('click', e => {
        if (timer) {
          clearInterval(timer);
          timer = setInterval(() => {
            let activeSlide = slider.querySelector('.active-slide'),
                activeSlideNum = parseInt(activeSlide.getAttribute('data-slide'));
            if (!activeSlide.nextElementSibling) {
              activeSlideNum = parseInt(slider.querySelector('.slides').children[0].getAttribute('data-slide')) - 1;
            }
            moveSlider(activeSlideNum + 1);
          }, data.timer);
        }
        let activeSlide = slider.querySelector('.active-slide'),
            activeSlideNum = parseInt(activeSlide.getAttribute('data-slide'));
        const slides = slider.querySelector('.slides');
        if (arrow.classList.contains('arrow--right')) {
          if (!activeSlide.nextElementSibling) {
            activeSlideNum = parseInt(slides.children[0].getAttribute('data-slide')) - 1;
          }
          moveSlider(activeSlideNum + 1);
        } else {
          if (!activeSlide.previousElementSibling) {
            activeSlideNum = parseInt(slides.children[slides.children.length - 1].getAttribute('data-slide')) + 1;
          }
          moveSlider(activeSlideNum - 1);
        }
      });
    });
    slider.classList.add('arrows');
  }

  // to move or not to move content with slide
  slider.querySelectorAll('.slider-content').forEach(content => {
    data.fade ? content.style.zIndex = content.getAttribute('data-slide') * -1 : content.style.left = `${(content.getAttribute('data-slide') - 1) * 100}vw`;
  });
}