const form = document.getElementById('Login')

form.addEventListener("submit", async function(e){
    e.preventDefault();

    const dataForm = new FormData();

    dataForm.append("email",document.getElementById("user").value);
    dataForm.append("password",document.getElementById("password").value);

    const response = await fetch('./auth/login.php',{
                                method:'POST',
                                body: dataForm
                            });

    const data = await response.json()

    if(data.code === 201){
        // console.log("tendremos que redirigir jaja")
        return window.location.href = "./dashboard/dashboard.php";
    }

    Swal.fire({
        title: "UPS",
        text: data.message,
        icon: "error"
    });
});