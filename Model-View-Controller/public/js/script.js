$(function () {
  $("#create-btn").on("click", function () {
    $("#modalTitle").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#id").val("");
    $("#nama").val("");
    $("#nrp").val("");
    $("#jurusan").val("");
    $("#email").val("");
  });
  $("#edit-btn").on("click", function () {
    $("#modalTitle").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "http://learn-php.test:3000/Model-View-Controller/public/mahasiswa/update"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://learn-php.test:3000/Model-View-Controller/public/mahasiswa/edit",
      method: "post",
      data: { id: id },
      dataType: "json",
      success: function (data) {
        $("#id").val(data.id);
        $("#nama").val(data.nama);
        $("#nrp").val(data.nrp);
        $("#jurusan").val(data.jurusan);
        $("#email").val(data.email);
      },
    });
  });
});
