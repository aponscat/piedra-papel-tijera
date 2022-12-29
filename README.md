# Piedra-Papel-Tijera

Juego de Piedra-Papel-Tijera para uno o dos jugadores o simulación con dos jugadores de tipo CPU.

Para jugar se debe modificar el fichero play.php

Pasos:
Settear los nombres de los jugadores (opcional)
Settear el número de rondas (opcional, default 5)
- Escojer la estragegia de cada jugador, las opciones disponibles son:
  - HumanPlayer (permite introducir la jugada)
  - GuesserPlayer (trata de adivinar la jugada a partir del último movimiento del adversario)
  - RandomPlayer (siempre realiza tiradas random)
  - HalfGuesserHalfRandomPlayer (Random o Guesser con 50% de probabilidad)
  - PiedraPlayer (le gusta tirar siempre Piedra)

Ejecutar con:

```
php play.php
```