[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-24ddc0f5d75046c5622901739e7c5dd533143b0c8e959d652212380cedb1ea36.svg)](https://classroom.github.com/a/ebT1wQO_)
Hello



    <<<<<<< Updated upstream
[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-24ddc0f5d75046c5622901739e7c5dd533143b0c8e959d652212380cedb1ea36.svg)](https://classroom.github.com/a/ebT1wQO_)
Hello
=======
[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-24ddc0f5d75046c5622901739e7c5dd533143b0c8e959d652212380cedb1ea36.svg)](https://classroom.github.com/a/ebT1wQO_)
>>>>>>> Stashed changes

BILD PÅ FÖRSTA SIDAN

![DBOM logo](Logo.png)
##Projektnamn: U05 IMDb-clone (eller DBOM - Database of Movies)

Beskrivning: Detta projekt har gått ut på att skapa en databas med filmer. Här man kan logga in, registerar sig, se bilder på några Horror filmer från Japan och Sci-fi filmer från USA, där man även kan se några detaljer om filmerna. Man kan, som registrerad använadare, även skapa en lista med filmer (och ändra listan och ta bort filmer från listan) Användaren kan också skriva (lägga till), ändra och ta bort sina kommentarer om en film. 

För att köra detta projekt lokalt behöver man ha följande installerat:
- PHP 
- Composer
- Node.js och NPM
- Tailwind

Installation:
1. Klonar från Github - git clone
2. Navigera till projektmappen -cd 'vårt protekts namn`
3. Kör - composer install
4. Kör - npm install
5. Kopierar .env.example file och skapar  .env i gitignore
6. Skickar TMDB_TOKEN i vår .env file för att skapa en API key. - php artisan key:generate
7. Kör migrations - php artisan migrate
8. Använder php artisan serve för att komma till - localhost:8000 i browser

Förberedelser: Vi klonar ner projektet från Github till VS Code, och ser till att installera de senaste versionerna av Nodejs och NPM i Lavarel.Se detaljer Ovan.
![Node logo](nodejs.png)
![NPM loho](image.png)

Vi ser till att vi har Tailwind, om inte, så installerar vi Tailwind.
Vi öppnar och jobbar i en Docker container. 
Vi använder Mariadb som databas och ser till att vi har alla detaljer rätt för att kunna koppla upp oss till Adminer, Mariadb. 
`http://localhost:8080`.
Vi startar projektet genom att köra Laravels inbyggda server: php artisan serve.
När projektet är igång kan man öppna webbläsaren och gå till `http://localhost:8000` för att komma åt DBOM.

Vi gjorde även ett ER-Diagram, site-map, och Low och High Fidelity i Figma för att illustrera våra sidor och dess länkar.
![ER digram](<ER diagram.png>)


Använding av DBOM: DBOM - Database of Movies kan användas av personer som har ett större intresse av filmer inom genren Horror som kommer ifrån Japan och/eller Sci-fi filmer som kommer ifrån USA. Man kan besöka siten utan att vara användare men man har då limiterade rättighets tillgång. I och med att vi limiterar antal genre och länder, så kan användrna snabbare hitta relevanta filmer inom deras intresseområde.

Som besökare har man bara läsrättigheter.
Som registrerad användare:
-loggar man in för att skapa sin egen favoritfilmlista
-där man kan lägga till nya filmer 
-och ta bort. 
Som registrerad användare kan man även:
-skriva kommentarer/recensera filmerna, 
-dessutom kan man också gå in och ändra, godkänna i sina kommentarer 
-och ta bort om man vill. 

DBOM är mycket användarvänlig och rekommenderas till alla skräck och sci-fi entusiaster.

Medlemmar i projeket: Vi är GRUPP 7, FWD23: Daniel Sedell, Louise Blanc, Mohamed Abdi Ali, Mikael Jakobsson, Cissie Andersson. 

Tillgång: Projektet finns nu tillgängligt på Github.

Tack för hjälpen: Vi vill även tack andra grupper från vår klass FWD23, vår tutor Olli-Heikki Inkinen
och sist men inte minst vår lärare Sebastian Lindgren.


Figma:

https://www.figma.com/file/zv3rtD8zwMDOdGtfXixsoO/Grupp-7?type=design&node-id=0-1&mode=design&t=uNoiJTJSsI2zltsa-0

Sitemapp / Er-diagram

https://miro.com/app/board/uXjVNv2oFUc=/

