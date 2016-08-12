# Cel Projektu
>Celem projektu jest wyjść z etapu projektowania i wiecznej teorii. Napisanie funkcjonalnego projektu do pracy dla początkującego programisty i dzielenie się kodem w celu nauki pracy z innymi oraz zbieranie informacji zwrotnej o własnym kodzie.
 
# Cel Główny
> Stworzyć narzędzie do testowania kodów w przeglądarce na lokalnym komputerze. 
Silnik ma być oparty na PHP, ale oprócz niego dopuszcza się możliwość używania innych języków programowania. Testowane kody będzie można zapisać dołączając biblioteki, opis własny i automatycznie generowany w formie phpDocumentor oraz unit-testy. Powstanie w ten sposób lokalne archiwum (repozytorum) kodów. 

# Koncepcja
> Narzędzie ma być łatwe w obsłudze i automatyzować prace. Składać się z modułów, które mogą działać jako samodzielne narzędzia by można było wykorzystać je w przyszłości do innych projektów. Członkami zespól będą ludzie, którzy sami zechcą wspierać projekt. 

# Koncepcja Pracy
> Projekt będzie prowadzony w formie tutoriala, każdy krok opisany będzie w comicie wysyłanym do repozytorium. 

# Cele Funkcjonalne
* nauka programowania
* praktyczne zastosowanie teorii

* testowanie kodów:
  - PHP
  - JavaScript
  - jQuery, angular, knockout
  - bootstrap
  - techniki bezpieczeństwa aplikacji
  - unit test
  - projektowania obiektowego

* budowa lokalnego repozytorium kodów z opisem i dołączoną biblioteką. 

* zapisane kody staną się przykładami użycia danej biblioteki.
 
* formuła pozwoli szybko wyizolować odpowiedni fragment kodu.

* działanie przykładu będzie można sprawdzić na innych wersjach biblioteki.

* ciekawe użycia kodu można będzie zapisać by w przyszłości łatwo i szybko je odnaleźć.

# Cele Poboczne
>  Wdrażanie dobrych praktyk programowania, takich jak:
- standardy pisania kodów
- test driver developer
- wzorce programowania
- strategie programowania

# Cele Wtórne
* wyłapanie konfliktów bibliotek.
* testowanie języków współpracujących z PHP
* powstanie prywatne repozytorium kodów z łatwym źródłem do wtórnej implementacji.
* dzielenie się własnym kodem
* ocena własnych umiejętności
* uporządkowanie archiwum kodów
* uporządkowanie zdobytej wiedzy w praktyce
* zlokalizowanie braków wiedzy
* zdobycie doświadczenia w praktyce - wyjście z etapu teorii
* zdobycie doświadczenia w zamykaniu zadań, etapów i projektów
* zdobycie doświadczenia pracy w domu
* zdobycie doświadczenia pracy w grupie
* zdobycie doświadczenia w reagowaniu na informacje zwrotne
* zdobycie doświadczenia w pracy z gotowymi komponentami


---------------------------------------------------------------------------------------
# Ogólna Koncepcja Funkcjonalności
>Narzędzie ma być wszechstronnym środowiskiem pracy młodego programisty, obsługującym zadania, z którymi spotyka się na co dzień.

# Funkcjonalności
- przeglądanie struktury katalogów z poziomu PHP i ftp.
- edycja i testowanie plików
- pisanie kodów, opisów i testowanie ich w generatorze kodów
- przeglądanie bibliotek i przykłady użycia
- szybkie przeglądanie archiwum kodów
- historia operacji
- obsługa planowania działań i etapów realizacji
- logowanie - trzy poziomy uprawnień

# Opis Funkcjonalności

* przeglądanie struktury katalogów z poziomu PHP i ftp.
> Przeglądanie jak na dysku lokalnym z ikonami i rozwijanymi katalogami, obsługiwane z poziomu przeładowania się strony i ajax. Obsługa rozwijanego menu pod prawym przyciskiem myszy.

* edycja tekstu 
> Edytor z kolorowaniem trzcionki jak w IDE. Przy zapisaniu zmian wymagany komentarz dla "historii operacji", autopodpowiadanie własnych class i metod, współpraca z generatorem kodów.

* testowanie plików
> Obsługiwane dwojako, z jednej strony chodzi o otwarcie go w przeglądarce dzięki grunt-watch, z drugiej testowanie jego działania dzięki unit-test

* generator kodów
> - pisanie kodu w polach, które wstawią go w odpowiednich miejscach widocznych na stronie, zestaw pól zmienia się w zależności od dołączonych bibliotek.
> - uruchomienie: w nowym oknie otwiera się efekt działania kodu.
> - testowanie przez możliwość napisania testu jednostkowego, który sprawdza działanie funkcji.
> - opis: Przy zapisywaniu wymagany opis. Dołączony będzie w formie phpDoc, dodatkowo można dodać opis do konkretnej linijki. Opisy można oddzielić od kodu przenosząc je do chmurek w postaci komentarzy po najechaniu myszką, choć można to połączyć. Poprawiać ma to przejrzystość, ale można użyć przy tworzeniu tutoriali dla społeczności.
> - zapisany kod jest dostępny w archiwum, historii operacji i przy wyszukiwaniu.

* przeglądanie bibliotek i przykłady użycia
> Upload i download bibliotek pozwala korzystać z nich w trybie off-line, przy dodawaniu można dodać opis z zaznaczonym adresem strony, adresem repozytorium, alternatywnym adresem biblioteki w chmurze.
> lista bibliotek pobierana z bazy albo fizycznie z dysku, możliwość konfiguracji w razie potrzeb. 
> Biblioteki nie są sztywno podłączane do przykładu, dlatego można je podmieniać dla testów lub łączyć przykłady korzystające z nich tworząc listę przykładów użycia z łatwym do wyizolowania kodem jednostkowym.

* szybkie przeglądanie archiwum kodów
> tablica z listą kodów opcjonalnie z Bazy danych, albo w pliku jako tablica asocjacyjna (archiwizacja w przypadku problemów z DB). Opcja wyszukiwania pod kątem nazwy, daty powstania/edycji, funkcjonalności, bibliotek, z których korzysta.

* historia operacji
> historia pozwalająca podejrzeć ile razy edytowany był plik, co robiliśmy, albo jakie zmiany wprowadziliśmy. Nie przewidziano możliwości cofnięcia działań automatycznie, ale zwiera dane, które taką funkcjonalność umożliwiają stworzyć.

* obsługa planowania działań i etapów realizacji
> narzędzie do planowania działań (do zrobienia, w realizacji, gotowe, zatwierdzone). Ułatwia organizację pracy i zamykanie zadań przed rozpoczęciem następnych. Opcjonalnie może pomagać przy pracy w zespole.

* Logowanie - trzy poziomy uprawnień
> Przy pracy w lokalnym środowisku wydaje się zbędna, ale pozwala przetestować działanie kodu i obsłużyć działanie przy zmianie uprawnień np. kiedy sesja wygasła i strona działa z użyciem ajaxa.

# Zadania:
- ocena zadań pod kątem priorytetów
- wybranie, które zadania będą wykonywać biblioteki, a które trzeba napisać
- wybranie standardów programowania
- stworzenie narzędzia do testów ( generator kodów )`
- stworzenie class basic do ładowania strony - ustawienia w pliku config
- ustawienia ładowane z pliku config
- wybór techniki przeglądania struktury katalogów (fizyczne, oparte o json, albo DB)
- zrzut do pliku struktury (archiwizacja)
- system szablonów
- zaprojektowanie struktury archiwum kodów
- przeglądanie, dodawanie, edytowanie wpisów (kody, notatki, testy, przykłady użycia)
- zabezpieczenie przed fizycznym usunięciem plików 
- historia operacji
- przegląd potrzeb i wyznaczenie zadań
- obsługa bibliotek
- obsługa archiwum kodów
- obsługa historii przeglądania
- obsługa planowania działań i etapów realizacji
- obsługa edycja plików
- obsługa testowania plików
- logowanie się do systemu i zmiana trybu pracy bez przeładowania strony
- opisanie uprawnień dla: nie zalogowany, bez uprawnień, z uprawnieniami


