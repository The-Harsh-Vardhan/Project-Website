window.addEventListener('scroll',()=>{
    document.querySelector('nav').classList.toggle
    ('window-scroll',window.scrollY>0)
})

//show/hide faq answer

const faqs = document.querySelectorAll('.faq');

faqs.forEach(faq => {
    const faqIcon = faq.querySelector('.faq__icon');
    const faqContent = faq.querySelector('.question__answer');

    faqIcon.addEventListener('click', () => {
        faqContent.classList.toggle('open');
        
        //change icon
        const icon = faqIcon.querySelector('i');
        icon.classList.toggle('plus');
        icon.classList.toggle('remove');
    });
});


// show/hide nav menu
const menu= document.querySelector(".nav__menu");
const menuBtn= document.querySelector("#open-menu-btn");
const closeBtn= document.querySelector("close-menu-btn");

menuBtn.addEventListener('click', () =>{
    menu.style.display = "none";
    closeBtn.style.display= "inline-block";
    menuBtn.style.display="none";
})

// close nav menu
const closeNav= ()=>{
    menu.style.display = "none";
    closeBtn.style.display= "none";
    menuBtn.style.display="inline-block";
}

closeBtn.addEventListener('click', closeNav)