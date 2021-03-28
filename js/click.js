$(document).ready(function () {
  $('tr').click(function () {
      console.log(this);
      if(!this.classList.contains('done')){
          $(this).addClass("done");
      }
      else {
          $(this).removeClass("done");
      }
  });
});