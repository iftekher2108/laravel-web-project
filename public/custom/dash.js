
// image insert preview
let preview = document.querySelector('.preview'),
upimg= document.querySelector('#upimg');
console.log(upimg);
upimg.onchange =(e) => {
    preview.src =URL.createObjectURL(e.target.files[0]);
}

// image insert preview