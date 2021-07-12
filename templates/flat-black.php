<div id="flat-black-player-container">
	<div id="list-screen" class="slide-in-top">
		<div id="list-screen-header" class="hide-playlist">
			<img id="up-arrow" src="<?php echo esc_url( plugins_url( 'assets/img/up.svg', AIO_MUSIC_PLAYER ) ); ?> "/>
			<?php esc_html_e( 'Hide Playlist', 'all-in-one-music-player' ); ?>
		</div>

		<div id="list">
			<?php

			foreach ( $songs as $key => $song ) {
				?>
					<div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="<?php echo absint( $key ); ?>">
						<span class="song-number-now-playing">
							<span class="number"><?php echo absint( $key ) + 1; ?></span>
							<img class="now-playing" src="<?php echo esc_url( plugins_url( 'assets/img/now-playing.svg', AIO_MUSIC_PLAYER ) ); ?> "/>
						</span>

						<div class="song-meta-container">
							<span class="song-name" data-amplitude-song-info="name" data-amplitude-song-index="<?php echo absint( $key ); ?>"></span>
							<span class="song-artist-album">
								<span data-amplitude-song-info="artist" data-amplitude-song-index="<?php echo absint( $key ); ?>"></span>
								<span data-amplitude-song-info="album" data-amplitude-song-index="<?php echo absint( $key ); ?>"></span>
							</span>
						</div>

						<span class="song-duration">
							<?php echo esc_html( $song['length'] ); ?>
						<span>
					</div>
				<?php
			}//end foreach
			?>
		</div>

		<div id="list-screen-footer">
			<div id="list-screen-meta-container">
				<span data-amplitude-song-info="name" class="song-name"></span>

				<div class="song-artist-album">
					<span data-amplitude-song-info="artist"></span>
				</div>
			</div>
			<div class="list-controls">
				<div class="list-previous amplitude-prev"></div>
				<div class="list-play-pause amplitude-play-pause"></div>
				<div class="list-next amplitude-next"></div>
			</div>
		</div>

	</div>
	<!-- List Screen End -->

	<div id="player-screen">
		<div class="player-header down-header">
			<img id="down" src="<?php echo esc_url( plugins_url( 'assets/img/down.svg', AIO_MUSIC_PLAYER ) ); ?>"/>
			<?php esc_html_e( 'Show Playlist', 'all-in-one-music-player' ); ?>
		</div>

		<div id="player-top">
			<img data-amplitude-song-info="cover_art_url"/>
		</div>

		<div id="player-progress-bar-container">
			<progress id="song-played-progress" class="amplitude-song-played-progress"></progress>
			<progress id="song-buffered-progress" class="amplitude-buffered-progress" value="0"></progress>
		</div>

		<div id="player-middle">
			<div id="time-container">
				<span class="amplitude-current-time time-container"></span>
				<span class="amplitude-duration-time time-container"></span>
			</div>

			<div id="meta-container">
				<span data-amplitude-song-info="name" class="song-name"></span>

				<div class="song-artist-album">
					<span data-amplitude-song-info="artist"></span>
				</div>
			</div>
		</div>

		<div id="player-bottom">
			<div id="control-container">

				<div id="shuffle-container">
					<div class="amplitude-shuffle amplitude-shuffle-off" id="shuffle"></div>
				</div>

				<div id="prev-container">
					<div class="amplitude-prev" id="previous"></div>
				</div>

				<div id="play-pause-container">
					<div class="amplitude-play-pause" id="play-pause"></div>
				</div>

				<div id="next-container">
					<div class="amplitude-next" id="next"></div>
				</div>

				<div id="repeat-container">
					<div class="amplitude-repeat" id="repeat"></div>
				</div>
			</div>
			<!-- PLayer Bottom End -->

			<div id="volume-container">
				<!--   <img src="https://example.com/images/volume-control.jpg"/><input type="range" class="amplitude-volume-slider" step=".1"/> -->
			</div>
		</div>
	</div>
	<!-- Player Screen End -->
</div>
<!-- Flat Black Player Container End -->
