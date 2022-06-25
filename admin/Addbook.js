const form=document.querySelector('form'),
button_submit=form.querySelector('button'),
errors=form.querySelector('.errors')

form.onsubmit = (e) => {
    e.preventDefault();
  };
function sign_in() {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../api/Upload.php", true); // xhr open
    //STart xhr .onload
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                dataj=JSON.parse(data)
                console.log(data);
                if(dataj.status ==false){
                    errors.innerHTML=
                    `
                    <div class="alert alert-danger  alert-dismissible fade show" role="alert">
                    ${dataj.message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    `
                }else{
                    errors.innerHTML=
                    `
                    <div class="alert alert-success   alert-dismissible fade show" role="alert">
                    ${dataj.message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    `
                }
            }
        }
    }; //ENd onload
    //xhr send data
    let formdata = new FormData(form);
    xhr.send(formdata);
}
    button_submit.onclick = () => sign_in();