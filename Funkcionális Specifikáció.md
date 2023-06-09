# Funkcionális Specifikáció

## 1. Áttekintés

- Csapatunk célja létrehozni egy kérdőívet, amely segítségével szeretnénk információt gyűjteni
- Az gyűjtött információt egy adatbázisban tároljuk
- A fő kérdések előtt egy felmérést kell kitöltenie a felhasználónak.
- A felmérés célja, hogy megmutassa mennyire jártas az adott felhasználó a témában

## 2. Jelenlegi helyzet

Jelenleg a megrendelő egy papíralapú kérdőív rendszert alkamaz. Ennek hosszadalmas a kiértékelése, rendezetten tartása. Jelenleg is létezik a kérdőívbe implementált "kisebb" kérdőív melynek célja, hogy megmutassa a kitöltő jártasságát az adott témában. Ezt a megrendelő szeretné ha implementálnánk az új rendszerbe is. A jelenlegi kérdőív kitöltése egy 10-20 percet vesz igénybe, a kérdőíveket tollal töltik ki, így ha valamely résztvevő megváltoztatja a véleményét, kisatírozott válaszok jönnek létre, így jelenleg semmilyen módon sem lehetséges a gépi kiértekelés. Mivel a rendszer papíralapú és a kiértékelése sem gépi, így a kapott válaszokat kézzel vezetik egy papíralapú füzetbe. lletve a kiértekelést is kézzel számolják. A jelenlegi rendszer funkcionalitás szempontjából elavult, nem fenntartható az effajta működés a jövőre nézve. Ennek a rendszernek és kiértékelésnek szeretné a megrendelő az egyszerűsítését és automatizálását.<br>

## 3. Jelenlegi üzleti folyamatok modellje

A kérdőívek célja, hogy információt gyűjtsön az emberektől az adott témával kapcsolatban. Ma már a esetek többségében a kérdőívek online felületen jelennek meg, de még mindig léteznek papír alapú kérdőívek is. A papír alapú kérdőívekkel történő információ gyűjtés lassú, így az online formában megjelenő kérdőívek, az információ gyors begyűjtésével és olykor egy adatbázisban eltárolva lehetőséget nyújtanak a gyors kiértékelésre amelyet ma már nem szükséges embereknek végezniük, egy számítógépes program is képes lehet már erre.

## 4. Vágyálomrendszer

Egy olyan rendszer szükséges számunkra amely kérdőív kitöltése kapcsán adatok feldolgozását teszi lehetővé. Funkcionalitást tekintve a rendszer egy kerdőívből álljon, tehát a felhasználó egy barátságos és egyértelmű felületet kell, hogy kapjon. Elsősorban a már fentebb említett "kis" kérdőívet kell kitöltenie amely azt a célt szolgája, hogy a témában jártasabb emberek véleményét megfelelő súlyozással értékeljük ki a jövőben. Ezután kapják meg az "Igazi" kérdőívet ahol a rendszer egyszerű kérdésekre vár választ.<br>

## 5. Igényelt üzleti folyamatok modellje

A megrendelő egy olyan kérdőívet szeretne amelynek a fő kérdések megválaszolása előtt felméri egy "mini kérdőív" formájában, hogy a felhasználó mennyire jártás az adott témában. A válaszok egy adatbázisban kerülnek tárolásra. A rendszer rendelkezik egy admin-látogató jogosultság rendszerrel.

### Admin:
- Bejelentekezés után megtekintheti a megadott válaszokat
- Szerkesztheti a kérdőívet, hozzáadhat új kérdéseket vagy törölheti a már meglévőket
- Új felhasználó(kat) (admin) adhat hozzá a rendeszerhez
### Látogató:
- A kérdőív kitöltésére van lehetősége

## 6. Használati esetek

A rendszer célja nem más, mint hogy az ADMINISZTRÁTOROK álltal létrehozott kérdőíveket, az oldal LÁTOGATÓI tudják kitölteni, igy adatokat biztosítva a felméréshez. Az ADMINOK és a LÁTOGATÓK különbözőképpen tudják majd használni a rendszert:

### 1. Adminok:<br> 

- Kérdőívek létrehozása a rendszerben<br>
- Kérdőívekhez egy teszt csatolása, amely felméri a kitöltő jártasságát az adott témában<br>
- A kérdőív kérdéseinek szerkeztése, kérdés hozzáadása/törlése<br>
- A felmérés statisztikáinak elérése<br>
- A statisztikák megtekintése<br>
- A statisztikák mentése a használt eszközre<br>
- A statisztikák mentése és tárolása adatbázisban<br>
- A már létező kérdőívek törlése<br>

### 2. Látogató:<br>

- Kérdőívek és az azt megelőző tesztek kitöltése<br>
- A felhasználó eldöntheti, hogy anonim szeretne maradni vagy a kitöltéshez adja a nevét<br>

## 7. Funkció-követelmény megfeleltetés

- A felhasználó által megadott válaszokat csak az Admin felhasználók tekinthetik meg.
- Ezzel elkerüljük az információk illetéktelen felsználását.
- Többfajta kérdés típus közül választhat a megrendelő ezzel létrehozhat olyan kérdéseket amelyekre az általa megadot
válaszok közül való választással lehet válaszolni.
- A megrendelő a maga ítlése szerint állíthatja össze a kérdőívet, amihez egy skeleton-t bizotsítunk.

## 8. Képernyőterv


![Képernyőkép 2023-03-26 185804](https://user-images.githubusercontent.com/113610538/227791701-e88c018f-b15a-45b1-b158-f889c724cbc5.png)



![Megnevezetlen diagram drawio (5)](https://user-images.githubusercontent.com/113610538/227791557-86f18e72-b3d2-4c6f-a95a-6f954d2fd329.png)<br>


## 9. Fogalomszótár

Skeleton: Egy váz ami alapul szolgál a végső termék elkészítéséhez.

