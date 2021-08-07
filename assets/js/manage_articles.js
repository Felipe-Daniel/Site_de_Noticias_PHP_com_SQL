var request = new XMLHttpRequest();

const urlSearchParams = new URLSearchParams(window.location.search);
const params = Object.fromEntries(urlSearchParams.entries());

request.open("POST", 'inc/ajax/manage.php');
// turn this in a for each later to add all queries
if(typeof params['page']=='undefined'){
  // if page isn't selected
  request.send(JSON.stringify({
    'page': 1,
    'db': 'news' 
  }));
}else{
  // page is selected
  request.send(JSON.stringify({
    'page': params['page'],
    'db': 'news' 
  }));
}

request.onreadystatechange = () =>{
  if (request.readyState == XMLHttpRequest.DONE) {
      data = request.responseText
      data = JSON.parse(data)
      manage_articles(data['results'])
      pagination(data['page'], data['number_of_pages'], 'manage_articles.php')
      }
  }

function manage_articles(data){
    const container = document.getElementById('manage_articles')
    previews_return=''
    data.forEach(obj => {
        console.log(obj)
        previews_return+=`
        <div class='article-block' id=${obj['id']}>
            <div class='article-block__title'>${obj['title']}</div>
            <div class='article-block__text'> ${obj['text']}</div>
            <div>${obj['img']}</div>
            <div class='article-block__metadata'>Author: ${obj['author']}</div>
            <div class='article-block__metadata'>Date: ${obj['date']}</div>
            <button class='delete-btn' onclick="delete_ajax(${obj['id']}, 'news')">DELETAR</button>
        </div> `
    container.innerHTML = previews_return;
    return previews_return
})};