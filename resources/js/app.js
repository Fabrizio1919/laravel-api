import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])




// FUNZIONE PER L'ANTEPRIMA DELLE IMMAGINI 
function showPreview(event) {
    if (event.target.files.length > 0) {
        const src = URL.createObjectURL(event.target.files[0]);
        const preview = document.getElementById("file-image-preview");
        preview.src = src;
        preview.style.display = "block";
    }
}
const imageinput = document.getElementById('image');
imageinput.addEventListener('change', showPreview);



// FUNZIONE PER MOSTRARE O NASCONDERE LA GESTIONE DELLE IMMAGINI 
function showImageBox() {
    const imageBox = document.getElementById('image_input_container');
    if (setImageInput.checked)
        imageBox.classList.remove('d-none');
    else {
        imageBox.classList.add('d-none');
    }

}
const setImageInput = document.getElementById('set_image');
const imageBox = document.getElementById('image_input_container');

if (setImageInput.checked)
    imageBox.classList.remove('d-none');
else {
    imageBox.classList.add('d-none');
}
setImageInput.addEventListener('change', showImageBox);
