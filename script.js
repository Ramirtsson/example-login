// class Vehiculo {
//     #precio = 0;

//     constructor(marca, modelo, año, precio){
//         this.marca = marca;
//         this.modelo = modelo;
//         this.año = año;
//         this.#precio = precio
//     }
    
//     informacion(){
//         console.log(`La marca es: ${this.marca} \n El modelo es: ${this.modelo} 
//             \n El año es: ${this.año}`);
//     }

//     conseguirPrecio(){
//         console.log("$ "+this.#precio + "")
//     }

//     establecerPrice(newPrice){
//         this.#precio = newPrice;
//     }
// }

// const vehiculo0 = new Vehiculo("Chevrolet", "Optra", "2008","20000");
// vehiculo0.conseguirPrecio();

// vehiculo0.establecerPrice("100000");
// vehiculo0.conseguirPrecio();

// class Auto extends Vehiculo{
//     constructor(marca, modelo, año, puertas){
//         super(marca, modelo, año)
//         this.puertas = puertas;
//     }

//     tocarClaxon(){
//         console.log("pip pi pi pi pi")
//         return "pip pi pi pi pi";
//     }

//     informacion(){
//         console.log(`La marca es: ${this.marca} \n El modelo es: ${this.modelo} 
//             \n El año es: ${this.año} y tiene ${this.puertas} puertas`);
//     }

// }

// class Moto extends Vehiculo{
//     constructor(marca, modelo, año, cc){
//         super(marca, modelo, año)
//         this.cc = cc;
//     }

//     hacerCaballito(){
//         console.log("Procede a visitar a dios")
//         return "Procede a visitar a dios";
//     }
    
//     informacion(){
//         console.log("es una moto jaa")
//     }
// }


// const vehiculo1 = new Auto("Chevrolet", "Optra", "2008", "4");
// vehiculo1.informacion();

// const vehiculo2 = new Moto("Italika", "Vortx", "2024","250cc")
// vehiculo2.informacion();

async function getUsers(){
    const response = await fetch('./users/getUsers.php'); // TIPO GET
    const data = await response.json();
    console.log(data)
}

async function getUser(id) {
    const response = await fetch('./users/getUser.php?id='+id) // PARAMETROS TIPO GET Y POST DIFERENCIA ENTRE ELLOS 
    const data = await response.json();
    console.log(data)
}

async function getUserByName(name) {
    
}

async function getUserByEmail(email) {

}
async function insertUser(name,lastname,age,email,password)
{
    // const response = await fetch(url, {
    //                             method: 'POST',
    //                             headers,
    //                             body: JSON.stringify(data),
    //                             signal: options.signal
    //                         });
    const form =  new FormData();

    form.append("name",name);
    form.append("lastname",lastname);
    form.append("age",age);
    form.append("email",email);
    form.append("password",password);

    const response = await fetch('./users/insertUser.php',{
                                method:'POST',
                                body: form
                            });
    const data = await response.json();
    console.log(data);

}

// getUsers();
// getUser(4);
// getUserByEmail();
// getUserByName();