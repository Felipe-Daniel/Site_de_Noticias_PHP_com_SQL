var request = new XMLHttpRequest();

const urlSearchParams = new URLSearchParams(window.location.search);
const params = Object.fromEntries(urlSearchParams.entries());
if(params['page']>0){
  query = '?page='+params['page']
}else{
  query = '?page='+ 1
}
request.open("POST", 'inc/ajax/manage_users.php' + query);
// turn this in a for each later to add all queries
request.send();

request.onreadystatechange = () =>{
  if (request.readyState == XMLHttpRequest.DONE) {
      data = request.responseText
      data = JSON.parse(data)
      manage_users(data['results'])
      pagination(data['page'], data['number_of_pages'])
      }
  }

function manage_users(data){
    const container = document.getElementById('manage_users')
    previews_return=''
    data.forEach(obj => {
        if(obj['id']=='1'){
          // This is the administrator block who can't delete himself
          previews_return+=`
          <div class='user-block' id=${obj['id']}>
              <div class='user-block__user'>${obj['user']}</div>
              <div>Email: ${obj['email']}</div>
              <div>Level: ${obj['level']}</div>
              <div>Phone: ${obj['phone']}</div>
              <button class='user-block__adm-btn'>ADMINISTRATOR</button>
          </div> 
          `
        }else{
          // everyone else
        previews_return+=`
        <div class='user-block' id=${obj['id']}>
            <div class='user-block__user'>${obj['user']}</div>
            <div>Email: ${obj['email']}</div>
            <div>Level: ${obj['level']}</div>
            <div>Phone: ${obj['phone']}</div>
            <button class='user-block__delete-btn' onclick=delete_user(${obj['id']})>DELETE</button>
        </div> 
        `}
    container.innerHTML = previews_return;
    return previews_return
})};