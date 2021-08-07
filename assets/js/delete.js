// ajax code
function delete_user(id){
    let request = new XMLHttpRequest();
    request.open("POST", 'inc/ajax/delete.php')
    request.send(id);

    document.getElementById(String(id)).remove()
}