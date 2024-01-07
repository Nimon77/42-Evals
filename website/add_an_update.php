<?php
require("utils/check_session.php");
require("utils/show_popup.php");
require("utils/menu.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta content="IE=Edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta
		content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0"
		name="viewport">
	<title>42 Evals - Adding an update</title>
	<link rel="shortcut icon" href="assets/favicons/favicon_no-bg.ico" type="image/x-icon">
	<link rel="stylesheet" media="all" href="css/styles.css">
	<link rel="manifest" href="./manifest.json">
	<script src="js/js"></script>
	<script src="js/main.js"></script>
	<script src="js/script.js"></script>
</head>

<body>
	<script>
		if ('serviceWorker' in navigator) {
			navigator.serviceWorker.register('js/service-worker.js')
				.then(function (registration) {
					console.log('Service Worker registered successfully:', registration);
				})
				.catch(function (error) {
					console.log('Service Worker registration failed:', error);
				});
		}
	</script>
	<?php require("utils/header.php"); ?>
	<div class="container-item scale-team-container">
		<div class="row mt-4">
			<div class="scale-section-infos col-sm-12 scale-div">
				<h3 class="font-weight-bold text-uppercase text-center mt-4 pt-4">Sorry this page is not available yet.</h3>
				<div class="p-0 scale-introduction dancer from-down" id="introduction">
					<p>Sorry this page is not available yet.</p>
					<p>Check back later or help me by adding it below.</p>
					<p>In construction, please do not use this form yet...</p>
				</div>
				<div class="container">
					<form action="utils/add_form.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="login42">42 Login (optional):</label>
							<input type="text" class="form-control" id="login42" name="login42">
						</div>
						<div class="form-group">
							<label for="customMessage">Custom Message (optional):</label>
							<textarea class="form-control" id="customMessage" name="customMessage"></textarea>
						</div>
						<div class="form-group">
							<label for="fileUpload">File (required):</label>
							<input type="file" class="form-control-file" id="fileUpload" name="fileUpload" accept=".html,.php,.txt" required>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
</body>

</html>