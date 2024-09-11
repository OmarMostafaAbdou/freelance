const dropArea = document.getElementById('drop-area');
const fileInput = document.getElementById('fileInput');
const fileInputLabel = document.getElementById('fileInputLabel');

dropArea.addEventListener('dragover', (e) => {
  e.preventDefault();
  dropArea.classList.add('dragging');
});

dropArea.addEventListener('dragleave', () => {
  dropArea.classList.remove('dragging');
});

dropArea.addEventListener('drop', (e) => {
  e.preventDefault();
  dropArea.classList.remove('dragging');
  const fileList = e.dataTransfer.files;
  handleFiles(fileList);
});

fileInput.addEventListener('change', () => {
  const fileList = fileInput.files;
  handleFiles(fileList);
});

function handleFiles(files) {
  const fileList = document.getElementById('file-list');

  for (const file of files) {
    const li = document.createElement('li');
    li.textContent = file.name;
    fileList.appendChild(li);
  }
}

// Clicking the label triggers the hidden file input
fileInputLabel.addEventListener('click', (e) => {
  e.preventDefault();     
  fileInput.click();
});
