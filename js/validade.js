function validateForm() {
    var r_start = document.forms["rangeform"]["rangestart"].value;
    var r_end = document.forms["rangeform"]["rangeend"].value
    if (r_end - r_start >= 1000) {
      alert("Ops... too much...");
      return false;
    }
}