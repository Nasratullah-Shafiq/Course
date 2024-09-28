const musicContainer = ducument.querySelector('.music-container');
const playBtn = document.querySelector('#play');
const prevBtn = document.querySelector('#prev');
const nextBtn = document.querySelector('#next');
const audio = document.querySelector('#audio');
const progress = document.querySelector('.progress');
const progressContainer = document.querySelector('.progress-container');
const title = document.querySelector('#title');
const cover = document.querySelector('#cover');

const songs = ['7174', '16186', '7174']

let songIndex = 2

loadSong(songs[songIndex])

function loadSong(song){
	title.innerText = song
	audio.src = 'Assets/Audio/${song}.mp3'
	cover.src = 'Assets/img/${song}.jpg'
}

function playSong(){
	musicContainer.classList.add('play');
	playBtn.querySelector('i.fa').classList.remove('fa-play')
	playBtn.querySelector('i.fa').classList.add('fa-pause')

}
function pauseSong(){}
//Event listener
playBtn.addEventListener('click',()=>{
	const isPlaying = musicContainer.classList.contains('play')	

	if(isPlaying){
		pauseSong()
	}
	else{
		playSong()
	}
})