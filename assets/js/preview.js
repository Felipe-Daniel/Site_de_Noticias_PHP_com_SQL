var request = new XMLHttpRequest();

const urlSearchParams = new URLSearchParams(window.location.search);
const params = Object.fromEntries(urlSearchParams.entries());
if(params['page']>0){
  query = '?page='+params['page']
}else{
  query = '?page='+ 1
}
request.open("POST", 'inc/ajax/pagination.php'+query);
// turn this in a for each later to add all queries
request.send();

request.onreadystatechange = () =>{
  if (request.readyState == XMLHttpRequest.DONE) {
      data = request.responseText
      data = JSON.parse(data, 'index.php')
      preview(data['results'])
      pagination(data['page'], data['number_of_pages'], 'index.php')
      }
  }

function preview(data){
    const container = document.getElementById('previews')
    previews_return=''
    data.forEach(obj => {
        previews_return+=`<a style='background-image: url(assets/images/${obj['img']});'
         class='preview'
         href = "article.php?id=${obj['id']}">`
            previews_return+=`<div class='preview__title'>${obj['title']}</div>`
        previews_return+=`</a>`
    container.innerHTML = previews_return;
    return previews_return
})};