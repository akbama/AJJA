$(document).ready(function () {
    $('.editbtn').on('click', function() {
        
        $('#editmodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        console.log(data);

        $('#room_id').val(data[0]);
        $('#room_name').val(data[1]);
        $('#description').val(data[2]);
        $('#room_rate').val(data[3]);
       
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

