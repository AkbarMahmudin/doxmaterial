// Show Side Bar
const showSide = (toggleId, navId, bodyId, headerId) =>{
    // ambil id
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId);

    // validasi variabel tadi
    if(toggle && nav && bodypd && headerpd){
        toggle.addEventListener('click', ()=>{
            // ------ classList (menambah atribut di class html) ------ //

            // show navbar
            nav.classList.toggle('show')
            // ganti icon jadi x
            toggle.classList.toggle('fa-x')
            // padding body
            bodypd.classList.toggle('body-pd')
            // padding body
            headerpd.classList.toggle('body-pd')
        })
    }
}
// input ke parameter by id
showSide('header-toggle','side-bar','body-pd','header')

/*===== ACTIVE LIST  =====*/ 
const Color = document.querySelectorAll('.nav_link')

function Link(){
    if(Color){
        Color.forEach(l=> l.classList.remove('active'))
        this.classList.add('active')
    }
}
Color.forEach(l=> l.addEventListener('click', Link))