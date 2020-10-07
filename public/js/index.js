const AbidjanRadioButton = document.getElementById('inlineRadio1');
const OtherRadioButton = document.getElementById('inlineRadio2');
const CommuneEntry = document.getElementById('Commune');
const OthersCitySelect = document.getElementById('OthersCity');



AbidjanRadioButton.addEventListener('click', function() {
    console.log("jai cliquers");
    OthersCitySelect.style.display = 'none';
    CommuneEntry.style.display = 'block';
});

OtherRadioButton.addEventListener('click', function() {
    console.log("jai cliquer");
    CommuneEntry.style.display = "none";
    OthersCitySelect.style.display = 'block';
})

