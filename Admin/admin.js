$(document).ready(function () {
    $('#edit').on('click', function() {
        $('#editmodal').modal(show);
       
    });
});

function openAdd() {
    document.getElementById("addDetails").style.display = "block";
    document.getElementById("plus").style.display = "none";
    document.getElementById("changeicon").style.display = "block";
}
function closeAdd() {
    document.getElementById("addDetails").style.display = "none";
    document.getElementById("plus").style.display = "block";
    document.getElementById("changeicon").style.display = "none";
}

