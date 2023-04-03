# Rendszerterv

## 1. A rendszer célja

A rendszer célja, hogy a információt gyűjtsön az emberektől. A fő kérdések előtt egy úgynevezett "mini kérdőívet" kell kitöltenie a felhasználónak, ami segít megkülönböztetni azokat az embereket akik jártasak az aktuális témában. A rendszerben két szerepkör található: az admin és a látogató(felhasználó). Az látogató csak a kérdőív kitöltésére jogosult, azon változtatni nem tud. Az admin jogosultsággal rendelkezők szerkeszthetik a kérdőívet és megtekinthetik a megadott válaszokat. Az alkalmazás webes felületen lesz elérhető, így törekszünk arra ,hogy minél több böngészővel kompatibilis legyen.<br>

## 2. Projekt terv
#### A rendszer létrehozásához rendelkezésre álló erőforrások: A felhasználó által használt notebookok/asztali számítógépek melyeknek rendelkezniük kell egy futó opercációs rendszerrel(Windows 7, Windows 10, Linux), folyamatos internet kapcsolatal, illetve egy általuk választott böngészővel(opera,google chrome,firefox) 
### Projektszerepkörök, felelőségek:
- Scrum Masters: Riczkó Henrik,Kardos Zsolt
- Product Owner: Riczkó Henrik,Kardos Zsolt
- Contributer: Magos Balázs
- Contributer: Kémeri Martin
- Contributer: Török Marcell

###  Projektmunkások és felelőségek:
- Frontend: Magos Balázs,Kémeri Martin,Török Marcell
- Backend: Magos Balázs,Kémeri Martin,Török Marcell
- Tesztelés: Magos Balázs,Kémeri Martin,Török Marcell

###  Ütemterv:

|Funkció                  | Feladat                                | Prioritás | Becslés (nap) | Aktuális becslés (nap) | Eltelt idő (nap) | Becsült idő (nap) |
|-------------------------|----------------------------------------|-----------|---------------|------------------------|------------------|---------------------|
|Követelmény specifikáció |Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |            
|Funkcionális specifikáció|Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Rendszerterv             |Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Program                  |Képernyőtervek elkészítése              |         2 |             1 |                      1 |                1 |                   1 |
|Program                  |Prototípus elkészítése                  |         3 |             8 |                      8 |                8 |                   8 |
|Program                  |Alapfunkciók elkészítése                |         3 |             8 |                      8 |                8 |                   8 |
|Program                  |Tesztelés                               |         4 |             2 |                      2 |                2 |                   2 |


## 3. Követelmények

- Webes megvalósítás.
- A rendszer fejlesztése HTML/CSS valamint PHP segítségével történik<br>
- A weblap felépítése, valamint dizájnolása a HTML/CSS nyelv implementálásával valósítandó meg<br>
- A weboldal használatához egy egyszerű böngészőre van szükség<br>
- Az adatok adatbázisban való tárolása<br>
- Jogosultságrendszer kialakítása<br>
- Az admin jogosultsággal rendelkezők szerkeszthetik a kérdőívet/ új tagokat adhatnak hozzá a rendszerhez<br>

## 4.Funkcionális Követelmények

### A kerdőiv kezelésével kapcsolatban:
A kérdőívben a kérdesek legyenek világosan és érthetően megfogalmazva.
Ezen felül a kérdőív legyen könnyen kezelhető valamint egyszerűen megérthető/átlátható.
### A vizuális felülettel kapcsolatban:
A vizualis felület legyen kidolgozott, még sem túl komplikált.
Szeretnénk, hogy a felület is átlátható legyen(látni lehet, hogy mely funkciók hol találhatók, és nem kell kutatni utánuk).

## 5. Funkcionális terv

### Rendszerszereplők:<br>
- Admin<br>
- Látogató<br>

### Rendszerhasználati esetek és lefutásuk:<br>

Adminisztrátor:<br>

- Teljes hozzáférése van a rendszerhez<br>
- Adatbázis tartalmát látthatja, válltoztathatja<br>
- Felhasználói adatok módosítása<br>
- Kérdések hozzáadása/törlése/válltoztatása<br>

Látogató:<br>

- Ki kell tölteni a válaszokat, nem lehet átugorni<br>
- A végén beküldi a válaszait<br>


## 6 Fizikai környezet

Az alkalmazás webes felületen fut,az igénybevételéhez szükség van regisztrációhoz.





## 12. Telepítési terv
#### A programott Githubon keresztül lehet telepíteni miután elvégeztük a letöltést (https://crast.net/150687/downloading-files-from-github-is-very-simple-this-is-how-you-can-do-it-from-your-mobile-or-pc/, A letöltéshez segítség) utána ki bontjuk a mappát oda ahová szeretnénk.

