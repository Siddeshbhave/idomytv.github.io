<!DOCTYPE html>
<html>
<head>
	<title>dropdown</title>
</head>

<style>
	.multiselect{
		width: 200px;
	}
	.selectBox{
		position: relative;
	}
	.selectBox select{
		width: 100%;
		font-weight: bold;
	}
	.overSelect{
		position: absolute;
		left: 0; right: 0; top: 0; bottom: 0;
	}
	#checkboxes{
		display: none;
		border: 1px #dadada solid;
	}
	#checkboxes lable{
		display: block;
	}
	#checkboxes lable:hover{
		background-color: #1e90ff;
	}
</style>

<body>

	<form>
		<div class="multiselect">
			<div class="selectbox" onclick="showCheckboxes()">
				<select>
					<option hidden="">Select Language</option>
				</select>
				<div class="overSelect"></div>
			</div>
			<div id="checkboxes">
				<label for="one"><input type="checkbox" name="" id="one"/>first</label>
				<label for="second"><input type="checkbox" name="" id="second"/>second</label>
				<label for="third"><input type="checkbox" name="" id="third"/>third</label>/
			</div>
			
		</div>
	</form>

	<script>
		var expanded = false;
		function showCheckboxes() {
			var checkboxes = document.getElementsById("checkboxes")
			if (!expanded) {
				checkboxes.style.display = "block";
				expanded = true;
			} else {
				checkboxes.style.display = "none";
				expanded = false;
			}
		}
	</script>

</body>
</html>