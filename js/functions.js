function copyToClipboard(id) {
  const element = document.getElementById(id);
  if (!element) {
    console.error('The element with id ' + id + ' was not found.');
    return;
  }

  const textToCopy = element.textContent.trim() || element.innerText.trim();

  const tempInput = document.createElement('textarea');
  tempInput.value = textToCopy;
  document.body.appendChild(tempInput);

  tempInput.select();
  tempInput.setSelectionRange(0, 99999); // for mobile
  document.execCommand('copy');

  document.body.removeChild(tempInput);
}