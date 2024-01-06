<?php
require("../utils/check_session.php");
require("../utils/show_popup.php");
require("../utils/menu.php");
?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<meta
		content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0"
		name="viewport">
	<title>Libft correction</title>
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
					<br />Scale for project
					<a href="https://projects.intra.42.fr/projects/42cursus-libft">Libft</a>
				</h3>
				<h5 class="text-muted text-center">You should evaluate 1 student in this team</h5>
				<hr />
				<div class="p-0 scale-introduction dancer from-down" id="introduction-24830">
					<h3 class="font-weight-bold mb-1">Introduction</h3>
					<p>
						Please follow the rules below:<br /><br />
						- Stay polite, courteous, respectful, and constructive during the evaluation process. The
						well-being of the
						community depends on it.<br /><br />
						- Identify with the evaluated person or group any potential malfunctions in their work. Take the
						time to
						discuss and debate the identified issues.<br /><br />
						- You must take into account that there may be slight differences in interpretation between the
						project
						instructions, its scope, and its features. Keep an open mind and grade as honestly as possible.
						The
						educational value is only valid if the peer evaluation is conducted seriously.<br />
					</p>

				</div>
				<div class="p-0 scale-guidelines dancer from-down" id="guidelines-24830">
					<h3 class="font-weight-bold mb-1">Guidelines</h3>
					<p>
						- Only grade what is contained in the cloned Git repository of the student or group.<br /><br />
						- Ensure that the Git repository actually belongs to the student or group, that the project is
						indeed the
						one expected, and that "git clone" is used in an empty directory.<br /><br />
						- Carefully verify that no aliases have been used to deceive you and ensure that you are
						evaluating the
						official submission.<br /><br />
						- To avoid any surprises, check with the student or group for any potential scripts used to
						facilitate the
						evaluation, such as test or automation scripts.<br /><br />
						- Do not blindly trust test programs! They could be incorrect.<br /><br />
						- Check the Makefile: no wildcards, it should not re-link. If this is the case, the grade is 0.
						Use make,
						then make --debug to ensure this.<br /><br />
						- If you have not completed the project you are about to evaluate, you must read the entire
						topic before
						starting the evaluation.<br /><br />
						- Use the available flags to signal an empty submission, a non-functioning program, a Norme
						error,
						cheating... In these situations, the evaluation is terminated and the grade is 0, or -42 in the
						case of
						cheating. However, except in cases of cheating, you are encouraged to continue the discussion on
						the work
						submitted, even if it is incomplete, in order to identify mistakes not to be repeated in the
						future.<br /><br />
						- Throughout the duration of the evaluation, no segfault or other unexpected, premature, or
						uncontrolled
						shutdown will be tolerated. In such cases, the final grade will be 0. Use the appropriate
						flag.<br /><br />
						- You should never have to edit a file except for an existing configuration file. If you wish to
						modify a
						file, you must clearly state the reasons for the editing and be in agreement with the evaluated
						student
						before doing anything.<br /><br />
						- You must also verify the absence of memory leaks. Any memory allocated on the heap must be
						properly freed
						before the end of the program's execution. You are entitled to use any tool available on the
						machine such as
						leaks, valgrind, or e_fence. In the case of memory leaks, check the appropriate flag.<br />
					</p>
				</div>
				<hr />
				<div class="dancer from-down" id="attachments-24830">
					<h3 class="font-weight-bold mb-1">Attachments</h3>
					<div class="project-attachments-list">
					</div>
					<div class="project-attachments-list">
						<div class="project-attachment-item">
							<h4 class="attachment-name">
								<span class="icon-file"></span>
								<a href="https://github.com/rphlr/42-Subjects/" target="_blank">subject.pdf</a>
							</h4>
						</div>
					</div>
				</div>
			</div>
			<form accept-charset="UTF-8" class="simple_form form-horizontal" id="edit_scale_team_5411828" method="post"
				novalidate="novalidate"><input name="utf8" type="hidden" value="✓" /><input name="_method" type="hidden"
					value="patch" /><input name="authenticity_token" type="hidden"
					value="6Ham6Zq7dWNKn0GqURyJ/9favA08IRL2ZZlqRe45A5XzMg8ElLpzR1Nr9YnMvzkgYRhOZfma8IhsTLDFrmK/QQ==" />
				<div class="scale-section-answers col-sm-12 scale-div">
					<section class="scale-section-item dancer from-down" id="section-70027">
						<div class="section-header">
							<hr />
							<h3 class="font-weight-bold mb-1">Mandatory Part</h3>
							<p class="font-italic">You must test the functions present in the libft, either with your
								own set of tests
								or with those of the person being evaluated.
							</p>
						</div>
						<h4 class="scale-question-name">Libc functions #1</h4>
						<p class="scale-section-guidelines">Test that ALL these functions fulfill their role exactly as
							they should:
						</p>
						<ul>
							<li>ft_strlen</li>
							<li>ft_memcpy</li>
							<li>ft_memset</li>
							<li>ft_bzero</li>
							<li>ft_memmove</li>
							<li>ft_memcmp</li>
							<li>ft_memchr Does it work?</li>
						</ul>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
										name="[scale_team][answers_attributes][1][id]" /></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden"
										id="scale_team_answer_question_id"
										name="[scale_team][answers_attributes][1][question_id]" /></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][1]_true"
									name="[scale_team][answers_attributes][1][value]" type="radio" />
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][1]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" checked="checked" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][1]_false"
									name="[scale_team][answers_attributes][1][value]" type="radio" />
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][1]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Libc functions #2</h4>
						<p class="scale-section-guidelines">Test that ALL these functions fulfill their role exactly as
							they should:
						</p>
						<ul>
							<li>ft_isalpha</li>
							<li>ft_isdigit</li>
							<li>ft_isalnum</li>
							<li>ft_isascii</li>
							<li>ft_isprint Does it work?</li>
						</ul>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
										name="[scale_team][answers_attributes][2][id]" /></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden"
										id="scale_team_answer_question_id"
										name="[scale_team][answers_attributes][2][question_id]" /></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][2]_true"
									name="[scale_team][answers_attributes][2][value]" type="radio" />
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][2]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" checked="checked" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][2]_false"
									name="[scale_team][answers_attributes][2][value]" type="radio" />
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][2]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Libc functions #3</h4>
						<p class="scale-section-guidelines">Test that ALL these functions fulfill their role exactly as
							they should:

						</p>
						<ul>
							<li>ft_toupper</li>
							<li>ft_tolower</li>
							<li>ft_strchr</li>
							<li>ft_strrchr Does it work?</li>
						</ul>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
										name="[scale_team][answers_attributes][3][id]" /></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden"
										id="scale_team_answer_question_id"
										name="[scale_team][answers_attributes][3][question_id]" /></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][3]_true"
									name="[scale_team][answers_attributes][3][value]" type="radio" />
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][3]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" checked="checked" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][3]_false"
									name="[scale_team][answers_attributes][3][value]" type="radio" />
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][3]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Libc functions #4</h4>
						<p class="scale-section-guidelines">Test that ALL these functions fulfill their role exactly as
							they should:
						</p>
						<ul>
							<li>ft_strlcat</li>
							<li>ft_strlcpy</li>
							<li>ft_atoi</li>
							<li>ft_strnstr</li>
							<li>ft_strncmp</li>
							<li>ft_calloc</li>
							<li>ft_strdup Does it work?</li>
						</ul>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
										name="[scale_team][answers_attributes][4][id]" /></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden"
										id="scale_team_answer_question_id"
										name="[scale_team][answers_attributes][4][question_id]" /></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][4]_true"
									name="[scale_team][answers_attributes][4][value]" type="radio" />
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][4]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" checked="checked" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][4]_false"
									name="[scale_team][answers_attributes][4][value]" type="radio" />
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][4]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Additional functions #1</h4>
						<p class="scale-section-guidelines">Test that ALL these functions fulfill their role exactly as
							they should:
						</p>
						<ul>
							<li>ft_substr</li>
							<li>ft_strjoin</li>
							<li>ft_putchar_fd</li>
							<li>ft_putstr_fd</li>
							<li>ft_putendl_fd</li>
							<li>ft_putnbr_fd Does it work?</li>
						</ul>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
										name="[scale_team][answers_attributes][5][id]" /></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden"
										id="scale_team_answer_question_id"
										name="[scale_team][answers_attributes][5][question_id]" /></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][5]_true"
									name="[scale_team][answers_attributes][5][value]" type="radio" />
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][5]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" checked="checked" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][5]_false"
									name="[scale_team][answers_attributes][5][value]" type="radio" />
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][5]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Additional functions #2</h4>
						<p class="scale-section-guidelines">Test that ALL these functions fulfill their role exactly as
							they should:
						</p>
						<ul>
							<li>ft_strmapi</li>
							<li>ft_striteri</li>
							<li>ft_strtrim</li>
							<li>ft_split</li>
							<li>ft_itoa Does it work?</li>
						</ul>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
										name="[scale_team][answers_attributes][6][id]" /></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden"
										id="scale_team_answer_question_id"
										name="[scale_team][answers_attributes][6][question_id]" /></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][6]_true"
									name="[scale_team][answers_attributes][6][value]" type="radio" />
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][6]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" checked="checked" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][6]_false"
									name="[scale_team][answers_attributes][6][value]" type="radio" />
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][6]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<section class="scale-section-item dancer from-down" id="section-70028">
							<div class="section-header">
								<hr />
								<h3 class="font-weight-bold mb-1">Bonus Part</h3>
								<p class="font-italic">Bonuses will only be considered if the mandatory part is
									excellent. This means
									that the mandatory part must have been completed from start to finish, with perfect
									error handling
									even in the case of unexpected use. If all the mandatory points have not been
									awarded during this
									defense, no bonus points will be counted.</p>
							</div>
							<h4 class="scale-question-name">ft_lstnew</h4>
							<p class="scale-section-guidelines">Does it work?</p>
							<div class="scale-question-answers">
								<div class="form-group hidden scale_team_answer_id">
									<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
											name="[scale_team][answers_attributes][7][id]" /></div>
								</div>
								<div class="form-group hidden scale_team_answer_question_id">
									<div class="col-sm-10"><input class="form-control hidden"
											id="scale_team_answer_question_id"
											name="[scale_team][answers_attributes][7][question_id]" /></div>
								</div>
								<div class="btn-group block">
									<input autocomplete="off" class="checkbox-input"
										id="radio_[scale_team][answers_attributes][7]_true"
										name="[scale_team][answers_attributes][7][value]" type="radio" />
									<label class="btn btn-success checkbox-label light-bg"
										for="radio_[scale_team][answers_attributes][7]_true">
										<span class="icon-check"></span>
										Yes
									</label>
									<input autocomplete="off" checked="checked" class="checkbox-input"
										id="radio_[scale_team][answers_attributes][7]_false"
										name="[scale_team][answers_attributes][7][value]" type="radio" />
									<label class="btn btn-danger checkbox-label light-bg"
										for="radio_[scale_team][answers_attributes][7]_false">
										<span class="icon-times"></span>
										No
									</label>
								</div>
							</div>
							<h4 class="scale-question-name">ft_lstdelone</h4>
							<p class="scale-section-guidelines">Does it work?</p>
							<div class="scale-question-answers">
								<div class="form-group hidden scale_team_answer_id">
									<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
											name="[scale_team][answers_attributes][8][id]" /></div>
								</div>
								<div class="form-group hidden scale_team_answer_question_id">
									<div class="col-sm-10"><input class="form-control hidden"
											id="scale_team_answer_question_id"
											name="[scale_team][answers_attributes][8][question_id]" /></div>
								</div>
								<div class="btn-group block">
									<input autocomplete="off" class="checkbox-input"
										id="radio_[scale_team][answers_attributes][8]_true"
										name="[scale_team][answers_attributes][8][value]" type="radio" />
									<label class="btn btn-success checkbox-label light-bg"
										for="radio_[scale_team][answers_attributes][8]_true">
										<span class="icon-check"></span>
										Yes
									</label>
									<input autocomplete="off" checked="checked" class="checkbox-input"
										id="radio_[scale_team][answers_attributes][8]_false"
										name="[scale_team][answers_attributes][8][value]" type="radio" />
									<label class="btn btn-danger checkbox-label light-bg"
										for="radio_[scale_team][answers_attributes][8]_false">
										<span class="icon-times"></span>
										No
									</label>
								</div>
							</div>
							<h4 class="scale-question-name">ft_lstclear</h4>
							<p class="scale-section-guidelines">Does it work?</p>
							<div class="scale-question-answers">
								<div class="form-group hidden scale_team_answer_id">
									<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
											name="[scale_team][answers_attributes][9][id]" /></div>
								</div>
								<div class="form-group hidden scale_team_answer_question_id">
									<div class="col-sm-10"><input class="form-control hidden"
											id="scale_team_answer_question_id"
											name="[scale_team][answers_attributes][9][question_id]" /></div>
								</div>
								<div class="btn-group block">
									<input autocomplete="off" class="checkbox-input"
										id="radio_[scale_team][answers_attributes][9]_true"
										name="[scale_team][answers_attributes][9][value]" type="radio" />
									<label class="btn btn-success checkbox-label light-bg"
										for="radio_[scale_team][answers_attributes][9]_true">
										<span class="icon-check"></span>
										Yes
									</label>
									<input autocomplete="off" checked="checked" class="checkbox-input"
										id="radio_[scale_team][answers_attributes][9]_false"
										name="[scale_team][answers_attributes][9][value]" type="radio" />
									<label class="btn btn-danger checkbox-label light-bg"
										for="radio_[scale_team][answers_attributes][9]_false">
										<span class="icon-times"></span>
										No
									</label>
								</div>
							</div>
							<h4 class="scale-question-name">ft_lstadd_front</h4>
							<p class="scale-section-guidelines">Does it work?</p>
							<div class="scale-question-answers">
								<div class="form-group hidden scale_team_answer_id">
									<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
											name="[scale_team][answers_attributes][10][id]" /></div>
								</div>
								<div class="form-group hidden scale_team_answer_question_id">
									<div class="col-sm-10"><input class="form-control hidden"
											id="scale_team_answer_question_id"
											name="[scale_team][answers_attributes][10][question_id]" /></div>
								</div>
								<div class="btn-group block">
									<input autocomplete="off" class="checkbox-input"
										id="radio_[scale_team][answers_attributes][10]_true"
										name="[scale_team][answers_attributes][10][value]" type="radio" />
									<label class="btn btn-success checkbox-label light-bg"
										for="radio_[scale_team][answers_attributes][10]_true">
										<span class="icon-check"></span>
										Yes
									</label>
									<input autocomplete="off" checked="checked" class="checkbox-input"
										id="radio_[scale_team][answers_attributes][10]_false"
										name="[scale_team][answers_attributes][10][value]" type="radio" />
									<label class="btn btn-danger checkbox-label light-bg"
										for="radio_[scale_team][answers_attributes][10]_false">
										<span class="icon-times"></span>
										No
									</label>
								</div>
							</div>
							<h4 class="scale-question-name">ft_lstadd_back</h4>
							<p class="scale-section-guidelines">Does it work?</p>
							<div class="scale-question-answers">
								<div class="form-group hidden scale_team_answer_id">
									<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
											name="[scale_team][answers_attributes][11][id]" /></div>
								</div>
								<div class="form-group hidden scale_team_answer_question_id">
									<div class="col-sm-10"><input class="form-control hidden"
											id="scale_team_answer_question_id"
											name="[scale_team][answers_attributes][11][question_id]" /></div>
								</div>
								<div class="btn-group block">
									<input autocomplete="off" class="checkbox-input"
										id="radio_[scale_team][answers_attributes][11]_true"
										name="[scale_team][answers_attributes][11][value]" type="radio" />
									<label class="btn btn-success checkbox-label light-bg"
										for="radio_[scale_team][answers_attributes][11]_true">
										<span class="icon-check"></span>
										Yes
									</label>
									<input autocomplete="off" checked="checked" class="checkbox-input"
										id="radio_[scale_team][answers_attributes][11]_false"
										name="[scale_team][answers_attributes][11][value]" type="radio" />
									<label class="btn btn-danger checkbox-label light-bg"
										for="radio_[scale_team][answers_attributes][11]_false">
										<span class="icon-times"></span>
										No
									</label>
								</div>
							</div>
							<h4 class="scale-question-name">ft_lstsize</h4>
							<p class="scale-section-guidelines">Does it work?</p>
							<div class="scale-question-answers">
								<div class="form-group hidden scale_team_answer_id">
									<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
											name="[scale_team][answers_attributes][12][id]" /></div>
								</div>
								<div class="form-group hidden scale_team_answer_question_id">
									<div class="col-sm-10"><input class="form-control hidden"
											id="scale_team_answer_question_id"
											name="[scale_team][answers_attributes][12][question_id]" /></div>
								</div>
								<div class="btn-group block">
									<input autocomplete="off" class="checkbox-input"
										id="radio_[scale_team][answers_attributes][12]_true"
										name="[scale_team][answers_attributes][12][value]" type="radio" />
									<label class="btn btn-success checkbox-label light-bg"
										for="radio_[scale_team][answers_attributes][12]_true">
										<span class="icon-check"></span>
										Yes
									</label>
									<input autocomplete="off" checked="checked" class="checkbox-input"
										id="radio_[scale_team][answers_attributes][12]_false"
										name="[scale_team][answers_attributes][12][value]" type="radio" />
									<label class="btn btn-danger checkbox-label light-bg"
										for="radio_[scale_team][answers_attributes][12]_false">
										<span class="icon-times"></span>
										No
									</label>
								</div>
							</div>
							<h4 class="scale-question-name">ft_lstlast</h4>
							<p class="scale-section-guidelines">Does it work?</p>
							<div class="scale-question-answers">
								<div class="form-group hidden scale_team_answer_id">
									<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
											name="[scale_team][answers_attributes][13][id]" /></div>
								</div>
								<div class="form-group hidden scale_team_answer_question_id">
									<div class="col-sm-10"><input class="form-control hidden"
											id="scale_team_answer_question_id"
											name="[scale_team][answers_attributes][13][question_id]" /></div>
								</div>
								<div class="btn-group block">
									<input autocomplete="off" class="checkbox-input"
										id="radio_[scale_team][answers_attributes][13]_true"
										name="[scale_team][answers_attributes][13][value]" type="radio" />
									<label class="btn btn-success checkbox-label light-bg"
										for="radio_[scale_team][answers_attributes][13]_true">
										<span class="icon-check"></span>
										Yes
									</label>
									<input autocomplete="off" checked="checked" class="checkbox-input"
										id="radio_[scale_team][answers_attributes][13]_false"
										name="[scale_team][answers_attributes][13][value]" type="radio" />
									<label class="btn btn-danger checkbox-label light-bg"
										for="radio_[scale_team][answers_attributes][13]_false">
										<span class="icon-times"></span>
										No
									</label>
								</div>
							</div>
							<h4 class="scale-question-name">ft_lstiter</h4>
							<p class="scale-section-guidelines">Does it work?</p>
							<div class="scale-question-answers">
								<div class="form-group hidden scale_team_answer_id">
									<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
											name="[scale_team][answers_attributes][14][id]" /></div>
								</div>
								<div class="form-group hidden scale_team_answer_question_id">
									<div class="col-sm-10"><input class="form-control hidden"
											id="scale_team_answer_question_id"
											name="[scale_team][answers_attributes][14][question_id]" /></div>
								</div>
								<div class="btn-group block">
									<input autocomplete="off" class="checkbox-input"
										id="radio_[scale_team][answers_attributes][14]_true"
										name="[scale_team][answers_attributes][14][value]" type="radio" />
									<label class="btn btn-success checkbox-label light-bg"
										for="radio_[scale_team][answers_attributes][14]_true">
										<span class="icon-check"></span>
										Yes
									</label>
									<input autocomplete="off" checked="checked" class="checkbox-input"
										id="radio_[scale_team][answers_attributes][14]_false"
										name="[scale_team][answers_attributes][14][value]" type="radio" />
									<label class="btn btn-danger checkbox-label light-bg"
										for="radio_[scale_team][answers_attributes][14]_false">
										<span class="icon-times"></span>
										No
									</label>
								</div>
							</div>
							<h4 class="scale-question-name">ft_lstmap</h4>
							<p class="scale-section-guidelines">Does it work?</p>
							<div class="scale-question-answers">
								<div class="form-group hidden scale_team_answer_id">
									<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
											name="[scale_team][answers_attributes][15][id]" /></div>
								</div>
								<div class="form-group hidden scale_team_answer_question_id">
									<div class="col-sm-10"><input class="form-control hidden"
											id="scale_team_answer_question_id"
											name="[scale_team][answers_attributes][15][question_id]" /></div>
								</div>
								<div class="btn-group block">
									<input autocomplete="off" class="checkbox-input"
										id="radio_[scale_team][answers_attributes][15]_true"
										name="[scale_team][answers_attributes][15][value]" type="radio" />
									<label class="btn btn-success checkbox-label light-bg"
										for="radio_[scale_team][answers_attributes][15]_true">
										<span class="icon-check"></span>
										Yes
									</label>
									<input autocomplete="off" checked="checked" class="checkbox-input"
										id="radio_[scale_team][answers_attributes][15]_false"
										name="[scale_team][answers_attributes][15][value]" type="radio" />
									<label class="btn btn-danger checkbox-label light-bg"
										for="radio_[scale_team][answers_attributes][15]_false">
										<span class="icon-times"></span>
										No
									</label>
								</div>
							</div>
				</div>
				<div class="col-sm-12 scale-div pb-4">
					<div class="dancer from-down" id="ratings-24830">
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
		</div>
	</div>
</body>

</html>