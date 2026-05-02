(function ($) {
    "use strict";

    const sliderMain = document.querySelector(".tp-portfolio-slider__main");
    if (!sliderMain) {
        return;
    }

    const bgSlides = Array.from(sliderMain.querySelectorAll(".slider--bg .tp-portfolio-slider__item"));
    const fgSlides = Array.from(sliderMain.querySelectorAll(".slider--fg .tp-portfolio-slider__item"));
    const titles = Array.from(sliderMain.querySelectorAll(".tp-portfolio-slider-type .type__item"));
    const totalSlides = bgSlides.length;

    if (!totalSlides) {
        return;
    }

    let currentSlide = -1;
    let scrollTriggerInstance = null;
    let isInitialLoad = true;

    function clamp(value, min, max) {
        return Math.max(min, Math.min(value, max));
    }

    function allSlides() {
        return bgSlides.concat(fgSlides);
    }

    function setSlidePosition(slides, activeIndex) {
        if (!window.gsap) {
            return;
        }

        slides.forEach(function (slide, slideIndex) {
            gsap.set(slide, {
                xPercent: slideIndex === activeIndex ? 0 : 100,
                opacity: slideIndex === activeIndex ? 1 : 0,
                zIndex: slideIndex === activeIndex ? 50 : 1
            });
        });
    }

    function toggleCurrentClasses(activeIndex) {
        bgSlides.forEach(function (slide, slideIndex) {
            slide.classList.toggle("current", slideIndex === activeIndex);
        });

        fgSlides.forEach(function (slide, slideIndex) {
            slide.classList.toggle("current", slideIndex === activeIndex);
        });

        titles.forEach(function (title, titleIndex) {
            title.classList.toggle("type__item--current", titleIndex === activeIndex);
        });
    }

    function animateSlideGroup(slides, previousIndex, nextIndex, direction) {
        if (!slides.length || !window.gsap) {
            return;
        }

        const previousSlide = slides[previousIndex];
        const nextSlide = slides[nextIndex];

        gsap.killTweensOf(slides);

        if (previousSlide) {
            gsap.set(previousSlide, {
                opacity: 1,
                xPercent: 0,
                zIndex: 40
            });

            gsap.to(previousSlide, {
                xPercent: direction > 0 ? -100 : 100,
                opacity: 1,
                duration: 0.85,
                ease: "power3.inOut",
                onComplete: function () {
                    gsap.set(previousSlide, {
                        opacity: 0,
                        zIndex: 1
                    });
                }
            });
        }

        if (nextSlide) {
            gsap.set(nextSlide, {
                opacity: 1,
                xPercent: direction > 0 ? 100 : -100,
                zIndex: 50
            });

            gsap.to(nextSlide, {
                xPercent: 0,
                duration: 0.85,
                ease: "power3.inOut"
            });
        }
    }

    function setSlide(index) {
        const nextSlide = clamp(index, 0, totalSlides - 1);

        if (nextSlide === currentSlide) {
            return;
        }

        const previousSlide = currentSlide;
        const direction = nextSlide > currentSlide ? 1 : -1;
        currentSlide = nextSlide;

        toggleCurrentClasses(currentSlide);

        if (!window.gsap || isInitialLoad || previousSlide < 0) {
            setSlidePosition(allSlides(), currentSlide);
            isInitialLoad = false;
            return;
        }

        animateSlideGroup(bgSlides, previousSlide, currentSlide, direction);
        animateSlideGroup(fgSlides, previousSlide, currentSlide, direction);
    }

    function scrollToSlide(index) {
        if (!scrollTriggerInstance) {
            setSlide(index);
            return;
        }

        const targetIndex = clamp(index, 0, totalSlides - 1);
        const distance = scrollTriggerInstance.end - scrollTriggerInstance.start;
        const progress = totalSlides > 1 ? targetIndex / (totalSlides - 1) : 0;
        const targetY = scrollTriggerInstance.start + (distance * progress);

        if (window.gsap && window.ScrollToPlugin) {
            gsap.to(window, {
                duration: 0.7,
                ease: "power2.out",
                scrollTo: targetY
            });
        } else {
            window.scrollTo({
                top: targetY,
                behavior: "smooth"
            });
        }
    }

    setSlide(0);

    $(".slider-nav__item--prev").on("click", function () {
        scrollToSlide(currentSlide - 1);
    });

    $(".slider-nav__item--next").on("click", function () {
        scrollToSlide(currentSlide + 1);
    });

    if (window.gsap && window.ScrollTrigger) {
        gsap.registerPlugin(ScrollTrigger);

        scrollTriggerInstance = ScrollTrigger.create({
            trigger: sliderMain,
            start: "top top",
            end: function () {
                return "+=" + (window.innerHeight * Math.max(totalSlides - 1, 1));
            },
            pin: true,
            scrub: 0.25,
            snap: totalSlides > 1 ? {
                snapTo: 1 / (totalSlides - 1),
                duration: 0.35,
                delay: 0.02,
                ease: "power1.inOut"
            } : false,
            anticipatePin: 1,
            invalidateOnRefresh: true,
            onUpdate: function (self) {
                const slideIndex = Math.round(self.progress * (totalSlides - 1));
                setSlide(slideIndex);
            },
            onRefresh: function (self) {
                const slideIndex = Math.round(self.progress * (totalSlides - 1));
                setSlide(slideIndex);
            }
        });

        return;
    }

    let wheelLocked = false;
    sliderMain.addEventListener("wheel", function (event) {
        const direction = event.deltaY > 0 ? 1 : -1;
        const nextSlide = currentSlide + direction;

        if (nextSlide >= 0 && nextSlide < totalSlides) {
            event.preventDefault();
            if (!wheelLocked) {
                setSlide(nextSlide);
                wheelLocked = true;
                window.setTimeout(function () {
                    wheelLocked = false;
                }, 650);
            }
        }
    }, { passive: false });
})(jQuery);
