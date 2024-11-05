// Get references to the buttons and text display
const alertButton = document.getElementById('alertButton');
const changeTextButton = document.getElementById('changeTextButton');
const toggleStyleButton = document.getElementById('toggleStyleButton');
const textDisplay = document.getElementById('textDisplay');

// Event listener for the alert button
alertButton.addEventListener('click', () => {
    alert('Hello! This is an alert message.');
});

// Event listener for the change text button
changeTextButton.addEventListener('click', () => {
    textDisplay.textContent = 'The text has been changed!';
});

// Event listener for the toggle style button
toggleStyleButton.addEventListener('click', () => {
    if (textDisplay.style.color === 'red') {
        textDisplay.style.color = 'black';
        textDisplay.style.fontWeight = 'normal';
    } else {
        textDisplay.style.color = 'red';
        textDisplay.style.fontWeight = 'bold';
    }
});
