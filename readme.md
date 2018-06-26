# EasyPlan Dokumentation

## Use Cases : 

##### Besucher: 
Der Besucher kann die Applikation nur sehr eingeschränkt nutzen. Er kann sich lediglich durch die Startseite über die Funktionalitäten der Webapplikation informieren. Um sie nutzen zu können benötigt er ein Benutzerkonto, das er kostenlos erwerben kann. Des Weiteren kann er weitere Seiten mit Formalen Inhalten wie zum Beispiel: Kontakt, Impressum und die Datenschutzrichtlinien aufrufen. 

#### Benutzer: 
Die Benutzerrechte werden erlangt, indem ein Benutzerkonto erstellt wird. Der Benutzer hat dieselben Rechte wie der Besucher, jedoch kann er sich nicht nur über die Funktionen informieren, sondern diese auch nutzen.
Der Benutzer kann: 
 - sein Profil anpassen (persönliche Daten ändern, Profilbild hinzufügen)
- Veranstaltungen erstellen
- Veranstaltungen suchen
- seine eigenen Veranstaltungen wieder löschen (Dropdown-Menü Meine Veranstaltungen)
- eine Umfrage zu seiner Veranstaltung erstellen
- auf Veranstaltungen reagieren (Zu- oder Absagen, Kommentare verfassen, an einer Umfrage teilnehmen)
- Profile anderer Nutzer anschauen (Verlinkung auf den Kommentaren und dem Veranstalter) 

#### Admin: 
Der Admin hat die gleichen Rechte wie der Benutzer und der Besucher. Darüber hinaus kann er durch die Dropdown-Navigationsleiste im rechten oberen Bereich, auf die „Admin-Seite“ gelangen. Dort kann er User und Veranstaltungen löschen.

#### Security

-	Durch eine Middleware wurde sichergestellt, dass bis auf den Admin, niemand auf die Admin-Seiten gelangen kann. Außerdem wurden die Seiten „Veranstaltung erstellen“, „Veranstaltung suchen“, „Veranstaltung“ und „Profil“  für den Besucher ausgeschlossen. 

#### Wow faktor
EasyPlan bietet dem Nutzer die Möglichkeit alle relevanten Informationen zu einer Veranstaltung vollständig abzulesen. Dabei sind vor allem die Rückmeldung (Zu- und Absage), die Umfragefunktion und die Kommentarfunktion besonders, da sie die wichtigen Informationen übersichtlich darstellen und dem Nutzer so die Möglichkeit bieten diese Informationen übersichtlich und auf einen Blick zu sehen.

#### Visual Design
Easyplan setzt auf ein einheitliches Design, dieses basiert auf einem schlichten Blau, das sich über die Webapplikation durchzieht.
Durch das Responsive Design ist die Webapplikation auf allen Endgeräten nutzbar.

#### 2.1 Design / CSS
Statt wie aus dem Style-Tile zu vermuten war, auf ein Pink und Grün zu setzen, entschieden wir uns Vermehrt schlichte blaue Textelemente einzubauen. Unserer Meinung nach wurde unsere Applikation dadurch übersichtlicher und seriöser. 
Wir nutzen vor allem Designvorlagen von Bootstrap und änderten diese nach unseren Wünschen ab.
#### 2.2 MVC Umsetzung
Der User gelangt über Routen auf die jeweilige View. Wenn die View Daten  aus der Datenbank benötigt werden diese von dem zugehörigen Controller aus der Datenbank genommen. Anschließend wird die View mit den geforderten Parameter  vom Controller zurückgeliefert. 
#### 2.3 Zweistufiger Geschäftsprozess (Session Handling)
Unsere Veranstaltungen werden auf Basis eines Zweistufigen Geschäftsprozess erstellt.
Dabei wird bei der ersten Stufe der Name und Ort und in der zweiten Stufe das Datum und das Genre der Veranstaltung abgefragt.
Für Veranstaltungsname und das Genre müssen Eingaben getätigt werden. Datum und Ort können auch unausgefüllt abgeschickt werden.
Die Eingaben der ersten Stufe werden zwischenzeitlich in einer Session gespeichert. Beim betätigen des Submit-Button auf der zweiten Seite wird die passende Methode (insert_veranstaltungen2) im Controller aufgerufen. Dabei werden die Daten der zweiten Seite zusammen mit den Daten der ersten Seite, die aus der Session bezogen werden, in der Datenbank gespeichert. 

#### 2.4 Suche mit Parametern Geschäftsprozess (AJAX)
Die Suche nach Veranstaltungen wird durch die Parameter Ort, Name, Genre und Veranstalter gefiltert. Die Suchfunktion wurde auf Basis von Ajax umgesetzt. Dabei wird bei jedem loslassen einer Taste ein XMLhttpRequest gesendet. Im Controller werden die Veranstaltungen, die auf die Filterkriterien zutreffen, aus der Datenbank geladen und im Controller in die HTML Vorlage eingefügt. Wenn die Seite „Veranstaltung suchen“ geladen wird erscheinen zuerst alle Veranstaltungen. Sobald die Ajax-Funktion durch das loslassen einer Taste ausgelöst wird, wird dieser div-Container durch den im Container zusammengestellten Text ersetzt wodurch die gefilterten Veranstaltungen ausgegeben werden

#### 2.5 LaravelMIx

Zur Optimierung der Performance nutzen wir LaravelMix. 
Nachdem wir Laravel Mix installiert hatten, gaben wir in der wepack.mix.js Datei alle Dateien an, die wir komprimieren wollten und speicherten die komprimierte Datei unter combinedCSS.css. 
...
#### 2.6 Security
Sensible Daten, wie z.B. das Nutzerpasswort werden in ein Hash umgewandelt und so in der Datenbank gespeichert.
Durch Middleware wurde sichergestellt, dass bis auf den Admin, niemand auf die Adminseiten gelangen kann. Außerdem wurden die Veranstaltung erstellen Seite, Veranstaltung suchen Seite, die Veranstaltungsseite und die Profilseite für den Besucher ausgeschlossen. 

## 3. Sonstige technische Umsetzungen
##### Adminverwaltung: 
Neben dem Gast und dem Registrierten User gibt es die Benutzergruppe Admin. 
Diese wurde umgesetzt, indem wir die von Laravel gegebene User-Tabelle durch das Attribut Role_ID ergänz haben. Dabei bekommen User die sich registrieren per default die Role_ID 1 und die Admins die Role_ID 2. Die Admin Profile werden durch den DatabaseSeeder erstellt. Der Zugriff auf die Verwaltungsseiten der Admins wurde durch eine Middleware sichergestellt. Nicht-Admins ist es nicht möglich über die URL oder das Dropdown-Menu auf die Admin Seiten zu gelangen. User die mit einem Admin Account eingeloggt sind bekommen im Dropdown-Menu das beim Klick auf den Username (Oben-Rechts) ausgelöst wird zusätzlich eine Auswahlmöglichkeit „Admin“, durch die Sie auf die Admin Seiten gelangen. Admins können hier Veranstaltungen und User Löschen. Dies wurde durch das MVC-Prinzip realisiert. 
	
	






#### Veranstaltungsseite
Auf der Veranstaltung-Suchen Seite gelangt man durch einen Link auf dem Veranstaltungsnamen zu der jeweiligen Veranstaltungsseite. 
#### Teilnahmefunktion
Mit der Teilnahme-Funktion ist es jedem User möglich einmal abzustimmen. Wenn abgestimmt wurde verschwinden die Auswahlmöglichkeiten und der Username erscheint im jeweiligen Feld der Abstimmung. 

#### Umfragefunktion
Ähnlich ist dies auch bei der Umfragefunktion. Hier ist es nur dem Veranstalter selbst möglich eine Umfrage zu erstellen. Über den Link auf dem Textelement „Umfrage erstellen“ wird er auf eine Seite weitergeleitet in denen er die gewünschten Parameter eingeben kann. Der Titel der Umfrage muss eingegeben werden. Dazu können bis zu 5 Auswahlmöglichkeiten eingegeben werden, davon müssen mindestens die Ersten zwei Optionen ausgefüllt sein. Ist eine Umfrage erstellt können alle Besucher der Seite an der Umfrage teilnehmen. Dabei stimmen Sie durch einen Klick auf den Radio Button für die jeweilige Option ab. Es ist nur eine Teilnahme pro User möglich. Hier verschwinden die Auswahlmöglichkeiten mit dem einblenden des Usernamen bei der jeweiligen Option. Außerdem wird zur besseren Übersicht die Anzahl der User die für die Option gestimmt haben ausgegeben. 
Kommentarfunktion
Hier kann der User einen Kommentar abgeben, indem er in das Textfeld eine Nachricht schreibt und diese mit dem Submit-Button abschickt. Die Daten werden dann im Controller Verarbeitet und erscheinen durch einen Redirect unter der Kommentarfunktion. Dabei werden Username, Uhrzeit/Datum und der vom User eingegebene Text ausgegeben. Auf dem Namen des Users befindet sich ein Link zu seinem Profil

#### Profil erstellen/Bearbeiten
Jeder Nutzer hat die Möglichkeit sein eigenes Profil durch persönliche Angaben individuell zu gestalten. Diese sind zu Beginn leer, können aber nach der Registrierung ausgefüllt werden und auch im weiteren Verlauf aktualisiert werden. Des Weiteren gibt es die Möglichkeit ein Profilbild hochzuladen. Da Heroku  leider nicht PHP 7, was von uns zum Anpassen der Bildgröße nötig ist, unterstützt, werden manche Bilder nach dem hochladen verzogen. Auserdem werden nur Bilder bis zu einer maximal Größe von 2 MB hochgeladen. Sollte das Bild zu groß sein, bleibt das bisherige Bild gespeichert.

#### Meine Veranstaltungen löschen
Jeder Nutzer bekommt im Dropdown-Menu, das beim Klick auf den Username (Oben-Rechts) ausgelöst wird, zusätzlich eine Auswahlmöglichkeit „Veranstaltungen“, durch die Sie auf die eigenen Veranstaltungen gelangen. Dort können einzelne Veranstaltungen gelöscht werden. Dies wurde durch das MVC-Prinzip realisiert. Um andere Veranstaltungen löschen zu können, bedarf es jedoch Adminrechte.










##### URL: https://www.EasyPlan321.herokuapp.com
## Benutzerdaten
##### Sedrik17 (Admin)
    Email: sedrik.cirzel@gmail.com			
    Passwort: passwort
##### Dominik1810 (Admin)
	Email: Dominik.al.burkert@gmail.com
	Passwort: derder
##### M.Eigelsperger (Admin) 
	Email: markus.eigelsperger@htwg-konstanz.de
	Passwort: admin
##### M.Giretti (User)
	Email: marco.giretti@htwg-konstanz.de
	Passwort: passwort
