var ul = document.getElementById("list");

var listItems = ul.getElementsByTagName("li");

for(li of  listItems){
  li.addEventListener('click', function(){
    if(this.classList.contains('active')){
      this.classList.remove("active");
    } else {
      this.classList.add("active");
    }
  });
}