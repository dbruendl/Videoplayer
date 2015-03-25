<?php
interface IUser {
	public function createPlaylist($playlistname);
	public function deletePlaylist($playlistname);
	public function getPlaylist($playlisntame);
}
?>