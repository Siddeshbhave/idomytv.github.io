<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<select>
  <option hidden="">Select audio to play</option>
  <option value="">English</option>
  <option value="">Hindi</option>
  <option value="">Marathi</option>
  
</select>
<br>
<audio id="audio4" controls>
<source id="audioSourceAside">
</audio>
<script>
var select = document.querySelector("select");
var audio = document.querySelector("audio");
var source = audio.querySelector("source");
select.onchange = function() {
  audio.pause();
  source.src = this.value;
  audio.load();
  audio.play();
}
</script>
</body>
</html>