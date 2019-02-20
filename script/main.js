function my(a) {
  if(a==1){
    window.location.assign('logout.php');
  }
  if(a==2){
    window.location.assign('post-req.php');
  }
}

function delcat(a){
  var r = confirm("Are You Sure You Want To Delete");
 if (r == true) {
  var g='delete_cat.php?var='+a;
  window.location.assign(g);
}
}
