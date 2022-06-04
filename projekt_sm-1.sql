-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Maj 2022, 19:04
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt_sm`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `interfejsy`
--

CREATE TABLE `interfejsy` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `interfejsy`
--

INSERT INTO `interfejsy` (`id`, `nazwa`) VALUES
(1, 'I2C'),
(2, 'UART'),
(3, '1WIRE'),
(4, 'CANBUS'),
(5, 'LINBUS'),
(6, 'SPI');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `opisy`
--

CREATE TABLE `opisy` (
  `id` int(11) NOT NULL,
  `id_interfejsu` int(11) NOT NULL,
  `nazwa` varchar(30) NOT NULL,
  `opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `opisy`
--

INSERT INTO `opisy` (`id`, `id_interfejsu`, `nazwa`, `opis`) VALUES
(1, 1, 'I²C', 'I²C – szeregowa, dwukierunkowa magistrala służąca do przesyłania danych w urządzeniach elektronicznych. Została opracowana przez przedsiębiorstwo Philips na początku lat 80. Znana również pod akronimem IIC, którego angielskie rozwinięcie Inter-Integrated Circuit oznacza „pośrednik pomiędzy układami scalonymi”. Standard I²C określa dwie najniższe warstwy modelu odniesienia OSI: warstwę fizyczną i warstwę łącza danych.'),
(2, 2, 'UART', 'UART, czyli Universal Asynchronous Receiver and Transmitter, to urządzenie w postaci układu scalonego, którego zadaniem jest zapewnienie komunikacji, w formie asynchronicznego przekazu i odbioru danych, za pośrednictwem portu szeregowego.\r\n\r\nBudowa tego typu układu przewiduje zastosowanie dwóch konwerterów: równoległo-szeregowego, czyli parallel-to-serial, oraz szeregowo-równoległego, czyli serial-to-parallel. Pierwszy z nich odpowiada za konwersję danych pochodzących z komputera, natomiast drugi – za konwersję danych wysyłanych do komputera przez urządzenia peryferyjne. Szybka transmisja danych wymaga gromadzenia informacji w trybie tymczasowym. Aby w takim przypadku mogła zostać zachowana ciągłość transferu, stosowany jest tzw. bufor.\r\n\r\nTo bardzo ogólna definicja, która jednak w sposób odpowiedni określa rolę układów UART. Nie znaczy to natomiast, że tego rodzaju urządzenia występują wyłącznie w jednym wariancie. Bogata oferta hurtowni Micros doskonale obrazuje rozpiętość tego segmentu.'),
(3, 3, 'opis', 'opis 1WIRE'),
(4, 4, 'opis', 'opis CANBUS'),
(5, 5, 'opis', 'opis LINBUS'),
(6, 6, 'opis', 'opis SPI'),
(7, 1, 'Historia', 'Standard został opracowany na początku lat 80. (określany obecnie jako tryb standardowy pracy) i cechowały go:\r\n-prędkość transmisji 100 kbps\r\n-7-bitowa przestrzeń adresowa\r\n\r\nW 1992 roku została opracowana wersja 1.0 standardu, która wprowadzała następujące zmiany:\r\n-dodanie trybu pracy z prędkością transmisji 400 kbps (Fast Mode)\r\n-rozszerzenie standardu o możliwość adresowania 10-bitowego\r\n\r\nW 1998 roku opracowana została wersja 2.0:\r\n-dodanie trybu High Speed Mode, pozwalającego na prędkość transmisji 3,4 Mbps\r\n-zwiększenie zakresu tolerancji napięcia w stanie wysokim: 2,3 – 5,5 V\r\n\r\nW 2000 roku powstała wersja 2.1, wprowadzająca drobne zmiany. W 2007 opracowana została wersja 3.0, w której wprowadzono m.in. mechanizm identyfikacji urządzenia. W wersji 7 zmieniono terminy \"master/slave\" na \"controller/target\" w celu dostosowania do specyfikacji magistrali I3C.'),
(8, 1, 'Warstwa fizyczna', 'I²C do transmisji wykorzystuje dwie dwukierunkowe linie: SDA – linia danych (ang. Serial Data Line) i SCL – linia zegara (ang. Serial Clock Line). Obydwie linie są na stałe podciągnięte do źródła zasilania poprzez rezystory podciągające (ang. pull-up). I²C używa logiki dodatniej, a więc stan niski na magistrali odpowiada „0” logicznemu, natomiast stan wysoki „1” logicznej. \r\n\r\nWszystkie nadajniki są typu otwarty kolektor lub otwarty dren, a więc na liniach występuje tzw. iloczyn na drucie („1” jest recesywna, a „0” dominujące). Pozwala to na wykrywanie kolizji. Każde urządzenie nadając „1” jednocześnie sprawdza, czy na magistrali rzeczywiście pojawił się stan wysoki. Jeżeli tak nie jest, oznacza to, iż inne urządzenie nadaje w tym samym czasie i urządzenie zaprzestaje nadawania.\r\n\r\nPodstawowa wersja I²C zakłada istnienie tylko jednego urządzenia, które może inicjować transmisję (master), ale dzięki istnieniu mechanizmu detekcji kolizji, możliwa jest praca w trybie multi-master. Ponieważ dane nadawane są w kolejności od najstarszego bitu do najmłodszego, w przypadku jednoczesnego nadawania, urządzenie nadające adres o wyższym numerze wycofa się pierwsze, co wynika z binarnego sposobu zapisywania liczb. Występuje tu zatem arbitraż ze stałym przydziałem priorytetów, określonym przez adres urządzenia typu slave. Urządzenia o niższych adresach mają wyższy priorytet od urządzeń o adresach wyższych.\r\n\r\nZmiana na linii danych podczas transmisji może następować jedynie, gdy linia zegara znajduje się w stanie niskim. Nie dotyczy to specjalnych sytuacji: bitu startu i bitu stopu. Bit startu ma miejsce, gdy linia danych zmienia swój stan z „1” na „0”, podczas wysokiego stanu linii zegara, co ma miejsce w momencie rozpoczynania każdej transmisji danych. Po zakończeniu transmisji generowany jest bit stopu, czyli przejście linii danych w stan wysoki przy wysokim stanie linii zegara.\r\n\r\nStandard zakłada magistralowe połączenie urządzeń. Długość linii ograniczona jest jedynie jej maksymalną pojemnością, która wynosi 400 pF, co w praktyce ogranicza długość do kilku metrów. '),
(9, 1, 'Warstwa łącza danych', 'I²C jest magistralą zorientowaną bajtowo, a więc bity grupowane są po 8. Dane są wysyłane w kolejności od najbardziej znaczącego bitu do najmniej znaczącego. Po przesłaniu 8 bitów w jednym kierunku, przesyłany jest dodatkowy bit potwierdzenia odebrania danych ACK (lub NACK w przypadku braku potwierdzenia) w kierunku przeciwnym.\r\n\r\nPierwszym bajtem jest zawsze nadawany przez urządzenie master adres urządzenia slave, który oprócz 7 bitów właściwego adresu zawiera bit kierunku transmisji na najmłodszej pozycji. Wartość „0” tego bitu oznacza transmisję od mastera do slave’a (zapis), podczas gdy wartość „1” kierunek przeciwny (odczyt). Po pierwszym bajcie przesyłane zostają dane.\r\n\r\nOpracowany na początku lat 80. standard zakładał 7-bitową przestrzeń adresową, czyli możliwość zaadresowania do 128 urządzeń. W praktyce część adresów jest zarezerwowana, pozostawiając do dyspozycji 112 wartości. Jednym z zarezerwowanych adresów jest tzw. General call (adres 0), który powoduje wysłanie danych do wszystkich urządzeń podłączonych do magistrali.\r\n\r\nWersja 1.0 magistrali pozwala na adresowanie 10-bitowe. W takim przypadku pierwszy przesyłany bajt zawiera 5 z góry ustalonych bitów (11110) oraz dwa najstarsze bity adresu 10-bitowego, drugi bajt zawiera pozostałe 8 bitów adresu. Potem następuje normalna transmisja danych.'),
(10, 1, 'Zastosowania', 'I²C stosuje się w przypadkach, gdy prostota i niski koszt są ważniejsze od wysokich prędkości transmisji. Znalazło ono zastosowanie m.in. w: Odczytywaniu zegarów czasu rzeczywistego (RTC) w komputerach i urządzeniach wbudowanych; Komunikacji z prostymi i wolnymi przetwornikami cyfrowo-analogowymi i analogowo-cyfrowymi; Odczycie czujników diagnostycznych w komputerze (prędkość obrotu wentylatorów, temperatury procesora i ważniejszych układów na płycie głównej); Robotyce (czujniki przyspieszenia i odległości); Komunikacja z czujnikami i elementami wykonawczymi w małych systemach wbudowanych; Dostępie do pamięci NVRAM komputera; Sterowanie diodami LED w urządzeniach przenośnych (np. komórkach); Komunikacji pomiędzy układami w telewizorach i innym sprzęcie RTV (jest to pierwotne miejsce zastosowania magistrali I²C).'),
(11, 2, 'Zasada działania interfejsu', 'Transmisję informacji złączem szeregowym inicjuje tzw. bit startowy. W każdym przypadku jest to logiczne zero. W dalszej kolejności przesłana zostaje informacja w postaci 7, 8 lub 9 kolejnych bitów (w zależności od ustalonej konfiguracji urządzenia). Za zakończenie transmisji odpowiedzialny jest tzw. bit stopu, który zawsze jest równy logicznej jedynce. Całość tworzy tzw. ramkę UART, która zawiera w sobie kompletną informację.\r\n\r\nNazwa UART bardzo często jest stosowana zamiennie z określeniem USART (Universal Synchronous and Asynchronous Receiver and Transmitter). USART to nic innego, jak dwustronny interfejs komunikacyjny, który pozwala na pracę w trybie synchronicznym i asynchronicznym. Można zatem stwoerdzić, że każdy USART może zastąpić UART, ale nie każdy UART będzie mógł być stosowany w zamian za USART. Mówimy tu zatem o rozwinięciu protokołu asynchronicznego, który jednak zachowuje kompatybilność wsteczną. Oba wymienione rozwiązania mogą służyć nawiązaniu komunikacji za pośrednictwem RS232 (port COM lub specjalne konwertery standardu USB).');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pytania`
--

CREATE TABLE `pytania` (
  `id` int(11) NOT NULL,
  `pytanie` text NOT NULL,
  `odp1` text NOT NULL,
  `odp2` text NOT NULL,
  `odp3` text NOT NULL,
  `odp4` text NOT NULL,
  `popr_odp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pytania`
--

INSERT INTO `pytania` (`id`, `pytanie`, `odp1`, `odp2`, `odp3`, `odp4`, `popr_odp`) VALUES
(1, 'pytanie 1', 'a', 'b', 'c', 'd', 'a'),
(2, 'pytanie 2', 'a', 'b', 'c', 'd', 'c');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rysunki`
--

CREATE TABLE `rysunki` (
  `id` int(11) NOT NULL,
  `id_interfejsu` int(11) NOT NULL,
  `nazwa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `rysunki`
--

INSERT INTO `rysunki` (`id`, `id_interfejsu`, `nazwa`) VALUES
(1, 1, 'i2c'),
(2, 1, 'i2c_warstwa_fizyczna.png'),
(3, 2, 'uart'),
(4, 2, 'uart_hardware.png'),
(5, 2, 'uart_ramka_danych');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `id_interfejsu` int(11) NOT NULL,
  `nazwa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `video`
--

INSERT INTO `video` (`id`, `id_interfejsu`, `nazwa`) VALUES
(1, 1, '//www.youtube.com/embed/lUULu8sfdI8'),
(2, 1, '//www.youtube.com/embed/6IAkYpmA1DQ'),
(3, 2, '//www.youtube.com/embed/sTHckUyxwp8'),
(4, 2, '//www.youtube.com/embed/V6m2skVlsQI');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `interfejsy`
--
ALTER TABLE `interfejsy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `opisy`
--
ALTER TABLE `opisy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_interfejsu` (`id_interfejsu`);

--
-- Indeksy dla tabeli `pytania`
--
ALTER TABLE `pytania`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `rysunki`
--
ALTER TABLE `rysunki`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_interfejsu` (`id_interfejsu`);

--
-- Indeksy dla tabeli `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_interfejsu` (`id_interfejsu`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `interfejsy`
--
ALTER TABLE `interfejsy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `opisy`
--
ALTER TABLE `opisy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `rysunki`
--
ALTER TABLE `rysunki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `opisy`
--
ALTER TABLE `opisy`
  ADD CONSTRAINT `opisy_ibfk_1` FOREIGN KEY (`id_interfejsu`) REFERENCES `interfejsy` (`id`);

--
-- Ograniczenia dla tabeli `rysunki`
--
ALTER TABLE `rysunki`
  ADD CONSTRAINT `rysunki_ibfk_1` FOREIGN KEY (`id_interfejsu`) REFERENCES `interfejsy` (`id`);

--
-- Ograniczenia dla tabeli `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`id_interfejsu`) REFERENCES `interfejsy` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
