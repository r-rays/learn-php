$(document).ready(function () {
  $("#search").hide();

  $("#keyword").on("keyup", function () {
    $(".loader").show();

    // ajax load
    $("#container").load("ajax/mahasiswa.php?search=" + $("#keyword").val());

    // ajax $.get();
    $.get("ajax/mahasiswa.php?search=" + $("#keyword").val(), function (data) {
      $("#container").html(data);
      $(".loader").hide();
    });
  });
});
