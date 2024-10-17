# Actividad_8_Figuras_Geometricas

Exercici d'aplicació pràctica de programació orientada a objectes amb PHP. Crearem classes, interfícies i les relacions entre elles. Les classes contindran funcionalitat per realitzar els càlculs de les àrees i els perímetres d'objectes geomètrics:
<li>Triangle</li>
<li>Rectangle</li>
<li>Quadrat</li>
<li>Cercle</li>

# Objetivos

<li>Crea una pàgina principal que, mitjançant un formulari, demani a l’usuari que triï el tipus de figura.</li>
<li>En fer clic al botó, redirigeix a una altra pàgina que demani a l’usuari introduir un o dos costats depenent de la figura escollida.</li>
<li>Un cop introduït el costat o els costats, el programa calcularà l’àrea i el perímetre.</li>
<li>La sortida per pantalla mostrarà: el tipus de figura, el costat o els costats introduïts, el resultat de l’àrea i el perímetre.</li>

# Clases

Genera la classe <strong>“FiguraGeometrica”</strong> amb dos atributs anomenats tipoFigura y  lado1. 
<li>Genera els mètodes getters i setters.</li>
<li>Genera el constructor amb tots els seus atributs i el destructor.</li>
<li>Aquesta classe inclourà un mètode calcularArea() que inicialment no tindrà funcionalitat concreta (pots deixar un missatge que indiqui que ha de ser sobreescrit si és necessari).</li>
<br>
Genera la classe <strong>“Triangulo”</strong> que hereti  de FiguraGeometrica.
<li>Afegeix dos atributs lado2 i lado3 específics per a aquesta classe.</li>
<li>Genera el constructor amb tots els seus atributs i el destructor.</li>
<li>Implementa els mètodes getters i setters per a cada atribut.</li>
<li>Defineix el mètode calcularArea() que retorni l’àrea del triangle.</li>
<li>Afegeix un mètode calcularPerimetre() per calcular el perímetre del triangle.</li>
<li>Afegeix el mètode màgic __toString() per tornar la descripció de la figura.</li>
<br>
Genera la classe <strong>“Rectangulo”</strong> que hereti  de FiguraGeometrica.
<li>Afegeix un atribut lado2 específic per a aquesta classe.</li>
<li>Genera el constructor amb tots els seus atributs i el destructor.</li>
<li>Implementa els mètodes getters i setters per a cada atribut.</li>
<li>Defineix el mètode calcularArea() que retorni l’àrea del rectangle.</li>
<li>Afegeix un mètode calcularPerimetre() per calcular el perímetre del rectangle.</li>
<li>Afegeix el mètode màgic __toString() per tornar la descripció de la figura.</li>
<br>
Genera la classe <strong>“Cuadrado”</strong> que hereti  de FiguraGeometrica.
<li>Genera el constructor amb tots els seus atributs i el destructor.</li>
<li>Defineix el mètode calcularArea() que retorni l’àrea del quadrat.</li>
<li>Afegeix un mètode calcularPerimetre() per calcular el perímetre del quadrat.</li>
<li>Afegeix el mètode __toString() per tornar la descripció de la figura.</li>
<br>
Genera la classe <strong>“Circulo”</strong> que hereti  de FiguraGeometrica.
<li>Genera el constructor amb tots els seus atributs i el destructor.</li>
<li>Defineix el mètode calcularArea() que retorni l’àrea del quadrat.</li>
<li>Afegeix un mètode calcularPerimetre() per calcular el perímetre del quadrat.</li>
<li>Afegeix el mètode __toString() per tornar la descripció de la figura.</li>
