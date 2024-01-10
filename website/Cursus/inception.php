<?php
define('PATH', '../');
require(PATH . "utils/check_session.php");
require(PATH . "utils/show_popup.php");
require(PATH . "utils/menu.php");
?>

<!DOCTYPE html>
<html lang="en">
<script src="chrome-extension://hmflgigeigiejaogcgamkecmlibcpdgo/generic/inject.js"></script>

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<meta
		content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0"
		name="viewport">
	<title>inception correction</title>
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
	<?php require("../utils/header.php"); ?>
	<div class="container-item scale-team-container">
		<div class="row mt-4">
			<div class="scale-section-infos col-sm-12 scale-div">
				<h3 class="font-weight-bold text-uppercase text-center mt-4 pt-4">
					Scale for project

					<a href="https://projects.intra.42.fr/projects/inception">Inception</a>
				</h3>
				<h5 class="text-muted text-center">You should evaluate 1 student in this team</h5>

				<hr>
				<div class="p-0 scale-introduction dancer from-down" id="introduction-24651">
					<h3 class="font-weight-bold mb-1">Introduction</h3>
					<p>
						Please comply with the following rules:<br><br>- Remain polite, courteous, respectful and
						constructive
						throughout the <br> evaluation process. The well-being of the community depends on it.<br><br>-
						Identify
						with the student or group whose work is evaluated the possible <br> dysfunctions in their
						project. Take the
						time to discuss and debate the <br> problems that may have been identified.<br><br>- You must
						consider that
						there might be some differences in how your peers <br> might have understood the project's
						instructions and
						the scope of its <br> functionalities. Always keep an open mind and grade them as honestly as
						<br> possible.
						The pedagogy is useful only and only if the peer-evaluation is <br> done seriously.<br>
					</p>
				</div>
				<div class="p-0 scale-guidelines dancer from-down" id="guidelines-24651">
					<h3 class="font-weight-bold mb-1">Guidelines</h3>
					<p>
						- Only grade the work that was turned in the Git repository of the evaluated <br> student or
						group.<br><br>-
						Double-check that the Git repository belongs to the student(s). Ensure that <br> the project is
						the one
						expected. Also, check that 'git clone' is used in an <br> empty folder.<br><br>- Check carefully
						that no
						malicious aliases was used to fool you and make you <br> evaluate something that is not the
						content of the
						official repository.<br><br>- To avoid any surprises and if applicable, review together any
						scripts used
						<br> to facilitate the grading (scripts for testing or automation).<br><br>- If you have not
						completed the
						assignment you are going to evaluate, you have <br> to read the entire subject prior to starting
						the
						evaluation process.<br><br>- Use the available flags to report an empty repository, a
						non-functioning <br>
						program, a Norm error, cheating, and so forth. <br> In these cases, the evaluation process ends
						and the
						final grade is 0, <br> or -42 in case of cheating. However, except for cheating, student are
						<br> strongly
						encouraged to review together the work that was turned in, in order <br> to identify any
						mistakes that
						shouldn't be repeated in the future.<br>
					</p>
				</div>

				<hr>
				<div class="dancer from-down" id="attachments-24651">
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
					</div>

				</div>

			</div>
			<form class="simple_form form-horizontal" novalidate="novalidate" id="edit_scale_team_5430439"
				action="https://projects.intra.42.fr/projects/inception/project_sessions/5815/evaluations/3607/scales/24651/scale_teams/5430439"
				accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden"
					name="_method" value="patch"><input type="hidden" name="authenticity_token"
					value="Zhxzz1zTdGwmIzPz0GvGtEXLg/HBgsHnUBjxx/KnWmYjIoUeTpqCqYIW46fyNIWKfudOFs5/Qo61p0w3IO+JYw==">
				<div class="scale-section-answers col-sm-12 scale-div">
					<section class="scale-section-item dancer from-down" id="section-69363">
						<div class="section-header">
							<h3 class="font-weight-bold mb-1">Preliminaries</h3>
							<p class="font-italic">If cheating is suspected, the evaluation stops here. Use the "Cheat"
								flag to report
								it. Take this decision calmly, wisely, and please, use this button with caution.</p>
						</div>
						<h4 class="scale-question-name">Preliminary tests</h4>
						<p class="scale-section-guidelines">
						</p>
						<ul>
							<li>Any credentials, API keys, environment variables must be set inside a .env
								file during the evaluation. In case any credentials, API keys are available
								in the git repository and outside of the .env file created during the evaluation, the
								evaluation stop
								and the mark is 0.</li>
							<li>Defense can only happen if the evaluated student or group is present.
								This way everybody learns by sharing knowledge with each other.</li>
							<li>If no work has been submitted (or wrong files, wrong directory, or
								wrong filenames), the grade is 0, and the evaluation process ends.</li>
							<li>For this project, you have to clone their Git repository on their
								station.</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][0][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234803"
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
					<section class="scale-section-item dancer from-down" id="section-69364">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">General instructions</h3>
							<p class="font-italic"></p>
						</div>
						<h4 class="scale-question-name">General instructions</h4>
						<p class="scale-section-guidelines">
						</p>
						<ul>
							<li>For the entire evaluation process, if you don't know how to check a
								requirement, or verify anything, the evaluated student has to help you. </li>
							<li>Ensure that all the files required to configure the application are
								located inside a srcs folder. The srcs folder must be located at the
								root of the repository.</li>
							<li>Ensure that a Makefile is located at the root of the repository.</li>
							<li>Before starting the evaluation, run this command in the terminal:
								"docker stop $(docker ps -qa); docker rm $(docker ps -qa);
								docker rmi -f $(docker images -qa); docker volume rm $(docker volume ls -q);
								docker network rm $(docker network ls -q) 2&gt;/dev/null"</li>
							<li>Read the docker-compose.yml file. There musn't be 'network: host' in
								it or 'links:'. Otherwise, the evaluation ends now.</li>
							<li>Read the docker-compose.yml file. There must be 'network(s)' in it.
								Otherwise, the evaluation ends now.</li>
							<li>Examine the Makefile and all the scripts in which Docker is used.
								There musn't be '--link' in any of them. Otherwise, the evaluation
								ends now.</li>
							<li>Examine the Dockerfiles. If you see 'tail -f' or any command run in
								background in any of them in the ENTRYPOINT section, the evaluation
								ends now. Same thing if 'bash' or 'sh' are used but not for running a
								script (e.g, 'nginx &amp; bash' or 'bash').</li>
							<li>If the entrypoint is a script (e.g., ENTRYPOINT ["sh", "my_entrypoint.sh"],
								ENTRYPOINT ["bash", "my_entrypoint.sh"]), ensure it runs no program<br>
								in background (e.g, 'nginx &amp; bash').</li>
							<li>Examine all the scripts in the repository. Ensure none of them runs
								an infinite loop.
								The following are a few examples of prohibited commands:
								'sleep infinity', 'tail -f /dev/null', 'tail -f /dev/random'</li>
							<li>Run the Makefile.</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][1][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234804"
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
					<section class="scale-section-item dancer from-down" id="section-69365">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">Mandatory part</h3>
							<p class="font-italic">This project consists in setting up a small infrastructure composed
								of
								different services using docker compose.
								Ensure that all the following points are correct.
							</p>
						</div>
						<h4 class="scale-question-name">Project overview</h4>
						<p class="scale-section-guidelines">
						</p>
						<ul>
							<li>The evaluated person has to explain to you in simple terms:

								<ul>
									<li>How Docker and docker compose work</li>
									<li>The difference between a Docker image used with docker compose and
										without docker compose</li>
									<li>The benefit of Docker compared to VMs</li>
									<li>The pertinence of the directory structure required for this project
										(an example is provided in the subject's PDF file).</li>
								</ul>
							</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][2][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234805"
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
						<h4 class="scale-question-name">Simple setup</h4>
						<p class="scale-section-guidelines">
						</p>
						<ul>
							<li>Ensure that NGINX can be accessed by port 443 only. Once done, open
								the page.</li>
							<li>Ensure that a SSL/TLS certificate is used.</li>
							<li>Ensure that the WordPress website is properly installed and configured
								(you shouldn't see the WordPress Installation page). To access it,
								open <a href="https://login.42.fr/">https://login.42.fr</a> in your browser, where login
								is the login of
								the evaluated student. You shouldn't be able to access the site via<br>
								<a href="http://login.42.fr/">http://login.42.fr</a>.
								If something doesn't work as expected, the evaluation process ends now.
							</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][3][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234806"
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
						<h4 class="scale-question-name">Docker Basics</h4>
						<p class="scale-section-guidelines">
						</p>
						<ul>
							<li>Start by checking the Dockerfiles. There must be one Dockerfile per
								service. Ensure that the Dockerfiles are not empty files. If it's not
								the case or if a Dockerfile is missing, the evaluation process ends
								now.</li>
							<li>Make sure the evaluated student has written their own Dockerfiles and
								built their own Docker images. Indeed, it is forbidden to use
								ready-made ones or to use services such as DockerHub.</li>
							<li>Ensure that every container is built from the penultimate stable version
								of Alpine/Debian. If a Dockerfile does not start
								with 'FROM alpine:X.X.X' or 'FROM debian:XXXXX', or any other local image,
								the evaluation process ends now.</li>
							<li>The Docker images must have the same name as their corresponding
								service. Otherwise, the evaluation process ends now.</li>
							<li>Ensure that the Makefile has set up all the services via docker compose.
								This means that the containers must have been built using docker compose
								and that no crash happened. Otherwise, the evaluation process ends.</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][4][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234807"
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
						<h4 class="scale-question-name">Docker Network</h4>
						<p class="scale-section-guidelines">
						</p>
						<ul>
							<li>Ensure that docker-network is used by checking the docker-compose.yml
								file. Then run the 'docker network ls' command to verify that a
								network is visible.</li>
							<li>The evaluated student has to give you a simple explanation of
								docker-network.
								If any of the above points is not correct, the evaluation process ends
								now.</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][5][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234808"
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
						<h4 class="scale-question-name">NGINX with SSL/TLS</h4>
						<p class="scale-section-guidelines">
						</p>
						<ul>
							<li>Ensure that there is a Dockerfile.</li>
							<li>Using the 'docker compose ps' command, ensure that the container was
								created (using the flag '-p' is authorized if necessary).</li>
							<li>Try to access the service via http (port 80) and verify that you
								cannot connect.</li>
							<li>Open <a href="https://login.42.fr/">https://login.42.fr/</a> in your browser, where
								login is the login
								of the evaluated student. The displayed page must be the configured
								WordPress website (you shouldn't see the WordPress Installation page).</li>
							<li>The use of a TLS v1.2/v1.3 certificate is mandatory and must be
								demonstrated. The SSL/TLS certificate doesn't have to be recognized.
								A self-signed certificate warning may appear.
								If any of the above points is not clearly explained and correct, the
								evaluation process ends now.</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][6][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234809"
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
						<h4 class="scale-question-name">WordPress with php-fpm and its volume</h4>
						<p class="scale-section-guidelines">
						</p>
						<ul>
							<li>Ensure that there is a Dockerfile.</li>
							<li>Ensure that there is no NGINX in the Dockerfile.</li>
							<li>Using the 'docker compose ps' command, ensure that the container was
								created (using the flag '-p' is authorized if necessary).</li>
							<li>Ensure that there is a Volume. To do so:
								Run the command 'docker volume ls' then 'docker volume inspect
								&lt;volume name&gt;'. Verify that the result in the standard output contains
								the path '/home/login/data/', where login is the login of the evaluated
								student.</li>
							<li>Ensure that you can add a comment using the available WordPress user.</li>
							<li>Sign in with the administrator account to access the Administration
								dashboard. The Admin username must not include 'admin' or 'Admin'
								(e.g., admin, administrator, Admin-login, admin-123, and so forth).</li>
							<li>From the Administration dashboard, edit a page. Verify on the website
								that the page has been updated.
								If any of the above points is not correct, the evaluation process ends
								now.</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][7][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234810"
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
						<h4 class="scale-question-name">MariaDB and its volume</h4>
						<p class="scale-section-guidelines">
						</p>
						<ul>
							<li>Ensure that there is a Dockerfile.</li>
							<li>Ensure that there is no NGINX in the Dockerfile.</li>
							<li>Using the 'docker compose ps' command, ensure that the container was
								created (using the flag '-p' is authorized if necessary).</li>
							<li>Ensure that there is a Volume. To do so:
								Run the command 'docker volume ls' then 'docker volume inspect
								&lt;volume name&gt;'. Verify that the result in the standard output contains
								the path '/home/login/data/', where login is the login of the evaluated
								student.</li>
							<li>The evaluated student must be able to explain you how to login into
								the database. Verify that the database is not empty.
								If any of the above points is not correct, the evaluation process ends
								now.</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][8][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234811"
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
						<h4 class="scale-question-name">Persistence!</h4>
						<p class="scale-section-guidelines">
						</p>
						<ul>
							<li>This part is pretty straightforward. You have to reboot the virtual
								machine. Once it has restarted, launch docker compose again. Then,
								verify that everything is functional, and that both WordPress and
								MariaDB are configured. The changes you made previously to the
								WordPress website should still be here.
								If any of the above points is not correct, the evaluation process ends
								now.</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][9][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234812"
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
					</section>
					<section class="scale-section-item dancer from-down" id="section-69366">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">Bonus</h3>
							<p class="font-italic">Evaluate the bonus part if, and only if, the mandatory part has been
								entirely and perfectly done, and the error management handles unexpected
								or bad usage. In case all the mandatory points were not passed during the
								defense, bonus points must be totally ignored.
							</p>
						</div>
						<h4 class="scale-question-name">Bonus</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Add 1 point per bonus authorized in the subject.<br>
							Verify and test the proper functioning and implementation of each extra <br>
							service.<br>
							For the free choice service, the evaluated student has to give you a <br>
							simple explanation about how it works and why they think it is useful. </p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][10][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234813"
										name="[scale_team][answers_attributes][10][question_id]" type="hidden"
										id="scale_team_answer_question_id"></div>
							</div>
							<div class="marked-title text-center">Rate it from 0 (failed) through 5 (excellent)</div>
							<input autocomplete="off" class="star-range" data-star-range="" max="5"
								name="[scale_team][answers_attributes][10][value]" step="1" type="range" value="0"
								style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
							<hr>
						</div>
					</section>
				</div>
				<div class="col-sm-12 scale-div pb-4">
					<div class="dancer from-down" id="ratings-24651">
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