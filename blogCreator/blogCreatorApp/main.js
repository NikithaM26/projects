function wordCount() {
  var blog = document.getElementById("article").value;
  if (blog.length  >= 2000 ) {
      document.getElementById("article").style.border = "5px solid red"; 
  }
}


