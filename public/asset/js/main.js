$(document).ready(function(){

    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });
    
})

/*Show picture upload */
let input = document.querySelector('#add_pic');
let img = document.querySelector('#image_profile');

input.addEventListener('change',()=>{
    let file = input.files[0];

    let btn = document.querySelector('#btn-add-pic');

    if(file){
        console.log(file);
        let reader = new FileReader();
        reader.addEventListener('load',() => img.src = reader.result);
        reader.readAsDataURL(file);
        btn.classList.add('file');
    }else {
        img.src = "img/user.png";
        btn.classList.remove('file');
    }
})