// hide Side Bar
const hideSide = (toggleId, navId, bodyId) =>{
    // ambil id
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId)

    // validasi variabel tadi
    if(toggle && nav && bodypd){
        toggle.addEventListener('click', ()=>{
            // ------ classList (menambah atribut di class html) ------ //
            // hide navbar
            nav.classList.toggle('hide')
            // padding body
            bodypd.classList.toggle('body-pd')
        })
    }
}
// input ke parameter by id
hideSide('header-toggle','side-bar','body-pd')