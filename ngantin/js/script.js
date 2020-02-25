function edit() {
    document.getElementById("formModalLabel").innerHTML = "Ubah data mahasiswa";
    document.getElementById("submit1").innerHTML = "Ubah data";

    const id = $(this).data('id');
    console.log(id);
}