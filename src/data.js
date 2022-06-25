

    const url='http://localhost/Library/api/books.php?name=',
    container=document.querySelector(".books"),
    input_search=document.querySelector("form input")
    fetch(`${url}`)
    .then(response => response.json())
    .then(data => datainsert(data));

input_search.addEventListener('input', (e)=>{
    let value= e.target.value;
    if(value ==''){
        fetch(`${url}`)
        .then(response => response.json())
        .then(data => datainsert(data));
    }else{
        fetch(`${url}${value}`)
        .then(response => response.json())
        .then(data => datainsert(data));
    }
});

function datainsert(data){
    container.innerHTML=''
    data.forEach(book => {
        container.innerHTML+=
    `
    <!-- book -->
            <div class="card col-sm-6 col-md-3 m-2" >
                <img src="./thumbnails/${book.url_img}" class="card-img-top" alt="${book.title}" >
                <div class="card-body">
                    <h5 class="card-title">${book.title}</h5>
                    <a href="./Books/${book.url_pdf}" class="btn btn-primary">Show</a>
                </div>
            </div>
    <!-- End Book -->
    `
    });
    
}