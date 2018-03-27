var $person;
var $email;
var $tel;
var $zahlbarbis;
var $treuebonus;
var datum;

$(function () {
$person = $('#person');
$email = $('#email');
$tel = $('#telefon');
$treuebonus = $('#treuebonus');
$zahlbarbis = $('#zahlbarBis');
datum = new Date($zahlbarbis.attr('data-datum'));

setPersonInfo();
setZahlbarBis();
});

function newPerson() {
    window.location.href = "InsertPerson";
}

function editPerson() {
    var id = $person.val();
    window.location.href = "UpdatePerson?id="+id;
}

function setPersonInfo() {
    var $selected = $person.find('option:selected');
    var email = $selected.attr('data-email');
    var tel = $selected.attr('data-tel');

    $email.val(email);
    $tel.val(tel);
}

function setZahlbarBis() {
    var $selected = $treuebonus.find('option:selected');
    var zahlungsfrist = parseInt($selected.attr('data-zahlungsfrist'));

    var zahlbarBis = addDays(datum, zahlungsfrist);
    $zahlbarbis.val(formatDate(zahlbarBis));
}

function addDays(date, days) {
    var returnDate = new Date(
        date.getFullYear(),
        date.getMonth(),
        date.getDate()+days,
        date.getHours(),
        date.getMinutes(),
        date.getSeconds());
    return returnDate;
}

function formatDate(date) {
    return ('0' + date.getDate()).slice(-2) + '.'
    + ('0' + (date.getMonth()+1)).slice(-2) + '.'
    + date.getFullYear();
}