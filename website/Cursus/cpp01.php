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
	<title>CPP Module 01 correction</title>
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

					<a href="https://projects.intra.42.fr/projects/cpp-module-01">CPP Module 01</a>
				</h3>
				<h5 class="text-muted text-center">You should evaluate 1 student in this team</h5>

				<hr>
				<div class="p-0 scale-introduction dancer from-down" id="introduction-24654">
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
				<div class="p-0 scale-guidelines dancer from-down" id="guidelines-24654">
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
						future.<br><br>- You should never have to edit any file except the configuration file if it <br>
						exists. If you want to edit a file, take the time to explicit the reasons <br> with the
						evaluated
						student and make sure both of you are okay with this.<br><br>- You must also verify the absence
						of
						memory leaks. Any memory allocated on <br> the heap must be properly freed before the end of
						execution. <br> You are allowed to use any of the different tools available on the computer,
						<br> such
						as leaks, valgrind, or e_fence. In case of memory leaks, tick the <br> appropriate flag.<br>
					</p>
				</div>

				<hr>
				<div class="dancer from-down" id="attachments-24654">
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
			<form class="simple_form form-horizontal" novalidate="novalidate" id="edit_scale_team_5545693"
				action="https://projects.intra.42.fr/projects/cpp-module-01/project_sessions/3325/evaluations/1602/scales/24654/scale_teams/5545693"
				accept-charset="UTF-8" method="post">
				<div class="scale-section-answers col-sm-12 scale-div">
					<section class="scale-section-item dancer from-down" id="section-69375">
						<div class="section-header">
							<h3 class="font-weight-bold mb-1">Preliminary tests</h3>
							<p class="font-italic">If cheating is suspected, the evaluation stops here. Use the "Cheat"
								flag to
								report it. Take this decision calmly, wisely, and please, use this button with caution.
							</p>
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
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
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
					<section class="scale-section-item dancer from-down" id="section-69376">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">Exercise 00: BraiiiiiiinnnzzzZ</h3>
							<p class="font-italic">The goal of this exercise is to understand how to allocate memory in
								C++.
							</p>
						</div>
						<h4 class="scale-question-name">Makefile and tests</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>There is a Makefile that compiles using the appropriate flags.<br>
							There is at least a main to test the exercise.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
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
						<h4 class="scale-question-name">Zombie Class</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>There is a Zombie Class.<br>
							It has a private name attribute.<br>
							It has at least a constructor.<br>
							It has a member function announce( void ) that prints: "&lt;name&gt;:
							BraiiiiiiinnnzzzZ..."<br>
							The destructor prints a debug message that includes the name of the zombie.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
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
						<h4 class="scale-question-name">newZombie</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>There is a newZombie() function prototyped as: [ Zombie* newZombie( std::string name ); ]<br>
							It should allocate a Zombie on the heap and return it.<br>
							Ideally, it should call the constructor that takes a string and initializes <br>
							the name.<br>
							The exercise should be marked as correct if the Zombie can announce itself <br>
							with the name passed to the function.<br>
							There are tests to prove everything works.<br>
							The zombie is deleted correctly before the end of the program.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
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
						<h4 class="scale-question-name">randomChump</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>There is a randomChump() function prototyped as: [ void randomChump( std::string name );
							]<br>
							It should create a Zombie on the stack, and make it announce itself.<br>
							Ideally the zombie should be allocated on the stack (so implicitly deleted <br>
							at the end of the function). It can also be allocated on the heap and then <br>
							explicitly deleted.<br>
							The student must justify their choices.<br>
							There are tests to prove everything works.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
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
					<section class="scale-section-item dancer from-down" id="section-69377">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">Exercise 01: Moar brainz!</h3>
							<p class="font-italic">The goal of this exercise is to allocate a number of objects at the
								same time
								using new[], initialize them, and to properly delete them.
							</p>
						</div>
						<h4 class="scale-question-name">Makefile and tests</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>There is a Makefile that compiles using the appropriate flags.<br>
							There is at least a main to test the exercise.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
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
						<h4 class="scale-question-name">zombieHorde</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>The Zombie Class has a default constructor.<br>
							There is a zombieHorde() function prototyped as: [ Zombie* zombieHorde( int N, std::string
							name );
							]<br>
							It allocates N zombies on the heap explicitly using new[].<br>
							After the allocation, there is an initialization of the objects to set their name.<br>
							It returns a pointer to the first zombie.<br>
							There are enough tests in the main to prove the previous points.<br>
							Like: calling announce() on all the zombies.<br>
							Last, all the zombies should be deleted at the same time in the main.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
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
					</section>
					<section class="scale-section-item dancer from-down" id="section-69378">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">Exercise 02: HI THIS IS BRAIN</h3>
							<p class="font-italic">Demystify references! Demystify references! Demystify references!
								Demystify references! Demystify references! Demystify references!
								Demystify references! Demystify references! Demystify references!
								Demystify references! Demystify references! Demystify references!
							</p>
						</div>
						<h4 class="scale-question-name">Makefile and tests</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>There is a Makefile that compiles using the appropriate flags.<br>
							There is at least a main to test the exercise.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
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
						<h4 class="scale-question-name">HI THIS IS BRAIN</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>There is a string containing "HI THIS IS BRAIN".<br>
							stringPTR is a pointer to the string.<br>
							stringREF is a reference to the string.<br>
							The address of the string is displayed using the string variable, the <br>
							stringPTR and the stringREF.<br>
							The variable content is displayed using the stringPTR and the stringREF.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
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
					<section class="scale-section-item dancer from-down" id="section-69379">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">Exercise 03: Unnecessary violence</h3>
							<p class="font-italic">The objective of this exercise is to understand that pointers and
								references
								present some small differences that make them less or more appropriate
								depending on the use and the lifecycle of the object used.
							</p>
						</div>
						<h4 class="scale-question-name">Makefile and tests</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>There is a Makefile that compiles using the appropriate flags.<br>
							There is at least a main to test the exercise.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
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
						<h4 class="scale-question-name">Weapon</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>There is a Weapon class that has a type string, a getType() and a setType().<br>
							The getType() function returns a const reference to the type string.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
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
						<h4 class="scale-question-name">HumanA and HumanB</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>HumanA can have a reference or a pointer to the Weapon.<br>
							Ideally, it should be implemented as a reference, since the Weapon exists <br>
							from creation until destruction, and never changes.<br>
							HumanB must have a pointer to a Weapon since the field is not set at <br>
							creation time, and the weapon can be NULL.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
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
					</section>
					<section class="scale-section-item dancer from-down" id="section-69380">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">Exercise 04: Sed is for losers</h3>
							<p class="font-italic">Thanks to this exercise, the student should have gotten familiar with
								ifstream and ofstream.
							</p>
						</div>
						<h4 class="scale-question-name">Makefile and tests</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>There is a Makefile that compiles using the appropriate flags.<br>
							There is at least a main to test the exercise.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
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
						<h4 class="scale-question-name">Exercise 04</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>There is a function replace (or other name) that works as specified in the <br>
							subject.<br>
							The error management is efficient: try to pass a file that does not exist, <br>
							change the permissions, pass it empty, etc.<br>
							If you can find an error that isn't handled, and isn't completely esoteric,<br>
							no points for this exercise.<br>
							The program must read from the file using an ifstream or equivalent, <br>
							and write using an ofstream or equivalent.<br>
							The implementation of the function should be done using functions from <br>
							std::string, no by reading the string character by character.<br>
							This is not C anymore!</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
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
					</section>
					<section class="scale-section-item dancer from-down" id="section-69381">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">Exercise 05: Harl 2.0</h3>
							<p class="font-italic">The goal of this exercise is to use pointers to class member
								functions.
								Also, this is the opportunity to discover the different log levels.
							</p>
						</div>
						<h4 class="scale-question-name">Makefile and tests</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>There is a Makefile that compiles using the appropriate flags.<br>
							There is at least a main to test the exercise.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
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
						<h4 class="scale-question-name">Our beloved Harl</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>There is a class Harl with at least the 5 functions required in the subject.<br>
							The function complain() executes the other functions using a pointer to them.<br>
							Ideally, the student should have implemented a way of matching the different<br>
							strings corresponding to the log level to the pointers of the corresponding<br>
							member function.<br>
							If the implementation is different but the exercise works, you should mark <br>
							it as valid. The only thing that is not allowed is using a ugly if/elseif/else. <br>
							The student could have chosen to change the message Harl displays or to <br>
							display the examples given in the subject, both are valid.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
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
					</section>
					<section class="scale-section-item dancer from-down" id="section-69382">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">Exercise 06: Harl filter</h3>
							<p class="font-italic">Now that you are experienced coders, you should use new instruction
								types,
								statements, loops, etc. The goal of this last exercise is to make you
								discover the switch statement.
							</p>
						</div>
						<h4 class="scale-question-name">Makefile and tests</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>There is a Makefile that compiles using the appropriate flags.<br>
							There is at least a main to test the exercise.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
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
						<h4 class="scale-question-name">Switching Harl Off</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>The program harlFilter takes as argument any of the log levels ("DEBUG", <br>
							"INFO", "WARNING" or "ERROR"). It should then display just the messages <br>
							that are at the same level or above (DEBUG &lt; INFO &lt; WARNING &lt; ERROR). This <br>
							must be implemented using a switch statement with a default case.<br>
							Once again, no if/elseif/else anymore please.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
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
					<div class="dancer from-down" id="ratings-24654">
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


</body>

</html>