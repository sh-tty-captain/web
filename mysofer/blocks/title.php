<?php
switch($_SERVER['REQUEST_URI']) {
    case '/'                                    : $title = "Sofer STAM: Torah Scrolls, Teffilin, Mezuzot - Oraita, Inc"; break;
    case '/about/'                              : $title = "About Us"; break;
    case '/contacts/'                           : $title = "Contacts"; break;
    case '/torah-scrolls/'                      : $title = "Torah Scrolls"; break;
    case '/torah-scrolls/torah-sefer-scrolls/'  : $title = "Sefer Torah"; break;
    case '/tefillin/'                           : $title = "Tefillin"; break;
    case '/mezuzahs/'                           : $title = "Mezuzahs"; break;
    case '/mezuzahs/mezuzah-cases/'             : $title = "Mezuzah Cases"; break;
    case '/mezuzahs/mezuzah-parchments/'        : $title = "Mezuzah Parchments"; break;
    default                                     : $title = "Sofer STAM: Torah Scrolls, Teffilin, Mezuzot - Oraita, Inc";
}
?>