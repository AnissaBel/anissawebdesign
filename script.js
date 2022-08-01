

window.onload=function() {

    const menu_btn = document.querySelector('.hamburger');
    const mobile_menu = document.querySelector('.mobile-nav');
    const accueil_link = document.querySelector('.menu-link-1');
    const projets_link = document.querySelector('.menu-link-2');
    const apropos_link = document.querySelector('.menu-link-3');
    const contact_link = document.querySelector('.menu-link-4');



    menu_btn.addEventListener('click',function() {
        menu_btn.classList.toggle('is-active');
        mobile_menu.classList.toggle('is-active');
        
    });

    accueil_link.addEventListener('click',function() {
        menu_btn.classList.toggle('is-active');
        mobile_menu.classList.toggle('is-active');
    });
    projets_link.addEventListener('click',function() {
        menu_btn.classList.toggle('is-active');
        mobile_menu.classList.toggle('is-active');
    });
    apropos_link.addEventListener('click',function() {
        menu_btn.classList.toggle('is-active');
        mobile_menu.classList.toggle('is-active');
    });
    contact_link.addEventListener('click',function() {
        menu_btn.classList.toggle('is-active');
        mobile_menu.classList.toggle('is-active');
    });


}

