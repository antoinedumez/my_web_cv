
// --------------- JS switch dom

const menuEl = document.querySelector('.ulselector');
const sectionEls = document.querySelectorAll('.section');
const menuEls = document.querySelectorAll('a');


menuEl.addEventListener('click', ev => {
    sectionEls.forEach(el => {
        if (ev.target.dataset.section === el.id) {
            el.classList.remove('d-none');
        } else {
            el.classList.add('d-none')
        }
    })
    menuEls.forEach(el => {
        if (el.dataset.section === ev.target.dataset.section){
            el.classList.add('border-bottom', 'border-primary');
        } else {
            el.classList.remove('border-bottom', 'border-primary');
        }
    })
})

