<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Fuxy pages</title>
	<link href="//fonts.googleapis.com/css?family=Aldrich" rel="stylesheet" type="text/css">
	<style>
		#wrapper {
			max-width: 980px;
			margin: 0 auto;
			padding: 20px;
		}

		ul.task-list {
			padding: 15px;
			margin: 0
		}

		ul.task-list li {
			margin-bottom: 25px;
			line-height: 1.6;
			font-size: 16px;
			list-style: none;
			font-family: 'Aldrich', sans-serif;
			position: relative;
		}

		ul.task-list li:first-child a {
			color: fuchsia;
		}

		ul.task-list li a {
			color: #1b8af1;
			text-decoration: none;
		}

		ul.task-list li a:hover {
			text-decoration: none
		}

		ul.task-list li .status {
			display: inline-block;
			vertical-align: middle;
			padding: 0 10px;
			line-height: 1.2;
			color: #fff;
		}

		ul.task-list li .adaptive {
			display: inline-block;
			vertical-align: middle;
			padding: 0 10px;
			line-height: 1.2;
			color: #fff;
		}

		ul.task-list li .status.process {
			background: #e8b325;
		}

		ul.task-list li .status.need-approval {
			background: #4F86F7;
			opacity: .7
		}

		ul.task-list li .status.approved {
			background: blue;
		}

		ul.task-list li .adaptive.process {
			background: #e8b325;
		}

		ul.task-list li span.status.done {
			background: #86b03c;
		}

		ul.task-list li span.adaptive.done {
			background: #86b03c;
		}

		ul.task-list li .status.deprecated {
			background: salmon;
		}

		ul.task-list li .adaptive.deprecated {
			background: #c83b27;
		}

		ul.task-list li .status.archived {
			background: #333;
		}

		h4 {
			font-family: 'Aldrich', cursive;
			color: #282828;
			font-size: 30px;
			font-weight: 700;
			margin: 0;
			padding: 20px;
		}

		h3 {
			font-family: 'Aldrich', cursive;
			color: fuchsia;
			font-size: 50px;
			font-weight: 700;
			margin: 0;
		}

		.u-navy {
			color: navy !important;
			border-bottom: 1px solid fuchsia
		}

		p {
			margin-top: 5px;
		}

		.c-number {
			display	inline-block;
			position: absolute;
			transform: translateX(-120%);
		}
	</style>
</head>

<body>

		<div id="wrapper">
			<h3>Fuxy</h3>
			<h4>pages</h4>
			<ul class="task-list">
				<?php $i = count($pages); ?>
				<?php foreach ($pages as $key => $item) { ?>
				
				<li class="
				<?php foreach($item->status as $key => $status) {?>
							<?= $status; ?>
					<?php  }?>
					"
				>
				<div class="c-number"><?= $i ?>)</div>
				 
				<?php foreach($item->status as $key => $status) {?>
					<span class="status <?= $status; ?>">
						<?= $status; ?>
					</span>
				<?php  }?>
                    <a <?php if($i === count($pages))
                        {
                            echo 'title="fresh task"';
                        }; ?> target="_blank" href="<?= $item->href ?>">
						<?= $item->title ?>
					</a>

					<span>
						<p>

							<?php if (!empty($item->task)) {?>
								<small>Trello task:</small> 
									<?php foreach($item->task as $key => $task) {?>
										<a target="_blank" class="u-navy" href="<?= $task; ?>"><?= $key; ?></a>
										/
									<?php  }?>
								<?php  }?>

						</p>
				</li>

				<?php $i--; }?>
			</ul>
		</div>
</body>
</html>
