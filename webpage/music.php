<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Music Viewer</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link href="viewer.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="header">

			<h1>190M Music Playlist Viewer</h1>
			<h2>Search Through Your Playlists & Music</h2>
		</div>


		<div id="listarea">
			<ul id="musiclist">
				<li class="mp3item">
					<a href="songs/Be More.mp3">Be More.mp3</a>
					<?php 
					function Filesizefunc ($filesizevar){
					if ($filesizevar<1023){
						print '('.round ($filesizevar,2).'bytes' ; }
						elseif ($filesizevar>1024 && $filesizevar<1048575) {
							print '('.round($filesizevar/1024,2).'kb';
						}
							elseif($filesizevar>1048575){
								print '('.round($filesizevar/1048576,2).'mb';
							}
					}
					$filesizevarglob = filesize('songs/Be More.mp3');
					Filesizefunc($filesizevarglob);
						  ?>)
				</li>

				<li class="mp3item">
					<a href="songs/Drift Away.mp3">Drift Away.mp3</a>
					<?php $filesizeglobal1 = filesize('songs/Drift Away.mp3');
					Filesizefunc($filesizeglobal1); ?>)
				</li>

				<li class="mp3item">
					<a href="songs/Hello.mp3">Hello.mp3</a>
					<?php $filesizeglobal1 = filesize('songs/Hello.mp3');
					Filesizefunc($filesizeglobal1); ?>)
				</li>

				<li class="mp3item">
					<a href="songs/Panda Sneeze.mp3">Panda Sneeze.mp3</a>
					<?php $filesizeglobal1 = filesize('songs/Panda Sneeze.mp3');
					Filesizefunc($filesizeglobal1); ?>)
				</li>

				<li class="mp3item">
					<a href="songs/190M rap.mp3">190M rap.mp3</a>
					<?php $filesizeglobal1 = filesize('songs/190M rap.mp3');
					Filesizefunc($filesizeglobal1); ?>)
				</li>

				<li class="mp3item">
					<a href="songs/Just Because.mp3">Just Because.mp3</a>
					<?php $filesizeglobal1 = filesize('songs/Just Because.mp3');
					Filesizefunc($filesizeglobal1); ?>)
				</li>

				<?php $dir = glob("songs/*.txt");?>

				<li class="playlistitem">
					<a href="<?php $dir[0]; ?>"><?php print basename($dir[0]); ?></a>
				</li>

				<li class="playlistitem">
					<a href="<?php $dir[1]; ?>"><?php print basename($dir[1]); ?></a>
				</li>

				<li class="playlistitem">
					<a href="<?php $dir[2]; ?>"><?php print basename($dir[2]); ?></a>
				</li> 

			</ul>
		</div>
	</body>
</html>
