document.getElementById('formFile').addEventListener('change', function(event) {
  const file = event.target.files[0];
  if (file) {
      const reader = new FileReader();
      reader.onload = function(e) {
          document.getElementById('profileImage').src = e.target.result;
      }
      reader.readAsDataURL(file);
  }
});

function isNumberKey(evt){
  // Existing validation logic to allow only numbers
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
  
  // Additional check for input length
  var inputField = document.getElementById("noHP");
  if (inputField.value.length > inputField.maxLength) {
    return false;
  }  
  return true;
}

function pilihJenisKelamin(jenisKelamin) {
  document.getElementById('jenisKelaminText').innerText = jenisKelamin;
  document.getElementById('jenisKelaminInput').value = jenisKelamin;
}

const textarea = document.getElementById('exampleFormControlTextarea1');

function adjustTextareaHeight() {
    textarea.style.height = 'auto'; // Reset height to auto
    textarea.style.height = textarea.scrollHeight + 'px'; // Set height to scrollHeight
}

textarea.addEventListener('input', adjustTextareaHeight);

const startPeriod = document.getElementById('mulaiPeriode1');
const endPeriod = document.getElementById('akhirPeriode1');

startPeriod.addEventListener('change', validatePeriod);
endPeriod.addEventListener('change', validatePeriod);

function validatePeriod() {
    if (startPeriod.value && endPeriod.value) {
        if (startPeriod.value > endPeriod.value) {
            alert('Akhir Periode harus setelah Mulai Periode');
            endPeriod.value = '';
        }
    }
}


function adjustTextareaHeight() {
  textarea.style.height = 'auto'; // Reset height to auto
  textarea.style.height = textarea.scrollHeight + 'px'; // Set height to scrollHeight
}

textarea.addEventListener('input', adjustTextareaHeight);


function adjustTextareaHeight() {
    textarea.style.height = 'auto'; // Reset height to auto
    textarea.style.height = textarea.scrollHeight + 'px'; // Set height to scrollHeight
}

textarea.addEventListener('input', adjustTextareaHeight);


function adjustTextareaHeight() {
    textarea.style.height = 'auto'; // Reset height to auto
    textarea.style.height = textarea.scrollHeight + 'px'; // Set height to scrollHeight
}

textarea.addEventListener('input', adjustTextareaHeight);

document.addEventListener("DOMContentLoaded", () => {
  // Handle adding new education entries
  const educationContainer = document.getElementById("formPendidikan");
  const addEducationBtn = document.getElementById("tambahPendidikan");
  let educationCount = 1;

  addEducationBtn.addEventListener("click", (event) => {
    event.preventDefault(); // Prevent form submission

    educationCount++;

    const newEducationItem = document.createElement("div");
    newEducationItem.classList.add("pendidikan-item", "border-bottom", "border-3");

    newEducationItem.innerHTML = `
          <!-- input nama instansi -->
          <label for="namaInstansi${educationCount}" class="form-label">Nama Instansi</label>
          <input class="form-control" id="namaInstansi${educationCount}" name="namaInstansi[]" type="text" placeholder=" " required>

          <!-- input jurusan -->
          <label for="jurusan${educationCount}" class="form-label">Jurusan</label>
          <input class="form-control" id="jurusan${educationCount}" name="jurusan[]" type="text" placeholder=" " required>
          
          <!-- input periode -->
          <div class="row">
            <div class="col-md-6">
              <!-- input mulai periode-->
              <label for="mulaiPeriode${educationCount}" class="form-label">Mulai Periode</label>
              <input class="form-control" id="mulaiPeriode${educationCount}" name="mulaiPeriode[]" type="date" placeholder=" " required>
            </div>
            <!-- input akhir periode -->
            <div class="col-md-6">
              <label for="akhirPeriode${educationCount}" class="form-label mt-2">Akhir Periode</label>
              <input class="form-control" type="date" id="akhirPeriode${educationCount}" name="akhirPeriode[]" placeholder=" " required>
            </div>
          </div>

          <!-- Keterangan -->
          <div class="mb-3">
            <label for="exampleFormControlTextarea${educationCount}" class="form-label">Keterangan</label>
            <textarea class="form-control" id="exampleFormControlTextarea${educationCount}" name="exampleFormControlTextarea[]" rows="3" placeholder=" "></textarea>
          </div>
        `;

    educationContainer.appendChild(newEducationItem);
  });

  // Handle adding new experience entries
  const experienceContainer = document.getElementById("formPengalaman");
  const addExperienceBtn = document.getElementById("tambahPengalaman");
  let experienceCount = 1;

  addExperienceBtn.addEventListener("click", (event) => {
    event.preventDefault(); // Prevent form submission

    experienceCount++;

    const newExperienceItem = document.createElement("div");
    newExperienceItem.classList.add("pengalaman-item", "border-bottom", "border-3");

    newExperienceItem.innerHTML = `
          <label for="namaPekerjaan${experienceCount}" class="form-label">Nama Pekerjaan</label>
          <input class="form-control" id="namaPekerjaan${experienceCount}" type="text" name="namaPekerjaan[]" placeholder=" " required>

          <label for="divisi${experienceCount}" class="form-label">Divisi</label>
          <input class="form-control" id="divisi${experienceCount}" type="text" name="divisi[]" placeholder=" " required>

          <div class="row">
            <div class="col-md-6">
              <label for="mulaiPeriode${experienceCount}" class="form-label">Mulai Periode</label>
              <input class="form-control" id="mulaiPeriode${experienceCount}" type="date" name="mulaiPeriode[]" placeholder=" " required>
            </div>
            <div class="col-md-6">
              <label for="akhirPeriode${experienceCount}" class="form-label mt-2">Akhir Periode</label>
              <input class="form-control" type="date" id="akhirPeriode${experienceCount}" name="akhirPeriode[]" placeholder=" " required>
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea${experienceCount}" class="form-label">Keterangan</label>
            <textarea class="form-control" id="exampleFormControlTextarea${experienceCount}" name="exampleFormControlTextarea[]" rows="3" placeholder=" "></textarea>
          </div>
        `;

    experienceContainer.appendChild(newExperienceItem);
  });
});
