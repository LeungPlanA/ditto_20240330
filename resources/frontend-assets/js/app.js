import './bootstrap';

// Check scroll to top
const handleScrollFunc = () => {
    var scrollPosition = window.scrollY;
    var body = document.body;

    if (scrollPosition == 0) {
        body.classList.add('scrolled-to-top');
    } else {
        body.classList.remove('scrolled-to-top');
    }
}
handleScrollFunc();
window.addEventListener('scroll', handleScrollFunc);

//handle custom radio button   
document.querySelectorAll('.ditto-custom-radioBtn').forEach((el)=>{
    const radioInput = el.querySelector('input[type="radio"]');
    radioInput.addEventListener('click',()=>{
        document.querySelectorAll('input[name="'+radioInput.getAttribute('name')+'"]').forEach((btnEl)=>{
            btnEl.closest('.ditto-custom-radioBtn').classList.remove('active')
        });
        el.classList.add('active');
    })
})