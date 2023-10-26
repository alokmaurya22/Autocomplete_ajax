<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Autocomplete through ajax</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	
	<table width="100%" class="table table-bordered">
	<h3>Related Option will be seen only when you enter the keyword  and  blank will be submit</h3>
		<tr class="table-secondary">
			<th width="15%">Previous University</th>
			<style>
									ul{
										margin:0;
										padding:0;
									}
									.frmSearch {
										background-color: #c6f7d0;
										
										border-radius: 4px;
									}

									#prev_uni {
										width: 450px;
									}

									#prev_uni li {
										padding:0.4rem;
										background: yellow;
										border-bottom: #bbb9b9 1px solid;
									}

									#prev_uni li:hover {
										background: #ece3d2;
										cursor: pointer;
									}

									#search-box1, #prev_uni {
										margin:0;
										
										border: #a8d4b1 1px solid;
										border-radius: 4px;
									}
									#a_suggesstion-box{
										width:450px;
										height:450px;
										position:absolute;
										overflow-y:auto;
										z-index:10;
										
									}

								</style>
			<th width="15%">
				<div class="frmSearch">
					<input type="text" class="form-control" name="prev_uni" id="prev_uni" placeholder="University Name" required />
					<div id="a_suggesstion-box"></div>
					<script>
						function select_prev_uni(val) {
							console.log(val);
							$("#prev_uni").val(val);
							$("#a_suggesstion-box").hide();
						}
					</script>
				</div>
			</th>
			<th width="60%"><input type="submit" class="btn btn-primary" name="submit" id="submit" value="submit"/></th>
		</tr>
		
	</table>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
	$(document).ready(function() {
		$("#prev_uni").keyup(function() {
			$.ajax({
				type: "GET",
				url: "testing_autocomplete_university1.php",
				data: 'prev_uni_keyword=' + $(this).val(),
				beforeSend: function() {
					$("#prev_uni").css("background", "#FFF url(LoaderIcon.gif) no-repeat 165px");
				},
				success: function(data) {
					$("#a_suggesstion-box").show();
					$("#a_suggesstion-box").html(data);
					$("#prev_uni").css("background", "#FFF");
				}
			});
		});
	});
	</script>
  </body>
</html>