//from https://codepedia.info/javascript-export-html-table-data-to-excel
function ExportToExcel(type, fn, dl) {
    var elt = document.getElementById('generated');
    var wb = XLSX.utils.table_to_book(elt, { sheet: "random_data" });
    return dl ?
        XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :
        XLSX.writeFile(wb, fn || ('RandomRange.' + (type || 'xlsx')));
}