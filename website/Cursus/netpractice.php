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
	<title>NetPractice correction</title>
	<link rel="shortcut icon" href="<?php echo htmlspecialchars($prefix); ?>assets/favicons/favicon_no-bg.ico" type="image/x-icon">
	<link href="<?php echo htmlspecialchars($prefix); ?>css/styles.css" media="all" rel="stylesheet" />
	<link rel="manifest" href="<?php echo htmlspecialchars($prefix); ?>manifest.json">
	<script src="<?php echo htmlspecialchars($prefix); ?>js/script.js"></script>
	<script src="<?php echo htmlspecialchars($prefix); ?>js/js"></script>
	<script src="<?php echo htmlspecialchars($prefix); ?>js/main.js"></script>
</head>

<body>
	<script>
		if ('serviceWorker' in navigator) {
			navigator.serviceWorker.register('../../js/service-worker.js')
				.then(function (registration) {
					console.log('Service Worker registered successfully:', registration);
				})
				.catch(function (error) {
					console.log('Service Worker registration failed:', error);
				});
		}
	</script>
	<?php require(PATH . "../utils/header.php"); ?>
	<div class="container-item scale-team-container">
		<button class="btn btn-primary" onclick="window.location.href='NetPractice/'">Drill</button>
		<div class="row mt-4">
			<div class="scale-section-infos col-sm-12 scale-div">
				<h3 class="font-weight-bold text-uppercase text-center mt-4 pt-4">
					Scale for project

					<a href="https://projects.intra.42.fr/projects/netpractice">NetPractice</a>
				</h3>
				<h5 class="text-muted text-center">You should evaluate 1 student in this team</h5>

				<hr>
				<div class="p-0 scale-introduction dancer from-down" id="introduction-24647">
					<h3 class="font-weight-bold mb-1">Introduction</h3>
					<p>
						Please respect the following rules:<br><br>- Remain polite, courteous, respectful and
						constructive<br>
						throughout the evaluation process. The well-being of the community<br> depends on it.<br><br>-
						Identify with
						the person (or the group) whose work is evaluated the possible<br> dysfunctions in their
						project. Take the
						time to discuss<br> and debate the problems you may have identified.<br><br>- You must consider
						that there
						might be some differences in how your<br> peers might have understood the project's instructions
						and the<br>
						scope of its functionalities. Always keep an open mind and grade<br> them as honestly as
						possible. The
						pedagogy is valid only and<br> only if peer-evaluation is conducted seriously.<br>
					</p>
				</div>
				<div class="p-0 scale-guidelines dancer from-down" id="guidelines-24647">
					<h3 class="font-weight-bold mb-1">Guidelines</h3>
					<p>
						- Only grade the work that is present in the Git repository of the <br> student or
						group.<br><br>-
						Double-check that the Git repository belongs to the student<br> or the group. Ensure that the
						project is the
						one expected <br> and also check that "git clone" is used in an empty folder.<br><br>- Check
						carefully that
						no malicious aliases was used to fool you<br> and make you evaluate something that is not the
						content of
						the<br> official repository.<br><br>- To avoid any surprises and if applicable, review together
						the <br>
						scripts used to facilitate the grading (scripts for testing or <br> automation).<br><br>- As an
						evaluator,
						if you have not completed the assignment you are<br> going to grade, you then have to read the
						entire
						subject prior to <br> starting the defence.<br><br>- Use the flags available on this scale to
						signal an
						empty repository,<br> a non-functioning program, a norm error, cheating, and so forth. <br> In
						these cases,
						the evaluation process ends and the final grade is 0, <br> or -42 in case of cheating. However,
						except for
						cheating, student are <br> strongly encouraged to discuss the work that was turned in together,
						<br> in
						order to identify any mistakes that shouldn't be repeated in the <br> future.<br>
					</p>
				</div>

				<hr>
				<div class="dancer from-down" id="attachments-24647">
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
								<span class="icon-note-paper-2"></span>
								<a target="_blank" href="https://github.com/rphlr/42-Subjects/">net_practice.1.4.tgz</a>
							</h4>
						</div>
					</div>

				</div>

			</div>
			<form class="simple_form form-horizontal" novalidate="novalidate" id="edit_scale_team_5552590"
				action="https://projects.intra.42.fr/projects/netpractice/project_sessions/5995/evaluations/3748/scales/24647/scale_teams/5552590"
				accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden"
					name="_method" value="patch"><input type="hidden" name="authenticity_token"
					value="8LIb2VYAv9NMesGz4G1lw9Z1RKi0ONSQZpL9Z/U7Cnuin9i15kz1g2bpbnjI1rt5Vs97kCv5LsS/clSXeGLFvA==">
				<div class="scale-section-answers col-sm-12 scale-div">
					<section class="scale-section-item dancer from-down" id="section-69354">
						<div class="section-header">
							<h3 class="font-weight-bold mb-1">Preliminaries</h3>
							<p class="font-italic">If cheating is suspected, the evaluation stops here. Use the "Cheat"
								flag of the
								scale. Please do this calmly, wisely and use this button with caution.</p>
						</div>
						<h4 class="scale-question-name">Simple preliminaries</h4>
						<p class="scale-section-guidelines">
						</p>
						<ul>
							<li>Defense can only happen if the student being evaluated is present. This way everybody
								improves: by
								exchanging ideas and sharing knowledge with each other.</li>
							<li>Nothing submitted (or wrong file or directory) means 0, and the evaluation process ends.
							</li>
							<li>In order to grade your peer, you have to clone their Git repository on your machine.
							</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][0][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234770"
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
					<section class="scale-section-item dancer from-down" id="section-69355">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">General instructions</h3>
							<p class="font-italic"></p>
						</div>
						<h4 class="scale-question-name">General instructions</h4>
						<p class="scale-section-guidelines">
						</p>
						<ul>
							<li>Ensure that 10 files (1 per level) are present at the root of the
								repository. Ensure that they are not empty.</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][1][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234771"
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
					</section>
					<section class="scale-section-item dancer from-down" id="section-69356">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">Mandatory part</h3>
							<p class="font-italic">
								- This project is about configuring small-scale networks that have issues to
								make them run. You have to download the file attached to the project's page
								(the evaluated student can show you where it is). Then, run the index.html
								file.

								A page will open in your web browser. Leave the login field empty to start
								the 'correction' mode.

								The evaluated student must solve correctly all of the levels in 15 minutes
								maximum.
								Using internet or any external resource to find answers is, of course, forbidden.

								The use of a simple calculator such as "bc" is tolerated but it will be the
								limit.

								You can ask questions about the different levels to the evaluated student.
							</p>
						</div>
						<h4 class="scale-question-name">Level 1</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>If something does not work as expected or is not clearly explained, the <br>
							evaluation process ends now.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][2][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234772"
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
						<h4 class="scale-question-name">Level 2</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>If something does not work as expected or is not clearly explained, the <br>
							evaluation process ends now.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][3][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234773"
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
						<h4 class="scale-question-name">Level 3</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>If something does not work as expected or is not clearly explained, the <br>
							evaluation process ends now.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][4][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234774"
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
					</section>
				</div>
				<div class="col-sm-12 scale-div pb-4">
					<div class="dancer from-down" id="ratings-24647">
						<h3 class="font-weight-bold mb-1">Ratings</h3>
						<p class="marked-title">Don’t forget to check the flag corresponding to the defense</p>
						<div class="btn-group block flags-buttons" data-radio-item="flag-small">
							<label class="btn btn-default btn-success label_flag_ok on-active positive"
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
</body>

</html>