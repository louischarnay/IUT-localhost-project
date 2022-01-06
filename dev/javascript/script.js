document.getElementById('play-button').onclick = function(e){
    document.getElementById('pause-button').classList.remove("lecturePauseHidden")
    document.getElementById('pause-button').classList.add("lecturePauseVisible");
    document.getElementById('play-button').classList.remove("lecturePlayVisible")
    document.getElementById('play-button').classList.add("lecturePlayHidden");
}

document.getElementById('pause-button').onclick = function(e){
    document.getElementById('pause-button').classList.add("lecturePauseHidden")
    document.getElementById('pause-button').classList.remove("lecturePauseVisible");
    document.getElementById('play-button').classList.add("lecturePlayVisible")
    document.getElementById('play-button').classList.remove("lecturePlayHidden");
}