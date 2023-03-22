# Követelmény Specifikáció

## 1. Áttekintés

Csapatunk célja létrehozni egy olyan kérdőívet, amely információt gyűjt az emberektől. A válaszadás előtt egy félmérést kell kitölteniük a felhasználóknak, amivel teszteljük őket, melynek célja, hogy képet kapjuk az adott témáról ami foglalkoztat minket. A felmérés után a felhasználó megkapja a rendes kérdéseket amlyek fajtája a már megszokott felelet választós, igaz-hamis vagy simplán válaszadós forma. Az adatok egy adatbázisban kerülnek eltárolásra, amely megtekintéséhez egy felhasználói fiókba történő belépés után van lehetőség. Ennek a célja, hogy a begyűjtött információt ne tudja egy 3 fél megtekinteni és illetéktelenül felhazsnálni.

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

## 6 Jelenlegi üzleti folyamtok modellje
A kérdőívek általános feladata az, hogy felmérjék az emberek véleményét egy vagy több dologgal kapcsolatban. Rengeteg kérdőív van az interneten. Miben különbözne egy új, milyen újítást tudna bevezetni? Szerintünk az rendben van, hogy egy kérdőívet bárki kitölthet. Ugyanakkor sok olyan szituació van amikor azok véleményére szeretnénk több kreditet adni akik jártasak abban a bizonyos témában. Ezért a kérdőívünkbe implementálni szeretnénk egy úgy nevezett "szűrést" amely eldönti, hogy leteszteljük az aktuális felhasználó hozzáértését.
