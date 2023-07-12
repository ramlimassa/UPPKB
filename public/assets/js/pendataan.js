const pendataanid = document.getElementById("pendataan_id");
pendataanid.addEventListener("change", (e) => {
    const value = e.target.value;

    $(() => {
        $.ajax({
            method: "GET",
            url: location.origin + "/jsonpendataan",
            dataType: "json",
            data: { noujikendaraan: value },
            success: (response) => {
                console.log(response);
                $("#pengemudi").attr("value", response.pengemudi);
            },
        });
    });
});
