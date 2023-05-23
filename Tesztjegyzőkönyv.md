## 1. Bevezetés<br>

A tesztelés az alkalmazás fejlesztés egyik, hanem a legfontosabb mellékteendője, mivel ezekből a tesztekből derül ki, hogy mik vannak teljesen készen, és miket kell a későbbiekben javítani. Ezeket a teszteket a fejlsztők hajtják végre, általában a saját részükön, hogy pontosan tudják, hogy hol keressék az esetleges hibákat.<br>

## 2. Tesztelési terv hatóköre, célja:<br>

Ahogy a bevezetésben is leírtuk,a tesztelés legfontosabb célja, hogy a fejlesztők kiszűrjék a program hibáit és azokat minnél hamarabb és minnél hatékonyabban javítsák ki. A frontend fejlesztők a frontend részt nézik át, a backend fejlesztők pedig a saját, backend részüket tesztelik.<br>

## 3. Tesztet végezte: Kémeri Martin<br>
A tesztek a Google Chrome nevű böngészőben lettek végrehajtva.

Sikertelen Tesztek:<br>


![abra drawio (1)](https://github.com/103470/AFP2--h-t-let/assets/113610538/97f4b572-9d49-4bd5-a41d-11ec1c0ad211)<br>


Sikeres Tesztek: <br>


![abra drawio (2)](https://github.com/103470/AFP2--h-t-let/assets/113610538/cf0ed037-ff71-43af-bd86-8d892032d3b6)<br>


## 4. Tesztet végezte: Magos Balázs<br>
A tesztek Mozzila Firefox böngészőben történtek

Sikertelen Tesztek:<br>


![237303144-97f4b572-9d49-4bd5-a41d-11ec1c0ad211 drawio](https://github.com/103470/AFP2--h-t-let/assets/113610878/745c460c-7067-4ea4-99e1-35b13805effb)


Sikeres Tesztek:<br>


![ad drawio](https://github.com/103470/AFP2--h-t-let/assets/113610878/6fe496ba-0e62-43c8-bf5c-d5b419062516)


## 5. Tesztet végezte:Török Marcell Baláts<br>
A tesztek Opera gx böngészőben történtek


| Tesztszám | Rövid leírás                                             | Eredmény                                                                  | Teszt                                                                     | Megjegyzés                |
|-----------|----------------------------------------------------------|---------------------------------------------------------------------------------|--------------------------------------------------------------------------------|---------------------------|
| Teszt #01 | Helytelen válasz esetén Helyesnek érzékeli   | Helyesnek Itéli a válaszunkat  | Sikertelen teszt  | Javitásra szorul
| Teszt #02 | Kijelentkezés után Bent marad A felhasználó  | Az admin felhaszálót nem lépteti ki | Sikertelen teszt   | Javitásra szorul
| Teszt #03 | Helytelen erdeményt kapunk kiértékeléskor    |   Nem elvárt eredményt kapunk.| Sikertelen teszt   | Javitásra szorul
| Teszt #04 | kédések válaszolása közben elcsúszik a design| kédések válaszolása közben elcsúszik a design | Sikertelen teszt    | Javitásra szorul
| Teszt #05 | 404-errot dob ha meg akarjuk nyitni a weboldalt| A weboldal nem reagál a kérésünkre. | Sikertelen teszt   | Javitásra szorul



| Tesztszám | Rövid leírás                                             |  eredmény                                                                   | Teszt                                                                       | Megjegyzés                |
|-----------|----------------------------------------------------------|---------------------------------------------------------------------------------|--------------------------------------------------------------------------------|---------------------------|
| Teszt #01 | Helytelen válasz esetén Helyesnek érzékeli   | Már nem maradt  | Sikeres teszt  | Javitva
| Teszt #02 | Kijelentkezés után már nem marad bent a felhasználó  | Az admin felhaszálót ki lépteti | Sikeres teszt   | Javitva
| Teszt #03 | A több lehetőséges kérdéseknél több válaszra is tudunk kattintani |  Elvárt eredményt kapunk| Sikeres teszt   | OK
| Teszt #04 |Admin felhasználó látja a tesztek eredményeit | Elvárt eredményt kapunk | Sikeres teszt    | OK
| Teszt #05 | Nem dob több 404-errot ha meg akarjuk nyitni a weboldalt|  Elvárt eredményt kapunk | Sikeres teszt   | OK


