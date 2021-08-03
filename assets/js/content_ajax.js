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
      data = JSON.parse(data)
      articles(data['results'])
      pagination(data['page'], data['number_of_pages'])
      }
  }
