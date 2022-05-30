// hide Side Bar
const hideSide = (toggleId, navId, bodyId) => {
  // ambil id
  const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId);

  // validasi variabel tadi
  if (toggle && nav && bodypd) {
    toggle.addEventListener('click', () => {
      // ------ classList (menambah atribut di class html) ------ //
      // hide navbar
      nav.classList.toggle('hide');
      // padding body
      bodypd.classList.toggle('body-pd');
    });
  }
};
// input ke parameter by id
hideSide('header-toggle', 'side-bar', 'body-pd');

// preview image
const fileInput = document.querySelector('input[type=file]');
if (fileInput) {
  fileInput.addEventListener('change', function () {
    const ImageInput = document.getElementById('imagePreview');
    const previewImage = ImageInput.querySelector('.image_preview');
    const TextPreview = ImageInput.querySelector('.image-preview_text');
    const file = this.files[0];
    if (file) {
      const reader = new FileReader();

      TextPreview.style.display = 'none';
      previewImage.style.display = 'block';

      reader.addEventListener('load', function () {
        previewImage.setAttribute('src', this.result);
      });

      reader.readAsDataURL(file);
    } else {
      TextPreview.style.display = null;
      previewImage.style.display = null;
      previewImage.setAttribute('src', '');
    }
  });
}

// Sweet Alert
const sweetAlert = (type, msg, title = '') => {
  Swal.fire({
    icon: type,
    title: title,
    text: msg,
    confirmButtonColor: '#01adb5',
  });
};

// Toast
const toastAlert = (type, msg) => {
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer);
      toast.addEventListener('mouseleave', Swal.resumeTimer);
    },
  });

  Toast.fire({
    icon: type,
    title: msg,
  });
};
