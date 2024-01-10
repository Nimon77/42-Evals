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
	<title>so_long correction</title>
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

					<a href="https://projects.intra.42.fr/projects/so_long">so_long</a>
				</h3>
				<h5 class="text-muted text-center">You should evaluate 1 student in this team</h5>

				<hr>
				<div class="p-0 scale-introduction dancer from-down" id="introduction-24645">
					<h3 class="font-weight-bold mb-1">Introduction</h3>
					<p>
						Please comply with the following rules:<br><br>- Remain polite, courteous, respectful and
						constructive throughout the <br> evaluation process. The well-being of the community depends on
						it.<br><br>- Identify with the student or group whose work is evaluated the possible <br>
						dysfunctions in their project. Take the time to discuss and debate the <br> problems that may
						have been identified.<br><br>- You must consider that there might be some differences in how
						your peers <br> might have understood the project's instructions and the scope of its <br>
						functionalities. Always keep an open mind and grade them as honestly as <br> possible. The
						pedagogy is useful only and only if the peer-evaluation is <br> done seriously.<br>
					</p>
				</div>
				<div class="p-0 scale-guidelines dancer from-down" id="guidelines-24645">
					<h3 class="font-weight-bold mb-1">Guidelines</h3>
					<p>
						- Only grade the work that was turned in the Git repository of the evaluated <br> student or
						group.<br><br>- Double-check that the Git repository belongs to the student(s). Ensure that <br>
						the project is the one expected. Also, check that 'git clone' is used in an <br> empty
						folder.<br><br>- Check carefully that no malicious aliases was used to fool you and make you
						<br> evaluate something that is not the content of the official repository.<br><br>- To avoid
						any surprises and if applicable, review together any scripts used <br> to facilitate the grading
						(scripts for testing or automation).<br><br>- If you have not completed the assignment you are
						going to evaluate, you have <br> to read the entire subject prior to starting the evaluation
						process.<br><br>- Use the available flags to report an empty repository, a non-functioning <br>
						program, a Norm error, cheating, and so forth. <br> In these cases, the evaluation process ends
						and the final grade is 0, <br> or -42 in case of cheating. However, except for cheating, student
						are <br> strongly encouraged to review together the work that was turned in, in order <br> to
						identify any mistakes that shouldn't be repeated in the future.<br><br>- Remember that for the
						duration of the defense, no segfault, no other <br> unexpected, premature, uncontrolled or
						unexpected termination of the <br> program, else the final grade is 0. Use the appropriate flag.
						<br> You should never have to edit any file except the configuration file if it <br> exists. If
						you want to edit a file, take the time to explicit the reasons <br> with the evaluated student
						and make sure both of you are okay with this.<br><br>- You must verify the absence of data
						races. <br> You are allowed to use any of the different tools available on the computer, <br>
						such as valgrind with "--tool=helgrind" and "--tool=drd". In case of any <br> data-race, the
						evaluation stops here.<br><br>- You must also verify the absence of memory leaks. Any memory
						allocated on <br> the heap must be properly freed before the end of execution. You are <br>
						allowed to use any of the different tools available on the computer, such <br> as leaks,
						valgrind, or e_fence. In case of memory leaks, tick the <br> appropriate flag.<br>
					</p>
				</div>
				<hr>
				<div class="dancer from-down" id="attachments-24645">
					<h3 class="font-weight-bold mb-1">Attachments</h3>
					<div class="project-attachments-list">
					</div>

					<div class="project-attachments-list">
						<div class="project-attachment-item">
							<h4 class="attachment-name">
								<span class="icon-file"></span>
								<a target="_blank" href="https://github.com/rphlr/42-Subjects/">subject.pdf</a>
								<span class="icon-file"></span>
								<a target="_blank" href="https://github.com/rphlr/42-Subjects/">minilibx-linux.tgz</a>
								<span class="icon-file"></span>
								<a target="_blank" href="https://github.com/rphlr/42-Subjects/">minilibx_opengl.tgz</a>
								<span class="icon-file"></span>
								<a target="_blank"
									href="https://github.com/rphlr/42-Subjects/">minilibx_mms_20200219_beta.tgz</a>
							</h4>
						</div>
					</div>

				</div>

			</div>
			<form class="simple_form form-horizontal" novalidate="novalidate" id="edit_scale_team_5422972"
				action="https://projects.intra.42.fr/projects/42cursus-philosophers/project_sessions/3320/evaluations/1599/scales/24645/scale_teams/5422972"
				accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden"
					name="_method" value="patch"><input type="hidden" name="authenticity_token"
					value="ZkyeHJiPBawYYypB3ZeNyewnhCm+8MjQ+Dd60WIU6Y6msl5IKl/IaXrRWUDaTXYEV43NGlXmrIarxQldqGOeoQ==">
				<div class="scale-section-answers col-sm-12 scale-div">
					<section class="scale-section-item dancer from-down" id="section-69350">
						<div class="section-header">
							<h3 class="font-weight-bold mb-1">Mandatory Part</h3>
							<p class="font-italic"></p>
						</div>
						<h4 class="scale-question-name">Executable name</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Execute the <code>make</code> command. The project should compile
							as expected (the
							Makefile should not re-link). Verify that the executable
							name is <code>so_long</code>.
							Otherwise, use the "invalid compilation" flag at the end of
							the scale.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][0][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234741"
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
						<h4 class="scale-question-name">Parsing</h4>
						<p class="scale-section-guidelines">
						</p>
						<ul>
							<li>Test different maps.</li>
							<li>Test different sizes.</li>
							<li>Test different line sizes.</li>
						</ul>
						<p>Also, check that the program returns an error and exits
							properly when the
							configuration file is misconfigured (e.g., an unknown
							character,
							duplicates, an invalid file path, and so forth).</p>
						<p>Otherwise, the defense is over. Use the appropriate flag:
							incomplete work,
							crash...</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][1][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234742"
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
						<h4 class="scale-question-name">Technical elements of the display</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Time to evaluate the technical elements of the display.
							Check that the level is an accurate representation of the map used as parameter.</p>
						<ul>
							<li>A window must open at the launch of the program.
								It must remain open during the whole execution.</li>
							<li>Hide all or parts of the window either by using
								window or by using the screen's borders. Then, minimize the window
								and maximize it back. In all cases, the content of the
								window must remain consistent.</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][2][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234743"
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
						<h4 class="scale-question-name">Basic user events</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>In this section, let's evaluate the program's user events.
							Execute the 3
							following tests. If at least one of them fails, this means that
							no points
							must be awarded for this section and you have to move to the next one.</p>
						<ul>
							<li>Click the cross at the top of the window. The window must close and
								the program must exit cleanly.</li>
							<li>Press the ESC key. The window must close and the program must exit
								cleanly. In the case of this test, you can accept that another key
								exits the program, for example, Q.</li>
							<li>Press the four arrow keys (it is acceptable to use the
								WASD or ZQSD keys instead) in the order of your choice. Each key press must
								render a visible result on the
								window (player's movement).</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][3][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234744"
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
						<h4 class="scale-question-name">Movements</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>In this section, let's evaluate the implementation of the player's movement. Execute the 5
							following tests. If at least one of them fails, this means
							that no points must be awarded for this section and you
							have to move to the
							next one.</p>
						<ul>
							<li>The player's spawning position must be in accordance
								with the map file.</li>
							<li>Press the arrows keys (it is acceptable to use the WASD or ZQSD keys instead)
								to move in every direction on the map.</li>
							<li>Is the game "playable"?</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][4][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234744"
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
						<h4 class="scale-question-name">Walls & Sprites</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>In this section, let's evaluate the map representation. Execute the following tests. If at
							least one of them fails, this means that
							no points
							must be awarded for this section and you have to move to
							the next one.</p>
						<ul>
							<li>The wall's texture is correctly placed and the player
								cannot go through it.</li>
							<li>The collectible's texture is correctly placed and the player can pick
								it by walking on it.</li>
							<li>The Exit texture is correctly placed and the player can finish the game
								by walking on it but only after picking every collectible.</li>
							<li>The player texture is correctly placed and can move
								in every direction
								except into the walls.</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][5][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234744"
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
						<h4 class="scale-question-name">counter</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>In this section, let's evaluate the gameplay elements. Execute the following tests. If at
							least one of them fails, this means that
							no points
							must be awarded for this section and you have to move to
							the next one.</p>
						<ul>
							<li>There's a small counter displayed on the shell that counts how many movements the player
								does.</li>
							<li>The counter can be displayed directly on the game screen (see Bonus part).</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][6][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234744"
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
						<p>Take a look at the code and check whether the student uses
							the images from
							the MLX to draw the image instead of putting pixels one by
							one. ;)</p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][7][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234744"
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
					<section class="scale-section-item dancer from-down" id="section-69351">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">Bonus</h3>
							<p class="font-italic">Evaluate the bonus part if, and only if, the mandatory part has been
								entirely and perfectly done, and the error management handles unexpected or bad usage.
								In case all
								the mandatory points were not passed during the defense,
								bonus points must be totally ignored.</p>
						</div>
						<h4 class="scale-question-name">Enemies</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>The enemy patrols cause the player to lose if they touch
							them.</p>
						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][9][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234745"
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
						<h4 class="scale-question-name">Sprite animation</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>There's some sprite animation. The evaluated student has to
							explain what it is and how they did it.</p>

						<div class="marked-title text-center">Rate it from 0 (failed) through 5 (excellent)</div>
						<input autocomplete="off" class="star-range" data-star-range="" max="5"
							name="[scale_team][answers_attributes][3][value]" step="1" type="range" value="0"
							style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
						<hr>
				</div>
				</section>
		</div>
		<div class="col-sm-12 scale-div pb-4">
			<div class="dancer from-down" id="ratings-24645">
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
					<label class="btn btn-danger btn-default label_flag_can’t_support_/_explain_code negative on-active"
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