function logout(){
    url="./logout.php";
    xmlHttp.open("get",url,true);
 xmlHttp.send();
 location.reload();
}
function $(id){
    return document.getElementById(id);
}
      
function reply(){
    var id=$('id'). value;
   var reply=$('reply').value;
     url="./reply.php";
    url+="?id="+id+"&reply="+reply;
    xmlHttp.open("get",url,true);
 xmlHttp.send();
 location.reload();
}
function del(){
    var id=$('id'). value;
            url="./delete.php";
    url+="?id="+id;
    xmlHttp.open("get",url,true);
 xmlHttp.send();
 location.reload();
}

