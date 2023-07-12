const pendaftarnid = document.getElementById("pendaftaran_id");
pendaftarnid.addEventListener("change", (e) => {
    const value = e.target.value;

    console.log(value);

    $(() => {
        $.ajax({
            method: "GET",
            url: location.origin + "/jsonpendaftaran",
            dataType: "json",
            data: { noujikendaraan: value },
            success: (response) => {
                console.log("blbl", value, response);
                $("#no_reg_kendaraan").attr("value", response.no_reg_kendaraan);
                $("#namaPK").attr("value", response.namaPK);
                $("#alamatPK").attr("value", response.alamatPK);
                $("#jbi").attr("value", response.jbi);
                $("#masa1").attr("value", response.tgl_sertifikat);
                $("#masa2").attr("value", response.masa_berlaku);
                $("#jenis").attr("value", response.jenis);
                $("#std_panjang").attr("value", response.panjang);
                $("#std_lebar").attr("value", response.lebar);
                $("#std_tinggi").attr("value", response.tinggi);
                $("#std_roh").attr("value", response.julur_dpn);
                $("#std_foh").attr("value", response.julur_blk);
            },
        });
    });
});