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
	<title>Born2beroot correction</title>
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
	<?php require("../utils/menu_div.php"); ?>
	<div class="container-item scale-team-container">
		<div class="row mt-4">
			<div class="scale-section-infos col-sm-12 scale-div">
				<h3 class="font-weight-bold text-uppercase text-center mt-4 pt-4">
					<br />Scale for project
					<a href="https://projects.intra.42.fr/projects/born2beroot">Born2beroot</a>
				</h3>
				<h5 class="text-muted text-center">You should evaluate 1 student in this team</h5>
				<hr />
				<div class="p-0 scale-introduction dancer from-down" id="introduction-24830">
					<h3 class="font-weight-bold mb-1">Introduction</h3>
					<p>
						Please follow the rules below:<br /><br />
						- Remain polite, courteous, respectful, and constructive during the evaluation process. The
						well-being of
						the
						community depends on it.<br /><br />
						- Identify with the evaluated person or group any potential malfunctions in their work.
						Take the time to discuss and debate the identified issues.<br /><br />
						- You must take into account that there may be slight differences in interpretation between the
						project instructions, its scope, and its features. Keep an open mind and grade in the most
						honest way possible. The pedagogy is only valid if the peer evaluation is done seriously.<br />
					</p>
				</div>
				<div class="p-0 scale-guidelines dancer from-down" id="guidelines-24830">
					<h3 class="font-weight-bold mb-1">Guidelines</h3>
					<p>
						- Only grade what is contained in the student's or group's cloned Git repository.<br /><br />
						- Ensure that the Git repository actually belongs to the student or group, that the project is
						the one
						expected, and that "git clone" is used in an empty folder.<br /><br />
						- Thoroughly check that no alias has been used to deceive you and make sure you are evaluating
						the official submission.<br /><br />
						- To avoid any surprises, check with the student or group for any potential scripts used
						to facilitate the evaluation (for example, test or automation scripts).<br /><br />
						- If you have not done the project you are evaluating, you must read the subject in its entirety
						before
						starting the evaluation.<br /><br />
						- Use the available flags to report an empty submission, a non-working program, a Norme error,
						cheating,
						etc. In these cases, the evaluation is finished and the grade is 0, or -42 in case of cheating.
						However,
						except in cases of cheating, you are encouraged to continue the discussion on the
						work submitted, even if it is incomplete. This is to identify mistakes not to repeat in the
						future.<br />
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
					<section class="scale-section-item dancer from-down" id="section-70025">
						<div class="section-header">
							<h3 class="font-weight-bold mb-1">Preliminaries</h3>
							<p class="font-italic">If a case of cheating is suspected, grading and evaluation end
								immediately. To
								report it, select the "Cheat" flag. Be careful to use it calmly, cautiously, and
								judiciously.</p>
						</div>
						<h4 class="scale-question-name">Preliminary Tests</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Verify the following points:</p>
						<ul>
							<li>The conditions for access to the defense are met: the evaluated person(s) is present,
								the submission
								is non-empty and truly belongs to them, etc...</li>
							<li>For this project, you must clone the Git repository on the computer of the person being
								evaluated.
							</li>
						</ul>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
										name="[scale_team][answers_attributes][0][id]" /></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden"
										id="scale_team_answer_question_id"
										name="[scale_team][answers_attributes][0][question_id]" value="236761" /></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][0]_true"
									name="[scale_team][answers_attributes][0][value]" type="radio" value="1" />
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][0]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" checked="checked" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][0]_false"
									name="[scale_team][answers_attributes][0][value]" type="radio" value="0" />
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][0]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
					</section>
					<section class="scale-section-item dancer from-down" id="section-70026">
						<div class="section-header">
							<hr />
							<h3 class="font-weight-bold mb-1">General Instructions</h3>
							<p class="font-italic"></p>
						</div>
						<h4 class="scale-question-name">General Guidelines</h4>
						<p class="scale-section-guidelines">
						</p>
						<ul>
							<li>During the defense, as soon as you need help to verify a point, the evaluated person
								must assist you.
							</li>
							<li>Check that the "signature.txt" file is present at the root of the cloned repository.
							</li>
							<li>Ensure that the signature contained in "signature.txt" matches that of the ".vdi" file
								of the virtual
								machine being evaluated. A simple diff should allow you to compare the two signatures.
								If needed, ask
								the evaluated person where their ".vdi" file is located.</li>
							<li>As a precaution, you may duplicate the original virtual machine to keep a copy.</li>
							<li>Launch the virtual machine to be evaluated.</li>
							<li>If something does not work as expected or the two signatures differ, the evaluation
								stops here.</li>
						</ul>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
										name="[scale_team][answers_attributes][1][id]" /></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden"
										id="scale_team_answer_question_id"
										name="[scale_team][answers_attributes][1][question_id]" value="236762" /></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][1]_true"
									name="[scale_team][answers_attributes][1][value]" type="radio" value="1" />
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][1]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" checked="checked" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][1]_false"
									name="[scale_team][answers_attributes][1][value]" type="radio" value="0" />
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][1]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
					</section>
					<section class="scale-section-item dancer from-down" id="section-70027">
						<div class="section-header">
							<hr />
							<h3 class="font-weight-bold mb-1">Mandatory Part</h3>
							<p class="font-italic">The project involves creating and configuring a virtual machine
								following strict
								rules. The evaluated person will need to assist you during the defense. Make sure all
								the following
								points are respected.</p>
						</div>
						<h4 class="scale-question-name">Project Overview</h4>
						<p class="scale-section-guidelines">
						</p>
						<ul>
							<li>The evaluated person must simply explain:
								<ul>
									<li>The basic functioning of their virtual machine</li>
									<li>Their choice of operating system</li>
									<li>The basic differences between Rocky and Debian</li>
									<li>The benefits of virtual machines</li>
									<li>If the chosen operating system is Rocky, they must explain what SELinux and DNF
										are.</li>
									<li>If the chosen operating system is Debian, they must explain the difference
										between aptitude and
										apt, and what APPArmor is. During the defense, a script must display information
										every 10 minutes.
										Its operation will be checked in detail later. If the explanations are not
										clear, the evaluation
										stops here.</li>
								</ul>
							</li>
						</ul>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
										name="[scale_team][answers_attributes][2][id]" /></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden"
										id="scale_team_answer_question_id"
										name="[scale_team][answers_attributes][2][question_id]" value="236763" /></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][2]_true"
									name="[scale_team][answers_attributes][2][value]" type="radio" value="1" />
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][2]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" checked="checked" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][2]_false"
									name="[scale_team][answers_attributes][2][value]" type="radio" value="0" />
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][2]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Simple Configuration</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Reminder: as soon as you need help to verify a point, the evaluated person must be able to
							assist you.
						</p>
						<ul>
							<li>Verify that the machine does not have a graphical environment at startup. A password
								will be requested
								before any connection attempt on this machine. Log in with a non-root user. Verify that
								the chosen
								password respects the rules imposed in the subject. Then, with the help of the
								evaluator, make sure
								that:</li>
							<li>The chosen operating system is indeed Debian or Rocky</li>
							<li>The UFW service is properly launched</li>
							<li>The SSH service is properly launched. If something does not work as expected or is not
								clearly
								explained, the evaluation stops here.</li>
						</ul>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
										name="[scale_team][answers_attributes][3][id]" /></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden"
										id="scale_team_answer_question_id"
										name="[scale_team][answers_attributes][3][question_id]" value="236764" /></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][3]_true"
									name="[scale_team][answers_attributes][3][value]" type="radio" value="1" />
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][3]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" checked="checked" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][3]_false"
									name="[scale_team][answers_attributes][3][value]" type="radio" value="0" />
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][3]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">User</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Reminder: as soon as you need help to check a point, the evaluated person must be able to
							assist you.</p>
						<p>The subject requires that a user with the login name of the evaluated person be present on
							the virtual
							machine. Verify that this user has been added and that they belong to the "sudo" and
							"user42" groups.</p>
						<p>Ensure the rules imposed in the subject concerning the password policy have been implemented
							by following
							the steps below.<br />
							First, create a new user. Assign them a password of your choice, respecting the subject's
							rules.<br />
							The evaluated person must now explain how they were able to implement the requested rules on
							their virtual
							machine.<br />
							Normally, one or two files would have been modified.<br />
							If there is any problem, the evaluation stops here.</p>
						<ul>
							<li>
								<p>Now that you have a new user, ask the evaluated person to create a group named
									"evaluating" in front
									of you and assign it to this user.<br />
									Finally, check that this user indeed belongs to the "evaluating" group.</p>
							</li>
							<li>
								<p>To finish, ask the evaluated person to explain the purpose of this password policy,
									as well as the
									advantages and disadvantages of its implementation. Of course, answering that it is
									because the
									subject requires it does not count.<br />
									If something does not work as expected or is not clearly explained, the evaluation
									stops here.</p>
							</li>
						</ul>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
										name="[scale_team][answers_attributes][4][id]" /></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden"
										id="scale_team_answer_question_id"
										name="[scale_team][answers_attributes][4][question_id]" value="236765" /></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][4]_true"
									name="[scale_team][answers_attributes][4][value]" type="radio" value="1" />
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][4]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" checked="checked" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][4]_false"
									name="[scale_team][answers_attributes][4][value]" type="radio" value="0" />
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][4]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Hostname and Partitions</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Reminder: as soon as you need help to check a point, the evaluated person must be able to
							assist you.</p>
						<ul>
							<li>Verify that the hostname of the machine is formatted as follows: login42 (login of the
								evaluated
								person).</li>
							<li>Change this hostname by replacing the login with yours, then restart the machine. If
								upon restarting,
								the hostname has not been updated, the evaluation stops here.</li>
							<li>You can now restore the original hostname of the machine.</li>
							<li>Ask the evaluated person how to display the partitions of their virtual machine.</li>
							<li>Compare the output with the example given in the subject. Note: if the evaluated person
								has done the
								bonuses, you should refer to the example from the bonus part.</li>
						</ul>
						<p>This part is an opportunity to discuss partitions! The evaluated person must give you a brief
							explanation
							of how LVM works and why it's beneficial.<br />
							If something does not work as expected or is not clearly explained, the evaluation stops
							here.</p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
										name="[scale_team][answers_attributes][5][id]" /></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden"
										id="scale_team_answer_question_id"
										name="[scale_team][answers_attributes][5][question_id]" value="236766" /></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][5]_true"
									name="[scale_team][answers_attributes][5][value]" type="radio" value="1" />
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][5]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" checked="checked" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][5]_false"
									name="[scale_team][answers_attributes][5][value]" type="radio" value="0" />
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][5]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">SUDO</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Reminder: as soon as you need help to check a point, the evaluated person must be able to
							assist you.</p>
						<ul>
							<li>Verify that the "sudo" program is indeed installed on the virtual machine.</li>
							<li>The evaluated person must now show how to assign your new user to the "sudo" group.</li>
							<li>The subject imposes strict rules for sudo. The evaluated person must first explain the
								purpose and
								operation of sudo with examples of their choice. Then, they must demonstrate the
								implementation of the
								rules imposed by the subject.</li>
							<li>Verify that the "/var/log/sudo/" directory exists and contains at least one file. Check
								the contents
								of the files in this directory; you should see a history of commands used with sudo.
								Finally, attempt to
								run a command via sudo. Check if the file(s) in the "/var/log/sudo/" directory have been
								updated. If
								something does not work as expected or is not clearly explained, the evaluation stops
								here.</li>
						</ul>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
										name="[scale_team][answers_attributes][6][id]" /></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden"
										id="scale_team_answer_question_id"
										name="[scale_team][answers_attributes][6][question_id]" value="236767" /></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][6]_true"
									name="[scale_team][answers_attributes][6][value]" type="radio" value="1" />
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][6]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" checked="checked" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][6]_false"
									name="[scale_team][answers_attributes][6][value]" type="radio" value="0" />
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][6]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">UFW / Firewalld</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Reminder: as soon as you need help to check a point, the evaluated person must be able to
							assist you.</p>
						<ul>
							<li>Verify that the "UFW" (or "Firewalld" for rocky) program is indeed installed on the
								virtual machine.
							</li>
							<li>Verify that it is functioning correctly.</li>
							<li>The evaluated person must give you a basic explanation of what UFW (or "Firewalld") is
								and why it's
								important to use it.</li>
							<li>List the active rules in UFW (or "Firewalld"). There should be a rule for port 4242.
							</li>
							<li>Add a new rule to open port 8080. Verify that it has been added by listing the active
								rules.</li>
							<li>Finally, with the help of the evaluated person, delete this new rule. If something does
								not work as
								expected or is not clearly explained, the evaluation stops here.</li>
						</ul>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
										name="[scale_team][answers_attributes][7][id]" /></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden"
										id="scale_team_answer_question_id"
										name="[scale_team][answers_attributes][7][question_id]" value="236768" /></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][7]_true"
									name="[scale_team][answers_attributes][7][value]" type="radio" value="1" />
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][7]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" checked="checked" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][7]_false"
									name="[scale_team][answers_attributes][7][value]" type="radio" value="0" />
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][7]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">SSH</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Reminder: as soon as you need help to check a point, the evaluated person must be able to
							assist you.</p>
						<ul>
							<li>Verify that the SSH service is indeed installed on the virtual machine.</li>
							<li>Verify that it is functioning correctly.</li>
							<li>The evaluated person must give you a basic explanation of what SSH is and why it's
								important to use
								it.</li>
							<li>Verify that the SSH service uses only port 4242.</li>
							<li>The evaluated person must help you use SSH to connect with the new user created. For
								this, you can use
								a key or a simple password, depending on the evaluated person. Of course, you must
								ensure that SSH
								cannot be used with the "root" user as indicated in the subject. If something does not
								work as expected
								or is not clearly explained, the evaluation stops here.</li>
						</ul>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
										name="[scale_team][answers_attributes][8][id]" /></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden"
										id="scale_team_answer_question_id"
										name="[scale_team][answers_attributes][8][question_id]" value="236769" /></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][8]_true"
									name="[scale_team][answers_attributes][8][value]" type="radio" value="1" />
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][8]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" checked="checked" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][8]_false"
									name="[scale_team][answers_attributes][8][value]" type="radio" value="0" />
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][8]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Script Monitoring</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Reminder: as soon as you need help to check a point, the evaluated person must be able to
							assist you.</p>
						<p>The evaluated person must simply explain:</p>
						<ul>
							<li>The operation of their script by displaying its code</li>
							<li>What "cron" is</li>
							<li>How they have set up their script to execute every 10 minutes from server launch. Once
								the proper
								functioning of the script is verified, the evaluated person must make sure that this
								script executes
								every minute. You can launch whatever you wish to ensure that the script runs correctly
								with dynamic
								values. Finally, the evaluated person must ensure that the script no longer runs at
								server launch,
								without modifying the script itself. To verify this point, the server will need to be
								restarted one last
								time. At startup, it must be verified that the script still exists in the same place,
								that its
								permissions have remained unchanged, and that it has not been modified. If any of the
								above points are
								not correct, the evaluation stops here.</li>
						</ul>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden" id="scale_team_answer_id"
										name="[scale_team][answers_attributes][9][id]" /></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden"
										id="scale_team_answer_question_id"
										name="[scale_team][answers_attributes][9][question_id]" value="236770" /></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][9]_true"
									name="[scale_team][answers_attributes][9][value]" type="radio" value="1" />
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][9]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" checked="checked" class="checkbox-input"
									id="radio_[scale_team][answers_attributes][9]_false"
									name="[scale_team][answers_attributes][9][value]" type="radio" value="0" />
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][9]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
					</section>
					<section class="scale-section-item dancer from-down" id="section-70028">
						<div class="section-header">
							<hr />
							<h3 class="font-weight-bold mb-1">Bonus</h3>
							<p class="font-italic">Bonuses will only be examined if the mandatory part is excellent.
								This means that
								the mandatory part must have been completed from start to finish, with perfect error
								management even in
								cases of unexpected use. If all mandatory points have not been awarded during this
								defense, no bonus
								points will be counted.</p>
						</div>
						<h4 class="scale-question-name">Bonus</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Verify with the help of the subject and the evaluated person the available bonuses for this
							project:</p>
						<ul>
							<li>The implementation of partitions will be worth 2 points</li>
							<li>The setup of WordPress, with only the services listed in the subject, will be worth 2
								points</li>
							<li>The free-choice service will be worth 1 point. Verify and test the proper functioning
								and
								implementation of each additional service. For the free-choice bonus service, the
								evaluated person must
								provide a simple explanation of the service and explain the reasons for their choice. Be
								aware: NGINX
								and Apache2 are forbidden.</li>
						</ul>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"><input class="form-control hidden"
										name="[scale_team][answers_attributes][3][id]" type="hidden"
										id="scale_team_answer_id"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"><input class="form-control hidden" value="234698"
										name="[scale_team][answers_attributes][3][question_id]" type="hidden"
										id="scale_team_answer_question_id"></div>
							</div>
							<div class="marked-title text-center">Rate it from 0 (failed) through 5 (excellent)</div>
							<input autocomplete="off" class="star-range" data-star-range="" max="5"
								name="[scale_team][answers_attributes][3][value]" step="1" type="range" value="0"
								style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
							<hr>
						</div>
					</section>
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
					<label class="btn btn-danger btn-default label_flag_can’t_support_/_explain_code negative on-active"
						for="scale_team_flag_id_14" name="scale_team[flag_id]">
						<span class="iconf-bubble-attention-4"></span>
						Can’t support / explain code
					</label>
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