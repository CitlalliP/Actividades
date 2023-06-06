class Movimientos{
    constructor(potencia, probabilidad, elemental, tipo){
        this.potencia=potencia;
        this.probabilidad=probabilidad;
        this.elemental=elemental;
        this.tipo=tipo;
    }
}
class Pokemon{
    constructor(nivel, tipos, vida, velocidad){
        this.nivel=nivel;
        this.tipos=tipos;
        this.vida=vida;
        this.velocidad=velocidad;
    }
    mov()
}
class Entrenador{
    constructor(nombre, region, medallas){
        this.nombre= nombre;
        this.region= region;
        this.medallas=medallas;
        
    }
}

let trueno = new Movimientos (100, "50%", "electrico", "físico")
let calcinacion = new Movimientos(29, "15%", "fuego", "especial")
let surf = new Movimientos (65, "63%", "agua", "físico")
let confusion = new Movimientos(20, "18%", "psiquico", "especial")

let Pikachu= new Pokemon(50, "electrico", 100, 20)  
let Squirtle = new Pokemon (25, "agua", 45, 60)
let Charizard = new Pokemon (44, "fuego", 93, 90)
let Abra = new Pokemon (75, "psiquico", 53, 84)

let entrenador1= new Entrenador("Brock", "Kanto", 5)
let entrenador2= new Entrenador("Misty", "Sinnoh", 2)

console.log("Ataca el entrenador: " +  )
