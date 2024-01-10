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
	<title>ft_transcendence correction</title>
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

					<a href="https://projects.intra.42.fr/projects/ft_transcendence">ft_transcendence</a>
				</h3>
				<h5 class="text-muted text-center">You should evaluate 3 students in this team</h5>

				<hr>
				<div class="p-0 scale-introduction dancer from-down" id="introduction-18563">
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
				<div class="p-0 scale-guidelines dancer from-down" id="guidelines-18563">
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
						shouldn't be repeated in the future.<br><br>- Remember that for the duration of the defence, no
						segfault, no
						other <br> unexpected, premature, uncontrolled or unexpected termination of the <br> program,
						else the final
						grade is 0. Use the appropriate flag. <br> You should never have to edit any file except the
						configuration
						file if it <br> exists. If you want to edit a file, take the time to explicit the reasons <br>
						with the
						evaluated student and make sure both of you are okay with this.<br><br>- You must also verify
						the absence of
						memory leaks. Any memory allocated on <br> the heap must be properly freed before the end of
						execution. <br>
						You are allowed to use any of the different tools available on the computer, <br> such as leaks,
						valgrind,
						or e_fence. In case of memory leaks, tick the <br> appropriate flag.<br>
					</p>
				</div>

				<hr>
				<div class="dancer from-down" id="attachments-18563">
					<h3 class="font-weight-bold mb-1">Attachments</h3>
					<div class="project-attachments-list">
					</div>

					<div class="project-attachments-list">
						<div class="project-attachment-item">
							<h4 class="attachment-name">
								<span class="icon-file"></span>
								<a target="_blank" href="https://github.com/rphlr/42-Subjects/">subject.pdf</a>
							</h4>
						</div>
					</div>

				</div>

			</div>
			<form class="simple_form form-horizontal" novalidate="novalidate" id="edit_scale_team_4904896"
				action="/projects/ft_transcendence/project_sessions/3323/evaluations/2011/scales/18563/scale_teams/4904896"
				accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden"
					name="_method" value="patch"><input type="hidden" name="authenticity_token"
					value="Hcc4omDbERi71hNQG/dzltU4u0TLC4VIE+x5T/74gmVj82b76DiSLdcQ23R0B5ksn+TW/nyexFruZ11fv95Ihw==">
				<div class="scale-section-answers col-sm-12 scale-div">
					<section class="scale-section-item dancer from-down" id="section-52978">
						<div class="section-header">
							<h3 class="font-weight-bold mb-1">General instructions</h3>
							<p class="font-italic"></p>
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
							<li>Ensure the docker compose file is at the root of the repository.</li>
							<li>Run the "docker-compose up --build" command.</li>
							<li>Since the rating of this project is more flexible, do not stop the
								evaluation process unless you encounter a 500 error, a crash, or
								anything that actually doesn't work within the project scope.</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][0][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="178839"
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
						<h4 class="scale-question-name">Backend</h4>
						<p class="scale-section-guidelines">
						</p>
						<ul>
							<li>The backend must be developed using the NestJS framework.</li>
							<li>The database must be a PostgreSQL database.</li>
							<li>During the whole evaluation process, there must be no unhandled
								warning or error.</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][1][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="178840"
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
						<h4 class="scale-question-name">Frontend</h4>
						<p class="scale-section-guidelines">
						</p>
						<ul>
							<li>The frontend must be done using a TypeScript framework.</li>
							<li>Any TypeScript/JavaScript library is allowed.</li>
							<li>During the whole evaluation process, there must be no unhandled warning
								or error.</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][2][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="178841"
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
						<h4 class="scale-question-name">Basic checks</h4>
						<p class="scale-section-guidelines">
						</p>
						<ul>
							<li>The website is available at the address chosen by the students.</li>
							<li>The user can login using the 42 intranet OAuth feature.</li>
							<li>When logged for the first time, the user is prompted to add information
								to their account (display name/nickname, avatar, and so forth).</li>
							<li>If not logged, the user has access to only little or no information and
								is prompted to sign in.</li>
							<li>The website is a Single Page Application. The user can use the "Back"
								and "Forward" buttons of the web browser.</li>
							<li>You can browse the website using the latest version of Chrome and one
								additionnal browser without encountering any problems or errors.</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][3][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="178842"
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
					</section>
					<section class="scale-section-item dancer from-down" id="section-52979">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">The website</h3>
							<p class="font-italic"></p>
						</div>
						<h4 class="scale-question-name">Security concerns</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Ensure that the website is secured. Check the database to verify that <br>
							passwords are hashed. Check the server for server-side <br>
							validation/sanitization on forms and any user input. If this isn't done, <br>
							the evaluation ends now.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][4][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="178843"
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
						<h4 class="scale-question-name">User profile - private</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>When logged in, the user has access to their profile where they can <br>
							edit their information. For instance, they can change their nickname <br>
							(which must be unique) or their avatar (which is a default avatar if not <br>
							set).</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][5][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="178844"
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
						<h4 class="scale-question-name">User profile - public</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Users can see the profile of other users. A profile contains basic <br>
							informations such as their nickname, their avatar, or a button to add <br>
							them as friends. <br>
							User can block other users. This means they won't receive private messages <br>
							from the accounts they blocked nor view their messages in public/private <br>
							channels.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][6][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="178845"
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
						<h4 class="scale-question-name">Friend interface</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>The user has access to a friends interface, where they can see their <br>
							friends and their status (offline/online/in a game/and so forth). They <br>
							also have access to basics informations about them (name/nickname, avatar <br>
							and so forth).</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][7][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="178846"
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
						<h4 class="scale-question-name">2FA</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>The user can enable/disable 2FA (two-factor authentication). If enabled, <br>
							they must pass it in order to sign in. For example, 2FA can use Google <br>
							Authenticator, a text message, an email, and so forth.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][8][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="178847"
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
					</section>
					<section class="scale-section-item dancer from-down" id="section-52980">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">Chat interface</h3>
							<p class="font-italic"></p>
						</div>
						<h4 class="scale-question-name">Join/leave channels</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>A logged in user can access the website chat service. Joining/leaving <br>
							channels is a manual action. For example, this means it must not be done <br>
							on logout (the user has to click a "Leave channel" button or something <br>
							else). The user can join channels (that can be already created) to have a <br>
							chat. Some of them can be password-protected. If so, the user has to enter <br>
							the correct password in order to join the channel.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][9][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="178848"
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
						<h4 class="scale-question-name">Chat usage</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>The users can chat. Messages must be sent/received instantly. <br>
							If the user blocked another user, the messages from the blocked person <br>
							must be hidden. The user can access the user profile of other players <br>
							from the chat interface and also invite them for a Pong duel.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][10][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="178849"
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
						<h4 class="scale-question-name">Creating channels</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>The user can create new channels. The channel creator is set as the <br>
							channel owner and has basic moderations rights (ban/mute users, add a <br>
							password to protect the channel, set new administrators, and so <br>
							forth).</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][11][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="178850"
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
						<h4 class="scale-question-name">Channel roles</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>A user who is an owner of a channel can kick, ban, mute other users and <br>
							the channel administrators. <br>
							A user who is an administrator of a channel can kick, ban mute other <br>
							users, but not the channel owners.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][12][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="178851"
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
					<section class="scale-section-item dancer from-down" id="section-52981">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">The game</h3>
							<p class="font-italic"></p>
						</div>
						<h4 class="scale-question-name">Matchmaking system</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>When logged in, the user has access to a matchmaking system so they can <br>
							play Pong 1v1 games versus other players on the website. When they get <br>
							matched, a new game is loaded and the two users can start playing.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][13][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="178852"
										name="[scale_team][answers_attributes][13][question_id]" type="hidden"
										id="scale_team_answer_question_id"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][13][value]"
									id="radio_[scale_team][answers_attributes][13]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][13]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][13][value]"
									id="radio_[scale_team][answers_attributes][13]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][13]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Gameplay</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>The game itself must be playable and respect the original Pong game. <br>
							The controls must be intuitive or correctly explained (with some rules or <br>
							manual). When a game is over, either a kind of end-game screen is <br>
							displayed or the game page just exits.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][14][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="178853"
										name="[scale_team][answers_attributes][14][question_id]" type="hidden"
										id="scale_team_answer_question_id"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][14][value]"
									id="radio_[scale_team][answers_attributes][14]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][14]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][14][value]"
									id="radio_[scale_team][answers_attributes][14]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][14]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Spectactor mode</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>There is a spectator mode. The user can watch any live games. They can be <br>
							accessed through the chat interface or the friend interface. <br>
							There can also be a page dedicated to live games from which the user can <br>
							access any of them.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][15][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="178854"
										name="[scale_team][answers_attributes][15][question_id]" type="hidden"
										id="scale_team_answer_question_id"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][15][value]"
									id="radio_[scale_team][answers_attributes][15]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][15]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][15][value]"
									id="radio_[scale_team][answers_attributes][15]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][15]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Lags &amp; disconnects</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Unexpected disconnections and lags have to be handled. The game and the <br>
							website must not crash when a user is experiencing lags or is disconnected. <br>
							Handling such issues in an efficient way is appreciated but not mandatory:</p>

						<ul>
							<li>Pause the game for a defined duration.</li>
							<li>Disconnected users can reconnect.</li>
							<li>Lagging users can catch up to the match.</li>
							<li>And so forth.
								Any solution is acceptable. The only requirement is: the game should not
								crash.</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][16][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="178855"
										name="[scale_team][answers_attributes][16][question_id]" type="hidden"
										id="scale_team_answer_question_id"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][16][value]"
									id="radio_[scale_team][answers_attributes][16]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][16]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][16][value]"
									id="radio_[scale_team][answers_attributes][16]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][16]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Additionnal features</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>The user can enjoy extra features such as power-ups, different maps, <br>
							achievements, and so forth.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][17][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="178856"
										name="[scale_team][answers_attributes][17][question_id]" type="hidden"
										id="scale_team_answer_question_id"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][17][value]"
									id="radio_[scale_team][answers_attributes][17]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][17]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][17][value]"
									id="radio_[scale_team][answers_attributes][17]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][17]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
					</section>
				</div>
				<div class="col-sm-12 scale-div pb-4">
					<div class="dancer from-down" id="ratings-18563">
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
								<span class="iconf-file-1"></span>
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
							<label class="btn btn-danger btn-default label_flag_incomplete_group negative on-active"
								for="scale_team_flag_id_10" name="scale_team[flag_id]">
								<span class="iconf-user-delete-2"></span>
								Incomplete group
							</label>
							<label class="btn btn-danger btn-default label_flag_concerning_situation negative on-active"
								for="scale_team_flag_id_11" name="scale_team[flag_id]">
								<span class="iconf-alert-2"></span>
								Concerning situation
							</label>
							<label class="btn btn-danger btn-default label_flag_forbidden_function negative on-active"
								for="scale_team_flag_id_13" name="scale_team[flag_id]">
								<span class="iconf-delete-2"></span>
								Forbidden function
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