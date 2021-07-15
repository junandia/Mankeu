const flashData = $(".flash-data").data("flashdata");

if(flashData != null){
    if (flashData == 'Ditambahkan' || flashData == 'Diubah') {
        Swal.fire({
            title: "Sukses!",
            text: "Data Berhasil Disimpan",
            icon: "success",
        });
    }else if(flashData == 'akses_ditolak' || flashData == 'Gagal'){
        Swal.fire({
            title: "403",
            text: "Terjadi Kesalahan",
            icon: "warning",
        });
    }

}
// Tombol hapus
$(".tombol-hapus").on("click", function (e) {
    e.preventDefault();
    const href = $(this).attr("href");

    Swal.fire({
        title: "Hapus data?",
        text: "Aksi ini tidak bisa dibatalkan",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, Hapus Data!",
        cancelButtonText: "Batal",
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    });
});

// Tombol Konfirmasi
$(".tombol-konfirmasi").on("click", function (e) {
    e.preventDefault();
    const href = $(this).attr("href");

    Swal.fire({
        title: "Konfirmasi",
        text: "Aksi ini tidak bisa dibatalkan",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yakin",
        cancelButtonText: "Batal",
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    });
});
