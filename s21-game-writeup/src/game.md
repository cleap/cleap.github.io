# Game Demo

For this independent study, we made a short, _untitled_ game demo that puts
together a couple of the procedural content methods we worked on earlier in
the semester.

## Gameplay

The main objective of the game is to protect a walker while it goes from point
A to point B. 3 waves of colored boxes spawn on the map that attack both the
walker and the player. The player wins if they make it through the three
waves and loses if either the player or walker get to 0 health.

The player has a gun that they can shoot. When they shoot, the gun plays a
random note in the key of A minor. The player shooting forms a random melody.

During the first wave, the walker does not move. The enemies make a kick-drum
sound, but are not in beat with each other. Once the player clears the first
wave, the walker gets the 'kick-drum' ability and starts walking to a drum
beat.

During the second wave, the enemies make a bass noise and are a little faster
and have more health. After clearing the bass wave, the walker starts playing
a bass line in time with the drum beat.

In the third and final wave, the enemies make play higher pitched notes,
forming an off-beat lead. After clearing the final wave, the walker plays
chords to match the drum beat and bass line, completing the walker's song.

## Procedural elements

The player and the walker both use the procedurally animated legs from the
procedural animation section. The walker moves its legs to the down-beat of
the drum track, and the player moves its legs in sixteenth-notes.

The soundtrack of the game is all based on how many waves the player has
cleared, which enemies are currently active, and when the player shoots.

We hoped to use the procedural terrain generation from earlier in the semester,
but we ran out of time and used a premade level instead. In the future, we
plan on using procedurally-generated levels.

## Future work on the game

Our final game demo is only a small part of what we originally planned for the
game. In its current state, the game only has one song to play. We have written
more songs for the game and hope to add these to give the player a more diverse
playing experience. We also hope to incorporate procedural terrain generation
into the level design, as well as work more on the enemy design. We also want
to work more with tying together gameplay elements and the soundtrack, both
in how the gameplay affects the soundtrack and vice versa.
