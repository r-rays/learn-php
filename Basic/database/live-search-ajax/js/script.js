const container = document.getElementById("container");
const keyword = document.getElementById("keyword");
const searchButton = document.getElementById("search");

keyword.addEventListener("keyup", function () {
  const xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  xhr.open("GET", "ajax/mahasiswa.php?search=" + keyword.value, true);
  xhr.send();
});
