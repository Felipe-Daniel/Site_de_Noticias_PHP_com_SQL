function articles(data){
    const container = document.getElementById('articles')
    articles_return=''
    data.forEach(obj => {
        articles_return+=`<div style='background-image: url(assets/images/${obj['img']});' class='article'>`
            articles_return+=`<div class='article__title'>${obj['title']}</div>`
        articles_return+=`</div>`
    container.innerHTML = articles_return;
    return articles_return
})};