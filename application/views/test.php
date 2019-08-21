<?php

	// Nama-Nama Playlist
	$curl1 = curl_init();
	curl_setopt($curl1, CURLOPT_URL, "https://www.googleapis.com/youtube/v3/playlists?part=snippet&channelId=UCZ7jKdXo03nsKxUE4sxaXEQ&key=AIzaSyCHqjFbm2T1k1KKlaQLmwC4sKpIdYBht44");
	curl_setopt($curl1, CURLOPT_RETURNTRANSFER, 1);
	$result1 = curl_exec($curl1);
	curl_close($curl1);

	$result1 = json_decode($result1, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TEST API</title>
	<style>
		* {
			font-family: sans-serif;
		}
	</style>
</head>
<body>

	<!-- Menampilkan Nama Playlist -->
	<?php

		$jumlahPlaylist = $result1['pageInfo']['totalResults'];
		$urutanPlaylist = 0;
		while ($urutanPlaylist < $jumlahPlaylist) {

			$judulPlaylist = $result1['items'][$urutanPlaylist]['snippet']['title'];
			$idPlaylist = $result1['items'][$urutanPlaylist]['id'];

	?>

		<h1> <?= $judulPlaylist; ?> </h1>

		<!-- Menampilkan Video Playlist -->
		<?php

			$curl2 = curl_init();
			curl_setopt($curl2, CURLOPT_URL, "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&key=AIzaSyCHqjFbm2T1k1KKlaQLmwC4sKpIdYBht44&playlistId=" . $idPlaylist);
			curl_setopt($curl2, CURLOPT_RETURNTRANSFER, 1);
			$result2 = curl_exec($curl2);
			curl_close($curl2);

			$result2 = json_decode($result2, true);

			$jumlahVideoPlaylist = $result2['pageInfo']['totalResults'];
			$idVideoPlaylist = 0;

			while ($idVideoPlaylist < $jumlahVideoPlaylist) {

				$videoPlaylist = $result2['items'][$idVideoPlaylist]['snippet']['resourceId']['videoId'];

		?>

				<iframe width="320" height="240" src="https://youtube.com/embed/<?= $videoPlaylist; ?>?rel=0" frameborder="0" allowfullscreen></iframe>

		<?php

				$idVideoPlaylist++;
			}

		?>

	<?php

			$urutanPlaylist++;
		}

	?>

</body>
</html>