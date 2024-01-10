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
	<title>CPP Module 05 correction</title>
	<link rel="shortcut icon" href="<?php echo PATH; ?>assets/favicons/favicon_no-bg.ico" type="image/x-icon">
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
					Scale for project

					<a href="https://projects.intra.42.fr/projects/cpp-module-05">CPP Module 05</a>
				</h3>
				<h5 class="text-muted text-center">You should evaluate 1 student in this team</h5>

				<hr>
				<div class="p-0 scale-introduction dancer from-down" id="introduction-21685">
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
				<div class="p-0 scale-guidelines dancer from-down" id="guidelines-21685">
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
						identify any mistakes that shouldn't be repeated in the future.<br><br>- You should never have
						to edit any file except the configuration file if it <br> exists. If you want to edit a file,
						take the time to explicit the reasons <br> with the evaluated student and make sure both of you
						are okay with this.<br><br>- You must also verify the absence of memory leaks. Any memory
						allocated on <br> the heap must be properly freed before the end of execution. <br> You are
						allowed to use any of the different tools available on the computer, <br> such as leaks,
						valgrind, or e_fence. In case of memory leaks, tick the <br> appropriate flag.<br>
					</p>
				</div>
				<hr>
				<div class="dancer from-down" id="attachments-21685">
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
			<form class="simple_form form-horizontal" novalidate="novalidate" id="edit_scale_team_5392638"
				action="/projects/cpp-module-04/project_sessions/3328/evaluations/1607/scales/21685/scale_teams/5392638"
				accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden"
					name="_method" value="patch"><input type="hidden" name="authenticity_token"
					value="klQZt1C6LxsivitAy+RL40k0fIWMPnQoNljV8uvdAaPe+D1vvXxlVlftk54fEbw/P2CmFGJCVK6OJODG8uUbAA==">
				<div class="scale-section-answers col-sm-12 scale-div">
					<section class="scale-section-item dancer from-down" id="section-61073">
						<div class="section-header">
							<h3 class="font-weight-bold mb-1">Preliminary tests</h3>
							<p class="font-italic">If cheating is suspected, the evaluation stops
								here. Use the "Cheat" flag to report it. Take this decision calmly,
								wisely, and please, use this button with caution.</p>
						</div>
						<h4 class="scale-question-name">Prerequisites</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>The code must compile with c++ and the flags -Wall -Wextra -Werror<br>
							Don't forget this project has to follow the C++98 standard. Thus, <br>
							C++11 (and later) functions or containers are NOT expected.</p>

						<p>Any of these means you must not grade the exercise in question:</p>

						<ul>
							<li>A function is implemented in a header file (except for template
								functions).</li>
							<li>A Makefile compiles without the required flags and/or another
								compiler than c++.</li>
						</ul>

						<p>Any of these means that you must flag the project with "Forbidden <br>
							Function":</p>

						<ul>
							<li>Use of a "C" function (*alloc, *printf, free).</li>
							<li>Use of a function not allowed in the exercise guidelines.</li>
							<li>Use of "using namespace &lt;ns_name&gt;" or the "friend" keyword.</li>
							<li>Use of an external library, or features from versions other than
								C++98.</li>
						</ul>
						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][0][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="207716"
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
					<section class="scale-section-item dancer from-down" id="section-61074">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">Ex00: Mommy, when I grow up, I want to be a
								bureaucrat!</h3>
							<p class="font-italic">As usual, there has to be the main function that contains enough
								tests to prove the program works as expected. If
								there isn't, do not grade this exercise. If any non-interface class is not in orthodox
								canonical class form, do not grade
								this exercise.
							</p>
						</div>
						<h4 class="scale-question-name">Bureaucrat</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>There is a Makefile that compiles using the appropriate flags.<br>
							There is a Bureaucrat class. It has a constant name<br>
							It has a grade that ranges from 1 (highest) to 150 (lowest).<br>
							Exceptions are thrown when trying to create a Bureaucrat with a grade<br>
							that is too high or too low.<br>
							There are accessors for the attributes<br>
							There are functions to increment / decrement the grade,<br>
							They throw exceptions when it's appropriate. Remember that incrementing a<br>
							grade 3 will give you a grade 2 (1 is the highest).<br>
							The exceptions that are used inherit from std::exception, or from<br>
							something derived from std::exception (i.e. they are catchable as<br>
							std::exception & e).<br>
							There is a << operator to ostream overload that outputs the info of the<br>
								Bureaucrat.<br>
						</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][1][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="207717"
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
					<section class="scale-section-item dancer from-down" id="section-61076">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">Ex01: Form up, maggots!</h3>
							<p class="font-italic">As usual, there has to be the main function that contains enough
								tests to prove the program works as expected. If
								there isn't, do not grade this exercise. If any non-interface class is not in orthodox
								canonical class form, do not grade
								this exercise.
							</p>
						</div>
						<h4 class="scale-question-name">Form</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>There is a Makefile that compiles using the appropriate flags.
							There is a Form class.
							It has a name, a bool that indicates whether is it signed (at the
							beginning it's not), a grade required to sign it, and a grade required
							to execute it.
							The names and grades are constant.
							All these attributes are private and not protected.
							The grades of the forms follow the same constraints as the Bureaucrat's
							(exceptions, 1 = highest 150 = lowest, and so forth).
							There are accessors for the attributes and a << operator to ostream overload that displays
								the complete state of the Form. There is a Form::beSigned() member function that works
								as described by the subject. There is a Bureaucrat::signForm() function that works as
								described by the subject. </p>

								<p></p>
								<div class="scale-question-answers">
									<div class="form-group hidden scale_team_answer_id">
										<div class="col-sm-10"><input class="form-control hidden"
												name="[scale_team][answers_attributes][2][id]" type="hidden"
												id="scale_team_answer_id"></div>
									</div>
									<div class="form-group hidden scale_team_answer_question_id">
										<div class="col-sm-10"><input class="form-control hidden" value="207735"
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
					</section>
					<section class="scale-section-item dancer from-down" id="section-61076">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">Ex02: No, you need form 28B, not 28C...</h3>
							<p class="font-italic">As usual, there has to be the main function that contains enough
								tests to prove the program works as expected. If
								there isn't, do not grade this exercise. If any non-interface class is not in orthodox
								canonical class form, do not grade
								this exercise.
							</p>
						</div>
						<h4 class="scale-question-name">Forms that actually do something</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>There is a Makefile that compiles using the appropriate flags<br>
							There are concrete forms that are conform to the specifications of the<br>
							subject (required grades, names and actions).<br>
							They take only one parameter in their constructor, which is their target.<br>
							There is a Form::execute(Bureaucrat const & executor) method that works<br>
							as specified by the subject.<br>
							Either this method is pure and the grade checks are implemented in each<br>
							subclass, or this method performs the checks, then calls another method<br>
							in derived class that only executes the action.<br>
							Both of these techniques are valid.<br>
							There is a Bureaucrat::executeForm(Form const & form) that works as<br>
							specified by the subject.<br>
						</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][9][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="207725"
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
					<section class="scale-section-item dancer from-down" id="section-61077">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">Ex03: At least this beats coffee-making</h3>
							<p class="font-italic">As usual, there has to be the main function that contains enough
								tests to prove the program works as expected. If
								there isn't, do not grade this exercise. If any non-interface class is not in orthodox
								canonical class form, do not grade
								this exercise.
							</p>
						</div>
						<h4 class="scale-question-name">Intern</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>There is a Makefile that compiles using the appropriate flags.<br>
							There is an Intern class<br>
							It has a makeForm() function that works as specified by the subject.<br>
						</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][11][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="207727"
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
						<h4 class="scale-question-name">Good dispatching</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>The makeForm() function should use some kind of array of pointers to member<br>
							functions to handle the creation of Forms.<br>
							If it's using an unclean method, like if/elseif/elseif/else branchings, or<br>
							some other ugly stuff like this, please count this as wrong.<br>
						</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][12][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="207728"
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
					<div class="dancer from-down" id="ratings-21685">
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
							<label class="btn btn-danger btn-default label_flag_invalid_compilation negative on-active"
								for="scale_team_flag_id_5" name="scale_team[flag_id]">
								<span class="iconf-skull-2"></span>
								Invalid compilation
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