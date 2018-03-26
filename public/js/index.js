function newPerson() {
    window.location.href = "InsertPerson";
}

function editPerson() {
    var id = $('#person').val();
    window.location.href = "UpdatePerson?id="+id;
}