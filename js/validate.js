function validateForm() {
    var r_start = document.forms["rangeform"]["rangestart"].value;
    var r_end = document.forms["rangeform"]["rangeend"].value
    if (r_end - r_start >= 3000 || r_end - r_start < 0) {
      alert("Ops... Double check the values...");
      return false;
    }
}