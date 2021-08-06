// ajax code
const urlSearchParams = new URLSearchParams(window.location.search);
const params = Object.fromEntries(urlSearchParams.entries());
if(typeof params['id'] !== 'undefined'){
    let request = new XMLHttpRequest();
    request.open("POST", 'inc/ajax/article.php' +'?id='+ params['id'])
    request.send();
    request.onreadystatechange = () =>{
        if (request.readyState == XMLHttpRequest.DONE) {
            obj = request.responseText
            
            obj = JSON.parse(obj)
            console.log(obj)
            article(obj[0])
        }
    }
}else{
    article({
        title: 'error 404 - page not found: INVALID ID',
        text: '',
        img:'',
        author: '',
        date: ''
    })
}

// this is what gonna be added
function article(obj){
    const container = document.getElementById('article')
    console.log(obj)
    previews_return=`
    <div class='article__title'>
        ${obj['title']}
    </div>
    <img src="assets/images/${obj['img']}" alt="">
    <div class='article__text'>
        ${obj['text']}
    </div>
    <div class='article__author'>${obj['author']}</div>
    <div class='article__date'>${obj['date']}</div>`
    console.log(previews_return)
    container.innerHTML = previews_return;
    return previews_return
};