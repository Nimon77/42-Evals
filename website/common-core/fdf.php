<?php
define('PATH', '../');
require(PATH . "utils/check_session.php");
require(PATH . "utils/show_popup.php");
require(PATH . "utils/menu.php");
?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<meta
		content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0"
		name="viewport">
	<title>FdF correction</title>
	<link rel="shortcut icon" href="<?php echo PATH; ?>assets/favicons/favicon_no-bg.ico"
		type="image/x-icon">
	<link href="<?php echo PATH; ?>css/styles.css" media="all" rel="stylesheet" />
	<link rel="manifest" href="<?php echo PATH; ?>manifest.json">
	<script src="<?php echo PATH; ?>js/script.js"></script>
	<script src="<?php echo PATH; ?>js/js"></script>
	<script src="<?php echo PATH; ?>js/main.js"></script>
</head>

<body>
	<script>
		if ('serviceWorker' in navigator) {
			navigator.serviceWorker.register('<?php echo PATH; ?>js/service-worker.js')
				.then(function (registration) {
					console.log('Service Worker registered successfully:', registration);
				})
				.catch(function (error) {
					console.log('Service Worker registration failed:', error);
				});
		}
	</script>
	<?php require(PATH . "utils/header.php"); ?>
	<div class="container-item scale-team-container">
		<div class="row mt-4">
			<div class="scale-section-infos col-sm-12 scale-div">
				<h3 class="font-weight-bold text-uppercase text-center mt-4 pt-4">
					<br />Scale for project

					<a target="_blank" href="https://projects.intra.42.fr/projects/42cursus-fdf">FdF</a>
				</h3>
				<h5 class="text-muted text-center">You should evaluate 1 student in this team</h5>
				<hr>
				<div class="p-0 scale-introduction dancer from-down" id="introduction-24643">
					<h3 class="font-weight-bold mb-1">Introduction</h3>
					<p>
						Please comply with the following rules:<br><br>- Remain polite, courteous, respectful and
						constructive
						throughout the <br> evaluation process. The well-being of the community depends on it.<br><br>-
						Identify with the student or group whose work is evaluated the possible <br> dysfunctions in
						their
						project. Take the time to discuss and debate the <br> problems that may have been
						identified.<br><br>-
						You must consider that there might be some differences in how your peers <br> might have
						understood
						the project's instructions and the scope of its <br> functionalities. Always keep an open mind
						and
						grade them as honestly as <br> possible. The pedagogy is useful only and only if the
						peer-evaluation
						is <br> done seriously.<br>
					</p>
				</div>
				<div class="p-0 scale-guidelines dancer from-down" id="guidelines-24643">
					<h3 class="font-weight-bold mb-1">Guidelines</h3>
					<p>
						- Only grade the work that was turned in the Git repository of the evaluated <br> student or
						group.<br><br>- Double-check that the Git repository belongs to the student(s). Ensure that <br>
						the
						project is the one expected. Also, check that 'git clone' is used in an <br> empty
						folder.<br><br>-
						Check carefully that no malicious aliases was used to fool you and make you <br> evaluate
						something
						that is not the content of the official repository.<br><br>- To avoid any surprises and if
						applicable,
						review together any scripts used <br> to facilitate the grading (scripts for testing or
						automation).<br><br>- If you have not completed the assignment you are going to evaluate, you
						have
						<br> to read the entire subject prior to starting the evaluation process.<br><br>- Use the
						available
						flags to report an empty repository, a non-functioning <br> program, a Norm error, cheating, and
						so
						forth. <br> In these cases, the evaluation process ends and the final grade is 0, <br> or -42 in
						case
						of cheating. However, except for cheating, student are <br> strongly encouraged to review
						together the
						work that was turned in, in order <br> to identify any mistakes that shouldn't be repeated in
						the
						future.<br><br>- You must also verify the absence of memory leaks. Any memory allocated on <br>
						the
						heap must be properly freed before the end of execution. <br> You are allowed to use any of the
						different tools available on the computer, <br> such as leaks, valgrind, or e_fence. In case of
						memory
						leaks, tick the <br> appropriate flag.<br>
					</p>
				</div>

				<hr>
				<div class="dancer from-down" id="attachments-24643">
					<h3 class="font-weight-bold mb-1">Attachments</h3>
					<div class="project-attachments-list">
					</div>

					<div class="project-attachments-list">
						<div class="project-attachment-item">
							<h4 class="attachment-name">
								<span class="icon-note-paper-2"></span>
								<a target="_blank" href="https://github.com/rphlr/42-Subjects/">subject.pdf</a>
							</h4>
						</div>
						<div class="project-attachment-item">
							<h4 class="attachment-name">
								<span class="icon-file"></span>
								<a target="_blank"
									href="https://cdn.intra.42.fr/document/document/17596/maps.zip">maps.zip</a>
							</h4>
						</div>
						<div class="project-attachment-item">
							<h4 class="attachment-name">
								<span class="icon-file"></span>
								<a target="_blank"
									href="https://cdn.intra.42.fr/document/document/17597/fdf_linux">fdf_linux</a>
							</h4>
						</div>
						<div class="project-attachment-item">
							<h4 class="attachment-name">
								<span class="icon-file"></span>
								<a target="_blank"
									href="https://cdn.intra.42.fr/document/document/17598/minilibx_mms_20191025_beta.tgz">minilibx_mms_20191025_beta.tgz</a>
							</h4>
						</div>
						<div class="project-attachment-item">
							<h4 class="attachment-name">
								<span class="icon-file"></span>
								<a target="_blank"
									href="https://cdn.intra.42.fr/document/document/17599/minilibx-linux.tgz">minilibx-linux.tgz</a>
							</h4>
						</div>
						<div class="project-attachment-item">
							<h4 class="attachment-name">
								<span class="icon-file"></span>
								<a target="_blank"
									href="https://cdn.intra.42.fr/document/document/17600/minilibx_macos_sierra_20161017.tgz">minilibx_macos_sierra_20161017.tgz</a>
							</h4>
						</div>
						<div class="project-attachment-item">
							<h4 class="attachment-name">
								<span class="icon-file"></span>
								<a target="_blank"
									href="https://cdn.intra.42.fr/document/document/17601/sources.tgz">sources.tgz</a>
							</h4>
						</div>
						<div class="project-attachment-item">
							<h4 class="attachment-name">
								<span class="icon-file"></span>
								<a target="_blank" href="https://cdn.intra.42.fr/document/document/17602/fdf">fdf</a>
							</h4>
						</div>
					</div>

				</div>

			</div>
			<form class="simple_form form-horizontal" novalidate="novalidate" id="edit_scale_team_5587653"
				action="https://projects.intra.42.fr/projects/42cursus-fdf/project_sessions/6009/evaluations/3761/scales/24643/scale_teams/5587653"
				accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden"
					name="_method" value="patch"><input type="hidden" name="authenticity_token"
					value="7H/EuxLVFHEyOOr5VOx/hDhilY7NCuW4O0H26dctTou+UgfXopleIRirRTJ8V6E+uNiqtlLLH+zioV8ZWnSBTA==">
				<div class="scale-section-answers col-sm-12 scale-div">
					<section class="scale-section-item dancer from-down" id="section-69344">
						<div class="section-header">
							<h3 class="font-weight-bold mb-1">Preliminary tests</h3>
							<p class="font-italic"></p>
						</div>
						<h4 class="scale-question-name">Minimal requirements</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Does the assignment meet the minimal requirements?</p>

						<ul>
							<li>The repository isn't empty.</li>
							<li>Norminette shows no errors.</li>
							<li>No cheating.</li>
							<li>No forbidden function/library.</li>
							<li>The code compiles with the required options.</li>
							<li>The executable is named as expected.</li>
							<li>During execution, there is no brutal or unmanaged crash (segfault,
								bus error, and so forth).</li>
							<li>No memory leaks.</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][0][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234718"
										name="[scale_team][answers_attributes][0][question_id]" type="hidden"
										id="scale_team_answer_question_id"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][0][value]"
									id="radio_[scale_team][answers_attributes][0]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][0]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][0][value]"
									id="radio_[scale_team][answers_attributes][0]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][0]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
					</section>
					<section class="scale-section-item dancer from-down" id="section-69345">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">Mandatory part</h3>
							<p class="font-italic"></p>
						</div>
						<h4 class="scale-question-name">Error management</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Test fdf without parameters, with too many parameters, a non-existing <br>
							file or on which you have no rights. If those tests are passed, then it's <br>
							all good. This is the only error management that is required. For now on, <br>
							the maps inside the input files have to be formatted properly.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][1][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234719"
										name="[scale_team][answers_attributes][1][question_id]" type="hidden"
										id="scale_team_answer_question_id"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][1][value]"
									id="radio_[scale_team][answers_attributes][1]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][1]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][1][value]"
									id="radio_[scale_team][answers_attributes][1]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][1]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Graphic management</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Run the program with the 42 map provided from the project page and verify that:</p>

						<ul>
							<li>A window opens</li>
							<li>Something is drawn in the window</li>
							<li>You can see a isometric projection of the 42 map</li>
							<li>Pressing 'ESC' closes the window and exits the program in a clean way (no leaks).</li>
							<li>Clicking on the cross on the window's frame closes the window and exits
								the program in a clean way (no leaks).</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][2][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234720"
										name="[scale_team][answers_attributes][2][question_id]" type="hidden"
										id="scale_team_answer_question_id"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][2][value]"
									id="radio_[scale_team][answers_attributes][2]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][2]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][2][value]"
									id="radio_[scale_team][answers_attributes][2]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][2]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Line tracing</h4>
						<p class="scale-section-guidelines">
						</p>
						<ul>
							<li>Use a flat map with nothing but 0, sized 4x4. We have a flat
								wireframe grid with a projection that is used to give a 3D concept.</li>
							<li>Same map, with 1 point at a different altitude. Check that the
								result corresponds and that the 3D effect is rendered.</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][3][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234721"
										name="[scale_team][answers_attributes][3][question_id]" type="hidden"
										id="scale_team_answer_question_id"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][3][value]"
									id="radio_[scale_team][answers_attributes][3]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][3]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][3][value]"
									id="radio_[scale_team][answers_attributes][3]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][3]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Heavy map</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Check whether the program handles a bigger map and an aleatory 16x16 map.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][4][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234722"
										name="[scale_team][answers_attributes][4][question_id]" type="hidden"
										id="scale_team_answer_question_id"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][4][value]"
									id="radio_[scale_team][answers_attributes][4]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][4]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][4][value]"
									id="radio_[scale_team][answers_attributes][4]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][4]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Heavier map</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Test with bigger, heavier maps. Either those provided in the intranet, the <br>
							evaluated student, or your owns. Be logical and keep in mind the <br>
							requirements of the subject regarding what could contain your maps (colors <br>
							for example).</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][5][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234723"
										name="[scale_team][answers_attributes][5][question_id]" type="hidden"
										id="scale_team_answer_question_id"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][5][value]"
									id="radio_[scale_team][answers_attributes][5]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][5]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][5][value]"
									id="radio_[scale_team][answers_attributes][5]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][5]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Graphic responsive</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>If the graphical representation stayed fluid and pleasant in the last test <br>
							with heavy maps, then it's cool.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][6][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234724"
										name="[scale_team][answers_attributes][6][question_id]" type="hidden"
										id="scale_team_answer_question_id"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][6][value]"
									id="radio_[scale_team][answers_attributes][6]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][6]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][6][value]"
									id="radio_[scale_team][answers_attributes][6]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][6]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">MiniLibX images</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Take a look at the code and check whether the student uses the images from <br>
							the MLX to draw the image instead of putting pixels one by one. ;)</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][7][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234725"
										name="[scale_team][answers_attributes][7][question_id]" type="hidden"
										id="scale_team_answer_question_id"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][7][value]"
									id="radio_[scale_team][answers_attributes][7]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][7]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][7][value]"
									id="radio_[scale_team][answers_attributes][7]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][7]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
					</section>
					<section class="scale-section-item dancer from-down" id="section-69346">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">Bonus part</h3>
							<p class="font-italic">A lot of nice extras.</p>
						</div>
						<h4 class="scale-question-name">Extra projection</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Can the map be represented using another projection (such as parallel or conic)?</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][8][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234726"
										name="[scale_team][answers_attributes][8][question_id]" type="hidden"
										id="scale_team_answer_question_id"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][8][value]"
									id="radio_[scale_team][answers_attributes][8]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][8]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][8][value]"
									id="radio_[scale_team][answers_attributes][8]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][8]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Zoooooooom</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Is there a way to zoom in and out using the keyboard or mouse?</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][9][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234727"
										name="[scale_team][answers_attributes][9][question_id]" type="hidden"
										id="scale_team_answer_question_id"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][9][value]"
									id="radio_[scale_team][answers_attributes][9]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][9]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][9][value]"
									id="radio_[scale_team][answers_attributes][9]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][9]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Translate</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Is there a way to translate the projection using the keyboard or mouse?</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][10][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234728"
										name="[scale_team][answers_attributes][10][question_id]" type="hidden"
										id="scale_team_answer_question_id"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][10][value]"
									id="radio_[scale_team][answers_attributes][10]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][10]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][10][value]"
									id="radio_[scale_team][answers_attributes][10]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][10]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Rotation</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Is there a way to rotate the projection using the keyboard or mouse?</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][11][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234729"
										name="[scale_team][answers_attributes][11][question_id]" type="hidden"
										id="scale_team_answer_question_id"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][11][value]"
									id="radio_[scale_team][answers_attributes][11]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][11]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][11][value]"
									id="radio_[scale_team][answers_attributes][11]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][11]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Be crazy</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Give one more point if there is any additional bonus you consider is fine.<br>
							Creativity is an important point in your education and in the digital world.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][12][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234730"
										name="[scale_team][answers_attributes][12][question_id]" type="hidden"
										id="scale_team_answer_question_id"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][12][value]"
									id="radio_[scale_team][answers_attributes][12]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][12]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][12][value]"
									id="radio_[scale_team][answers_attributes][12]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][12]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
					</section>
				</div>
				<div class="col-sm-12 scale-div pb-4">
					<div class="dancer from-down" id="ratings-24643">
						<h3 class="font-weight-bold mb-1">Ratings</h3>
						<p class="marked-title">Don’t forget to check the flag corresponding to the defense</p>
						<div class="btn-group block flags-buttons" data-radio-item="flag-small">
							<label class="btn btn-default btn-success label_flag_ok on-active positive active"
								for="scale_team_flag_id_1" name="scale_team[flag_id]">
								<span class="iconf-check-4"></span>
								Ok
							</label>
							<label class="btn btn-default btn-success label_flag_outstanding_project on-active positive"
								for="scale_team_flag_id_9" name="scale_team[flag_id]">
								<span class="iconf-star-1"></span>
								Outstanding project
							</label>
						</div>
						<div class="btn-group block flags-buttons" data-radio-item="flag-small">
							<label class="btn btn-danger btn-default label_flag_empty_work negative on-active"
								for="scale_team_flag_id_2" name="scale_team[flag_id]">
								<span class="iconf-iconf-folder-1"></span>
								Empty work
							</label>
							<label class="btn btn-danger btn-default label_flag_incomplete_work negative on-active"
								for="scale_team_flag_id_3" name="scale_team[flag_id]">
								<span class="iconf-file-attention"></span>
								Incomplete work
							</label>
							<label class="btn btn-danger btn-default label_flag_invalid_compilation negative on-active"
								for="scale_team_flag_id_5" name="scale_team[flag_id]">
								<span class="iconf-skull-2"></span>
								Invalid compilation
							</label>
							<label class="btn btn-danger btn-default label_flag_norme negative on-active"
								for="scale_team_flag_id_6" name="scale_team[flag_id]">
								<span class="iconf-receipt-1"></span>
								Norme
							</label>
							<label class="btn btn-danger btn-default label_flag_cheat negative on-active"
								for="scale_team_flag_id_7" name="scale_team[flag_id]">
								<span class="iconf-layers"></span>
								Cheat
							</label>
							<label class="btn btn-danger btn-default label_flag_crash negative on-active"
								for="scale_team_flag_id_8" name="scale_team[flag_id]">
								<span class="iconf-bomb"></span>
								Crash
							</label>
							<label class="btn btn-danger btn-default label_flag_concerning_situation negative on-active"
								for="scale_team_flag_id_11" name="scale_team[flag_id]">
								<span class="iconf-alert-2"></span>
								Concerning situation
							</label>
							<label class="btn btn-danger btn-default label_flag_leaks negative on-active"
								for="scale_team_flag_id_12" name="scale_team[flag_id]">
								<span class="iconf-blood"></span>
								Leaks
							</label>
							<label class="btn btn-danger btn-default label_flag_forbidden_function negative on-active"
								for="scale_team_flag_id_13" name="scale_team[flag_id]">
								<span class="iconf-delete-2"></span>
								Forbidden function
							</label>
							<label
								class="btn btn-danger btn-default label_flag_can’t_support_/_explain_code negative on-active"
								for="scale_team_flag_id_14" name="scale_team[flag_id]">
								<span class="iconf-bubble-attention-4"></span>
								Can’t support / explain code
							</label>
						</div>
					</div>
				</div>
				<div class="scale-final-submit"><a href="https://github.com/rphlr/42-Evals">
						<input class="btn btn-primary btn-block font-weight-bold" type="button"
							value="Give this repository a star. ⭐" /></a>
				</div>
			</form>
		</div>
	</div>
</body>

</html>