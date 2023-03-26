# Követelmény Specifikáció

## 1. Áttekintés

Csapatunk célja létrehozni egy olyan kérdőívet, amely információt gyűjt az emberektől. A kérdőív elejére implementáltunk egy "kisebb" kérdőívet, melynek célja, hogy képet kapjunk arról, hogy a felhasználó mennyire jártas az adott témában. Ezután a felhasználó megkapja a rendes kérdéseket amelyek fajtája a már megszokott felelet választós, igaz-hamis vagy a kifejtős/válaszadós forma. Az adatok egy adatbázisban kerülnek eltárolásra, amely megtekintéséhez egy felhasználói fiókba történő belépés után van lehetőség. Ennek a célja, hogy a begyűjtött információt ne tudja egy 3. fél megtekinteni és illetéktelenül felhasználni.

## 2. Jelenlegi Helyzet

A jelenlegi kérdőívek papír formában készülnek. A kérdőíveket el kell juttatni az emberekhez, akiknek kézzel kell az kitölteni, majd a kitöltést követően vissza is kell azt juttatni a megrendelőhöz. Ez a folyamat lassú és sokan csak a kérdőív megkapásáig jutnak el, és ott meg is szakad a folyamat.
A csapatunk szeretne egy webes kérdőívet készíteni adatgyűjtés céljából. Szeretnénk mindenféle adatot begyűjteni a világ minden részéről, erre azért van szükség,hogy egy-egy témáról ne szubjektív véleményt kapjunk. Ahogy a mondás is tartja, "Több szem többet lát!". Elsősorban olyan emberek véleményére vagyunk kíváncsiak akik valamennyire jól informáltak a világ történéseiről, nincsenek bezárkózva a külvilágtól, mivel főleg állatokról és a környezetükről szeretnénk kérdezni.

## 3.Vágyálomrendszer

A projekt célja az hogy létrehozzunk egy olyan rendszert, ami különböző adatok, predikciók, vélemények megkérdezésére szolgál. A rendszert szeretnénk úgy létrehozni, hogy ez minél több ember számára elérhető legyen. Erre legalkalmasabb felületnek egy weboldalt gondolunk, hiszen az bármilyen eszközről elérhető, feltéve ha van internet kapcsolatunk. A rendszernek olyannak kell lennie, hogy az a különböző felhasználók által szolgált adatokat el tudja tárolni. Ahhoz hogy felmérjük a felhasználó témához értését tegyünk fel kalibráló kérdéseket, hiszen nem mindegy hogy egy témában jártas személy válaszol a kérdésekre, vagy egy olyan ember akinek az adott téma nem az erőssége.

## 4.Funkcionális Követelmények

### A kerdőiv kezelésével kapcsolatban:
A kérdőívben a kérdesek legyenek világosan és érthetően megfogalmazva.
Ezen felül a kérdőív legyen könnyen kezelhető valamint egyszerűen megérthető/átlátható.
### A vizuális felülettel kapcsolatban:
A vizualis felület legyen kidolgozott, még sem túl komplikált.
Szeretnénk, hogy a felület is átlátható legyen(látni lehet, hogy mely funkciók hol találhatók, és nem kell kutatni utánuk).

## 5.Rendszerre vonatkozó törvények, szabványok, ajánlások
- A web felület szabványos eszközökkel készüljüön, html/css/javascript/php.
- A képek jpeg vagy png formátumúak lehetnek.
- A felhasznlókat azonosító web oldalak esetében szükséges jogszabályokat be kell tartani: GDPR
- A rendszer bíztosítsa a kérdőívet kitöltő személy teljes anonimítást.
- A felhasználók által megadott válaszokat csak az ahhoz szükséges jogosultsággal lehet megtekinteni

## 6.Jelenlegi üzleti folyamtok modellje
A kérdőívek általános feladata az, hogy felmérjék az emberek véleményét egy vagy több dologgal kapcsolatban. Rengeteg kérdőív van az interneten. Miben különbözne egy új, milyen újítást tudna bevezetni? Szerintünk az rendben van, hogy egy kérdőívet bárki kitölthet. Ugyanakkor sok olyan szituació van amikor azok véleményére szeretnénk több kreditet adni akik jártasak abban a bizonyos témában. Ezért a kérdőívünkbe implementálni szeretnénk egy úgy nevezett "szűrést" amely eldönti, hogy az aktuális felhasználó mennyire jártas az adott témában.


![abra drawio](https://user-images.githubusercontent.com/113610878/226836415-18917c13-51f4-44bc-82fd-603177e7b632.png)


## 7.Igényelt üzleti folyamatok modellje
- Online megjelenés.
- Válaszok elmentése adatbázisba.
- Az egyéb válaszmegjelölés átnézése, és csak az értelmes válaszok elmentése adatbázisba.
- Kötelező adatok megadásának ellenörzése.
- A teszt kérdések megválaszolása esetén a helyesség ellenőrzése.


![aaa drawio](https://user-images.githubusercontent.com/113610538/226834017-17ef7e58-9397-4427-b8cb-858bd4492525.png)


## 8.Követelmény lista
- Biztonság https protocol amellyel biztosítjuk a felhasználó védettségét a weben.
- Egy választási lehetőséggel rendelkező kérdés és annak a választófelülete
- Több választási lehetőséggel rendelkező kérdés és annak a választófelülete
- Saját válasz beírása lehetőséggel rendelkező kérdés és annak a beírósáv felülete
- Legördülő menü hozzáadása és annak a felülelte
- Adatbázis kommunikáció a weboldal és egy webszerver adatbázisával
- Díszítés megalkotása a felülethez
- UI megalkotása a felülethez
- Jogosultsági rendszer létrehozása
- Admin jogosultsággal rendelkezők számára kérdések szerkesztésének biztosítása/kérdések törlése/kérdések hozzáadása

## 9.Fogalomszótár

- HTML: A HTML (angolul: HyperText Markup Language) egy leíró nyelv, melyet weboldalak készítéséhez fejlesztettek ki, és mára már internetes szabvánnyá vált a W3C támogatásával. Az aktuális változata az 5, ezt a verziót használjuk mi is.<br>
- CSS: A CSS (Cascading Style Sheets) egy stílusleíró nyelv, mely a HTML vagy XHTML típusú strukturált dokumentumok megjelenését írja le. Weblapunk stílusát ezzel készítjük el.<br>
- PHP: A PHP egy általános szerveroldali szkriptnyelv dinamikus weblapok készítésére. Az első szkriptnyelvek egyike, amely külső fájl használata helyett HTML oldalba ágyazható. opcionális statikus gépelést ad a nyelvhez.<br>
- Ui: Felhasználói felület (User interface). A user interface szoftverek, mobilalkalmazások felhasználó által látható “külső rétege”.<br>
