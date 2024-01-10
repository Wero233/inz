
const swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    loop: true  ,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    scrollbar: {
        enabled: false
    },
    autoplay:{
        delay: 5000
    },
    speed: 800, 
    effect: 'fade',
    crossFade:true
});

document.addEventListener("DOMContentLoaded", function() {
    
    var elements = document.querySelectorAll('.hideme');

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
        );
    }

    function handleScroll() {
        elements.forEach(function(element) {
            if (isElementInViewport(element)) {
                element.classList.add('fade-in');
            }
        });
    }

    window.addEventListener('scroll', handleScroll);

    // Initial check on page load
    handleScroll();

    let button = document.querySelector('.animal__button');
    if(button){
        button.addEventListener('click', function(){
            var panel = document.getElementById('adoptionForm');
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        })
    }
    
});

